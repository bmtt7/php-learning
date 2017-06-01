<?php 

require 'function.php';

class Task {
	public $description;
	public $completed = false;

	public function  __construct($description){
		$this->description = $description;
	}  

	public function complete(){
		$this->completed = true;
	}

	public function isComplete(){
		return $this->completed;   
	}
}


// $task = new Task('Go to the store');
// dd($task->isComplete());

$tasks = [
	new Task('Go to the store'),
	new Task('Finish my screencasts'),
	new Task('Sleep')
];

$tasks[0]->complete();
require 'index.view.php';