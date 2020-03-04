<?php

$tasks = $app['database']->selectAll('todos', 'Task');

/*
// basit bir class'a fetch etmek yerine mapping yaparak farklı işlemler de yapabilirdik
$tasks = array_map(function ($task) {
	$t = new Task();
	$t->description = $task['description'];
	$t->completed = $task['completed'];
}, $tasks);
*/

require 'views/index.view.php';