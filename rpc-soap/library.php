<?php 
	class Library {
		
		public function getDwarves(){
			$dwarves = array('bashful','Doc','Dopey','Grumpy','Happy','sneezy', 'sleepy' );

			return $dwarves;
		}


		public function greetUser($name){
			return array("message"=> "Hello, ". $name);

		}
	}


 ?>