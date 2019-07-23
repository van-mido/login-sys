<?php 

	// 'Upadate' for mysql query

	session_start();

	require "login_config.php";


	if (!isset($_SESSION['username'])) {

		header('Location: login.php?unauthorized');
	}

	// time() = Show us current time

	if (time() > ($_SESSION['last_act'] + $setting['session_time'])) {

		session_destroy();

		$_SESSION = [];

		header('Location: login.php?timeout');

	} else {

		$_SESSION['last_act'] = time();
	}


	// $users = get_table($conn, "members");


	// $users->fetchAll();

	$data = [
				// 'users' => $users,
				'title' => 'Update Password'
			];


	if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_POST['submit'])) {


		if(empty($_POST['current_pass']) || empty($_POST['password']) || empty($_POST['password2'])) {


			$data['status'] = "Please fill out all box.";

		} else if (trim(htmlspecialchars($_POST['password'])) != trim(htmlspecialchars($_POST['password2'])))  {

			
			$data['status'] = "Password fields must be the same";


		} 

		$get_password = query_db("SELECT password FROM members WHERE id = :id", 
						[
							'id' => $_SESSION['id']

						], $conn);

		$current_pass = $get_password->fetch();


		// Store password

		// $passwd_form = trim(htmlspecialchars($_POST['current_pass']));

		if (!password_verify(trim(htmlspecialchars($_POST['current_pass'])), $current_pass['password'])) {

			$data['current_passwd'] = "Your current password is incorrect";

		}


		else {

			// $username = htmlspecialchars(trim($_POST['username']));
			$password = password_hash(trim(htmlspecialchars($_POST['password'])) , PASSWORD_DEFAULT);

			query_db("UPDATE members SET password = :password WHERE id = :id", 
							[

								
								'password' => $password,
								'id' => $_SESSION['id']

							], $conn);

			$data['status'] = 'Password Updated.';

		}


	}

	// Function view (more info: functions.php), put your page name and variables (acrosss $data['variable_to_pass'] = 'content') to pass.


	view('update_password', $data);





	// while ($row = $users->fetch()) {
			

	// 	echo $row['username'];
	// }

	// foreach ($users as $key ) {
		
	// 	print_r($key);

	// }



	