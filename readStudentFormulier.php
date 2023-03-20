<!doctype html>
<html lang="nl">
	<head>
		<title>afdrukken studenten</title>
	</head>
	<body>
		<h1>afdrukken studenten</h1>
		<p>Dit zijn alle gegevens uit de studententabel.</p>
		<?php
			require "Student.php";			// nodig om object te maken
			$student1 = new Student();
			$student1->readStudent();
		?>
		<a href="schoolmenu.php"><br/>Terug naar het hoofdmenu</a>
	</body>
</html>