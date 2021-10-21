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
        $slogan = 'Traveling opens door to creating memories!';

        $blogs = $this->getDoctrine()->getRepository(Blog::class)->findAll(

        );



        return $this->render(
            'home/home.html.twig',
            [
                'blogs' => $blogs,
                'slogan' => $slogan
            ]
        );
    }

    public function blogList(): Response
    {
        $blogs = $this->getDoctrine()->getRepository(Blog::class)->findAll();

        return $this->render(
            'blogs/blogs.html.twig',
            [
                'blogs' => $blogs,
            ]
        );
    }
}
