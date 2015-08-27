<?php
namespace BooksManager;
use \Manager;
class CatalogueController
{
		public function home()
		{
			///ce serait ici que 
			//l'on ajouterais une requete sql
		///afiche la page home
			$bdManager = new \Manager\BdManager();
			$bd = $bdManager->getRandomBd();
			print_r($bd);
		include("temps\catalogue.php");
		}

		public function filtre()

		{
			$recherche = "";
			if (!empty ($_GET)){
			$recherche = $_GET['recherche'];
		}
			$sql = "SELECT  books.title,illu.lastName AS illuLastName,scena.lastName AS scenaLastName,color.lastName AS 			colorLastName,books.cover
					FROM books 
					LEFT JOIN authors AS illu
					ON books.illustrator = illu.id
					LEFT JOIN authors AS scena
					ON books.illustrator = scena.id
					LEFT JOIN authors AS color
					ON books.illustrator = color.id
					WHERE books.title LIKE :recherche "; 
			$sth = $dbh->prepare($sql);
			$sth->bindValue(":recherche", '%'.$recherche.'%');
			$sth->execute();
			$bdloc = $sth->fetchAll();
			
		} 
		public function affichage()
		{

		}		

}