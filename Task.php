<?php 

class Task 
{
	public $description;

	public $completed;
}

/*
class Task {

	public $description;

	public $completed = false;

	public function __construct($description) 
	{
		$this->description = $description;

	}

	public function isComplete() 
	{
		return $this->completed;
	}

	public function complete() 
	{
		$this->completed = true;
	}
}


//$task = new Task('Go to the store');
//$task->complete();

//dd($task);

$tasks = [
	new Task('Go to the store'),
	new Task('Finish my screencast'),
	new Task('Clean my room')
];

$tasks[0]->complete(); 

//dd($tasks);
*/