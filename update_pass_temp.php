<?php

	require "login_config.php";

	
	$new_pass = password_hash('admin', PASSWORD_DEFAULT);


	$insert_user = query_db("INSERT INTO members (username, type, email, password) VALUES ('admin', 1, 'admin@southpark.com', :password)", ['password' => $new_pass], $conn);

	// $update_user = query_db("UPDATE members SET password = :password WHERE username = :username", ['password' => $new_pass, 'username' => 'admin'], $conn);

	if ($insert_user) {

		echo "<h1>Update success! </h1>";

	} else {

		echo "<h1>Something wrong happend! </h1>";


	}