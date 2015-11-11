<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
* Manejo de seguridad
*/
class SecurityController extends Controller
{

	/**
	*@Route("/login", name="login")
	*/
	public function loginAction(Request $request)
	{
		$authenticationUtils = $this->get('security.authentication_utils');

		// get the login error if there is one
		$error = $authenticationUtils->getLastAuthenticationError();

		// last username entered by the user
		$lastUsername = $authenticationUtils->getLastUsername();

		$colegioRepository = $this->getDoctrine()
                ->getRepository('AppBundle:Colegios');

		$colegio = $colegioRepository->findOneBy(array());

		return $this->render(
		    'security/login.html.twig',
		    array(
		        // last username entered by the user
		        'last_username' => $lastUsername,
		        'error'         => $error,
		        'colegio'		=> $colegio,
		    )
		);

	}

	 /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {
        
    }
}