<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Form\BlogType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController  extends AbstractController
{
    /**
     * render all the blog post
     * @Route ("/posts", name="show_blogs")
     *
     * @return Response
     */
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

    /**
     * render a single blog post
     * @Route ("/posts/{id}", name="open_blog")
     *
     * @param string $id
     *
     * @return Response
     */
    public function singleBlog(string $id): Response
    {
        $blog = $this->getDoctrine()->getRepository(Blog::class)->find($id);

        return $this->render(
            'blogs/blog.html.twig',
            [
                'blog' => $blog,
            ]
        );
    }

    /**
     * @Route("/create-blog", name="create_blog")
     *
     */
    public function createBlog(Environment $twig, Request $request, EntityManagerInterface $entityManager): Response
    {
        $blog = new Blog();
        $form = $this->createForm(BlogType::class, $blog);

        $form->handleRequest($request);
        $title = 'TRAVELOGUE';

        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($blog);
            $entityManager->flush();

            return new Response('Blog added to the database!' . $blog->getTitle() . ' created!');
        }

        return new Response($twig->render('admin/add.html.twig', [
           'add_blog' => $form->createView(),
           'title' => $title
        ]));
    }
}
