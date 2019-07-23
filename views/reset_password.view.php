<h1>Reset Password</h1>

<p>Forgot your password?, enter your email address and we will send a link to reset your password</p>
<form method="post">
		<div class="form-group">
			<input type="text" class="form-control" name="email" id="email" placeholder="Email"> <?= isset($email_err) ? $email_err : ''; ?>			
		</div>
		<button type="submit" class="btn btn-outline-primary" name="reset">Reset Password</button>
</form>

<?php if (isset($status)): ?>
	<p class="status"><?= $status; ?></p>
<?php endif ?>

<ul>
	<li><a href="login.php">Back to Login page</a></li>
</ul>