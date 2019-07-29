<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1 class="display-6">Update Password</h1>

			<form method="post">
				<div class="form-group">
					<input type="password" class="form-control" name="current_pass" id="current_pass" placeholder="Current Password"> <?= isset($current_passwd) ? "<strong>" . $current_passwd . "</strong>" : ''; ?>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" id="password" placeholder="New Password">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password2" id="password2" placeholder="Password (again)">			
				</div>
					<button type="submit" class="btn btn-primary" name="update">Update Password</button>
				
			</form>

			<?php if (isset($status)): ?>
				<p class="status"><?= $status; ?></p>
			<?php endif ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 mt-4">
				<div class="btn-group-vertical" role="group" aria-label="Basic example">
				  <a href="members.php" class="btn btn-outline-primary">Back to members page</a>
				  <a href="update_password.php" class="btn btn-outline-primary">Change Password</a>
				  <a href="logout.php" class="btn btn-outline-primary">Logout</a>
				</div>

		</div>
	</div>
</div>

