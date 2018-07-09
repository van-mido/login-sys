<h1>Welcome to restore Password</h1>

<p>Forgot your password?, enter your email address and your new password then we will restore your password.</p>
<form action="" method="post">
	<ul>
		<li><label for="email">Email: </label><input type="text" name="email" id="email"> <?= isset($email_err) ? $email_err : ''; ?></li>
		<li><label for="password">New password: </label><input type="password" name="password" id="password"></li>
		<li><label for="password2">New password (again): </label><input type="password" name="password2" id="password2"></li>
		<li><button type="submit" name="reset">Restore Password</button></li>
	</ul>
</form>

<?php if (isset($status)): ?>
	<p class="status"><?= $status; ?></p>
<?php endif ?>

<ul>
	<li><a href="login.php">Back to Login page</a></li>
</ul>