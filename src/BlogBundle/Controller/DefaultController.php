<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/blog_url")
     */
    public function indexAction()
    {
        $users = [
            [
                'name' => 'Messi',
                'best' => true,
            ],
            [
                'name' => 'C.Ronaldo',
                'best' => false,
            ]
        ];

        $articles = [
            [
                'title' => 'Title 1',
                'author' => 'Messi',
                'date' => '2019-06-10',
            ],
            [
                'title' => 'Title 2',
                'author' => 'Neymar',
                'date' => '2019-06-11',
            ],
            [
                'title' => 'Title 3',
                'author' => 'Ronaldo',
                'date' => '2019-06-07'
            ]
        ];

        return $this->render('BlogBundle:Default:index.html.twig', ['users' => $users, 'articles' => $articles]);
    }
}
