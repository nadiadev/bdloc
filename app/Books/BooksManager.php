<?php
namespace Books;


class BooksManager extends \W\Manager\Manager
{
	
	public function filtre()

	{
		$recherche = "";
		if (!empty ($_GET['recherche'])){
			$recherche = $_GET['recherche'];
		}

		$start = 0;
		$byNumber = 20;
		// Affichage par nombre de bd
		if (!empty($_GET['number'])){
			$byNumber = $_GET['number'];

		}
		// pagination?
		if (!empty($_GET['start'])){
		 	$start = $_GET['start'];

		}

		$sql = "SELECT  books.id,books.title,books.cover,illu.lastName AS illuLastName,scena.lastName AS scenaLastName,
		color.lastName AS colorLastName
		FROM books 
		LEFT JOIN authors AS illu
		ON books.illustrator = illu.id
		LEFT JOIN authors AS scena
		ON books.illustrator = scena.id
		LEFT JOIN authors AS color
		ON books.illustrator = color.id
		WHERE books.title LIKE :recherche 
		OR illu.lastName LIKE :recherche
		OR scena.lastName LIKE :recherche
		OR color.lastName LIKE :recherche
		LIMIT $start,$byNumber"; 
		// 
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":recherche", '%'.$recherche.'%');
		$sth->execute();
		$bdloc = $sth->fetchAll();
		/*debug($bdloc);*/

		return $bdloc;
	} 
	public function find($id){
		debug($bdloc);
	echo $bdloc['id'];

	/*$this->find($bdloc['id']);*/	 
	}

	public function modale($id)
	{
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

		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();
		$book = $sth->fetch();
		
		return $book; 


		$sql = "SELECT  style
		FROM series 
		LEFT JOIN books
		WHERE books.series_id = :id ";

		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id_);
		$sth->execute();
		$series = $sth->fetch();
		debug($series);
		return $series; 
	}	

	// Categories
	public function categorie_avent($aventure){
		$sql = "SELECT  
		books.id,
		books.title,
		books.cover,
		illu.lastName AS illuLastName,
		scena.lastName AS scenaLastName,
		color.lastName AS colorLastName,
		
		FROM books 
		LEFT JOIN authors AS illu
		ON books.illustrator = illu.id
		LEFT JOIN authors AS scena
		ON books.illustrator = scena.id
		LEFT JOIN authors AS color
		ON books.illustrator = color.id
		LEFT JOIN series AS avent
		ON 
		WHERE books.id = :id ";

		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();
		$book = $sth->fetch();
		
		return $book; 

	}


	

}