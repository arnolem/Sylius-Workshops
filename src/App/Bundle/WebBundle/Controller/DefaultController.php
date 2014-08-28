<?php

namespace App\Bundle\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AppWebBundle:Default:index.html.twig', array('name' => $name));
    }
}
