<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>Usuarios</h1>

    <ul>
	    <?php foreach ($users as $user): ?>

            <li> <?= e($user) ?></li>

	    <?php  endforeach; ?>
    </ul>
</body>
</html>