<?php 

	session_start();

	session_destroy(); // Finish the session

	$_SESSION['username'] = [];


	require "login_config.php";


	view('logout', [

						'title' => 'Logout page',
						'meta' => "<meta http-equiv='refresh' content='2; url=login.php'>"

					]);