<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>SHOHID SMREETI COLLEGE</title>
    	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    	<link rel="stylesheet" href="../styles/myDesign.css">
    	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css">

	</head>
	<body>
		

		<?php 
		session_start();
		if($_SESSION['admin'] == 7){
			?>
			
		<header class="jumbotron">
			<div class="container">
				<div class="row row-header">
					<div class="col-xs-12 col-sm-12 custom">
						<h2>SHOHID SMREETI COLLEGE</h2>
						<h4>MOHANGONJ, NETRAKONA</h4>
						<H4><strong>EIIN-</strong> 137707, <strong>College Code-</strong> 8360</H4>
					</div><!--end col sm 12 class-->
				</div><!--end row header class-->
			</div><!--end container class-->
		</header><!-- end jumbotrons-->
		<?php include '../recesorces/menuSelection.php';
			$menu = new menu('ind');
			include '../recesorces/menu.php';
		?>



			<?php 
		}else{
			include '../recesorces/auth.php';
		}

		?>

		<script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>