<?php
	// Anjo Eijeriks
	class Persoon
	{
		// properties - eigenschappen ---------------------
		protected $naam;
		protected $postcode;
		
		// methoden - functies ----------------------------
		// constructor
		function __construct($naam=NULL, $postcode=NULL)
		{
			$this->naam=$naam;
			$this->postcode=$postcode;
		}

		// setters
		public function set_naam($naam)
		{
			$this->naam=$naam;
		}
		public function set_postcode($postcode)
		{
			$this->postcode=$postcode;
		}
		
		// getters
		public function get_naam()
		{
			return $this->naam;
		}
		public function get_postcode()
		{
			return $this->postcode;
		}
	}
?>