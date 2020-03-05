<?php

use App\Core\App;

$tasks = App::get('database')->selectAll('todos', 'Task');

$users = App::get('database')->selectAll('users', 'User');

/*
// basit bir class'a fetch etmek yerine mapping yaparak farklı işlemler de yapabilirdik
$tasks = array_map(function ($task) {
	$t = new Task();
	$t->description = $task['description'];
	$t->completed = $task['completed'];
}, $tasks);
*/

require 'views/index.view.php';