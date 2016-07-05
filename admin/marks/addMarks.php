<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>SHOHID SMREETI COLLEGE</title>
    	<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    	<style type="text/css">
    		.content{
    			background: white;
    			height: 600px;

    		}
    		body{
    			background: #333;
    		}
    	</style>

	</head>
	<body>
		
		<?php 
		session_start();
		if($_SESSION['admin'] == 7){
			?>
			
		<?php include '../../recesorces/menu.php';?>

		<script type="text/javascript" src="../../bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<?php 
			session_start();
			$grp = $_POST['grp'];
			$roll = $_POST['roll'];
			
			if($roll != ""){
				$_SESSION['roll'] = $roll;
			}
			echo $_SESSION['roll'];
			if($grp == 'sci'){
				$group = "Science";
				$group2 = "science";
				
			}else{
				$group = $grp;
				$group2 = $grp;
			}

			if($group != ""){
				$_SESSION['grp'] = $group2;
			}
			
			

			$conn = mysql_connect("localhost","root","lumas");
			mysql_select_db("SSC");

			$sql = "SELECT * FROM info WHERE roll = ".$roll." AND section = '$grp'";
			$s = mysql_query($sql);
			$data = mysql_fetch_array($s);
			$take = $data[7];

			
			$subjects = explode(",", $take);

			?>


			<div class="container myContainer">
				<div class="row content" >
					<div class="col-sm-6 col-sm-offset-3" >
						<h3 style="text-align: center;"><?php echo $data[1]; ?></h3>
						<h4 style="text-align: center; margin-bottom: 10px;">Roll: <?php echo $data[0];?> <small style="color: red;"><?php echo $group;?></small></h4>
						

						<form class="inline-form" name="markForm" method="POST" style="padding-top: 50px;" action="">

						<?php 

							for( $i = 0 ; $i < 7; $i++){
								?>

								<div class="row">
								<div class="col-sm-4">
									<strong style="color:red;">* </strong><label for="sub1wr"><?php echo $subjects[$i];?> : </label>	
								</div>
								<div class="col-sm-8">
									<div class="row">
										<div class="col-sm-6">
											<input type="number" placeholder="Written" required name="s<?php echo ($i+1);?>wr" id="s1wr" class="form-control">		
										</div>
										<div class="col-sm-6">
											<input type="number" placeholder="MCQ" required name="s<?php echo ($i+1);?>ob" id="s1ob" class="form-control">		
										</div>
									</div>
									
								</div>
							</div>	

								<?php
							}

						?>
							<div class="row">
								<div class="col-sm-4">
									<strong style="color:red;">* </strong><label>Optional</label>
								</div>
								<div class="col-sm-8">
									<select name="optional" class="form-control" required>
										<option value="">Select an optional subject</option>
										<?php 
											if($grp == 'sci'){
												for( $val = 6; $val >= 5; $val-- ){
													?>
													<option value="<?php echo $subjects[$val];?>" ><?php echo $subjects[$val];?></option>

													<?php 
												}
											}elseif($grp == 'arts'){
												for( $val = 6; $val >= 3; $val-- ){
													?>
													<option value="<?php echo $subjects[$val];?>" ><?php echo $subjects[$val];?></option>

													<?php 
												}
											}elseif($grp == 'com'){
												for( $val = 6; $val >= 5; $val-- ){
													?>
													<option value="<?php echo $subjects[$val];?>" ><?php echo $subjects[$val];?></option>

													<?php 
												}
											}


										?>
									</select>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4">
									<strong style="color:red;">* </strong><label>Semister</label>
								</div>
								<div class="col-sm-8">
									<select class="form-control" name="sem">
										<option value="">Select a Semister</option>
										<option value="1st">1st</option>
										<option value="2nd">2nd</option>
										<option value="3rd">3rd</option>
										<option value="4th">4th</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4"></div>
								<div class="col-sm-8">
									<input type="submit" value="Add" name="add" class="btn btn-danger" style="width: 360px; margin-top: 5px;">
								</div>
							</div>
						</form>

						

					</div>
				</div>
				
			</div>


			<?php 

			if(isset($_POST['add'])){

				$s1wr = $_POST['s1wr'];
				$s1ob = $_POST['s1ob'];
				$s2wr = $_POST['s2wr'];
				$s2ob = $_POST['s2ob'];
				$s3wr = $_POST['s3wr'];
				$s3ob = $_POST['s3ob'];
				$s4wr = $_POST['s4wr'];
				$s4ob = $_POST['s4ob'];
				$s5wr = $_POST['s5wr'];
				$s5ob = $_POST['s5ob'];
				$s6wr = $_POST['s6wr'];
				$s6ob = $_POST['s6ob'];
				$s7wr = $_POST['s7wr'];
				$s7ob = $_POST['s7ob'];
				$optional = $_POST['optional'];
				$roll = $_SESSION['roll'];
				$sem  = $_POST['sem'];
				$grp  = $_SESSION['grp'];
				


			include '../../classes/adding.php';
			$add = new adding($roll,$s1wr,$s1ob,$s2wr,$s2ob,$s3wr,$s3ob,$s4wr,$s4ob,$s5wr,$s5ob,$s6wr,$s6ob,$s7wr,$s7ob,$optional,$sem, $grp);
		}

		?>





			<?php
		}else{
			include '../../recesorces/auth.php';
		}

		?>
	
		

	</body>
</html>