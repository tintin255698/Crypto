<?php

namespace App\Controller;



use App\Entity\Announces;
use App\Entity\User;
use App\Form\EditUserType;
use App\Form\GestionPersonnelleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GestionPersonnelleController extends AbstractController
{
    /**
     * @Route("/gestion/personnelle/", name="gestion_personnelle_modification")
     */

    public function modification(Request $request)
    {

        $user = $this->getUser();

        $form = $this->createForm(GestionPersonnelleType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->persist($user);
            $doctrine->flush();

            $this->addFlash(
                'success',
                '<strong>Votre modification du profil est faite !</strong>'
            );


            return $this->redirectToRoute('home');


        }

        return $this->render('gestion_personnelle/modification.html.twig', [
            'user' => $form->createView()
        ]);
    }

}



