<!doctype html>
<html>
	<!-- Anjo Eijeriks -->
	<head>
		<title>update student formulier 3</title>
	</head>
	<body>
		<h1>update student formulier 3</h1>
		
		<?php
			require "Student.php";

            // gegevens uit de array in variabelen stoppen
		    $studentid = $_POST["studentIdVak"];
			$naam = $_POST["naamVak"];
            $postcode = $_POST["postcodeVak"];
            $opleiding = $_POST["opleidingVak"];
			
            // maken object ---------------------------------------------------
			$student1 = new Student($opleiding, $naam, $postcode); // maakt object
			$student1->updateStudent($studentid);		           // vervangt de tabelgegevens voor objectgegevens
            echo "Dit zijn de gewijzigde gegevens: <br/>";
            echo $studentid."<br/>";
			$student1->afdrukkenStudent();	                       // drukt object af

		?>
		<a href="schoolmenu.php">Terug naar het hoofdmenu</a>
	</body>
</html>
