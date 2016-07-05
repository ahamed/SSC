<?php

class add_arts{


	private $bawr, $baob, $eawr, $eaob, $sswr, $ssob, $ihwr, $ihob, $ghwr, $ghob, $ecwr, $ecob, $iawr, $iaob,$cawr, $caob;
	private $host, $user, $pass, $db;
	private $roll,$optional;

	public function __construct($roll, $bawr, $baob, $eawr, $eaob, $cawr, $caob, $sswr, $ssob, $ihwr, $ihob, $ghwr, $ghob, $iawr, $iaob, $ecwr, $ecob, $optional){
		$this -> roll = $roll;
		$this -> bawr = $bawr;
		$this -> baob = $baob;
		$this -> eawr = $eawr;
		$this -> eaob = $eaob;
		$this -> cawr = $cawr;
		$this -> caob = $caob;
		$this -> sswr = $sswr;
		$this -> ssob = $ssob;
		$this -> ihwr = $ihwr;
		$this -> ihob = $ihob;
		$this -> ghwr = $ghwr;
		$this -> ghob = $ghob;
		$this -> iawr = $iawr;
		$this -> iaob = $iaob;
        $this -> ecwr = $ecwr;
        $this -> ecob = $ecob;
		$this -> optional = $optional;
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

    public function addvalues(){


    	
    	$match = "SELECT * FROM info WHERE roll = ".$this->roll." and section = 'arts'";
    	$matchQuery = mysql_query($match);
    	if(mysql_num_rows($matchQuery) < 1){
    		?>
    			<script>
    				window.location.href = "../../recesorces/errorMsg.php";
    			</script>


    		<?php
    	}else{
    		$sql = "INSERT INTO c22barts VALUES ($this->roll,$this->bawr,$this->baob,$this->eawr,$this->eaob,$this->cawr,$this->caob,$this->sswr,$this->ssob,$this->ihwr,$this->ihob,$this->ghwr,$this->ghob,$this->iawr,$this->iaob,$this->ecwr, $this->ecob,'$this->optional')";
    	$s = mysql_query($sql);
    	if($s){
    		?>

    			<script>
    				window.location.href = "../marks/";
    			</script>

    		<?php
    	}else{
    		?>

    		<script>alert("Error additon <?php echo $this->roll;?>");</script>

    		<?php
    	}	
    	}

    	
    }



}


?>