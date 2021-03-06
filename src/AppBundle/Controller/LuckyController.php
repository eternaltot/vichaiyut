<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Finder\Finder;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
    	$finder = new Finder();
		$finder->in('../data/');
        $number = mt_rand(0, 100);
        $templating = $this->container->get("templating");

        $html = $templating->render('lucky/number.html.twig',array('number'=>$number));

        return new Response($html);
    }
}

?>