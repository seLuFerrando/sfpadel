<?php

namespace Acme\PadelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CustomersController extends Controller{
    public function indexAction(){
		  $classes =["box bg_6 transicion shadow",
		             "box bg_6 transicion shadow",
		             "box bg_6 transicion shadow",
		             "box bg_6 static",
		             "box bg_6 transicion shadow",
		             "box bg_6 static",
		             "box bg_6 transicion shadow",
		             "box bg_6 static",
		             "box bg_6 static",
		             "box bg_6 transicion shadow"];
		  $hrefs = [ "padel_groups",
		             "padel_articles",
		             "padel_sizes",
		             "padel_empty",
		             "padel_notifications",
		             "padel_empty",
		             "padel_orders",
		             "padel_empty",
		             "padel_empty",
		             "padel_customers"];
		  $texts = [ "Promociones",
		             "Articulos",
		             "Tallas",
		             "",
		             "Notificaciones",
		             "",
		             "Pedidos",
		             "",
		             "",
		             "Clientes"];
    	  $customers = $this->getDoctrine()->getRepository('AcmePadelBundle:Customers')->findAll(); 
//	      if (!$customers) {
//    	      throw $this->createNotFoundException(
//        	      'No customers'
//        	  );
//    	  }

		  $params = array('classes' => $classes, 'hrefs' => $hrefs, 'texts' => $texts, 'customers' => $customers);  
        return $this->render('AcmePadelBundle:Customers:index.html.twig', $params);
    }


	public function showAction($id){
    	$customer = $this->getDoctrine()->getRepository('AcmePadelBundle:Customers')->find($id);
 
	    if (!$customer) {
    	    throw $this->createNotFoundException(
        	    'No customer found for id' . $id
        	);
    	}
 		$params = array($customer);
    	return $this->render('AcmePadelBundle:Customers:show.html.twig', $params);
	}


}
