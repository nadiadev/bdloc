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
		books.stock,
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
	public function categorieAvent($categories){
		
		$categoriesSql = "";

		if(!empty($categories)){
			$numberCat = count($categories);
			$categoriesSql .= "WHERE avent.style LIKE '%" . $categories[0] . "%'";
			if($numberCat > 1){
				for($index = 1; $index < $numberCat; $index++){
					$categoriesSql .= " OR avent.style LIKE '%" . $categories[$index] . "%'";
				}
			}
		}

		$sql = "SELECT   
		books.id,
		books.title,
		books.cover,
		books.stock,
		illu.lastName AS illuLastName, 
		scena.lastName AS scenaLastName,
		color.lastName AS colorLastName, 
		avent.style AS aventStyle
		
		FROM books 
		LEFT JOIN authors AS illu
		ON books.illustrator = illu.id
		LEFT JOIN authors AS scena
		ON books.illustrator = scena.id
		LEFT JOIN authors AS color
		ON books.illustrator = color.id
		LEFT JOIN series AS avent
		ON books.serieId = avent.id
		" . $categoriesSql;

		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		$books = $sth->fetchAll();
		/*debug($books);
		die();*/

		return $books; 

	}
	// else{
	// 	echo "string";
	// }

	// }
	// echo "fin de procedure bookmanager";

	public function getBooksByFilters($categories, $disponible)
	{

		$categoriesSql = "";

		if(!empty($categories)){
			$underCategoriesSql = " WHERE style LIKE '%" . $categories[0] . "%'";

			$numberCat = count($categories);

			if($numberCat > 1){
				for($index = 1; $index < $numberCat; $index++){
					$underCategoriesSql .= " OR style LIKE '%" . $categories[$index] . "%'";
				}
			}

			$categoriesSql .= " AND books.id IN (
													SELECT id
													FROM books
													WHERE serieId IN(
																		SELECT id
																		FROM series" . $underCategoriesSql . "
																	)
												)";
		}

		$disponibleSql = "";

		if(!empty($disponible)){
			$disponibleSql = " AND books.stock > 0";
		}

		$sql = "SELECT   
				books.id,
				books.title,
				books.cover,
				books.stock,
				illu.lastName AS illuLastName, 
				scena.lastName AS scenaLastName,
				color.lastName AS colorLastName, 
				avent.style AS aventStyle
				
				FROM books 
				LEFT JOIN authors AS illu
				ON books.illustrator = illu.id
				LEFT JOIN authors AS scena
				ON books.illustrator = scena.id
				LEFT JOIN authors AS color
				ON books.illustrator = color.id
				LEFT JOIN series AS avent
				ON books.serieId = avent.id
				WHERE books.id >= 0" 
				. $categoriesSql
				. $disponibleSql;

		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		$books = $sth->fetchAll();
		/*debug($books);
		die();*/

		return $books; 

	}
	

}