<?php

namespace Acme\PadelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{
    public function indexAction($name){
        return $this->render('AcmePadelBundle:Default:index.html.twig', array('name'=>$name));
    }
}
