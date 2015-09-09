<?php
namespace Controller;
use \W\Manager\ConnectionManager;
use \W\Controller\Controller;
class BooksController extends Controller
{
	public function home()
	{
		
		$bdManager = new \Manager\BdManager();
		$bd = $bdManager->getRandomBd();
		print_r($bd);
		$this->show('temps\catalogue');
	}
	public function showDefault()
	{
		$booksManager = new \Books\BooksManager();
		$books= $booksManager->showDefault();


		$this->show('temps\catalogue',['books'=>$books]);
	}
	
	public function filtre()
	{
		$booksManager = new \Books\BooksManager();
		$books= $booksManager->filtre();


		$this->show('temps\catalogue',['books'=>$books]);
	}
	// public function find()
	// {
	// 	$booksManager = new \Books\BooksManager();
	// 	$books= $booksManager->find();


	// 	$this->show('temps\details',['books'=>$books]);
	// }

	public function modale()
	{
		$id = $_GET['id'];

		$booksManager = new \Books\BooksManager();
		$book= $booksManager->modale($id);

		$this->show('temps\modale',['book'=>$book]);

	}

	public function categorieAvent(){
		$aventures = "";
		$avent = "";
		$avent = $_GET['avent'];
		$booksManager = new \Books\BooksManager();
		$aventures= $booksManager->aventures($style);

		debug($id);
		
		$this->show('temps\catalogue',['avent'=>$avent]);

	}
}