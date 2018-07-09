<?php

	session_start();

	require "login_config.php";

	if (!isset($_SESSION['username'])) {

		header('Location: login.php?unauthorized');

	// time() = current time
		
	} else if (time() > $_SESSION['last_act'] + $setting['session_time']) {

		session_destroy();
		
		$_SESSION['username'] = [];


		header('Location: login.php?timeout');

	} else {

		$_SESSION['last_act'] = time();
	}


	$data = [

				'username' => $_SESSION['username'],
				'title' => 'Members Zone',
				'name'  => 'Van Mido'

			];

// Function view (more info: functions.php), put your page name and variables (acrosss $data['variable_to_pass'] = 'content') to pass.


	view('members', $data);
