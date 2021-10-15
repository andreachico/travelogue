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
     * add a data to the database
     * @Route("/write-blog", name="create_blog")
     *
     */
    public function createBlog(Request $request, EntityManagerInterface $entityManager): Response
    {
        $blog = new Blog();

        $form = $this->createForm(BlogType::class, $blog);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($blog);
            $entityManager->flush();

            return new Response($this->redirectToRoute('blog_data'));
        }

        return $this->renderForm(
            'admin/add.html.twig',
            [
                'form' => $form,
                'add_blog' => $blog,
            ]
        );
    }

    /**
     * edit the data in the database
     * @Route("/edit-blog/{id}", name="edit_blog")
     *
     */
    public function editBlog(string $id, Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $blogPost = $entityManager->getRepository(Blog::class)->find($id);

        $form = $this->createForm(BlogType::class, $blogPost);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $blogPost = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($blogPost);
            $entityManager->flush();

            return $this->redirectToRoute('blog_data');
        }

        return $this->renderForm('admin/add.html.twig',
        [
           'form' => $form
        ]);
    }

    /**
     * delete data from the database
     * @Route("/delete-blog/{id}", name="delete_blog")
     *
     */
    public function deleteBlog(string $id) : Response
    {
        $blog = $this->getDoctrine()->getRepository(Blog::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($blog);
        $entityManager->flush();

        $response = new Response($this->redirectToRoute('blog_data'));
        $response->send();

        return $response;
    }

    /**
     * render all the data from the database
     * @Route("/blog-data", name="blog_data")
     *
     */
    public function blogDB(EntityManagerInterface $entityManager) : Response
    {
        $blogs = $entityManager->getRepository(Blog::class)->findAll();

        return $this->render(
            'admin/blog_data.html.twig',
            [
                'blogs' => $blogs,
            ]
        );
    }
}
