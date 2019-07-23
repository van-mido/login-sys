<h1>Register Member Area</h1>

<form method="post">
	
		<div class="form-group">
			<input type="text" class="form-control" name="username" id="username" placeholder="Username"> <?= isset($username_err) ? $username_err : ''; ?>			
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="email" id="email" placeholder="Email"> <?= isset($email_err) ? $email_err : ''; ?>			
		</div>
		
		<div class="form-group">
			<label for="type">Member type: </label>
			<select class="form-control" name="type" id="type">
				<?php if ($type_members): ?>

						<?php foreach ($type_members as $key): ?>
							<option value="<?= $key['id'];  ?>"><?= $key['name']; ?></option>
						<?php endforeach ?>
				<?php endif ?>			
			</select>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="password" id="password" placeholder="Password">					
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="password2" id="password2" placeholder="Password (again)">				
		</div>
		<button type="submit" class="btn btn-outline-secondary" name="register">Register</button>
	
</form>

<?php if (isset($status)): ?>
	<p class="status"><?= $status; ?></p>
<?php endif ?>

<ul>
	<li><a href="members.php">Back to members page</a></li>
	<li><a href="logout.php">Logout</a></li>
	<li><a href="update_password.php">Change Password</a></li>
</ul>