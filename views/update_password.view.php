<h1>Update Password</h1>

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
		<button type="submit" class="btn btn-outline-primary" name="update">Update Password</button>
	
</form>

<?php if (isset($status)): ?>
	<p class="status"><?= $status; ?></p>
<?php endif ?>

<ul>
	<li><a href="members.php">Back to members page</a></li>
	<li><a href="logout.php">Logout</a></li>
	<li><a href="update_password.php">Change Password</a></li>
</ul>