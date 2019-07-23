<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= isset($title) ? $title : 'login'; ?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<?= isset($meta) ? $meta : ''; ?>
</head>
<body>

		<?php include($path); ?>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>