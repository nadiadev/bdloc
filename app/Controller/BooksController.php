<?php
namespace Controller;
use \W\Manager\ConnectionManager;
use \W\Controller\Controller;
class BooksController extends Controller
{
	public function home()
	{
			///ce serait ici que 
			//l'on ajouterais une requete sql
		///afiche la page home
		$bdManager = new \Manager\BdManager();
		$bd = $bdManager->getRandomBd();
		print_r($bd);
		$this->show('temps\catalogue');
	}
	public function filtre()
	{
		$booksManager = new \Books\BooksManager();
		$books= $booksManager->filtre();
	

		$this->show('temps\catalogue',['books'=>$books]);
	}
}