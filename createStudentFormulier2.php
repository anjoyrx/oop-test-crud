<!doctype html>
<html>
	<!-- Anjo Eijeriks -->
	<head>
		<title>create student formulier 2</title>
	</head>
	<body>
		<h1>create student formulier 2</h1>

		<?php
			// Anjo Eijeriks
			require "Student.php";			// nodig om object te maken
			require "schoolConnect.php";	// verbinding maken database
			
			// uitlezen vakjes van createStudentForm1 -------------------------
			$studentid = NULL;				// komt niet uit het formulier (auto increment)
			$naam =      $_POST["naamvak"];
			$postcode =  $_POST["postcodevak"];
			$opleiding = $_POST["opleidingvak"];
			
			// maken object ---------------------------------------------------
			$student1 = new Student($opleiding, $naam, $postcode); // maakt object
			$student1->createStudent();		// zet het object in de tabel
			$student1->afdrukkenStudent();	// drukt objectgegevens af
		?>
		
		<a href="schoolmenu.php">Terug naar het hoofdmenu</a>
	</body>
</html>
