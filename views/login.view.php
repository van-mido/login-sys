

	<h1>Login</h1>
	<form action="" method="post">
		<ul>
			<li><label for="username">Username: *</label><input type="text" name="username" id="username" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>"></li>
			<li><label for="password">Password: *</label><input type="password" name="password" id="password"></li>
			<li><button type="submit" name="submit">Login</button></li>
		</ul>
	</form>



	<?php if (isset($status)): ?>

		<p class="status"><?= $status; ?></p>		
	<?php endif ?>

	<?php if (isset($get_status)): ?>
		<p class="status"><?= $get_status; header("refresh:3;url=login.php"); ?></p>
	<?php endif ?>

	<p><a href="reset_password.php">Don't remember your password?, click here</a></p>