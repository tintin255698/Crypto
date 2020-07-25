<?php

namespace App\Controller;



use App\Entity\Announces;
use App\Entity\MotDePasse;
use App\Entity\User;
use App\Form\EditUserType;
use App\Form\GestionPersonnelleType;
use App\Form\MdpType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class GestionPersonnelleController extends AbstractController
{
    /**
     * @Route("/gestion/personnelle", name="gestion_personnelle_modification")
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

    /**
     * @Route("/gestion/motdepasse", name="gestion_mdp_modification")
     */

    public function motDePasse(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $maj = new MotDePasse();

        $user = $this->getUser();

        $form = $this->createForm(MdpType::class, $maj);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if(password_verify($maj->getAncienMdp(), $user->getPassword())){
                $nouveau = $maj->getNouveauMdp();
                $password = $encoder->encodePassword($user, $nouveau);

                $user->setPassword($password);

                $doctrine = $this->getDoctrine()->getManager();
                $doctrine->persist($user);
                $doctrine->flush();

                $this->addFlash(
                    'success',
                    '<strong>Votre mot de passe a bien ete modifie !</strong>');

                return $this->redirectToRoute('home');

            } else {
                $form->get('ancienMDP')->addError(new FormError("Le mot de passe saisi n'est pas le bon"));
            }

        }

        return $this->render('gestion_personnelle/mdp.html.twig', [
            'form' => $form->createView(),

        ]);
    }



}



