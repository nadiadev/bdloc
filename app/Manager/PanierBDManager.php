<?php
namespace Manager; 

use W\Manager\ConnectionManager;

class PanierBDManager extends \W\Manager\Manager
{

	public function __construct()
	{
		$this->table = 'paniers_bds';
		$this->dbh = ConnectionManager::getDbh();
	}

	public function findBooksIdInPanier($panierId)
	{
		$sql = "SELECT bdId
				FROM ". $this->table ." 
				WHERE panierId = $panierId";
		$sth = $this->dbh->prepare($sql);
		$sth->execute();
		$bdIds = $sth->fetchAll();

		return $bdIds;
	}

}