<?php

namespace App\Controllers;

use App\Model\User;

class UserController
{
	public function index()
	{
		return view('user/index.php', ['users' => (new User)->all()]);
	}
}
