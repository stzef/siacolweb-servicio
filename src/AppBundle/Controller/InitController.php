<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;


class InitController extends Controller
{
    // return view to select colegios
    /**
     * @Route("/init", name="init")
     */
    public function selectColegiosAction()
    {
    	$empresaRepository = $this->getDoctrine()
                ->getRepository('AppBundle:Empresas');
    	$empresas = $empresaRepository->findAll();
                       
    	return $this->render('init/init.html.twig', array(
    			'empresas' => $empresas
    		));
    }

    // Load environment to session  
    /**
     * @Route("/init/{codigo_colegio}", name="load_environment")
     */
    public function loadEnvironmentAction(Request $request, $codigo_colegio)
    {
        $empresa = $this->getEmpresa($codigo_colegio);

        if (! $empresa) {
            return $this->render('error_pages/no_found.html.twig');
        }

        $session = $request->getSession();
        $session->set('environment', $empresa->getEnviroment().'.yml');

        return $this->redirect('/login');

    }

    /* get  environment from empresas
    *
    */
    public function getEmpresa($codigo_colegio)
    {
        $empresaRepository = $this->getDoctrine()
                ->getRepository('AppBundle:Empresas');
        $empresa = $empresaRepository->findOneBy(array('cempre' => $codigo_colegio));

        // catch error no found empresa with code $codigo_colegio
        return $empresa;
    }

}
