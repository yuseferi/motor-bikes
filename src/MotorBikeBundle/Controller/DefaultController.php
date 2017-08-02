<?php

namespace MotorBikeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MotorBikeBundle:Default:index.html.twig');
    }
}
