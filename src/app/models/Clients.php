<?php
namespace App\Models;

class Clients extends RootModel
{
	public function getClients()
	{
		$clients = $this->getDataFromDB("SELECT * FROM clients");
		return ['clients' => $clients];
	}
}
