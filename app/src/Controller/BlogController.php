<?php

namespace App\Controller;

use App\Entity\Blog;
use Doctrine\DBAL\Types\DateTimeType;
use Doctrine\DBAL\Types\TextType;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController  extends AbstractController
{
    /**
     * @Route ("/blog", name="show_blogs")
     *
     * @return Response
     */
    public function blogs() : Response
    {
        $blogs = $this->getDoctrine()->getRepository(Blog::class)->findAll();

        $title = 'TRAVELOGUE';

        return $this->render('blogs/blogs.html.twig', [
            'blogs' => $blogs,
            'title' => $title,
        ]);
    }

    /**
     * @Route ("/blog/{id}", name="open_blog")
     *
     * @param string $id
     * @return Response
     */
    public function blog(string $id) : Response
    {
        $blog = $this->getDoctrine()->getRepository(Blog::class)->find($id);

        $title = 'TRAVELOGUE';

        return $this->render('blogs/blog.html.twig', [
            'blog' => $blog,
            'title' => $title,
        ]);
    }

    /**
     * adding a blog on the database
     * @Route ("/add-blog", name="add_blog")
     * @param string $id
     *
     * @return Response
     */
    public function addBlog(string $id) : Response
    {
        $blogId = $this->getDoctrine()->getRepository(Blog::class)->find($id);

        return $this->render('admin/add.html.twig', [
            'blog' =>$blogId
        ]);
    }

    /**
     * showing the latest blog posts
     * @Route ("/blog/{id}", name="latest_blogs")
     *
     * @param int $max
     * @return Response
     */
    public function recentBlogs(int $max = 3) : Response
    {
        $blog = $this->getDoctrine()->getRepository(Blog::class)->findAll();

        $title = 'TRAVELOGUE';

        $imageJSON = json_decode("images.json", true);

        foreach ($imageJSON as $key => $value) {
            echo "key";
        }

        return $this->render('blogs/recent_blogs.html.twig', [
            'blog' => $blog,
            'title' => $title,
        ]);
    }
}
