<?php
namespace Controller;
use \W\Manager\ConnectionManager;
use \W\Controller\Controller;
class PanierController extends Controller
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
		$panierManager = new \Manager\PanierManager();
		$bdlocs= $panierManager->filtre();


		$this->show('temps\panier',['bdlocs'=>$bdlocs]);
	}

	public function modale()
	{
		$id = $_GET['id'];

		$booksManager = new \Books\BooksManager();
		$book= $booksManager->modale($id);

		$this->show('temps\modale',['book'=>$book]);
	}
	public function validate(){

		$id = $_GET['id'];

		// chercher l'id de l'utilisateur
		$user = $this->getUser();
		$userId = $user['id'];

		// chercher l'id du panier de cet utilisateur
		$panierManager = new \Manager\PanierManager();
		$panier = $panierManager->confValidate($userId);

		// si pas de panier, le créer
		if(empty($panier)){
			$panierId = $panierManager->createPanier($userId);
		}
		else{
			$panierId = $panier['id'];
		}

		$data = array(
				'panierId'  => $panierId,
				'bdId'		=> $id,
			);

		$panierBDManager = new \Manager\PanierBDManager();
		$panierBDManager->insert($data);
	}

	public function showPanier(){

		// chercher l'id de l'utilisateur
		$user = $this->getUser();
		$userId = $user['id'];

		$paniers = "";
		$panierId = "";
		

		// chercher l'id du panier de cet utilisateur
		$panierManager = new \Manager\PanierManager();
		$panier = $panierManager->confValidate($userId);

		// si pas de panier, alors pas de bds
		$books = [];
		if(!empty($panier)){
			$panierId = $panier['id'];
			$panierBDManager = new \Manager\PanierBDManager();
			$bdIds = $panierBDManager->findBooksIdInPanier($panierId);

			// Aller chercher les bds		
			if(!empty($bdIds)){
				$bdManager = new \Manager\BdManager();
				$paniers = $bdManager->findBds($bdIds);
			}
		}
		$data = array(
				'paniers'  	=> $paniers,
				'id'		=> $panierId,
			);

		$this->show('/temps/panier', $data);
	}

}