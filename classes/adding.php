<?php
session_start();
/**
* 
*/




class adding
{
	
	private $s1wr,$s1ob,$s2wr,$s2ob,$s3wr,$s3ob,$s4wr,$s4ob,$s5wr,$s5ob,$s6wr,$s6ob,$s7wr,$s7ob,$optional,$sem, $grp,$roll;
	private $host, $user, $pass, $db;






	public function __construct($roll, $s1wr, $s1ob,$s2wr, $s2ob,$s3wr, $s3ob,$s4wr, $s4ob,$s5wr, $s5ob,$s6wr, $s6ob,$s7wr, $s7ob,$optional,$sem,$grp)
	{
		$this -> roll = $roll;
		$this -> s1wr = $s1wr;
		$this -> s1ob = $s1ob;
		$this -> s2wr = $s2wr;
		$this -> s2ob = $s2ob;
		$this -> s3wr = $s3wr;
		$this -> s3ob = $s3ob;
		$this -> s4wr = $s4wr;
		$this -> s4ob = $s4ob;
		$this -> s5wr = $s5wr;
		$this -> s5ob = $s5ob;
		$this -> s6wr = $s6wr;
		$this -> s6ob = $s6ob;
		$this -> s7wr = $s7wr;
		$this -> s7ob = $s7ob;
		$this -> sem = $sem;
		$this -> grp = $grp;
		
		$this -> optional = $optional;

		$this -> host = "localhost";
		$this -> user = "root";
		$this -> pass = "lumas";
		$this -> db = "SSC";

		$this -> connect();
		
		$this -> insert_values();
		
	}



	public function connect(){
		mysql_connect($this->host, $this->user, $this->pass);
		mysql_select_db($this->db);
	}


	public function insert_values(){
		
		$table = 'c22b'.$this->grp;


		$sql = "INSERT INTO $table VALUES ($this->roll, $this->s1wr, $this->s1ob,$this->s2wr, $this->s2ob,$this->s3wr, $this->s3ob,$this->s4wr, $this->s4ob,$this->s5wr, $this->s5ob,$this->s6wr, $this->s6ob,$this->s7wr, $this->s7ob,'$this->optional','$this->sem')";
		$s = mysql_query($sql);
		if($s){
			?>

			<script>
				window.location.href= "../marks/";
			</script>
			<?php 
		}else{
			?>

				<script>
					alert("Error occure.");
					window.location.href= "../marks/";
				</script>
			<?php 

		}
	}
}



?>