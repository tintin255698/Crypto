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
     * @Route("/gestion/personnelle", name="gestion_personnelle")
     */
    public function index()
    {
        $user = $this->getUser()->getId();

        $repo = $this->getDoctrine()->getRepository(User::class);
        $users = $repo->findby(array('id' => $user));


        return $this->render('gestion_personnelle/index.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/gestion/personnelle/{id}", name="gestion_personnelle_modification")
     */

    public function modification(Request $request, $id)
    {

        $users = $this->getDoctrine()->getManager()->getRepository(User::class)->find($id);


        $form = $this->createForm(EditUserType::class, $users);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->persist($users);
            $doctrine->flush();

        }

        return $this->render('gestion_personnelle/modification.html.twig', [
            'user' => $form->createView()
        ]);
    }

}



