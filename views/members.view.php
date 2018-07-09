

<?php if ($_SESSION['type'] == 'admin'): ?>
		<h1>Welcome <?= isset($username) ? $username : 'John Doe'; ?> to Login Environment by <?= isset($name) ? $name : 'Logan'; ?></h1>


			<ul>
				<li><a href="register.php">Register User</a></li>
				<li><a href="logout.php">Logout</a></li>
				<li><a href="update_password.php">Change Password</a></li>
			</ul>

	<?php else: ?>
	
		<h1>Welcome <?= isset($username) ? $username : 'John Doe'; ?> to Login Environment by <?= isset($name) ? $name : 'Logan'; ?></h1>
	

			<ul>
				<li><a href="logout.php">Logout</a></li>
				<li><a href="update_password.php">Change Password</a></li>
			</ul>

<?php endif ?>

