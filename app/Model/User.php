<?php

namespace App\Model;

use App\Database\DatabaseQuery;

class User
{
	protected $db;

	public function __construct()
	{
		$this->db = new DatabaseQuery();
	}

	public function all()
	{
		return $this->db->select("SELECT * FROM USERS");
	}
}
