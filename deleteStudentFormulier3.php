<!doctype html>
<html>
	<!-- Anjo Eijeriks -->
	<head>
		<title>delete student formulier 3</title>
	</head>
	<body>
		<h1>delete student formulier 3</h1>
		
		<?php
			require "Student.php";

		    $studentid = $_POST["studentIdVak"];
			$verwijderen = $_POST["verwijderBox"];
			
			if ($verwijderen=="ja")
			{
				echo "De student is verwijderd <br/>";
				$student1 =  new Student();
				$student1->deleteStudent($studentid);
			}
			else
			{
				echo "De student is niet verwijderd <br/>";
			}
		?>
		<a href="schoolmenu.php">Terug naar het hoofdmenu</a>
	</body>
</html>
