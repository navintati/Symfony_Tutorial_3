<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TutorialController extends Controller
{

    /**
     * @Route("/tutorial/{name}", name="app_tutorial_route")
     */
    public function tutorialAction($name)
    {
        if ($name == "test"){

//             Old Method
//            return $this->redirect($this->generateUrl('app_home_route'));

//             New Method
//            return $this->redirectToRoute('app_home_route');

            return $this->forward('HomeBundle:Default:index');

        }

        return new Response($name);

    }

    /**
     * @Route ("/delete/{name}", name="app_delete_tutorial_route")
     */
    public function deleteTutorialAction(Request $request, $name)
    {
        $by = $request->query->get('by');

        if ($by != 'admin'){
            return $this->redirectToRoute('app_home_route');
        }

        return new Response($name . ' is deleted');

    }

    /**
     * @Route ("/write_session", name="app_write_session_route")
     */
    public function writeSessionAction()
    {
        $this->get('session')->set("shopping_cart", [
            [
                'item' => 'playstation 4',
                'quantity' => 1,
                'price' => '300'
            ],
            [
                'item' => 'Xbox One',
                'quantity' => 1,
                'price' => '350'
            ],
            [
                'item' => 'Xbox Ten',
                'quantity' => 10,
                'price' => '900'
            ]
        ]);

        return new Response('Done');

    }

    /**
     * @Route ("/read_session", name="app_read_session_route")
     */
    public function readSessionAction(Request $request)
    {
//        $this->get('session');
//        $request->getSession();

        $shopping_cart = $this->get('session')->get('shopping_cart');
        echo "<pre>"; var_dump($shopping_cart); die;
        return new Response();

    }


}
