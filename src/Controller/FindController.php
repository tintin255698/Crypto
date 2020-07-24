<?php

namespace App\Controller;

use App\Entity\Placement;
use App\Entity\Portefeuille;
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
    public function placement($id)
    {

        $repo = $this->getDoctrine()->getRepository(Placement::class);
        $pla = $repo->findby(array('portefeuille_id' => $id));

        dd($pla);


        //$repo = $this->getDoctrine()->getRepository(Portefeuille::class)->findByExampleField($id);



        //return $this->render('find/placement.html.twig', [
         //   'pla' => $repo,
        //]);
    }


}

