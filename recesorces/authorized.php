<?php
	session_start();
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$conn = mysql_connect("localhost","root","lumas");
	mysql_select_db("SSC");
	$sql = "SELECT * FROM admin WHERE user = '$user' AND password = '$pass'";
	$res = mysql_query($sql);

	if(mysql_num_rows($res) == 1){
		$_SESSION['admin'] = 7;
		?>
		<script>
			window.location.href = "../control-panel/"
		</script>

		<?php 
	}
	

?>