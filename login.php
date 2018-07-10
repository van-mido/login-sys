<?php 

 	session_start();

 	require "login_config.php";	

 	// $data = array();

 		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

 				if (empty($_POST['username']) || empty($_POST['password'])) {

 					$data['status'] = 'Please insert both fields';
 					

 				} else {


 					$username = trim(htmlspecialchars($_POST['username']));
 					$password = trim(htmlspecialchars($_POST['password']));

 					// Query to validate user type and login

 					$login_view = query_db("SELECT members.id, permissions.name FROM members, permissions WHERE username = :username AND password = md5(:password) AND permissions.id = members.type;", 
 							
 							[ 
 								
 								'username' => $username,
 							   	'password' => $password			

 							], $conn);

 						//Validate
 					
						if ($login_view) {

 						
							// Set id row for update password

 							$get_row = $login_view->fetch();


							$_SESSION['id'] = $get_row['id']; // We will be use to update password
							$_SESSION['type'] = $get_row['name']; // We will be use to restric members area
							$_SESSION['username'] = $username;
							$_SESSION['last_act'] = time();

							

								header('Location: members.php');



						} else { 

								// echo "<strong>Logged Succesfully</strong>";
								$data['status'] = "Invalid credentials, please try again!";	

					
						}

 				}

 		}

 		if (isset($_GET['unauthorized'])) {

 			$data['get_status'] = "You tried to unauthorized area, please login well!";
 		}

 		if (isset($_GET['timeout'])) {

 			$data['get_status'] = "Your session has epired. Please login again.";
 		}

 		
 		$data['title'] = 'Login Page';

// Function view (more info: functions.php), put your page name and variables (acrosss $data['variable_to_pass'] = 'content') to pass.
 		
 		
		view('login', $data);


	