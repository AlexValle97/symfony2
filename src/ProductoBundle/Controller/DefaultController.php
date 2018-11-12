<?php

namespace ProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/producto/list",name="AppBundle:DefaultController:indexAction")
     */
    public function indexAction()
    {
    	return $this->render('producto/index.html.twig',
			['Productos'=>[
							[
						   'nombre'=>'televisor',
						   'precio'=>'19000'
							],
							[
							'nombre'=>'cafetera',
							'precio'=>'4500'
							]
						  ]
			]);
		//$productos=$this->getDoctrine()->getRepository('ProductosBundle:Producto')->findAll();
		//return $productos;
        //return $this->render('ProductoBundle:Default:index.html.twig');
    }
}
