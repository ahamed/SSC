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
    		td,th{
    			text-align: center;
    			font-size: 15px;
    		}
    	#fix-table td, #fix-table th{
    		font-size: 12px;
    		width: 30px;
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
					<div class="col-sm-4 col-xs-12">
						<!--Point table here-->

						<?php include '../recesorces/point-table.php';?>
					</div>
				</div><!--end row header class-->

			</div><!--end container class-->
		</header><!-- end jumbotrons-->
		<?php
			include '../recesorces/menu.php';
		?>

		<script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<div class="container">
			<div class="row row-content">
				<div class="col-sm-12 col-xs-12">
					<div class="table-responsive">
					<table class="table table-striped table-bordered">
					<!--<script type="text/javascript">
						$("#grp").change(function(){
							if($("#yr").val() === "ynoob"){
								alert("Select a year");
							}else{
							
								grpform.submit();
							}

						});

						$("#yr").change(function(){
							if($("#grp").val() === "gnoob"){
								alert("select a group");
							}else{
							
								grpform.submit();
							}

						});
						
					</script>-->

						<?php 

							mysql_connect("localhost","root","lumas");
							mysql_select_db("SSC");

							$grp = $_POST["group"];
							$yr = $_POST["year"];
							


							if($grp === 'sci'){

								?>
									<h1>Science Group, <small><?php echo $yr; ?> Semister</small> </h1>

								<?php
								$sql = "SELECT * FROM c22bscience where semister = '$yr'";
								$sql2 = "SELECT * FROM info as i, c22bscience as s  WHERE i.roll = s.roll  and i.section = 'sci' and s.semister = '$yr'";
								$query2 = mysql_query($sql2);
								$query = mysql_query($sql);
								$rows = mysql_num_rows($query);
								if($rows == 0){
									?>

										<h2 style="color: red;">No information found. <a href="../group/">Search Again</a></h2>
									<?php
								}else{
								

									while($data2 = mysql_fetch_array($query2)){
										$subs = $data2[7];
										$fsubs = explode(",", $subs);

										for($i = 0; $i < 7; $i++){
											if($fsubs[$i] == $data2[23]){
												$temp = $fsubs[$i];
												$fsubs[$i] = $fsubs[6];
												$fsubs[6] = $temp;
											}
										}

										?>

										<tr>
										<th>Roll</th>
										<?php

										for($i = 0; $i < 7; $i++){
											?>

												<th colspan="4"><?php echo $fsubs[$i];?></th>
											<?php
										}

										?>

										</tr>
										<?php

									}

									?>
									
									
									<tr>
										<th></th>
									<?php 
									for( $i = 0; $i <7 ; $i++){
										?>
											<th>Written</th>
											<th>Objective</th>
											<th>Total</th>
											<th>LG</th>

										<?php 

									}
									include "../classes/gradPointAverage.php";
								while($data = mysql_fetch_array($query)){

									$bangla = new gpa($data[1], $data[2], 20,14);
									$bg = $bangla->calculateGPL();
									$bga = $bangla->calculateGPA();

									$english = new gpa($data[3], $data[4], 20, 14);
									$eg = $english -> calculateGPL();
									$ega = $english->calculateGPA();									

									$physics = new gpa($data[5], $data[6], 20, 14);
									$pg = $physics -> calculateGPL();
									$pga = $physics -> calculateGPA();

									$chemistry = new gpa($data[7], $data[8], 20, 14);
									$cg = $chemistry -> calculateGPL();
									$cga = $chemistry -> calculateGPA();

									$math = new gpa($data[9], $data[10], 20, 14);
									$mg = $math -> calculateGPL();
									$mga = $math -> calculateGPA();

									$bio = new gpa($data[11], $data[12], 20, 14);
									$big = $bio -> calculateGPL();
									$biga = $bio -> calculateGPA();

									$ict = new gpa($data[13], $data[14], 20, 14);
									$isg = $ict -> calculateGPL();
									$isga = $ict -> calculateGPA();



									if($data[15] === "math"){
										$opt = $mga - 2;
										if($opt < 0){
											$opt = 0;
										}
										if($bga == 0 || $ega == 0 || $pga == 0 || $biga == 0 || $isga == 0){
											$gpa = 0;
										}else{
											$gpa =  sprintf("%.2f",($bga+$ega+$pga+$cga+$opt+$biga+$isga)/6);

										}
									}
									if($data[15] === "biology"){
										$opt = $biga - 2;
										if ( $opt < 0){
											$opt = 0;
										}
										if($bga == 0 || $ega == 0 || $pga == 0 || $mga == 0 || $isga == 0){
											$gpa = 0;
										}else{
										$gpa =  sprintf("%.2f",($bga+$ega+$pga+$cga+$opt+$mga+$isga)/6);
									}
									}

									$gradPoint = $ict -> gpaToLg($gpa);
									$url = urldecode("../individual/search-roll.php?r=".$data[0]."&g=sci"."&y=".$data[16]);

										
									
										
									?>




									

										<tr>
											<td><a href=<?php echo $url;?>><?php echo $data[0];?></td>
											<td><?php echo $data[1];?></td>
											<td><?php echo $data[2];?></td>
											<td><?php echo ($data[1] + $data[2]);?></td>
											<td><?php echo $bg;?></td>


											<td><?php echo $data[3];?></td>
											<td><?php echo $data[4];?></td>
											<td><?php echo ($data[3] + $data[4]);?></td>
											<td><?php echo $eg;?></td>

											<td><?php echo $data[5];?></td>
											<td><?php echo $data[6];?></td>
											<td><?php echo ($data[5] + $data[6]);?></td>
											<td><?php echo $pg;?></td>

											<td><?php echo $data[7];?></td>
											<td><?php echo $data[8];?></td>
											<td><?php echo ($data[7] + $data[8]);?></td>
											<td><?php echo $cg;?></td>

											<td><?php echo $data[9];?></td>
											<td><?php echo $data[10];?></td>
											<td><?php echo ($data[9] + $data[10]);?></td>
											<td><?php echo $mg;?></td>

											<td><?php echo $data[11];?></td>
											<td><?php echo $data[12];?></td>
											<td><?php echo ($data[11] + $data[12]);?></td>
											<td><?php echo $big;?></td>

											<td><?php echo $data[13];?></td>
											<td><?php echo $data[14];?></td>
											<td><?php echo ($data[13] + $data[14]);?></td>
											<td><?php echo $isg;?></td>
											<td><?php echo $gpa; ?></td>
											<td><?php echo $gradPoint; ?></td>
										</tr>
										<?php
									
								}}

							}else if($grp === 'arts'){
								?>
									<h1>Arts Group, <small><?php echo $yr; ?> Semister</small> </h1>

								<?php
								$sql = "SELECT * FROM c22barts where semister = '$yr'";
								$sql2 = "SELECT * FROM info as i, c22barts as s  WHERE i.roll = s.roll  and i.section = 'arts' and s.semister = '$yr'";
								$query2 = mysql_query($sql2);
								$query = mysql_query($sql);
								$rows = mysql_num_rows($query);
								if($rows == 0){
									?>

										<h2 style="color: red;">No information found. <a href="../group/">Search Again</a></h2>
									<?php
								}else{
								
									while($data2 = mysql_fetch_array($query2)){
										$subs = $data2[7];
										$fsubs = explode(",", $subs);

										for($i = 0; $i < 7; $i++){
											if($fsubs[$i] == $data2[23]){
												$temp = $fsubs[$i];
												$fsubs[$i] = $fsubs[6];
												$fsubs[6] = $temp;
											}
										}

										?>

										<tr>
										<th>Roll</th>
										<?php

										for($i = 0; $i < 7; $i++){
											?>

												<th colspan="4"><?php echo $fsubs[$i];?></th>
											<?php
										}

										?>

										</tr>
										<?php

									}


									?>
									
									
									<tr>
										<th></th>
									<?php 
									for( $i = 0; $i <7 ; $i++){
										?>
											<th>Written</th>
											<th>Objective</th>
											<th>Total</th>
											<th>LG</th>

										<?php 

									}
									include "../classes/gradPointAverage.php";
								while($data = mysql_fetch_array($query)){

									$abangla = new gpa($data[1], $data[2], 20,14);
									$abg = $abangla->calculateGPL();
									$abga = $abangla->calculateGPA();

									$aenglish = new gpa($data[3], $data[4], 20, 14);
									$aeg = $aenglish -> calculateGPL();
									$aega = $aenglish->calculateGPA();									

									$acv = new gpa($data[5], $data[6], 20, 14);
									$acvg = $acv -> calculateGPL();
									$acvga = $acv -> calculateGPA();

									$ass = new gpa($data[7], $data[8], 20, 14);
									$assg = $ass -> calculateGPL();
									$assga = $ass -> calculateGPA();

									$aih = new gpa($data[9], $data[10], 20, 14);
									$aihg = $aih -> calculateGPL();
									$aihga = $aih -> calculateGPA();

									$agh = new gpa($data[11], $data[12], 20, 14);
									$aghg = $agh -> calculateGPL();
									$aghga = $agh -> calculateGPA();

									$aict = new gpa($data[13], $data[14], 20, 14);
									$aiag = $aict -> calculateGPL();
									$aiaga = $aict -> calculateGPA();

									$aec = new gpa($data[15], $data[16], 20, 14);
									$aecg = $aec -> calculateGPL();
									$aecga = $aec -> calculateGPA();

									if($data[17] === "economics"){
										$opt = $aecga - 2;
										if($opt < 0){
											$opt = 0;
										}
										if($abga == 0 || $aega == 0|| $acvga == 0|| $assga == 0|| $aihga == 0|| $aghga == 0 || $aiaga == 0){
											$agpa =0;
										}else{
										$agpa =  sprintf("%.2f",($abga+$aega+$acvga+$assga+$opt+$aihga+$aghga+$aiaga)/7);
										}
									}
									if($data[17] === "civics"){
										$opt = $acvga - 2;
										if ( $opt < 0){
											$opt = 0;
										}
											if($abga == 0 || $aega == 0|| $acvga == 0|| $assga == 0|| $aihga == 0|| $aghga == 0 || $aiaga == 0){
											$agpa =0;
										}else{
										$agpa =  sprintf("%.2f",($abga+$aega+$aecga+$assga+$opt+$aihga+$aghga+$aiaga)/7);
										}
									}
									$gradPoint = $aec -> gpaToLg($agpa);
									
									?>




									

										<tr>
											<td><?php echo $data[0];?></td>
											<td><?php echo $data[1];?></td>
											<td><?php echo $data[2];?></td>
											<td><?php echo ($data[1] + $data[2]);?></td>
											<td><?php echo $abg;?></td>


											<td><?php echo $data[3];?></td>
											<td><?php echo $data[4];?></td>
											<td><?php echo ($data[3] + $data[4]);?></td>
											<td><?php echo $aeg;?></td>

											<td><?php echo $data[5];?></td>
											<td><?php echo $data[6];?></td>
											<td><?php echo ($data[5] + $data[6]);?></td>
											<td><?php echo $acvg;?></td>

											<td><?php echo $data[7];?></td>
											<td><?php echo $data[8];?></td>
											<td><?php echo ($data[7] + $data[8]);?></td>
											<td><?php echo $assg;?></td>

											<td><?php echo $data[9];?></td>
											<td><?php echo $data[10];?></td>
											<td><?php echo ($data[9] + $data[10]);?></td>
											<td><?php echo $aihg;?></td>

											<td><?php echo $data[11];?></td>
											<td><?php echo $data[12];?></td>
											<td><?php echo ($data[11] + $data[12]);?></td>
											<td><?php echo $aghg;?></td>

											<td><?php echo $data[13];?></td>
											<td><?php echo $data[14];?></td>
											<td><?php echo ($data[13] + $data[14]);?></td>
											<td><?php echo $aiag;?></td>

											
											<td><?php echo $agpa; ?></td>
											<td><?php echo $gradPoint; ?></td>
										</tr>
										<?php
									
								}

							}}

							


						?>


					</table>
					</div>
				</div>
			</div>
		</div><!-- end container--> 

		
	</body>
</html>