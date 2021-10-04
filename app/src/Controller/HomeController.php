<?php

namespace App\Controller;

use App\Entity\Blog;
use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     * @throws Exception
     */
    public function home(): Response
    {
        $title = 'TRAVELOGUE';
        $slogan = 'Traveling opens door to creating memories!';

        return $this->render('home/home.html.twig', [
            'title' => $title,
            'slogan' => $slogan,
        ]);
    }
}
