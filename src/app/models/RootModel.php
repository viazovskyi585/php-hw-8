<?php
namespace App\Models;
use PDO;

abstract class RootModel {

	protected function getDataFromDB(string $query)
	{
		$dbh = new PDO("mysql:host=db;dbname=myBase", "root", "root");
		$sth = $dbh->prepare($query);
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}
