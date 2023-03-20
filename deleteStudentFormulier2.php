<!doctype html>
<html>
	<!-- Anjo Eijeriks -->
	<head>
		<title>delete student formulier 2</title>
	</head>
	<body>
		<h1>delete student formulier 2</h1>
		
		<?php
			// Anjo Eijeriks
			require "Student.php";					// nodig om object te maken
			$studentid = $_POST["studentIdVak"];	// uitlezen vakje van deleteStudentForm1 
			$student1 = new Student();				// object aanmaken
			$student1->searchStudent($studentid);	
			$student1->afdrukkenStudent();
		?>
		
		<form action="deleteStudentFormulier3.php" method="post">
			<!-- $studentid mag niet meer gewijzigd worden -->
			<input type="hidden" name="studentIdVak" value=" <?php echo $studentid ?> ">
			<!-- 2x verwijderBox om nee of ja door te kunnen geven -->
			<input type="hidden" 	name="verwijderBox" value="nee">			
			<input type="checkbox" 	name="verwijderBox" value="ja">
			<label for="verwijderBox"> Verwijder deze student.</label><br/><br/>
			<input type="submit"><br/><br/>
		</form>

		<a href="schoolmenu.php">Terug naar het hoofdmenu</a>
	</body>	