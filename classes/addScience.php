<?php

class add_science{


	private $bwr, $bob, $ewr, $eob, $pwr, $pob, $cwr, $cob, $mwr, $mob, $biwr, $biob, $iscwr, $iscob;
	private $host, $user, $pass, $db;
	private $roll,$optional,$semister;

	public function __construct($roll, $bwr, $bob, $ewr, $eob, $pwr, $pob, $cwr, $cob, $mwr, $mob, $biwr, $biob, $iscwr, $iscob,$optional,$semister){
		$this -> roll = $roll;
		$this -> bwr = $bwr;
		$this -> bob = $bob;
		$this -> ewr = $ewr;
		$this -> eob = $eob;
		$this -> pwr = $pwr;
		$this -> pob = $pob;
		$this -> cwr = $cwr;
		$this -> cob = $cob;
		$this -> mwr = $mwr;
		$this -> mob = $mob;
		$this -> biwr = $biwr;
		$this -> biob = $biob;
		$this -> iscwr = $iscwr;
		$this -> iscob = $iscob;
		$this -> optional = $optional;
        $this -> semister = $semister;
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


    	
    	$match = "SELECT * FROM info WHERE roll = ".$this->roll." and section = 'sci'";
    	$matchQuery = mysql_query($match);
    	if(mysql_num_rows($matchQuery) < 1){
    		?>
    			<script>
    				window.location.href = "../../recesorces/errorMsg.php?r=<?php echo $this->roll;?>";
    			</script>


    		<?php
    	}else{
    		$sql = "INSERT INTO c22bscience VALUES ($this->roll,$this->bwr,$this->bob,$this->ewr,$this->eob,$this->pwr,$this->pob,$this->cwr,$this->cob,$this->mwr,$this->mob,$this->biwr,$this->biob,$this->iscwr,$this->iscob,'$this->optional','$this->semister')";
    	$s = mysql_query($sql);
    	if($s){
    		?>

    			<script>
    				window.location.href = "../marks/";
    			</script>

    		<?php
    	}else{
    		?>

    		<script>alert("Error additon<?php echo $this->roll;?>");</script>

    		<?php
    	}	
    	}

    	
    }



}


?>