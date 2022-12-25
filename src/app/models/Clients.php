<?php
namespace App\Models;

class Clients
{
	public function index()
	{
		return [
			"clients" => [
				[
					"id" => 1,
					"name" => "Client 1",
					"website" => "https://client1.com",
				],
				[
					"id" => 2,
					"name" => "Client 2",
					"website" => "https://client2.com",
				],
				[
					"id" => 3,
					"name" => "Client 3",
					"website" => "https://client3.com",
				],
			]
		];
	}
}
