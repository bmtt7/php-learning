<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<style type="text/css">
		header{
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>
			<?php
				//$greeting = 'Hello, World!';
				//echo $greeting;

				// Printar o nome passado como parametro pela url
				// localhost:8888/?name = Mauro
				$name = $_GET['name'];
				echo "Hello, $name";
			?>
		</h1>

		<h2>
			<?php echo "Hello, " . $_GET['name']; ?>
		</h2>

		<h3><?= "Hello, " . $_GET['name']; ?></h3>
	</header>
</body>
</html>