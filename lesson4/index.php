<?php  
	
	// Associative Arrays
	$person = [
		"age" => 31,
		"hair" => "brown",
		"career" => "programmer"
	];

	$person['name'] = "Mauro";

	// Arrays

	$animals = [
		'cat',
		'dog',
		'rat',
	];

	$animals[] = 'bat';

	var_dump($person);
	require 'index.view.php';
?>