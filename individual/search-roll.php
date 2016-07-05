<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>SHOHID SMREETI COLLEGE</title>
    	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    	<link rel="stylesheet" href="../styles/myDesign.css">
    	<style>
    		#fix-table td, #fix-table th{
    			font-size: 12px;
    			border: 2px solid green;
    		}
    		#trns td, #trns th{
    			font-size: 15px;
    			border: 2px solid black;

    		}
    	</style>
	</head>
	<body>
		

		<header class="jumbotron">
			<div class="container">
				<div class="row row-header">
					<div class="col-xs-12 col-sm-8 custom">
						<h2>SHOHID SMREETI COLLEGE</h2>
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
						$roll = $_GET['r'];
						$grp = $_GET['g'];
						$yr = $_GET['y'];

						if($grp === "sci"){

							$sql = "SELECT * FROM  info as i, c22bscience as c where c.roll = i.roll and c.roll = $roll and c.semister = '$yr'";
							$s = $query = mysql_query($sql);
							
								$rows = mysql_num_rows($query);
								if($rows == 0){

								}else{
									$sl = 0;
									include "../classes/gradPointAverage.php";
									while($data = mysql_fetch_array($query)){

										$sb = new gpa($data[8],$data[9],20,14);
										$sbg = $sb -> calculateGPA();
										$sbl = $sb -> gpaToLg($sbg);

										$se = new gpa($data[10],$data[11],20,14);
										$seg = $se -> calculateGPA();
										$sel = $se -> gpaToLg($seg);										

										$sp = new gpa($data[12],$data[13],20,14);
										$spg = $sp -> calculateGPA();
										$spl = $sp -> gpaToLg($spg);

										$sc = new gpa($data[14],$data[15],20,14);
										$scg = $sc -> calculateGPA();
										$scl = $sc -> gpaToLg($scg);

										$sm = new gpa($data[16],$data[17],20,14);
										$smg = $sm -> calculateGPA();
										$sml = $sm -> gpaToLg($smg);

										$sbi = new gpa($data[18],$data[19],20,14);
										$sbig = $sbi -> calculateGPA();
										$sbil = $sbi -> gpaToLg($sbig);

										$si = new gpa($data[20],$data[21],20,14);
										$sig = $si -> calculateGPA();
										$sil = $si -> gpaToLg($sig);
										$gpas = 0;

										if($data[22] == "math"){
											$smg = $smg -2;
											if($smg < 0){
												$smg = 0;
											}
											if($sbg == 0 || $seg == 0|| $spg == 0 || $scg == 0 || $sbig == 0 || $sig == 0 ){
											$gpas = 0;
											}else{
												$gpas =sprintf("%.2f", ($sbg + $seg + $spg + $scg + $sbig + $smg + $sig)/6);
											}

											
										}

										if($data[22] == "biology"){
											$sbig = $sbig -2;
											if($sbig < 0){
												$sbig = 0;
											}
											if($sbg == 0 || $seg == 0|| $spg == 0 || $scg == 0 || $smg == 0 || $sig == 0 ){
											$gpas = 0;
											}else{
											$gpas =sprintf("%.2f", ($sbg + $seg + $spg + $scg + $sbig + $smg + $sig)/6);
											}
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
												<label>Group </label>

											</div>
											<div class="col-sm-8">
												<!-- name of student here-->
												<label>Science</label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<table class="table table-striped table-bordered" id="trns"> 
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
														<th colspan="2">Grad Point Average</th>
													</tr>
													<tr>
														<td></td>
														<td></td>
														<td>Wr.</td>
														<td>MCQ</td>
														<td>Total</td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td>1</td>
														<td>Bangla</td>
														<td><?php echo $data[8]; ?></td>
														<td><?php echo $data[9]; ?></td>
														<td><?php echo ($data[8] + $data[9]);?>
														</td>
														<td><?php echo $sbl; ?></td>
														<td><?php echo $sbg; ?></td>
														<td colspan="2" style="border-bottom: 0px;"></td>
													</tr>
													<tr>
														<td>2</td>
														<td>English</td>
														
															
														<td><?php echo $data[10]; ?></td>
														<td><?php echo $data[11]; ?></td>
														<td><?php echo ($data[10] + $data[11]);?>
												
														
														<td><?php echo $sel; ?></td>
														<td><?php echo $seg; ?></td>
														<td ></td>
													</tr>
													<tr>
														<td>3</td>
														<td>Physics</td>
														
														<td><?php echo $data[12]; ?></td>
														<td><?php echo $data[13]; ?></td>
														<td><?php echo ($data[12] + $data[13]);?>
														
														<td><?php echo $spl; ?></td>
														<td><?php echo $spg; ?></td>
														<td ></td>
													</tr>
													<tr>
														<td>4</td>
														<td>Chemistry</td>
														
															
														<td><?php echo $data[14]; ?></td>
														<td><?php echo $data[15]; ?></td>
														<td><?php echo ($data[14] + $data[15]);?>
												
														
														<td><?php echo $scl; ?></td>
														<td><?php echo $scg; ?></td>
														<td ><?php echo $gpas; ?></td>
													</tr>
													
													<tr>
														<td>5</td>
														<td>ICT</td>
														
														<td><?php echo $data[20]; ?></td>
														<td><?php echo $data[21]; ?></td>
														<td><?php echo ($data[20] + $data[21]);?>
									
														
														<td><?php echo $sil; ?></td>
														<td><?php echo $sig; ?></td>
														<td ></td>
													</tr>
													
												



										<?php

										if($data[22] == "biology"){
											?>
												<tr>
														<td>6</td>
														<td>Mathematics</td>
														
														<td><?php echo $data[16]; ?></td>
														<td><?php echo $data[17]; ?></td>
														<td><?php echo ($data[16] + $data[17]);?>
						
														
														<td><?php echo $sml; ?></td>
														<td><?php echo $smg; ?></td>
														<td></td>
													</tr>

													<tr>
														<td>7</td>
														<td>Biology (optional)</td>
														
														<td><?php echo $data[18]; ?></td>
														<td><?php echo $data[19]; ?></td>
														<td><?php echo ($data[18] + $data[19]);?>
														
														<td><?php echo $sbil; ?></td>
														<td><?php echo $sbig; ?></td>
														<td ></td>
													</tr>


											<?php
										}elseif($data[22] =="math"){
											?>


											<tr>
														<td>6</td>
														<td>Biology</td>
											
												
														<td><?php echo $data[18]; ?></td>
														<td><?php echo $data[19]; ?></td>
														<td><?php echo ($data[18] + $data[19]);?>
												
														<td><?php echo $sbil; ?></td>
														<td><?php echo $sbig; ?></td>
														<td colspan="2"></td>
													</tr>
											<tr>
														<td>7</td>
														<td>Mathematics (optional)</td>
														<td><?php echo $data[16]; ?></td>
														<td><?php echo $data[17]; ?></td>
														<td><?php echo ($data[16] + $data[17]);?>
														<td><?php echo $sml; ?></td>
														<td><?php echo $smg; ?></td>
														<td colspan="2"></td>
													</tr>

													


											<?php 
										}


										?>
										</table>
											</div>
										</div>

										<?php



									}

								}
							


						}





					?>
					
				</div>
			</div>
		</div>
		

		<script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>