<?php

namespace App\Controller;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    /**
     * @Route("/about", name="about")
     * @throws Exception
     */
    public function about(): Response
    {
        $title = 'TRAVELOGUE';
        $slogan = 'Traveling opens door to creating memories!';

        return $this->render('about/about.html.twig', [
            'title' => $title,
            'slogan' => $slogan,
        ]);
    }
}
