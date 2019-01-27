<?php
 

	session_start();

	require "login_config.php";

// Recover password area

	if (isset($_GET['key'])) { 

		// User must to put a new password



		$data = [
					// 'users' => $users,
					'title' => 'Restore Password'
				];

			if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_POST['submit'])){


				if(empty($_POST['email']) || empty($_POST['password']) || empty($_POST['password2'])) {


				$data['status'] = "Please fill out the box.";

				} else if(!validate_email($_POST['email'])) {

					$data['email_err'] = 'Please put a valid email.';

				} else {

					$key = htmlspecialchars(trim($_GET['key']));
					$email = htmlspecialchars(trim($_POST['email']));

					$password = htmlspecialchars(trim($_POST['password']));

					$check_credentials = query_db("SELECT email FROM members WHERE email = :email AND pwd_reset = :key", 
										[

											'email' => $email,
											'key' => $key	
												
										], 
										$conn);

					if(!$check_credentials) {

						$data['status'] = "I'm sorry, your email and reset key aren't valid. Please fill out the credentials again or go to <a href='reset_password.php'>reset password</a> to generate a new key";
					
					} else {

								query_db("UPDATE members SET password = :password, pwd_reset = :pwd_reset WHERE email = :email", 
										[

											'password' => md5($password),
											'pwd_reset' => '',
											'email' => $email,	
												
										], 
										$conn);

								$data['status'] = "Password updated succefully. Please login in <a href='login.php'>Login</a>";
					}

				}

			}	

			view('reset_password_restore', $data);	

// Reset password area (If there is no key password)

	} else {

		$data = [
					// 'users' => $users,
					'title' => 'Reset Password'
				];


		if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_POST['submit'])) {


			if(empty($_POST['email'])) {


				$data['status'] = "Please fill out the box.";

			} else if(!validate_email($_POST['email'])) {

				$data['email_err'] = 'Please put a valid email.';

			} else {

				// $username = htmlspecialchars(trim($_POST['username']));
				$email = htmlspecialchars(trim($_POST['email']));

				$check_email = query_db("SELECT email FROM members WHERE email = :email", 
								[
		
									'email' => $email

								], $conn);

				
				if ($check_email) {

					$email_key = random_string();

					$subject = "Password reset request from " . $setting['site_name'];

					// Message body

$message = <<<EOT

		<html><body>
		<p>Hello,</p>
		<p>You (or someone claiming to be you) recently asked that your  {$setting['site_name']} password be reset. If so, please click the link below to reset your password. If you do not want to reset your password, or if the request was in error, please ignore this message.</p>
		<a href="{$setting['site_url']}reset_password.php?key={$email_key}">{$setting['site_url']}reset_password.php?key={$email_key}</a></p>
		<p>Thanks, <br/>The Administrator of {$setting['site_name']} </p>
		</body></html>

EOT;
			
					
					// Email headers

					$headers = "MIME-Version: 1.0 \r\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
					$headers .= "From: " . $setting['site_name'] . " <noreply@" . $setting['site_url'] . ">\r\n";
					$headers .= "X-Sender: <noreply@" . $setting['site_url'] . ">\r\n";
					$headers .= "Reply-To: <noreply@" . $setting['site_url'] . ">\r\n";
					
					// In Debian - Ubuntu We wil use this app(s) "apt install mailutils"
					// send email
					mail($email, $subject, $message, $headers);

					// Update reset  pwd_reset

					query_db("UPDATE members SET pwd_reset = :pwd_reset WHERE email = :email", 
								[

									'pwd_reset' => $email_key,	
									'email' => $email

								], $conn);

				$data['status'] = 'Password Reset, please check your email';



				} else { // We not found out the email in hw_DocByAnchor(connection, anchorID)

					$data['status'] = "This email doesn't exists in the database";

				}



			}




		}


	view('reset_password', $data);
			

}

	// Function view (more info: functions.php), put your page name and variables (acrosss $data['variable_to_pass'] = 'content') to pass.







	// while ($row = $users->fetch()) {
			

	// 	echo $row['username'];
	// }

	// foreach ($users as $email_key ) {
		
	// 	print_r($key);

	// }



