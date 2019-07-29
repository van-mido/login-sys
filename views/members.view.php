<div class="container">
	<div class="row">

		<?php if ($_SESSION['type'] == 'admin'): ?>
			<div class="col-lg-9">
				<h1>Welcome <?= isset($username) ? $username : 'John Doe'; ?> to Login Environment by <?= isset($name) ? $name : 'Logan'; ?></h1>	
					<p><a href="register.php">Register User</a></p>
					<p><a href="logout.php">Logout</a></p>
					<p><a href="update_password.php">Change Password</a></p>
			</div>
			

		<?php else: ?>
	
		<h1>Welcome <?= isset($username) ? $username : 'John Doe'; ?> to Login Environment by <?= isset($name) ? $name : 'Logan'; ?></h1>
	
			<div class="row">s
				<div class="col-lg-9">
						<p><a href="logout.php">Logout</a></p>
						<p><a href="update_password.php">Change Password</a></p>
					</ul>
				</div>
			</div>			
		<?php endif ?>

		
	</div>
</div>

