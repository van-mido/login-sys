<div class="container">
	<div class="row">

		<?php if ($_SESSION['type'] == 'admin'): ?>
			<div class="col-lg-9">
				<h1>Welcome <?= isset($username) ? $username : 'John Doe'; ?> to Login Environment by <?= isset($name) ? $name : 'Logan'; ?></h1>
				
				<ul>
					<li><a href="register.php">Register User</a></li>
					<li><a href="logout.php">Logout</a></li>
					<li><a href="update_password.php">Change Password</a></li>
				</ul>

			</div>
			

		<?php else: ?>
	
		<h1>Welcome <?= isset($username) ? $username : 'John Doe'; ?> to Login Environment by <?= isset($name) ? $name : 'Logan'; ?></h1>
	
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<ul>
						<li><a href="logout.php">Logout</a></li>
						<li><a href="update_password.php">Change Password</a></li>
					</ul>
				</div>
			</div>
		</div>
			

		<?php endif ?>

		
	</div>
</div>

