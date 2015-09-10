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

		if(!empty($_GET['categories'])){
			$categories = $_GET['categories'];
			$books = $booksManager->categorieAvent($categories,$disponible);
		}
		else{
			$books= $booksManager->filtre();
			$categories = array();
			$disponible = array();
		}
		
		$this->show('temps\catalogue',['books'=>$books, 'categories' => $categories, 'disponible' => $disponible]);
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

}