<?php

class students{


	private $roll;
	private $name;
	private $fname;
	private $mname;
	private $session;
	private $mobile;
	private $host;
	private $user;
	private $pass;
	private $db; 
	private $link;
	private $group;
	private $subjects;


	public function __construct($roll, $name, $fname, $mname, $session, $mobile,$group,$subjects){

		$this -> roll = $roll;
		$this -> name = $name;
		$this -> fname = $fname;
		$this -> mname  = $mname;
		$this -> session = $session;
		$this -> mobile = $mobile;
		$this -> group = $group;
		$this -> subjects = $subjects;

		$this -> host = "localhost";
		$this -> user = "root";
		$this -> pass = "lumas";
		$this -> db = "SSC";
		$this -> connect();



	}

 public function connect(){
        $this -> link = mysql_connect($this->host, $this->user, $this->pass);
        mysql_select_db($this->db) or die("database not found");
        
    }

	public  function insert_info(){
		$sql = "INSERT INTO info VALUES ($this->roll, '$this->name','$this->fname','$this->mname','$this->session','$this->mobile','$this->group','$this->subjects')";
		$s = mysql_query($sql) or die("Error occure");
		if($s){
			?>

			<script>
				window.location.href="../student/";
			</script>

			<?php
		}else{


			?>

			<script>
				alert("Error inserting!!!");
			</script>

			<?php
		}
		
	}

}


?>