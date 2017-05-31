<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<h3>Primeira Parte - Associative Array: </h3>
	<?php foreach ($person as $key => $feature):?>
		<li><strong><?= $key; ?></strong> <?= $feature; ?></li>
	<?php endforeach; ?>

	<h3>Segunda Parte - Simple Array:</h3>
	<?php foreach($animals as $pet): ?>
		<li><strong><?= $pet; ?></strong></li>
	<?php endforeach; ?>
</body>
</html>