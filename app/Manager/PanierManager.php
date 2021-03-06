<?php
namespace Manager; 


class PanierManager extends \W\Manager\Manager
{
	
	public function filtre()

	{
		
		$sql = "SELECT  id,title,cover
		FROM books 
		"; 
		
		$sth = $this->dbh->prepare($sql);
		/*$sth->bindValue(":id", $id);
		$sth->bindValue(":title", $title);
		$sth->bindValue(":cover", $cover);*/
		$sth->execute();
		$bdlocs = $sth->fetchAll();
		/*debug($bdlocs);*/

		return $bdlocs;
	} 
	public function confValidate($userId)

	{
		//$w_user = $username;
		/*$username = "joel";*/
		$sql = "SELECT  *
				FROM panier
				WHERE userId = $userId
		"; 
		
		$sth = $this->dbh->prepare($sql);
		$sth->execute();
		$panier = $sth->fetch();

		return $panier;
	}  

	public function createPanier($userId)
	{
		$sql = "INSERT INTO panier (id, userId, date_created, date_modified)
				VALUES (NULL, $userId, NOW(), NOW())";
		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $this->dbh->lastInsertId();
	}

	public function modale($id)
	{
		$sql = "SELECT  
		books.id,
		books.title,
		books.cover,
		illu.lastName AS illuLastName,
		scena.lastName AS scenaLastName,
		color.lastName AS colorLastName
		
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

/*
		$sql = "SELECT  style
		FROM series 
		LEFT JOIN books
		WHERE books.series_id = :id ";

		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id_);
		$sth->execute();
		$series = $sth->fetch();
		debug($series);
		return $series; */
	}	



	

}