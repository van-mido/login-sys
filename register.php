<?php 

session_start();
	
	require "login_config.php";

// Validate if is login or not

if (!isset($_SESSION['username'])) {

	header('Location: login.php?unauthorized');

} else if ($_SESSION['type'] != 'admin') { 


	header('Location: members.php');


	
  } else if (time() > $_SESSION['last_act'] + $setting['session_time']) {   // time() = current time

		session_destroy();

		$_SESSION['username'] = [];

		header('Location: login.php?timeout');

    } else {

		$_SESSION['last_act'] = time();

	 }



	if ($_SERVER['REQUEST_METHOD'] === 'POST') {


		if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['type']) || empty($_POST['password']) || empty($_POST['password2'])) {


			$data['status'] = "Please fill out all box.";


		} else if ($_POST['password'] != $_POST['password2'])  {

			
			$data['status'] = "Password fields must be the same";


		} else if (!validate_email($_POST['email'])) {

			$data['email_err'] = 'Please put a valid email.';
 			
			
			/* 
			 * Check if the email is already in use
			 * If is true, the email is already in use
			 */	
			
		} else if ($check_email = query_db("SELECT email FROM members WHERE email = :email", 
									[

										'email' => $_POST['email']	
													
									], $conn)) {


			$data['email_err'] = 'This email is already in use.';
							
			/* 
			 * Check if your username is already in use
			 * If is true, the email is already in use
			 */	

		} else if ($check_username = query_db("SELECT username FROM members WHERE username = :username", 
									[

										'username' => $_POST['username']	
													
									], $conn)) {


			$data['username_err'] = 'This username is already in use.';


		} else { 												

			$username = htmlspecialchars(trim($_POST['username']));
			$email = htmlspecialchars(trim($_POST['email']));
			$type = htmlspecialchars(trim($_POST['type']));
			$password = htmlspecialchars(trim($_POST['password']));

			query_db("INSERT INTO members (username, type, email, password) VALUES (:username, :type, :email, md5(:password))", 
							[

								'username' => $username,
								'type' => $type,
								'email' => $email,
								'password' => $password

							], $conn);

			$data['status'] = 'Register succesfully.';

		}


	}


	$data['title'] = 'Register Members';

	$data['type_members'] = get_value($conn, "SELECT * FROM permissions");

	// Function view (more info: functions.php), put your page name and variables (acrosss $data['variable_to_pass'] = 'content') to pass.


	view('register', $data);