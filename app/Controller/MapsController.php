<?php

namespace Controller;
use \W\Manager\ConnectionManager;
use \W\Controller\Controller;

class MapsController extends Controller
{
	public function home()
	{
		
	// 	$bdManager = new \Manager\BdManager();
	// 	$bd = $bdManager->getRandomBd();
	// 	print_r($bd);
	// 	$this->show('temps\catalogue');
	}

	public function geol()
	{
		// $mapsManager = new \Manager\MapsManager();
		// $maps= $mapsManager->geol();

		$this->show('temps\maps');
	}

}