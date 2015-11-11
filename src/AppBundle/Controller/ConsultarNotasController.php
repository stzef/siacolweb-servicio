<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query\ResultSetMapping;



class ConsultarNotasController extends Controller {

	//return view consultar_notas.index
	/**
	* @Route("/notas", name="notas")
	*/
	public function indexAction(Request $request)
	{
		
		$user = $this->getUser();
		$alumnosRepository = $this->getDoctrine()
                ->getRepository('AppBundle:Alumnos');

        $alumno = $alumnosRepository->findOneBy(array('calum' => $user->getProfalum() ));

    	//parametros recibidos
    	$sigla = $request->query->get('periodo');

		//repositorio de periodos para consultas
		$periodosRepository = $this->getDoctrine()
                ->getRepository('AppBundle:Periodos');
    	
    	//todos los periodos 
    	$periodos = $periodosRepository->findBy(array('estado' => '1' ));

    	//periodo a consultar
    	$periodoActual = $periodosRepository->findOneBy(
                    array('sigla' => $sigla, 'estado' => '1')
                );

    	//contexto para el view
    	$context = array(
				'periodos' => $periodos,
				'periodoActual' => $periodoActual,
				'notas' => false
 			);

    	//agragando notas al contexto si se consultan
    	if ($periodoActual) {
    		$context['periodoActual'] = $periodoActual;
    		$context['notas'] = $this->getNotasPorPeriodo(
                        $periodoActual->getCperi(),
                        $alumno
                        //$alumno->getCalum()
                        );
    	}

		return $this->render("consultar_notas/index.html.twig", $context ); 
	}


	public function getNotasPorPeriodo($periodo, $alumno)
	{
		$planestuRepository = $this->getDoctrine()
                ->getRepository('AppBundle:Planestu');
        
        $em = $this->getDoctrine()->getManager();
        
        // Configuracion de la entidad a adoptar la consulta
        $rsm = new ResultSetMapping();

        $rsm->addEntityResult('AppBundle:Materias', 'u');
        $rsm->addFieldResult('u', 'cmate', 'cmate');
        $rsm->addFieldResult('u', 'nmate', 'nmate');
        
        //$query = $em->createNativeQuery('SELECT cmate, cgrupo FROM  planestu WHERE cgrupo=? ', $rsm);
        $query = $em->createNativeQuery('SELECT * FROM materias LEFT JOIN planestu ON materias.cmate = planestu.cmate WHERE planestu.cgrupo = ? ORDER BY orden', $rsm);
        $query->setParameter(1, $alumno->getCgrupo()->getCgrupo());


        $materias = $query->getResult();
        $notasArray = array();
        
        foreach ($materias as $materia) {
            $nota = $this->getNota($materia->getCmate(), $alumno->getCalum() ,$periodo);
            $notasArray[$materia->getNmate()] = $nota;
        }


        return $notasArray;
	}

    public function getNota($materia, $calum, $periodo)
    {
        $notasRepository = $this->getDoctrine()
                ->getRepository('AppBundle:Notas');

        $nota = $notasRepository->findOneBy(array('cmate' => $materia, 'calum' => $calum, 'peri' => $periodo ));

        return $nota ? $nota->getNotastot() : false;
    }


	/*
	* Obtener notas por un periodo y alumno especifico
	*/
	/*public function getNotasPorPeriodo($codigoPeriodo, $codigoAlumno)
	{
		$notasRepository = $this->getDoctrine()
                ->getRepository('AppBundle:Notas');

        $materiasRepository = $this->getDoctrine()
                ->getRepository('AppBundle:Materias');

        $notasArray = array();

        foreach ($notasRepository->findBy(
        		array('peri' => $codigoPeriodo, 'calum' => $codigoAlumno)
        	)as $notas)
        {
        	$materia = $materiasRepository->findOneBy(array(
        			'cmate' => $notas->getCmate()
        		));
        	$notasArray[$materia->getNmate()] = $notas->getNotastot();
        }
        
		return   $notasArray ? $notasArray : false;
	}
	*/
}