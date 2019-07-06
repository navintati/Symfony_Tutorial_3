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

        return $this->render('BlogBundle:Default:index.html.twig', ['users' => $users]);
    }
}
