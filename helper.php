<?php

if (!function_exists("view")) {
	function view($path, $compact = [])
	{
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
