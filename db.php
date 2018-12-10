<?php 

	/**
	 * Put here your credentials in '$config' array
	 */
	


$config = [
				'DB_NAME' => 'login',  
				'DB_USER' => 'rvargas',  // Put here your username for mysql or mariadb
				'DB_PASS' => 'admin'	// Put here your mysql-mariadb password	
		  ];

function connect($config) {

try {
	
	$conn = new PDO('mysql:hostname=localhost;dbname=' . $config['DB_NAME'], $config['DB_USER'], $config['DB_PASS']);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	return $conn;

	} catch (Exception $e) {
	
	return false;
	}

}

function get_value($conn, $qry) {

	try {

		$result = $conn->query($qry);

		return ($result->rowCount() > 0) ? $result : false;
		
	} catch (Exception $e) {
		
		return false;

	}

}

function query_db($query, $bindings, $conn) {

	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);

	return ($stmt->rowCount() > 0) ? $stmt : false; 
}

