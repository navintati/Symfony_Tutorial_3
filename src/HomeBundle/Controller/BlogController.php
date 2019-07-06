<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{

    /**
     * @Route("/blog/index", name="app_blog_index_route")
     */
    public function blogIndexAction()
    {
        return new Response('Blog::index');
    }

    /**
     * @Route("/blog/articles/{page}", defaults={"page" = 1}, requirements={"page"="\d+"}, name="app_articles_page_route")
     * @Method("GET")
     */
    public function articlesPageAction($page)
    {
        return new Response(' Page Number: ' . $page);
    }

    /**
     * @Route("/blog/articles/{slug}", name="app_show_articles_route")
     * @Method({"GET", "POST"})
     */
    public function showArticleAction($slug)
    {
        return new Response("Slug: " . $slug);
    }


}
