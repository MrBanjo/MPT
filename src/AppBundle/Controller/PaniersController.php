<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PaniersController extends Controller
{
    /**
     * @Route("/paniers", name="paniers")
     * @Route("/paniers/")
     */
    public function indexAction()
    {
        return $this->render('paniers.html.twig');
    }
}
