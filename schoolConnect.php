<?php
	// schoolConnect.php
	// maakt een connectie met de database 'school'
	// Anjo Eijeriks
	
	$servername = "localhost";
	$dbname 	= "school";
	$username 	= "root";
	$password 	= "";
	
	try
	{
		$conn = new PDO("mysql:host=$servername;
						dbname=$dbname", 
						$username, $password);
		// echo "Connectie gelukt <br/>";				
						
	}
	catch(PDOException $e)
	{
		echo "Connectie mislukt: ". $e->getMessage();
	}
	
?>