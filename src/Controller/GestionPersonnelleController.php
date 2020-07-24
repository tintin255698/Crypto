<?php

namespace App\Controller;

use App\Entity\Portefeuille;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionPersonnelleController extends AbstractController
{
    /**
     * @Route("/gestion/personnelle", name="gestion_personnelle")
     */
    public function index()
    {
        $user = $this->getUser()->getId();

        $repo = $this->getDoctrine()->getRepository(User::class);
        $pla = $repo->find(array('id'=>$user));





        dd($pla);

        return $this->render('gestion_personnelle/index.html.twig', [
            'controller_name' => 'GestionPersonnelleController',
        ]);
    }
}
