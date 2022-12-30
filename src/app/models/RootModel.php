<?php
namespace App\Models;
use PDO;
use Core\Orm\DBConnector;

abstract class RootModel {

	protected function getDataFromDB(string $query)
	{
		$connector = new DBConnector();
		$dbh = $connector->connect();
		$sth = $dbh->prepare($query);
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}
