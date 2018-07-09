<?php 	

// For path view distribution 

	function view($path, $data = null) {

		if ($data) {

			extract($data);

		}

		$path .= ".view.php";

		include "views/layout.php";
	}


	// Validate syntax for email 

	function validate_email($email) {

		return filter_var($email, FILTER_VALIDATE_EMAIL);
		
	}

	
	// Function for generate string random

	function random_string($length = 16) {
	    
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $characters_length = strlen($characters);
	    $random_string = '';
	    
	    	for ($i = 0; $i < $length; $i++) {
	        	
	        	$random_string .= $characters[rand(0, $characters_length - 1)];
	    	
	    	}

	    return $random_string;
}