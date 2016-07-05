<?php
	session_start();
	class menu{	


		private $value;

		public function  __construct($val){
			$value = $val;
			$_SESSION['option'] = $value;

		}



	}


?>