<?php

namespace ControlacFIEC\TodoBundle\Controller;

use ControlacFIEC\TodoBundle\Entity\UsuarioRol;
use ControlacFIEC\TodoBundle\Entity\Rol;
use ControlacFIEC\TodoBundle\Entity\Usuario;
use ControlacFIEC\TodoBundle\Entity\AsistenciaCursoClase;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use PHPExcel_Style_Alignment;
use PHPExcel_Style_Border;
use PHPExcel_Style_Fill;
use phpCAS;

use Zend\Stdlib\DateTime;
date_default_timezone_set('America/Guayaquil');
class DefaultController extends Controller
{
    /*********************************/
	/*******INICIO ****/
	/*********************************/
	public function indexAction(Request $request, $action)
    {
        /*VARIABLES*/
        $em = $this->getDoctrine()->getManager();
        $respuesta = array();
        $session = $request->getSession();
		 /*FIN --- VARIABLES*/

        /*VARIABLES DE SESSION*/
        $session->set('name', $session->get('apellido') . ' ' . $session->get('nombre'));
        /*FIN -- VARIABLES DE SESSION*/

        /*CONSULTAS*/
        $semestreActivo = $em->getRepository('TodoBundle:Semestre')->findOneBy(array('semestreActivo' => 1));
        $semestreAll = $em->getRepository('TodoBundle:Semestre')->findBy(array('semestreActivo' => 0));
        $usuarioLogin = $session->get('userData');
        
        $usuario = $em->getRepository('TodoBundle:Usuario')->findOneBy(array('userId'=>$usuarioLogin));
        
        $cursosActivos = $em->getRepository('TodoBundle:Curso')->findBy(array('cursoSemestre' => $semestreActivo,'cursoDocente'=>$usuario), array('cursoCodigo'=>'ASC'));
		//var_dump($cursosActivos);die;
        $fechaNow= new DateTime('now');
        $fechaNow=date_format($fechaNow, 'Y-m-d 00:00:00');
        $fechaNow= new DateTime($fechaNow);

        //var_dump($fechaNow);die;
        $arrayNuevaFecha=array();
      
        $NuevaFecha=1; 
        foreach ($cursosActivos as $temp){
            $asistenciaList = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaFecha' => $fechaNow,'asistenciaCurso'=>$temp));
           if($temp->getCursoCargarClase()==1){
                if(empty($asistenciaList)){
                    $NuevaFecha=0; 
                } else{
                    $NuevaFecha=1; 
                } 
            }else{
                $NuevaFecha=1;
            } 
            if( array_key_exists($temp->getCursoCodigo(), $arrayNuevaFecha) ){
                array_push( $arrayNuevaFecha[$temp->getCursoCodigo()], $NuevaFecha);
            } else{
                $arrayNuevaFecha[$temp->getCursoCodigo()] = array($NuevaFecha);
            }
        }
      // var_dump($arrayNuevaFecha); die;
        $respuesta['validaOk']=$arrayNuevaFecha;
       // var_dump($respuesta['validaOk']);
        //var_dump($asistenciaList);die;

        $respuesta['cursos']=$cursosActivos;

       $session->set('allsemestre', $semestreAll);
        return $this->render('TodoBundle:Default:inicio.html.twig', $respuesta);
    }	
	public function listado_asistenciaAction(Request $request, $action,$id_curso,$fecha,$boolAnterior)
    {
        /*VARIABLES*/
        $em = $this->getDoctrine()->getManager();
        $respuesta = array();
        $session = $request->getSession();
		 /*FIN --- VARIABLES*/

        /*VARIABLES DE SESSION*/
        $session->set('name', $session->get('apellido') . ' ' . $session->get('nombre'));
        /*FIN -- VARIABLES DE SESSION*/

        /*CONSULTAS*/
        
        $cursosActivos = $em->getRepository('TodoBundle:Curso')->findOneBy(array('cursoId' => $id_curso));
		$estudiantes_list = $em->getRepository('TodoBundle:ListEstudiantes')->findBy(array('listEstudianteCurso' => $cursosActivos));
		//var_dump($estudiantes_list); die;
        if($action == 'crear'){
            $fechaNow= new DateTime('now');
            $fechaNow=date_format($fechaNow, 'Y-m-d 00:00:00');
            $fechaString=$fechaNow;
            $fechaNow= new DateTime($fechaNow);
            for($j=0; $j<sizeof($estudiantes_list);$j++){
                $AsistenciaCursoClase = new AsistenciaCursoClase();
                $AsistenciaCursoClase->setAsistenciaFecha($fechaNow);
                $AsistenciaCursoClase->setAsistenciaValue(-1);
                $AsistenciaCursoClase->setAsistenciaListEstudiante($estudiantes_list[$j]);
                $AsistenciaCursoClase->setAsistenciaCurso($cursosActivos);
                $AsistenciaCursoClase->setAsistenciaComentario('RECUPERADA');
                $em->persist($AsistenciaCursoClase);

                $em->flush();
            }
            return new RedirectResponse($this->generateUrl('pagina_listado_asistencia', array('action' => 'index','id_curso'=>$id_curso,'fecha'=>$fechaString,'boolAnterior'=>0)));
        }

        /**CARGA DE CLASE POR MATERIA */
        if($cursosActivos->getCursoCargarClase()==0){
            $horarios=$em->getRepository('TodoBundle:HorarioClase')->findBy(array('horarioClaseCurso' => $cursosActivos));
            $semestreActivo=$em->getRepository('TodoBundle:Semestre')->findOneBy(array('semestreActivo' => 1));
            $fecha_Inicio=$semestreActivo->getSemestreFechaInicio()->format('Y-m-d');
            $fecha_Fin= $semestreActivo->getSemestreFechaFin()->format('Y-m-d');
            $while_stop=false;
            for($j=0; $j<sizeof($estudiantes_list);$j++){
                for ($i=0; $i<sizeof($horarios); $i++){
                    $fecha_inicio_temp = $this->obtener_fecha($fecha_Inicio,$horarios[$i]->getHorarioClaseName());
                    while(!$while_stop){
                        if($fecha_inicio_temp>$fecha_Fin){
                            $while_stop=true;
                        }else{
                            $AsistenciaCursoClase = new AsistenciaCursoClase();
                            $AsistenciaCursoClase->setAsistenciaFecha(new \DateTime($fecha_inicio_temp));
                            $AsistenciaCursoClase->setAsistenciaValue(-1);
                            $AsistenciaCursoClase->setAsistenciaListEstudiante($estudiantes_list[$j]);
                            $AsistenciaCursoClase->setAsistenciaCurso($cursosActivos);
                            $em->persist($AsistenciaCursoClase);

                            $em->flush();
                        }
                        $fecha_inicio_temp = $this->suma_siete($fecha_inicio_temp);
                    }
                    $while_stop=false;
                }
            }
            $cursosActivos->setCursoCargarClase(1);
            $em->persist($cursosActivos);
        }
        $em->flush();
        $respuesta['curso']=$cursosActivos;
        $respuesta['estudiantes_list']=$estudiantes_list;
        if($fecha ==0){
            $fechaNow= new DateTime('now');
            $fechaNow=date_format($fechaNow, 'Y-m-d 00:00:00');
            $fechaNow= new DateTime($fechaNow);
        }
        else{
            $fechaNow=$fecha;
            #$fechaNow=date_format($fechaNow, 'Y-m-d 00:00:00');
            $fechaNow= new \DateTime($fechaNow);
        }
       

        
        
        $asistenciaList = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaFecha' => $fechaNow,'asistenciaListEstudiante'=>$estudiantes_list));
        $respuesta['asistenciaList']=$asistenciaList;
      //  var_dump($asistenciaList);die;
        $respuesta['fecha']=$fechaNow;
        $respuesta['id_curso']=$id_curso;
        $listadoGeneral = array();
       
        
        foreach ($estudiantes_list as $tempEstud){
            $asistenciaGeneral = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaListEstudiante' => $tempEstud),array('asistenciaFecha'=>'ASC'));
            
            if( array_key_exists($tempEstud->getListEstudiantesId(), $listadoGeneral) ){
                array_push( $listadoGeneral[$tempEstud->getListEstudiantesId()], $asistenciaGeneral);
            } else{
                $listadoGeneral[$tempEstud->getListEstudiantesId()] = array($asistenciaGeneral);
            }
        }
        //var_dump($listadoGeneral); die;
        $listadoPrevio = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaListEstudiante' => $estudiantes_list[0]),array('asistenciaFecha'=>'ASC'));
        //var_dump($listadoPrevio); die;
        $length=sizeof($listadoPrevio);
        $btnBackBlock=true;
        $btnNextBlock=true;
        for($i=0; $i<sizeof($listadoPrevio); $i++){
            if($listadoPrevio[$i]->getAsistenciaFecha() ==  $fechaNow){
                
                if($i==0){
                    $btnBackBlock=false;
                    $fechaBack='';
                }else{
                    $fechaBack= $listadoPrevio[$i-1]->getAsistenciaFecha();
                }
                if(($i+1)==$length){
                    $btnNextBlock=false;
                    $fechaNext='';
                }else{
                    $fechaNext= $listadoPrevio[$i+1]->getAsistenciaFecha();
                }
                break;
            }
        }
       // var_dump($fechaBack); var_dump($fechaNext); die;

       
      // var_dump($promedio); die;
       $respuesta['fechaBack']=$fechaBack;
       $respuesta['fechaNext']=$fechaNext;
       $respuesta['btnNextBlock']=$btnNextBlock;
       $respuesta['btnBackBlock']=$btnBackBlock;
       $respuesta['listadoGeneral']=$listadoGeneral;
      // var_dump($listadoGeneral[1][0][0]->getAsistenciaListEstudiante()->getListEstudiantesUsuario());  die;
       $respuesta['listadoPrevio']=$listadoPrevio;
       $respuesta['estudiantes']=$estudiantes_list;
       $promedio=$this->promedioGeneral($estudiantes_list);
       $respuesta['promedioGeneral']= $promedio;
       $respuesta['boolAnterior']= $boolAnterior;
     // var_dump($promedio['countMedio']); die;
        return $this->render('TodoBundle:Default:listAsistencia.html.twig', $respuesta);
    }	

