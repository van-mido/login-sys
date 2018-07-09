<h1>Register Member Area</h1>

<form action="" method="post">
	<ul>
		<li><label for="username">Username</label><input type="text" name="username" id="username"> <?= isset($username_err) ? $username_err : ''; ?></li>
		<li><label for="email">Email</label><input type="text" name="email" id="email"> <?= isset($email_err) ? $email_err : ''; ?></li>
		<li><label for="type">Member type: </label><select name="type" id="type">
			<?php if ($type_members): ?>

					<?php foreach ($type_members as $key): ?>
						<option value="<?= $key['id'];  ?>"><?= $key['name']; ?></option>
					<?php endforeach ?>
			<?php endif ?>			
		</select></li>
		<li><label for="password">Password</label><input type="text" name="password" id="password"></li>
		<li><label for="password2">Password (again)</label><input type="text" name="password2" id="password2"></li>
		<li><button type="submit" name="register">Register</button></li>
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