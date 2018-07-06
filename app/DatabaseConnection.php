<?php

namespace App;

use PDO;

class DatabaseConnection
{
	protected $db;

	public function __construct()
	{
		$this->db = new PDO("mysql:host=127.0.0.1;dbname=Shop;", 'root', '');
	}

	public function select($query)
	{
		$prepare = $this->db->prepare($query);

		$prepare->execute();

		return $prepare->fetchAll();
	}
}
