<!doctype html>
<html>
	<!-- Anjo Eijeriks -->
	<head>
		<title>update student formulier 2</title>
	</head>
	<body>
		<h1>update student formulier 2</h1>
		
		<?php
			// Anjo Eijeriks
			require "Student.php";					// nodig om object te maken
			$studentid = $_POST["studentIdVak"];	// uitlezen vakje van deleteStudentForm1 
			$student1 = new Student();				// object aanmaken
			$student1->searchStudent($studentid);	
			// properties in variabelen zetten
			$naam=$student1->get_naam();
			$postcode=$student1->get_postcode();
			$opleiding=$student1->get_opleiding();
		?>
		
		<form action="updateStudentFormulier3.php" method="post">
			<!-- $studentid mag niet meer gewijzigd worden -->
            <?php echo $studentid ?>
            <input type="hidden" name="studentIdVak" value="<?php echo $studentid; ?> "><br/>
            <input type="text"   name="naamVak"      value="<?php echo $naam;      ?> "><br/>
            <input type="text"   name="postcodeVak"  value="<?php echo $postcode;  ?> "><br/>
            <input type="text"   name="opleidingVak" value="<?php echo $opleiding; ?> "><br/><br/>
			<input type="submit"><br/><br/>
		</form>

		<a href="schoolmenu.php">Terug naar het hoofdmenu</a>
	</body>	