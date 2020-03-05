<?php

class UsersController
{
	public function index()
	{

		$users = App::get('database')->selectAll('users', 'User');

		return view('users', ['users' => $users] /* compact('users') */);

	}

	public function store()
	{
		App::get('database')->insert('users', [
			'name' => $_POST['name']
		 ]);

		return redirect('users');
		//header ('Location: /users');
	}
}