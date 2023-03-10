<!doctype html>
<html>
	<!-- Anjo Eijeriks -->
	<head>
		<title>search student formulier 2</title>
	</head>
	<body>
		<h1>search student formulier 2</h1>

		<?php
			// Anjo Eijeriks
			require "Student.php";			// nodig om object te maken
			require "schoolConnect.php";	// verbinding maken database
			
			// uitlezen vakje van searchStudentForm1 -------------------------
			$studentid = $_POST["studentIdVak"];
			$student1 = new Student(); // maakt object
			$student1->searchStudent($studentid);
			$student1->afdrukkenStudent();
		?>
		
		<a href="schoolmenu.php">Terug naar het hoofdmenu</a>
	</body>
</html>
