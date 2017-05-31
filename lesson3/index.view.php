<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<ul>
		<p>Modo genérico:</p>
		<!--Primeira Forma-->
		<?php
			foreach($names as $name){
				echo "<li>$name</li>";
			}
		?>
		<br><br>
		<p>Modo aconselhado:</p>
		<!--Segunda Forma-->
		<?php foreach($names as $name): ?>
			<li><?= $name;?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>