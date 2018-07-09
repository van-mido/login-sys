<h1>Reset Password</h1>

<p>Forgot your password?, enter your email address and we will send a link to reset your password</p>
<form action="" method="post">
	<ul>
		<li><label for="email">Email: </label><input type="text" name="email" id="email"> <?= isset($email_err) ? $email_err : ''; ?></li>
		<li><button type="submit" name="reset">Reset Password</button></li>
	</ul>
</form>

<?php if (isset($status)): ?>
	<p class="status"><?= $status; ?></p>
<?php endif ?>

<ul>
	<li><a href="login.php">Back to Login page</a></li>
</ul>