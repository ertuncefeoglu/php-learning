<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

	public function home()
	{

		$tasks = App::get('database')->selectAll('todos', 'Task');
		$users = App::get('database')->selectAll('users', 'User');

		//require 'views/index.view.php';
		return view('index', ['users' => $users, 'tasks' => $tasks] /* compact('users') */);
	}

	public function about()
	{
		require 'app/views/about.view.php';
	}

	public function contact()
	{
		require 'app/views/contact.view.php';
	}

	public function aboutculture()
	{
		require 'app/views/about-culture.view.php';
	}

	/*
	public function addname()
	{
		App::get('database')->insert('users', [
			'name' => $_POST['name']
		 ]);

		header ('Location: /');
	}
	*/
}