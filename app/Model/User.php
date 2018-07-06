<?php

namespace App\Model;

use App\DatabaseConnection;

class User
{
	protected $db;

	public function __construct()
	{
		$this->db = new DatabaseConnection();
	}

	public function all()
	{
		return $this->db->select("SELECT * FROM USERS");
	}
}
