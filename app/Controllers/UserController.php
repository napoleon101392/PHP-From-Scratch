<?php

namespace App\Controllers;

use App\Model\User;

class UserController
{
	public function index()
	{
		$users = new User;

		return view('user/index.php', ['users' => $users->all()]);
	}
}
