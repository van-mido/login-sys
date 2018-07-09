<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= isset($title) ? $title : 'login'; ?></title>
	<link rel="stylesheet" href="css/style.css">
	<?= isset($meta) ? $meta : ''; ?>
</head>
<body>

	<div class="content">	
		<?php include($path); ?>
</div>
</body>
</html>