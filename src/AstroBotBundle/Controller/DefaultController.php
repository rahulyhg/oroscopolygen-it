<?php

namespace AstroBotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AstroBotBundle:Default:index.html.twig');
    }
}
