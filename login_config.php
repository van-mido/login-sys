<?php
 	
 	require "db.php";
 	require "functions.php";


 		$conn = connect($config);

 		if (!$conn) die("Don't be connect"); 


 	// Set time for inactivity	

 	$setting['session_time'] = 5 * 60; // Values on seconds	
 	
 	/* 
		
		Names of websites

 	*/
 	$setting['site_name'] = "My web login site";
 	$setting['site_url'] = "http://localhost/"; // Put your autenthic login page
 	
 	

 	// Setting master key for password authentication


 	$setting['master_key'] = '@213';