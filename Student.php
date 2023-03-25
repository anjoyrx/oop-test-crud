<?php
	// Anjo Eijeriks
	require "Persoon.php";
	
	class Student extends Persoon
	{
		// properties - eigenschappen -----------------------------------------
		protected $opleiding;
		// $naam en $postcode worden geërfd van Persoon
		
		// methoden - functies ------------------------------------------------
		// constructor
		public function __construct($opleiding=NULL, $naam=NULL, $postcode=NULL)
		{
			$this->opleiding=$opleiding;
			$this->naam=$naam;
			$this->postcode=$postcode;
		}
		// setters
		public function set_opleiding($opleiding)
		{
			$this->opleiding=$opleiding;
		}
		// set_naam() en set_postcode worden geërfd van Persoon
		
		// getters
		public function get_opleiding()
		{
			return $this->opleiding;
		}
		// get_naam() en get_postcode worden geërfd van Persoon
		
		// methoden om gegevens af te drukken ---------------------------------
		public function voorstellen()
		{
			echo "Mijn naam is ".$this->get_naam()
			.", ik doe de opleiding "
			.$this->get_opleiding()
			.". Mijn postcode is ".$this->get_postcode();
		}
		public function afdrukkenStudent()
		{
			echo $this->get_naam();
			echo "<br/>";
			echo $this->get_postcode();
			echo "<br/>";
			echo $this->get_opleiding();
			echo "<br/><br/>";
		}
		// crud methoden ------------------------------------------------------
		public function createStudent()		// gegevens in de database zetten
		{
			require "schoolConnect.php";
			// gegevens uit het object in variabelen zetten 
			$studentid = NULL; 				// zit niet in het object
			$naam =      $this->get_naam();
			$postcode =  $this->get_postcode();
			$opleiding = $this->get_opleiding();
			
			// statement maken voor invoer in de tabel
			$sql = $conn->prepare
			("
				insert into studenten values
				(:studentid, :opleiding, :naam, :postcode)
			");
			// variabelen in de statement zetten
			$sql->bindParam(":studentid", $studentid);
			$sql->bindParam(":opleiding", $opleiding);
			$sql->bindParam(":naam", 	  $naam);
			$sql->bindParam(":postcode",  $postcode);
			$sql->execute();
			// melding 
			echo "Deze student is toegevoegd: <br/>";

		}
		public function readStudent()
		{
			require "schoolConnect.php";
			// statement maken
			$sql = $conn->prepare("
									select studentid, opleiding, naam, postcode 
									from studenten  
								 ");
			$sql->execute();
			foreach($sql as $student)
			{
				// gegevens uit de array in het object stoppen
				// en gelijk afdrukken
				echo $student["studentid"]. " - ";		// geen eigenschap van object
				echo $this->naam=$student["naam"]. " - ";
				echo $this->opleiding=$student["opleiding"]. " - ";
				echo $this->postcode=$student["postcode"]. "<br/>";
			}
		}
		public function updateStudent($studentid)
		{
			require "schoolConnect.php";
			// gegevens uit het object in variabelen zetten 
			$studentid;
			$naam 		= $this->get_naam();
			$postcode 	= $this->get_postcode();
			$opleiding 	= $this->get_opleiding();
			// statement maken
			$sql = $conn->prepare("
									update studenten
									set opleiding=:opleiding, naam=:naam, postcode=:postcode
									where studentid=:studentid
								 ");
			// variabelen in de statement zetten
			$sql->bindParam(":studentid", $studentid);
			$sql->bindParam(":opleiding", $opleiding);
			$sql->bindParam(":naam", $naam);
			$sql->bindParam(":postcode", $postcode);
			$sql->execute();
		}
		public function deleteStudent($studentid)
		{
			require "schoolConnect.php";
			// statement maken
			$sql = $conn->prepare("
									delete from studenten
									where studentid = :studentid
								 ");
			// variabele in de statement zetten
			$sql->bindParam(":studentid", $studentid);
			$sql->execute();
		}
		public function searchStudent($studentid)
		{
			require "schoolConnect.php";

			// statement maken
			$sql = $conn->prepare("
									select studentid, opleiding, naam, postcode
									from studenten
									where studentid = :studentid			
								 ");
			// variabele in de stament zetten
			$sql->bindParam(":studentid", $studentid);
			$sql->execute();

			// gegevens uit de array in het object stoppen
			foreach($sql as $student)
			{			
				//echo $student["studentid"]. "<br/>";		// geen eigenschap van object
				$this->naam=$student["naam"];
				$this->opleiding=$student["opleiding"];
				$this->postcode=$student["postcode"];			
			}
		}
	}
?>