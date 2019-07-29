<div class="container">
	<div class="row">

		<?php if ($_SESSION['type'] == 'admin'): ?>
			<div class="col-lg-9">
				<h1 class="display-6">Welcome <?= isset($username) ? $username : 'John Doe'; ?> to Login Environment by <?= isset($name) ? $name : 'Logan'; ?></h1>
					<div class="btn-group-vertical" role="group" aria-label="Basic example">
			  			<a href="register.php" class="btn btn-outline-primary">Register User</a>
			  			<a href="update_password.php" class="btn btn-outline-primary">Change Password</a>
			  			<a href="logout.php" class="btn btn-outline-primary">Logout</a>
					</div>
			</div>
			

		<?php else: ?>
	
		<h1 class="display-6">Welcome <?= isset($username) ? $username : 'John Doe'; ?> to Login Environment by <?= isset($name) ? $name : 'Logan'; ?></h1>
	
			<div class="row">
				<div class="col-lg-9">
						<div class="btn-group-vertical" role="group" aria-label="Basic example">
				  			<a href="update_password.php" class="btn btn-outline-primary">Change Password</a>
				  			<a href="logout.php" class="btn btn-outline-primary">Logout</a>
						</div>
					</ul>
				</div>
			</div>			
		<?php endif ?>

		
	</div>
</div>

