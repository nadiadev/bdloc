<?php
namespace Manager;
use W\Manager\Manager;
use W\Manager\ConnectionManager;
class BdManager extends Manager
{
	
	//recupere x films au hazard depuis la table movies
	/*public function setTable(){
		$this->table = "books";
	}*/
	public function getRandomBd()
	{
		$dbConnector = new DatabaseConnector();
		$dbh = $dbConnector->getDbh();
		$sql = "SELECT id, illustrator, scenarist, colorist, cover
		FROM books
		ORDER BY RAND()
		LIMIT 20";
		$sth = $dbh->prepare($sql);
		$sth -> execute();
		$movies = $sth->fetchAll();
		return $books;
	}
	public function findBds($bdIds)
	{
		
		$sql = "SELECT paniers_bds.panierId, paniers_bds.bdId, panier.Id, paniers_bds.panierId, books.cover
		FROM paniers_bds
		LEFT JOIN panier
		ON panier.Id = paniers_bds.panierId
		LEFT JOIN books
		ON paniers_bds.bdId = books.id
		WHERE panier.userId =:userId
		LIMIT 10";
		$sth = $this->dbh->prepare($sql);
		$sth -> bindValue(':userId',$_SESSION['user']['id']);

		$sth -> execute();
		/*debug($_SESSION);*/
		$paniers = $sth->fetchAll();
		/*debug($paniers);*/
		return $paniers;
	}
	/*********************** ZONE TEST !!!!!!!   **************************************
	SELECT * FROM 
	WHERE panier.Id= panier_bds.panierId AND userId = userId 


	$sql = "SELECT  
		books.id,
		books.title,
		books.cover,
		illu.lastName AS illuLastName,
		scena.lastName AS scenaLastName,
		color.lastName AS colorLastName,
		illu.birthDate AS illuBirthDate,
		illu.deathDate AS illuDeathDate,
		illu.country AS illuCountry		
		FROM books 
		LEFT JOIN authors AS illu
		ON books.illustrator = illu.id
		LEFT JOIN authors AS scena
		ON books.illustrator = scena.id
		LEFT JOIN authors AS color
		ON books.illustrator = color.id
		WHERE books.id = :id ";
		***************** FIN ZONE TEST !!!!! **********************/
}