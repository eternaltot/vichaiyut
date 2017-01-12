<?php
// src/AppBundle/Controller/DashboardController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Finder\Finder;

class DashboardController extends Controller
{
    /**
     * @Route("/admin/dashboard")
     */
    public function numberAction()
    {
        $templating = $this->container->get("templating");

        $html = $templating->render('admin/dashboard.html.twig',array());

        return new Response($html);
    }
}

?>