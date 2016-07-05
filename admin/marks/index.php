<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>SHOHID SMREETI COLLEGE</title>
    	<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    	
    	<style type="text/css">
    		.row-content{
    			background: white;
    			height: 500px;
    			padding-top: 200px;

    		}
    		body{
    			background: gray;
    		}
    	</style>
	</head>
	<body>
		
	<?php 
	session_start();
	if($_SESSION['admin'] == 7){
		?>
		<?php include '../../recesorces/menu.php'; ?>



		<div class="container">

			<div class="row row-content">
				
				<div class="col-sm-6 col-sm-offset-3">
					
					<form class="form-inline" method="post" action="addMarks.php">
						
						<div class="row">
							
							<div class="col-sm-6 " style="margin-bottom: 20px;">
								<select name="grp" id="grp" class="form-control">
									<option value="">Select a group</option>
									<option value="sci">Science</option>
									<option value="arts">Arts</option>
									<option value="com">Commerce</option>
									<option value="bm">Business Management</option>
								</select>
							</div>
							<div class="col-sm-6 form-group has-feedback">



								<input type="text" placeholder="Roll" name="roll" id="roll" class="form-control" required>
								
							</div>

						</div>	
						<div class="row">
							<div class="col-sm-12">
								<input type="submit" name="go" style="width: 520px;" class="btn btn-danger" value="GO">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>


		<script type="text/javascript" src="../../bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<script type="text/javascript">
				
				$("#grp").change(function(){

					var val = $("#grp").val();
					
					if(val === "science"){
						$("#science").show();
						$("#arts").hide();
					}else if( val === "arts"){
						$("#science").hide();
						$("#arts").show();
					}

				});


		</script>


		<script type="text/javascript">
		$(document).ready(function(){
			$("#ind a").attr("href","../../individual/");
			$("#group a").attr("href","../../group/");
			$("#year a").attr("href","../../year/");
			$("#home a").attr("href","../../home/");
		});
		
		</script>

		<?php

			session_strat();
			$_SESSION['roll'] = $_POST['roll'];


		?>




		

		<?php
	}else{
		include '../../recesorces/auth.php';
	}

	?>

		

	</body>
</html>