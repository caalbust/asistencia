<?php

namespace ControlacFIEC\UtilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $prueba = 1 + 1;
        return $this->render('UtilBundle:Default:acerca.html.twig', array('name' => $name));
    }
	public function estaticaAction($pagina)
    {
        $prueba = 1 + 1;
        return $this->render('UtilBundle:Default:acerca.html.twig', array('name' => $pagina));
    }

}
