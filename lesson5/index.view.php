<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<h1>Task for the Day</h1>
	<h5>Usando um loop:</h5>
	<ul>
	<?php foreach($tasks as $heading=>$value):?>
		<li>
			<strong><?=ucwords($heading);?>:</strong><?=$value;?>
		</li>
	<?php endforeach;?>
	</ul>

	<h5>Usando a chave:</h5>
	<ul>
		<li><strong>Name:</strong> <?= $tasks['title'];?></li>
		<li><strong>Due date:</strong> <?= $tasks['due'];?></li>
		<li><strong>Personal Responsible:</strong> <?= $tasks['assigned_to'];?></li>
		<h6>Usando Operador Ternário:</h6>
		<li><strong>Status:</strong> <?= $tasks['completed'] ? 'Completed': 'Incompleted';?></li>
		<h6>Usando if-else:</h6>
		<li>
			<strong>Status:</strong>
			<?php if($tasks['completed']):?>
				<span>&#9989;</span>
			<?php else: ?>
				<span>&#9988;</span>
			<?php endif; ?>
		</li>
	</ul>
</body>
</html>