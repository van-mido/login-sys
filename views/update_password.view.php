<h1>Update Password</h1>

<form action="" method="post">
	<ul>
		<li><label for="current_pass">Current Password</label><input type="password" name="current_pass" id="current_pass"> <?= isset($current_pass) ? "<strong>" . $current_pass . "</strong>" : ''; ?></li>
		<li><label for="password">New Password</label><input type="password" name="password" id="password"></li>
		<li><label for="password2">Password (again)</label><input type="password" name="password2" id="password2"></li>
		<li><button type="submit" name="update">Update Password</button></li>
	</ul>
</form>

<?php if (isset($status)): ?>
	<p class="status"><?= $status; ?></p>
<?php endif ?>

<ul>
	<li><a href="members.php">Back to members page</a></li>
	<li><a href="logout.php">Logout</a></li>
	<li><a href="update_password.php">Change Password</a></li>
</ul>