<?php

namespace Acme\PadelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LogedController extends Controller{
    public function indexAction($name){
		  $classes =array("box bg_6 transicion shadow",
		             "box bg_6 transicion shadow",
		             "box bg_6 transicion shadow",
		             "box bg_6 static",
		             "box bg_6 transicion shadow",
		             "box bg_6 static",
		             "box bg_6 transicion shadow",
		             "box bg_6 transicion shadow",
		             "box bg_6 static",
		             "box bg_6 transicion shadow");
		  $hrefs = array( "padel_groups",
		             "padel_articles",
		             "padel_sizes",
		             "padel_empty",
		             "padel_notifications",
		             "padel_empty",
		             "padel_customers",
		             "padel_orders",
		             "padel_empty",
//		             "padel_welcome, {'name':$name}");
		             "padel_welcome");
		  $texts = array( "Promociones",
		             "Articulos",
		             "Tallas",
		             "",
		             "Notificaciones",
		             "",
		             "Clientes",
		             "Pedidos",
		             "",
		             "Login");
		  $params = array('classes' => $classes, 'hrefs' => $hrefs, 'texts' => $texts, 'name' => $name);  
        return $this->render('AcmePadelBundle::index.html.twig', $params);
    }
}
