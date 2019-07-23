<div class="container mt-4">
	<div class="row">
		<div class="col-lg-9">
			<h1>Login</h1>
			<form method="post">
				
					<div class="form-group">
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>">			
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">				
					</div>
					<button class="btn btn-outline-primary btn-block" type="submit" name="submit">Login</button>
				
			</form>
				<?php if (isset($status)): ?>
					<p class="status"><?= $status; ?></p>		
				<?php endif ?>

				<?php if (isset($get_status)): ?>
					<p class="status"><?= $get_status; header("refresh:3;url=login.php"); ?></p>
				<?php endif ?>
		</div>
		<div class="col-lg-3">
			<p><a href="reset_password.php">Don't remember your password?, click here</a></p>			
		</div>
	</div>
</div>