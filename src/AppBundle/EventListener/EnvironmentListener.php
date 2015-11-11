<?php 

namespace AppBundle\EventListener;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Controller\InitController;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
* 
*/
class EnvironmentListener
{
	/*
	* Filtro verificacion de environment en Session
	*/
	public function environmentSessionController (FilterControllerEvent $event)
	{
		$controller = $event->getController();
		$session = new Session();
		$environment = $session->get('environment');

		 // Validar si hay un environment cargado a la session de usuario
		if (isset($environment)) {
			// Validar si el controller es una instacia de InitController
			if ($controller[0] instanceof InitController) {
				
				// ****** if auth 
					// ****** redirect home
				// ****** no 
					// ****** redirect login
		 		return;
		 	}
			return;
		}
		else{
		 	// NO exite un environment cargado 
		 	// Validar si el controller NO es instacia de InitController
		 	if(!($controller[0] instanceof InitController)){
		 		//redireccion a init controller
		 		$redirectUrl = '/init';
		 		$event->setController(function() use ($redirectUrl) {
			        return new RedirectResponse($redirectUrl);
				});
		 	}
		 	else
		 		return;
		}	
	}
}

