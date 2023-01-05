<?php
namespace App\Models;

use Core\Orm\Select;

class Clients
{
	public function getClients()
	{
		$select = new Select();
		$select->setTableName("clients");
		$select->setOrderBy(['id' => 'DESC']);
		$clients = $select->execute();
		return ['clients' => $clients];
	}
}
