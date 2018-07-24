<?php

namespace App\Controllers;

use App\Model\User;

class UserController
{
	public function index()
	{
		$users = (new User)->all();

		return view('user/index.php', compact("users"));
	}
}
