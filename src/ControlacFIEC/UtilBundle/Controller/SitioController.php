<?php
/**
 * User: admdev
 * Date: 28/01/2014
 * Time: 10:20
 */
namespace ControlacFIEC\UtilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class SitioController extends Controller
{
    public function estaticaAction($pagina)
    {
		$ultimaSesion = "mm/dd/aaaa hh:ii:ss a";
        return $this->render('UtilBundle:Default:'.$pagina.'.html.twig', array('name' => $pagina,'last_sesion' => $ultimaSesion));
    }
	
	public function archivoAction($archivo)
    {
		return new BinaryFileResponse('bundles/util/docs/'.$archivo.'.pdf');
    }
}