<?php

namespace ProductoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ProductoBundle extends Bundle
{	
	//private $producto;
	 /**
     * @Route("/producto/list",name="ProductoBundle:ProdcutoBundle:indexAction")
     */
	 public function indexAction()
    {	return $this->render('producto/index.html.twig',
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
		//$producto=$this->getDoctrine()->getRepository('ProductosBundle:Producto')->findAll();
		//return $productos;
        //return $this->render('ProductoBundle:Default:index.html.twig');
    }
}
