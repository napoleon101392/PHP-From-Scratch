<?php

namespace App\Database;

use PDO;
use PDOException;

class Database
{
	protected $db;

	public function __construct()
	{
		$host = config('database')['mysql']['host'];
		$dbname = config('database')['mysql']['name'];
		$username = config('database')['mysql']['username'];
		$password = config('database')['mysql']['password'];

		try {
			$this->db = new PDO("mysql:host={$host};dbname={$dbname};", $username, $password);
		} catch (PDOException $e) {
			die(error($e->getMessage()));
		}
	}
}
