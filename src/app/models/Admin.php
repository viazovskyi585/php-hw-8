<?php
namespace App\Models;
use Core\Orm\Select;

class Admin
{
	public function getUsers(): array
	{
		$select = new Select();
		$select->setTableName("users");
		$select->setFields(["id", "email"]);
		$users = $select->execute();
		return ['users' => $users];
	}

	public function getUser(string $id): array
	{
		$select = new Select();
		$select->setTableName("users");
		$select->setWhere([
			[
				"field" => "id",
				"operator" => "=",
				"value" => $id,
			],
		]);
		$user = $select->execute();

		return ['user' => $user];
	}
}
