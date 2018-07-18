<?php

namespace App\Database;

class DatabaseQuery extends Database
{
	public function select($query)
	{
		$prepare = $this->db->prepare($query);

		$prepare->execute();

		return $prepare->fetchAll();
	}
}
