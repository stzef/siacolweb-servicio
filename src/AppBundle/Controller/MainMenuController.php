<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class MainMenuController extends Controller {


	// return view main_menu.index
    /**
     * @Route("/menu", name="menu")
     */
	public function indexAction(Request $request)
	{
		$user = $this->getUser();
		$context = array(
				'usuario' => $user
			);
		return $this->render("main_menu/index.html.twig", $context);
	}

}