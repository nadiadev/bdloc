<?php
namespace Manager;
class BdManager extends Manager
{
	
	//recupere x films au hazard depuis la table movies
	public function setTable(){
		$this->table = "books";
	}
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
}