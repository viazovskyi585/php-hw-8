<?php
namespace App\Models;

class Admin
{
	public function index()
	{
		return [
			"content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit at iure rerum ut perspiciatis corporis ipsam modi minima mollitia eum?",
		];
	}

	public function users()
	{
		return [
			"users" => [
				[
					"id" => 1,
					"name" => "User 1",
					"email" => "user1@example.com"
				],
				[
					"id" => 2,
					"name" => "User 2",
					"email" => "user2@example.com"
				],
				[
					"id" => 3,
					"name" => "User 3",
					"email" => "user3@example.com"
				],
			]
		];
	}
}