    public function pagina_imprimir_estudianteAction(Request $request, $idCurso,$idEstudiante)
    {
		/*VARIABLES*/
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
		$Clases_Syllabus = array();
		$iterator=1;
		/*END - VARIABLES*/
		
		/*CONSULTAS*/	 
        $cursosActivos = $em->getRepository('TodoBundle:Curso')->findOneBy(array('cursoId' => $idCurso));
		
        if($idEstudiante!=-1){
        $estudiantes_list = $em->getRepository('TodoBundle:ListEstudiantes')->findOneBy(array('listEstudiantesId' => $idEstudiante));
	    $asistenciaList = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaListEstudiante'=>$estudiantes_list,'asistenciaCurso'=>$idCurso),array('asistenciaFecha'=>'ASC'));
        $letraFin='E';
        }else{
            $estudiantes_list = $em->getRepository('TodoBundle:ListEstudiantes')->findBy(array('listEstudianteCurso' => $cursosActivos),array());
           // $asistenciaList = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaListEstudiante'=>$estudiantes_list,'asistenciaCurso'=>$idCurso),array('asistenciaListEstudiante'=>'ASC','asistenciaFecha'=>'ASC'));
            $listadoGeneral = array();
            $listadoPrevio = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaListEstudiante' => $estudiantes_list[0]),array('asistenciaFecha'=>'ASC'));
           
        
            foreach ($listadoPrevio as $tempEstud){
                $asistenciaGeneral = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaFecha' => $tempEstud->getAsistenciaFecha()),array('asistenciaListEstudiante'=>'ASC'));
                
                if( array_key_exists($tempEstud->getAsistenciaId(), $listadoGeneral) ){
                    array_push( $listadoGeneral[$tempEstud->getAsistenciaId()], $asistenciaGeneral);
                } else{
                    $listadoGeneral[$tempEstud->getAsistenciaId()] = array($asistenciaGeneral);
                }
            }
            //var_dump($listadoPrevio); die;
            $lengthFecha=sizeof($listadoPrevio);
            $lengthEstudiante=sizeof($estudiantes_list);
            $abecedario = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AQ','AR');
            $letraFin= $abecedario[$lengthEstudiante-1];
           
        }
		
		/*CONFIGURACION DE EXCEL*/
        $reporte = $cursosActivos->getCursoMateria()->getMateriasName();
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();
        $phpExcelObject->getActiveSheet()->setTitle($reporte);
        $phpExcelObject->setActiveSheetIndex(0);
        $style = array('alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
        $phpExcelObject->getActiveSheet()->getDefaultStyle()->applyFromArray($style);
        // CELDAS
        for ($col = 'A'; $col != 'H'; $col++) {
            if ($col == 'B') {
                $phpExcelObject->getActiveSheet()->getColumnDimension($col)->setAutosize(false);
                $phpExcelObject->getActiveSheet()->getColumnDimension($col)->setWidth(20);
            }else if($col == 'E'){
                $phpExcelObject->getActiveSheet()->getColumnDimension($col)->setAutosize(false);
                $phpExcelObject->getActiveSheet()->getColumnDimension($col)->setWidth(50);
            } else {
                $phpExcelObject->getActiveSheet()->getColumnDimension($col)->setAutosize(true);
            }
        }
       
        $phpExcelObject->setActiveSheetIndex(0)
            ->setCellValue('A'.$iterator, 'PROFESOR');
            $iterator++;
        $phpExcelObject->setActiveSheetIndex(0)	
                ->setCellValue('A'.$iterator, 'MATERIA');
            $iterator++;	
            $phpExcelObject->setActiveSheetIndex(0)	
                ->setCellValue('A'.$iterator, 'PARALELO');
            $iterator++;	
            $phpExcelObject->setActiveSheetIndex(0)	
                ->setCellValue('A'.$iterator, 'FECHA/DESCARGA');
            $iterator++;	
            if($idEstudiante!=-1){	
                $phpExcelObject->setActiveSheetIndex(0)
                    ->setCellValue('A'.$iterator, '% ASISTENCIA');	
            }
            for ($i = 1; $i <= $iterator; $i++) {
                $celda = 'A' . $i . ':' . 'B' . $i;
                $phpExcelObject->setActiveSheetIndex(0)->mergeCells($celda);
                $phpExcelObject->getActiveSheet()->getStyle($celda)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
                $c = 'A' . $i;
                $phpExcelObject->getActiveSheet()->getStyle($c)->getFont()->setBold(true);
                $phpExcelObject->getActiveSheet()->getStyle($c)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
                $phpExcelObject->getActiveSheet()->getStyle($c)->getFill()->getStartColor()->setARGB('F2F5A9');
            }
           // CARGA DE DATOS (PROFESOR)
         
            for ($i = 1; $i <= $iterator; $i++) {
                $celda = 'C' . $i . ':' . $letraFin . $i;
                $phpExcelObject->setActiveSheetIndex(0)->mergeCells($celda);
                $phpExcelObject->getActiveSheet()->getStyle($celda)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
            }
            $cobertura=0;
            foreach($asistenciaList as $temp){
                $value=$temp->getAsistenciaValue();
                if($value==-1){
                    $value=0;
                }
                $cobertura=$cobertura+$value;
            }
            $coberturaC=$cobertura/sizeof($asistenciaList);
            $iterator=1;
            $complete_name=$cursosActivos->getCursoDocente()->getUsuarioName().' '.$cursosActivos->getCursoDocente()->getUsuarioApellido();
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('C'.$iterator, $complete_name);
           
            $datetime= new DateTime('now');
            $datetime=date_format($datetime, 'Y-m-d 00:00:00');
            //$datetime= new DateTime($datetime);
            $iterator++;
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('C'.$iterator, $reporte);
            $iterator++;    
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('C'.$iterator, $cursosActivos->getCursoParalelo());
            $iterator++;	
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('C'.$iterator, $datetime);
            if($idEstudiante!=-1){
                $iterator++;	
                $phpExcelObject->setActiveSheetIndex(0)
                    ->setCellValue('C'.$iterator, $coberturaC . ' %');
            }
            $iterator++;		
            	
            //CELDA DETALLE DE CLASES
            $phpExcelObject->setActiveSheetIndex(0)->mergeCells('A'.$iterator.':E'.$iterator);
            $phpExcelObject->getActiveSheet()->getStyle('A'.$iterator.':E'.$iterator)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
            $phpExcelObject->getActiveSheet()->getStyle('A'.$iterator)->getFont()->setBold(true);
            $phpExcelObject->getActiveSheet()->getStyle('A'.$iterator)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
            $phpExcelObject->getActiveSheet()->getStyle('A'.$iterator)->getFill()->getStartColor()->setARGB('F2F5A9');
    
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('A'.$iterator, 'DETALLE POR CLASES');
            $iterator++;	
           
            if($idEstudiante!=-1){
                $phpExcelObject->getActiveSheet()->getStyle('A'.$iterator.':E'.$iterator)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
                $phpExcelObject->getActiveSheet()->getStyle('A'.$iterator.':E'.$iterator)->getFill()->getStartColor()->setARGB('F2F5A9');
                $phpExcelObject->getActiveSheet()->getStyle('A'.$iterator.':E'.$iterator)->getFont()->setBold(true);
                $phpExcelObject->getActiveSheet()->getStyle('A'.$iterator.':E'.$iterator)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
                $phpExcelObject->setActiveSheetIndex(0)
                    ->setCellValue('A'.$iterator, '#')
                    ->setCellValue('B'.$iterator, 'FECHA')
                    ->setCellValue('C'.$iterator, 'VALOR')
                    ->setCellValue('D'.$iterator, 'TIPO')
                    ->setCellValue('E'.$iterator, 'COMENTARIOS');
                //CARGA DE DATOS
                $j = 1;
                $i = $iterator+1;
                foreach($asistenciaList as $temp){
                    $phpExcelObject->getActiveSheet()->getStyle('A' . $i . '')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
                    $phpExcelObject->getActiveSheet()->getStyle('B' . $i . '')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
                    $phpExcelObject->getActiveSheet()->getStyle('C' . $i . '')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
                    $phpExcelObject->getActiveSheet()->getStyle('D' . $i . '')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
                    $phpExcelObject->getActiveSheet()->getStyle('E' . $i . '')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
                    // Miscellaneous glyphs, UTF-8
                    $value=$temp->getAsistenciaValue();
                    if($value==-1){
                        $value='NO HAY VALOR';
                    }
                    $tipo=$temp->getAsistenciaTipo();
                    
                    $phpExcelObject->setActiveSheetIndex(0)
                    ->setCellValue('A' . $i, $j)
                    ->setCellValue('B' . $i,  date_format($temp->getAsistenciaFecha(), "Y-m-d"))
                    ->setCellValue('C' . $i, $value)
                    ->setCellValue('D' . $i, $tipo)
                    ->setCellValue('E' . $i, implode("\r\n", $temp->getAsistenciaComentario()));

                    $phpExcelObject->getActiveSheet()->getStyle('B' . $i)->getAlignment()->setWrapText(true);
                    $phpExcelObject->getActiveSheet()->getStyle('A' . $i)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $phpExcelObject->getActiveSheet()->getStyle('B' . $i)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $phpExcelObject->getActiveSheet()->getStyle('C' . $i)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $phpExcelObject->getActiveSheet()->getStyle('D' . $i)->getAlignment()->setWrapText(true);
                    $phpExcelObject->getActiveSheet()->getStyle('D' . $i)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $phpExcelObject->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setWrapText(true);
                    $phpExcelObject->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

                    $j++;
                    $i++;
                }

            }else{
                $abecedario = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AQ','AR');
                $letraFin= $abecedario[$lengthEstudiante-1];
                $phpExcelObject->getActiveSheet()->getStyle('A'.$iterator.':'.$letraFin.$iterator)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
                $phpExcelObject->getActiveSheet()->getStyle('A'.$iterator.':'.$letraFin.$iterator)->getFill()->getStartColor()->setARGB('F2F5A9');
                $phpExcelObject->getActiveSheet()->getStyle('A'.$iterator.':'.$letraFin.$iterator)->getFont()->setBold(true);
                $phpExcelObject->getActiveSheet()->getStyle('A'.$iterator.':'.$letraFin.$iterator)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
                $phpExcelObject->setActiveSheetIndex(0)
                    ->setCellValue('A'.$iterator, 'FECHA');
                $k=1;
                foreach($estudiantes_list as $tempListEst){
                    $letra=$abecedario[$k].$iterator;
                    $phpExcelObject->setActiveSheetIndex(0)
                    ->setCellValue($letra, $tempListEst->getListEstudiantesUsuario()->getEstApellido());
                    $k++;
                }
                //CARGA DE DATOS
                $j = 1;
                $i = $iterator+1;
               /* foreach($listadoPrevio as $listTemp){
                    foreach($listadoGeneral[$listTemp->getAsistenciaId()][0] as $value){
                        $phpExcelObject->setActiveSheetIndex(0)
                        ->setCellValue($letra, $tempListEst->getListEstudiantesUsuario()->getEstApellido());
                    }
                }*/
                
            }
            

        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'Reporte de Asistencia[' . $datetime . '].xls'
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;

    }
    public function promedioGeneral($temp){
        $em = $this->getDoctrine()->getManager();
      
        $countMedio=0;
        $countBajo=0;
        $allPromedio=0;
        foreach($temp as $studiante){
            $obtPromedio = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaListEstudiante'=>$studiante));
            $totalPromedio=0;
            $total_clases=sizeof($obtPromedio);
            foreach($obtPromedio as $promedio){
                if($promedio->getAsistenciaValue() >0){
                    $totalPromedio=$totalPromedio+$promedio->getAsistenciaValue();
                }
            }
            $totalPromedio=$totalPromedio/$total_clases;
            if($totalPromedio>=40){
                $countMedio++;
            }
            if($totalPromedio<40){
                $countBajo++;
            }
            $allPromedio=$allPromedio+$totalPromedio;

        }
        $allPromedio=$allPromedio/sizeof($temp);
        $resultado = array('countMedio'=>$countMedio,'countBajo'=>$countBajo,'allPromedio'=>$allPromedio);
        
       return $resultado;
    }
   
    public function obtener_fecha($fecha_temp, $dia){
		$resultado=false;
		while(!$resultado){
			$resultado=$this->fecha($fecha_temp,$dia);
			 if(!$resultado){
				$fecha_temp = strtotime ( '+1 day' , strtotime ( $fecha_temp ) ) ;
				$fecha_temp = date ( 'Y-m-d' , $fecha_temp );
			}
		}
		return $fecha_temp;
	}
    public function fecha ($fecha_temp,$dia_temp){
		$array_dias['Sunday'] = "DOMINGO";
		$array_dias['Monday'] = "LUNES";
		$array_dias['Tuesday'] = "MARTES";
		$array_dias['Wednesday'] = "MIERCOLES";
		$array_dias['Thursday'] = "JUEVES";
		$array_dias['Friday'] = "VIERNES";
		$array_dias['Saturday'] = "SABADO";
		
		$resultado = $array_dias[date('l', strtotime($fecha_temp))];
		
		if($resultado==$dia_temp){
			return true;
		}
		return false;
	}
    public function suma_siete($fecha_temp){
		$fecha_temp = strtotime ( '+7 day' , strtotime ( $fecha_temp ) ) ;
		$fecha_temp = date ( 'Y-m-d' , $fecha_temp );
		return $fecha_temp;
	}
    public function pagina_anteriores_cursoAction(Request $request,$semestre){
        $em = $this->getDoctrine()->getManager();
        $respuesta = array();
        $session = $request->getSession();
        $usuarioLogin = $session->get('userData');
        $usuario = $em->getRepository('TodoBundle:Usuario')->findOneBy(array('userId'=>$usuarioLogin));
        
        $cursos = $em->getRepository('TodoBundle:Curso')->findBy(array('cursoDocente'=>$usuario,'cursoSemestre' => $semestre));
         
        $arrayNuevaFecha=array();
      
        $NuevaFecha=1; 
        foreach ($cursos as $temp){
            $fecha = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaCurso'=>$temp),array('asistenciaFecha'=>'ASC'));
      
            if( array_key_exists($temp->getCursoCodigo(), $arrayNuevaFecha) ){
                array_push( $arrayNuevaFecha[$temp->getCursoCodigo()], $fecha[0]->getAsistenciaFecha());
            } else{
                $arrayNuevaFecha[$temp->getCursoCodigo()] = array($fecha[0]->getAsistenciaFecha());
            }
        }
        //var_dump($arrayNuevaFecha); die;
        $respuesta['curso']=$cursos;
        $respuesta['fechascursos']=$arrayNuevaFecha;
        $respuesta['semestre']=$cursos[0]->getCursoSemestre()->getSemestreName();


       
        return $this->render('TodoBundle:Default:anteriores.html.twig', $respuesta);
    }
    public function ajax_asistenciaAction(Request $request)
    {
        $encoders = array(new XmlEncoder(),new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();
        $resultado = array();
        $action = $_POST["action"];
        switch($action){
            case 'ESQUEMA':
                $presente = $em->getRepository('TodoBundle:EsquemaCalificacion')->findOneBy(array('esquemaCalificacionTipo'=> 'PRESENTE'));
                $presente->setEsquemaCalificacionValue($_POST['presente']);
                $em->persist($presente);
                
                $ausente = $em->getRepository('TodoBundle:EsquemaCalificacion')->findOneBy(array('esquemaCalificacionTipo'=> 'AUSENTE'));
                $ausente->setEsquemaCalificacionValue($_POST['ausente']);
                $em->persist($ausente);
                
                $justificado = $em->getRepository('TodoBundle:EsquemaCalificacion')->findOneBy(array('esquemaCalificacionTipo'=> 'JUSTIFICADO'));
                $justificado->setEsquemaCalificacionValue($_POST['justificado']);
                $em->persist($justificado);
                
                $atrasado = $em->getRepository('TodoBundle:EsquemaCalificacion')->findOneBy(array('esquemaCalificacionTipo'=> 'ATRASADO'));
                $atrasado->setEsquemaCalificacionValue($_POST['atrasado']);
                $em->persist($atrasado);
                
                $em->flush();
                $resultado['data'] = 'OK';
                break;
            case 'LOAD_EQUEMA':
                $all_Data = $em->getRepository('TodoBundle:EsquemaCalificacion')->findAll();
                $resultado['all_Data'] = $all_Data;
                
                break;
            case 'MARCARAsistencia':
                $id= explode('_',$_POST['id']);
                $atrasado = $em->getRepository('TodoBundle:EsquemaCalificacion')->findOneBy(array('esquemaCalificacionTipo'=> $_POST['tipo']));
                $asistenciaList = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findOneBy(array('asistenciaId' => $id[1]));
                $asistenciaList->setAsistenciaTipo($_POST['tipo']);
                $asistenciaList->setAsistenciaValue($atrasado->getEsquemaCalificacionValue());
                $em->persist($asistenciaList);
                $em->flush();

                $resultado['value']=$atrasado->getEsquemaCalificacionValue();
                $resultado['id']=$id[1];
                break;
            case 'MARCARAsistenciaJUSTIFICADO':
                    $id= explode('_',$_POST['id']);
                    $atrasado = $em->getRepository('TodoBundle:EsquemaCalificacion')->findOneBy(array('esquemaCalificacionTipo'=> $_POST['tipo']));
                    $asistenciaList = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findOneBy(array('asistenciaId' => $id[1]));
                    $asistenciaList->setAsistenciaTipo($_POST['tipo']);
                    $asistenciaList->setAsistenciaValue($atrasado->getEsquemaCalificacionValue());
                    $asistenciaList->setAsistenciaComentario($_POST['comentario']);
                    $em->persist($asistenciaList);
                    $em->flush();
    
                    $resultado['value']=$atrasado->getEsquemaCalificacionValue();
                    $resultado['id']=$id[1];
                    break;
            case 'next':

                $fechaNow= $_POST['fecha'] ;
                #$fechaNow=date_format($fechaNow, 'Y-m-d 00:00:00');
                $fechaNow= new \DateTime($fechaNow);

                $asistenciaList = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaFecha' => $fechaNow));
                $resultado['asistenciaList']=$asistenciaList;
                $resultado['fechaNow']=$fechaNow;
                break;
            case 'back':
                $fechaNow= $_POST['fecha'];
                #$fechaNow=date_format($fechaNow, 'Y-m-d 00:00:00');
                $fechaNow= new \DateTime($fechaNow);

                $asistenciaList = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaFecha' => $fechaNow));
                $resultado['asistenciaList']=$asistenciaList;
                $resultado['fechaNow']=$fechaNow;
               
                break;
            case 'MARCARALL':
                $atrasado = $em->getRepository('TodoBundle:EsquemaCalificacion')->findOneBy(array('esquemaCalificacionTipo'=> $_POST['tipo']));
                
                $fechaNow= $_POST['fecha'];
                $fechaNow= new \DateTime($fechaNow);

                $asistenciaList = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaFecha' => $fechaNow,'asistenciaCurso'=>$_POST['id_curso']));
                foreach($asistenciaList as $temp){
                    $temp->setAsistenciaTipo($_POST['tipo']);
                    $temp->setAsistenciaValue($atrasado->getEsquemaCalificacionValue());
                    $em->persist($temp);
                    $em->flush();
                }
                

                $resultado['value']=$atrasado->getEsquemaCalificacionValue();
                $resultado['asistenciaList']=$asistenciaList;
                break;
            case 'MARCARALLJUSTIFICADO':
                    $atrasado = $em->getRepository('TodoBundle:EsquemaCalificacion')->findOneBy(array('esquemaCalificacionTipo'=> $_POST['tipo']));
                    
                    $fechaNow= $_POST['fecha'];
                    $fechaNow= new \DateTime($fechaNow);
    
                    $asistenciaList = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findBy(array('asistenciaFecha' => $fechaNow,'asistenciaCurso'=>$_POST['id_curso']));
                    foreach($asistenciaList as $temp){
                        $temp->setAsistenciaTipo($_POST['tipo']);
                        $temp->setAsistenciaValue($atrasado->getEsquemaCalificacionValue());
                        $temp->setAsistenciaComentario($_POST['comentario']);
                        $em->persist($temp);
                        $em->flush();
                    }
                    
    
                    $resultado['value']=$atrasado->getEsquemaCalificacionValue();
                    $resultado['asistenciaList']=$asistenciaList;
                    break;
            case 'MARCARGENERAL':
                $atrasado = $em->getRepository('TodoBundle:EsquemaCalificacion')->findOneBy(array('esquemaCalificacionTipo'=> $_POST['tipo']));
                $asistenciaList = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findOneBy(array('asistenciaId' =>  $_POST['id']));
                $asistenciaList->setAsistenciaTipo($_POST['tipo']);
                $asistenciaList->setAsistenciaValue($atrasado->getEsquemaCalificacionValue());
                $em->persist($asistenciaList);
                $em->flush();

                $resultado['value']=$atrasado->getEsquemaCalificacionValue();
                $resultado['id']=$_POST['id'];
               
                break;
            case 'MARCARGENERALJUSTIFICADO':
                    $atrasado = $em->getRepository('TodoBundle:EsquemaCalificacion')->findOneBy(array('esquemaCalificacionTipo'=> $_POST['tipo']));
                    $asistenciaList = $em->getRepository('TodoBundle:AsistenciaCursoClase')->findOneBy(array('asistenciaId' =>  $_POST['id']));
                    $asistenciaList->setAsistenciaTipo($_POST['tipo']);
                    $asistenciaList->setAsistenciaValue($atrasado->getEsquemaCalificacionValue());
                    $asistenciaList->setAsistenciaComentario($_POST['comentario']);
                    $em->persist($asistenciaList);
                    $em->flush();
    
                    $resultado['value']=$atrasado->getEsquemaCalificacionValue();
                    $resultado['id']=$_POST['id'];
                   
                    break;
        }

      
        

        
        $jsonContent = $serializer->serialize($resultado, 'json');
        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


	
	/*********************************/
	/******INICIO -- CONFIGURACION****/
	/*********************************/
	public function loginAction(Request $request)
    {
        $helper = $this->get('security.authentication_utils');
        return $this->render('TodoBundle:Default:login.html.twig', array(
            'last_username' => $helper->getLastUsername(),
            'error' => $helper->getLastAuthenticationError(),
            'token' => $this->generateToken(),
			 'msg' => "",
        ));
    }
	public function loginCheckAction(Request $request)
    {
		/*VARIABLLES*/
        $em = $this->getDoctrine()->getManager();
		$dias_semana= array("1"=>"LUNES","2"=>"MARTES","3"=>"MIERCOLES","4"=>"JUEVES","5"=>"VIERNES","6"=>"SABADO","7"=>"DOMINGO");
		$tipo_examen= array("1"=>"PARCIAL","2"=>"FINAL","M"=>"MEJORAMIENTO");
        $session = $request->getSession();
        $user = $session->get("cas_username");
        
		$user= strtolower($user);		
		$usuario = $em->getRepository('TodoBundle:Usuario')->findOneBy(array('usuarioUser' => $user));
		
		if(is_null($usuario)){
			session_destroy();
			return $this->render('TodoBundle:Default:sinPermiso.html.twig');
		}
			
			
		$usuario->setUsuarioPasword($session->getId());
        $em->persist($usuario);
        $em->flush();
        
		$session->set('userData', $usuario);
        $session->set('apellido', ucfirst($usuario->getUsuarioApellido()));
        $session->set('nombre', ucfirst($usuario->getUsuarioName()));

        $resp=array();
        
        $roles = $em->getRepository('TodoBundle:UsuarioRol')->findBy(array('usuario' => $usuario));
        $rolesArray = array();
        foreach ($roles as $valor) {
            array_push($rolesArray, $valor->getRol()->getRolName());
        }

        $token = new UsernamePasswordToken($user, $user, 'secured_area', $rolesArray);
        $this->get("security.context")->setToken($token);
        $request->getSession()->set('_security_secured_area', serialize($token));

        

        return new RedirectResponse($this->generateUrl('pagina_index', array('action' => 'index')));

    }
	 public function logoutAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        $usuarioLogin = $session->get('userData');

        
        /*FIN DEL LOGOUT*/

        //clear the token, cancel session and redirect
        $this->get('session')->set('cas_username', "" );    //limpio el cas_username
        $this->get('security.context')->setToken(null);
        $this->get('request')->getSession()->invalidate();

        //Cierro sesion
        phpCAS::client(CAS_VERSION_2_0,'auth.espol.edu.ec',443,'');
        phpCAS::logout();

        return $this->redirect($this->generateUrl('login'));
    }
	/*********************************/
	/******FIN -- CONFIGURACION*******/
	/*********************************/
	
  
   
    /*==================================
               * funcion del Controlador Logout
               * Guarda la sesión del usuario en historial
               ================================== */
   
    protected function getAuthenticationError()
    {
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            return $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
    }
    protected function generateToken()
    {
        $token = $this->get('form.csrf_provider')
            ->generateCsrfToken('authenticate');

        return $token;
    }
   
    private function encrypt ($input) {
        $key='d5t15IIFi3c';
        $output = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $input, MCRYPT_MODE_CBC, md5(md5($key))));
        return $output;
    }
    


    #Testing CAS Login

    /* Funcion CASLogin Action
     * Funcion para el inicio de sesion, usando el servicio CAS
     * Usando libreria jasig/phpCAS
     * */
    public function CASLoginAction(Request $request) {
        //Creacion del cliente CAS [https://auth.espol.edu.ec/login]
        phpCAS::client(CAS_VERSION_2_0,
                       'auth.espol.edu.ec',
                       443,
                       '');
        phpCAS::setNoCasServerValidation();
        phpCAS::forceAuthentication();      #Autenticacion
        $gtAccount = phpCAS::getUser();     #Obtenemos el usuario, si existe

        $this->get('session')->set('cas_username', $gtAccount );                #guardamos el usuario en la sesion
        return new RedirectResponse($this->generateUrl('login_check'));   # redirijimos a login check
    }



  
 
 
   

}