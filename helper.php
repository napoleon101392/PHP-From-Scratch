<?php

if (!function_exists("view")) {
	function view($path, ...$variables)
	{
		foreach($variables as $var) {
			extract($var);
		}
		
		return require __DIR__ . "/resources/views/{$path}";
	}
}

if (! function_exists("dd")) {
	function dd(...$data)
	{
		echo "<pre>";
		var_dump($data);
		echo "</pre>";

		exit;
	}
}

if(! function_exists("config")) {
	function config($file)
	{
		return require_once("config/{$file}.php");
	}
}

if(! function_exists("error")) {
	function error($message)
	{
		if (!config('app')['error']) {
			return view('errors/404.php');
		}

		return $message;
	}
}
