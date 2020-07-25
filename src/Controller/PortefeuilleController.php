<?php

namespace App\Controller;

use App\Entity\Announces;
use App\Entity\Placement;
use App\Entity\Portefeuille;
use App\Entity\User;
use App\Form\PortefeuilleType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class PortefeuilleController extends AbstractController
{
    /**
     * @Route("/portefeuille", name="portefeuille")
     */
    public function index(Request $request)
    {

        $post = new Portefeuille();

        $post->setUser($this->getUser());

        $form = $this->createForm(PortefeuilleType::class, $post);

        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {
                foreach ($post->getPlacements() as $placement){
                    $placement->setPortefeuille($post);
                    $doctrine = $this->getDoctrine()->getManager();
                    $doctrine->persist($placement);
                }
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->persist($post);
            $doctrine->flush();

            $this->addFlash(
                'success',
                '<strong>Votre portefeuille a bien ete enregistre !</strong>'
            );




            return $this->redirectToRoute('find');
        }

        return $this->render('portefeuille/index.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/portefeuille/afficher", name="portefeuille_affichage")
     */
    public function affichage(EntityManagerInterface $em)
    {

        $user = $this->getUser()->getId();

        $repo = $this->getDoctrine()->getRepository(Portefeuille::class)->findByExampleField($user);

        $json = file_get_contents('https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LINK,BCH,ADA&tsyms=EUR&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
        $parsed_json = json_decode($json);
        $btc = $parsed_json->{'BTC'}->{'EUR'};
        $eth = $parsed_json->{'ETH'}->{'EUR'};
        $link = $parsed_json->{'LINK'}->{'EUR'};
        $bch = $parsed_json->{'BCH'}->{'EUR'};
        $ada = $parsed_json->{'ADA'}->{'EUR'};



        return $this->render('portefeuille\show.html.twig', array(
            'repo' => $repo,
            'cours' => compact('btc','eth', 'link', 'bch', 'ada')
        ));}






}