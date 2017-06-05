<?php
	class Post{
		public $title;
		public $published;

		public function __construct($title, $published){
			$this->title = $title;
			$this->published = $published;
		}

	}

	$posts = [
			new Post('My First Post', true),
			new Post('My Second Post', true),
			new Post('My Third Post', true),
			new Post('My Fourth Post', false)
		];


	# Filtra o array a partir de uma comparação com o valor retornado
	# de uma função.
	$unpublishedPosts = array_filter($posts, function($post){
		return !$post->published;
	});


	# array_map(callback, arr1);
	$modified = array_map(function ($post){ 
		$post->published = true;
		return $post;
	}, $posts);


	# array_column(input, column_key)
	# retorna um array com os elementos que tenham como valor o parametro passado
	# como chave.
	$titles = array_column($posts, 'title');


	# Transformar os indices de $posts em arrays
	$posts = array_map(function($post){
		return (array) $post;
	}, $posts);


	var_dump($posts);


	# var_dump($unpublishedPosts);
	# var_dump($modified);
	# var_dump($titles);
?>