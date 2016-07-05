<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>SHOHID SMREETI COLLEGE</title>
    	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    	<link rel="stylesheet" href="../styles/myDesign.css">
    	<!--<link rel="stylesheet" media="print" href="../styls/print.css">-->
    	<style>
    		#fix-table td, #fix-table th{
    			font-size: 12px;
    			border: 2px solid green;
    		}
    		#trns td, #trns th{
    			font-size: 15px;
    			border: 2px solid black;

    		}
    		body{
    			background-image: url('../image/logo.png'); 
    			background-repeat: no-repeat; 
    		}

    	</style>
	</head>
	<body>
		
	<?php 
	session_start();
	if($_SESSION['admin'] == 7){
		?>

		<header class="jumbotron">
			<div class="container">
				<div class="row row-header">
					<div class="col-xs-12 col-sm-8 custom">
						<h2>SHOHID SMRITY COLLEGE</h2>
						<h4>MOHANGONJ, NETRAKONA</h4>
						<H4><strong>EIIN-</strong> 137707, <strong>College Code-</strong> 8360</H4>
					</div><!--end col sm 12 class-->
					<div class="col-sm-4">
						<?php include "../recesorces/point-table.php";?>
					</div>
				</div><!--end row header class-->
			</div><!--end container class-->
		</header><!-- end jumbotrons-->

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2>ACADEMIC TRANSCRIPT</h2>
					<?php
						$conn = mysql_connect("localhost","root","lumas");
						mysql_select_db("SSC");
						$roll = $_POST['roll'];
						$grp = $_POST['group'];
						$yr = $_POST['year'];
						if($grp == 'sci'){
							$group = 'science';
						}else{
							$group = $grp;
						}


						$table = 'c22b'.$group;


						//if($grp === "sci"){

							$sql = "SELECT * FROM  info as i, $table as c where c.roll = i.roll and c.roll = $roll and c.semister = '$yr'";
							$s = $query = mysql_query($sql);


							
								$rows = mysql_num_rows($query);
								if($rows == 0){
									?>
									<h2 style="color:red;">No result found!</h2>
									<?php
								}else{
									$sl = 0;
									$pos = 0;
									//$g = (0.0,0.0,0.0,0.0,0.0,0.0,0.0);
									include "../classes/gradPointAverage.php";
									while($data = mysql_fetch_array($query)){

										$subs  = $data[7];
										$fsubs = explode(",", $subs);
										$optional = $data[23];
										for( $i = 0; $i < 7; $i++){
											if($fsubs[$i] == $optional){
												$pos = $i;
												$temp = $fsubs[$i];
												$fsubs[$i] = $fsubs[6];
												$fsubs[6] = $temp;
												break;
											}
										}
										
										

										$x = 0;
										for( $j = 9; $j <= 22 ; $j+=2){
											$s = new gpa($data[$j],$data[($j+1)],20,14);
											$g[$x] = $s -> calculateGPA();
											$l[$x] = $s -> gpaToLg($g[$x]);
											$x++;
										}

										for( $i = 0; $i < 7; $i ++){
											if($i == $pos){
												$temp1 = $g[$i];
												$g[$i] = $g[6];
												$g[6] = $temp1;

												$temp2 = $l[$i];
												$l[$i] = $l[6];
												$l[6] = $temp2;
												break;
											}
										}

										
										$temp3 = $data[9 + $pos*2];
										$temp4 = $data[9 + $pos*2 + 1];
										$data[9 + $pos*2] = $data[21];
										$data[9 + $pos*2 + 1] = $data[22];
										$data[21] = $temp3;
										$data[22] = $temp4;
										

										$opt = $g[6] - 2;
										if($opt < 0){
											$opt = 0;
										}
										$point = 0;
										for( $i = 0; $i < 6; $i ++){
											$point += $g[$i];
										}
										$fail = 0;
										for($i = 0; $i < 6; $i ++){
											if($g[$i] == 0){
												$fail = 1;
												break;
											}
										}
										if($fail == 0){
											$gpa = sprintf("%.2f",($point+$opt)/6);	
										}else{
											$gpa = 0;
										}

										


										?>
										<div class="row">
											<div class="col-sm-2">
												<strong>Name of Student: </strong>
											</div>
											<div class="col-sm-8">
												<!-- name of student here-->
												<label><?php echo $data[1];?></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2">
												<label>Father's Name:  </label>
											</div>
											<div class="col-sm-8">
												<!-- name of student here-->
												<label><?php echo $data[2];?></label>
												
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2">
												<label>Roll:  </label>
											</div>
											<div class="col-sm-8">
												<!-- name of student here-->
												<label><?php echo $data[0];?></label>
												
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2">
												<label>Group: </label>

											</div>
											<div class="col-sm-8">
												<!-- name of student here-->
												<label>
												<?php 
												if($group == 'com'){
													$group = "Commerce";
												}
												echo $group;

												?>
													
												</label>

											</div>
										</div>
										<div class="row">
											<div class="col-sm-2">
												<label>Exam Description: </label>
											</div>
											<div class="col-sm-8">
												<label>
													<?php
														echo $data[24];
													?> Semester.
												</label>
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-12">
												<table class="table table-bordered" id="trns">
													<tr>
														<th >SL.</th>
														<th >Name of Subjects</th>
														<th colspan="3">Marks</th>
														<!--<th>
															<table class="table table-bordered">
																<tr>
																	<th colspan="3">Marks</th>
																</tr>
																<tr>
																	<th>Wr.</th>
																	<th>MCQ</th>
																	<th>Total</th>
																</tr>	
															</table>
															
														</th>-->
														<th>Letter Grad</th>
														<th>Grad Point</th>
														<th colspan="2">Grad Point Average (GPA) </th>
													</tr>

													<tr>
														<td></td>
														<td></td>
														<td>Wr.</td>
														<td>MCQ</td>
														<td>Total</td>
														<td></td>
														<td></td>
														<td style="border-bottom:0px;"></td>
													</tr>

													<?php 
														$m = 0;
														for($i = 0 ; $i < 7; $i ++){

															?>

													<tr>
														<td><?php echo ($i+1);?></td>
														<td><?php 

															if($i == 6){
																echo $fsubs[$i]." (optional)";
															}else{
																echo $fsubs[$i];
															}
														?>
															
														</td>
														<td><?php echo $data[9+$m]; ?></td>
														<td><?php echo $data[9+$m+1]; ?></td>
														<td><?php echo ($data[9+$m] + $data[9+$m+1]);?>
														</td>
														<td><?php echo $l[$i]; ?></td>
														<td><?php echo $g[$i]; ?></td>
														<?php
															if($i == 6){
																?>

																<td colspan="2" style="border-top: 0px;"></td>
																<?php
															}else{
																?>
																<td colspan="2" style="border-bottom:0px; border-top: 0px;"><?php 
														if($i == 2){
															echo $gpa;
														}
														?></td>
																<?php
															}
														?>
														
													</tr>

															<?php

															$m += 2;
														}

													?>


												</table>
											</div>
										</div>

										<?php



									}

								}
							


						//}





					?>
					
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<a class="btn btn-danger" href="../individual/" style="margin-bottom: 20px;">Search Again</a>
				</div>
			</div>
		</div>
		


		<?php
	}else{
		include '../recesorces/auth.php';
	}

	?>
		
		<script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>