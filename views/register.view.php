<div class="container">
	<div class="row">
		<div class="col-md-9">
			
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
						<button type="submit" class="btn btn-primary" name="register">Register</button>
					
				</form>
				<?php if (isset($status)): ?>
					<p class="status mt-2"><?= $status; ?></p>
				<?php endif ?>
		</div>
	</div>

	<!-- ADMIN MENU -->
	
	<div class="row">

		<div class="col-md-6 mt-4">
			
			<div class="btn-group-vertical" role="group" aria-label="Basic example">
	  			<a href="members.php" class="btn btn-outline-primary">Back to members page</a>
	  			<a href="update_password.php" class="btn btn-outline-primary">Change Password</a>
	  			<a href="logout.php" class="btn btn-outline-primary">Logout</a>
			</div>
		</div>
		


	</div>		
	
		
			
			
</div>



