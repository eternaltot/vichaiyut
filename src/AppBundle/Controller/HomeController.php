<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HomeController extends Controller
{
    /**
     * @Route("/home")
     */
    public function homeAction()
    {
        $templating = $this->container->get("templating");

        $html = $templating->render('default/home.html.twig',array());

        return new Response($html);
    }
}
?>