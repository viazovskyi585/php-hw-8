<?php
namespace App\Models;

class Admin extends RootModel
{
	public function getUsers()
	{
		$users = $this->getDataFromDB("SELECT id, email FROM users");
		return ['users' => $users];
	}

	public function getUser(string $id)
	{
		$user = $this->getDataFromDB("SELECT * FROM users WHERE id = $id");
		return ['user' => $user];
	}
}
