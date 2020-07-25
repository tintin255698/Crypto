<?php

namespace App\Controller;

use App\Entity\Portefeuille;
use App\Repository\PlacementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FindController extends AbstractController
{
    /**
     * @Route("/find", name="find")
     */
    public function users()
    {

        $user = $this->getUser()->getId();

        $repo = $this->getDoctrine()->getRepository(Portefeuille::class);
        $pla = $repo->findby(array('user' => $user));

        return $this->render('find/index.html.twig', [
            'pla' => $pla,
        ]);
    }

    /**
     * @Route("/find/placement/{id}", name="find_placement")
     */
    public function placement($id, PlacementRepository $repo)
    {
        $placement = $repo->findByPortefeuille(array('id'=>$id));

        $json = file_get_contents('https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LINK,BCH,ADA&tsyms=EUR&=b33fc847fb8ce25afe2257eaef4fccea04219ca2d3022f0289bb5708bfe9efca');
        $parsed_json = json_decode($json);
        $btc = $parsed_json->{'BTC'}->{'EUR'};
        $eth = $parsed_json->{'ETH'}->{'EUR'};
        $link = $parsed_json->{'LINK'}->{'EUR'};
        $bch = $parsed_json->{'BCH'}->{'EUR'};
        $ada = $parsed_json->{'ADA'}->{'EUR'};



        dump($placement);

        return $this->render('find/placement.html.twig', [
            'pla' => $placement,
            'cours' => compact('btc','eth', 'link', 'bch', 'ada')
        ]);
    }
}

