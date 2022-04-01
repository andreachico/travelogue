<?php

namespace App\Controller;

use App\Entity\Login;
use App\Form\LoginType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Config\SecurityConfig;

class LoginController  extends AbstractController
{
    /**
     * add a data to the database
     * @Route("/register", name="app-login")
     *
     */
    public function registerAccount(Request $request, EntityManagerInterface $entityManager, SecurityConfig $security): Response
    {
        $login = new Login();

        $form = $this->createForm(LoginType::class, $login);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($login);
            $entityManager->flush();

            return new Response($this->redirectToRoute('home_page'));
        }

        return $this->renderForm(
            'admin/add.html.twig',
            [
                'form' => $form,
                'user' => $login
            ]
        );
    }
}
