<?php

	/**
	* 
	*/
	class gpa 
	{

		private $written, $objective, $written_pass, $objective_pass;
		
		public function __construct($number1, $number2, $pass1, $pass2){
			$this -> written = $number1;
			$this -> objective = $number2;
			$this -> written_pass = $pass1;
			$this -> objective_pass = $pass2;
			

		}


		public function  calculateGPL() {
			if(($this-> written >= $this-> written_pass) && ($this-> objective >= $this-> objective_pass)){
				$total = (int)($this-> written + $this-> objective);
				
				if($total>=80 ){
					return "A+";
				}elseif($total<80 && $total>=70){
					return "A";
				}elseif($total<70 && $total>=60){
					return "A-";
				}elseif($total<60 && $total>=50){
					return "B";
				}elseif($total<50 && $total>=40){
					return "C";
				}elseif($total<40 && $total>=33){
					return "D";
				}elseif($total < 33){
					return "F";
				}
			}else{
				return "F";
			}
		}


		public function  calculateGPA() {
			if(($this-> written >= $this-> written_pass) && ($this-> objective >= $this-> objective_pass)){
				$total = (int)($this-> written + $this-> objective);
				
				if($total>=80 ){
					return 5;
				}elseif($total<80 && $total>=70){
					return 4;
				}elseif($total<70 && $total>=60){
					return 3.5;
				}elseif($total<60 && $total>=50){
					return 3;
				}elseif($total<50 && $total>=40){
					return 2;
				}elseif($total<40 && $total>=33){
					return 1;
				}elseif($total < 33){
					return 0;
				}
			}else{
				return 0;
			}
		}



		public function gpaToLg($gpa){
			$val = (float)$gpa;
			if($val >=5){
				return "A+";
			}elseif($val<5 && $val>=4){
				return "A";
			}elseif($val<4 && $val >= 3.5){
				return "A-";
			}elseif($val<3.5 && $val >=3 ){
				return "B";
			}elseif($val<3 && $val >=2 ){
				return "C";
			}elseif($val<2 && $val >1){
				return "D";
			}elseif($val<1){
				return "F";
			}
		}

	}



?>