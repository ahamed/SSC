<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>SHOHID SMREETI COLLEGE</title>
    	<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    	
    	<style type="text/css">
    		#subjectSc, #subjectArts,#default, #subjectCom{
    			display: none;
    		}
    		.row-content{
    			background: white;
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


		<div class="container-fluid custom-row">
			<div class="row ">
				<div class="col-sm-6 col-xs-12 col-sm-offset-3 row-content ">
					
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Students informations</h3>
						</div>
					</div>
					<div class="well custom-well">
						<form class="form-horizontal" method="post" action="#">

							<div class="row">
								<div class="col-sm-4">
									<label for="roll">Roll: </label>	
								</div>
								<div class="col-sm-8">
									<input type="number" class="form-control" name="roll" id="roll">	
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-4">
									<label for="name">Name:  </label>	
								</div>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="name" id="name">	
								</div>
								
								
							</div>
							<div class="row">
								<div class="col-sm-4">
									<label for="fname">Father's Name:  </label>	
								</div>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="fname" id="fname">	
								</div>
								
								
							</div>
							<div class="row">
								<div class="col-sm-4">
									<label for="mname">Mother's Name:  </label>	
								</div>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="mname" id="mname">	
								</div>
								
								
							</div>
							<div class="row">
								<div class="col-sm-4">
									<label for="session">Session:  </label>	
								</div>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="session" id="session">	
								</div>
								
							</div>
							<div class="row">
								<div class="col-sm-4">
									<label for="monile">Mobile:  </label>	
								</div>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="mobile" id="mobile">	
								</div>
								
							</div>
							

							

							<div class="row" id="grp">
								<div class="col-sm-4">
									<label for="monile">Group:  </label>	
								</div>
								<div class="col-sm-8">
									<select name="section" class="form-control" id="section">
										<option>Select a group</option>
										<option value="sci">Science</option>
										<option value="arts">Arts</option>
										<option value="com">Commerce</option>
										<option value="bm">Business Management</option>
									</select>
								</div>
								
							</div>

							<div class="row" id="default">
								<div class="col-sm-4">
									<label>Select method</label>
								</div>
								<div class="col-sm-8">
									<select id="method" class="form-control" name="method">
										<option value="">Select a method</option>
										<option value="def">Default</option>
										<option value="cus">Custom</option>
									</select>
								</div>
							</div>

							
							<div class="row" id="subjectSc">
								<div class="col-sm-12">
								<br>
									<fieldset class="form-group">
										<legend>Select any 2 (two) subjects</legend>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="banglaSc" id="banglaSc" checked readonly value="Bangla" onclick="return false;"> Bangla
											</label>
											<label>
												<input type="checkbox" name="englishSc" id="englishSc" checked readonly value="English" onclick="return false;"> English
											</label>
											<label>
												<input type="checkbox" name="ict" id="ict" checked value="ICT" onclick="return false;"> ICT
											</label>
											<label>
												<input type="checkbox" name="physics" id="physics" checked value="Physics" onclick="return false;"> Physics
											</label>
											<label>
												<input type="checkbox" name="chemistry" id="chemistry" checked value="Chemistry" onclick="return false;"> Chemistry
											</label>
											<label>
												<input type="checkbox" name="math" id="math" value="Mathematics"> Mathematics
											</label>
											<label>
												<input type="checkbox" name="biology" id="biology" value="Biology"> Biology
											</label>
											<label>
												<input type="checkbox" name="computer" id="computer" value="Computer"> Computer
											</label>
											<label>
												<input type="checkbox" name="agriculture" id="agriculture" value="Agriculture"> Agriculture
											</label>
										</div>
										
									</fieldset>
								</div>
							</div><!-- end subject science row-->



							<div class="row" id="subjectArts">
								<div class="col-sm-12">
								<br>
									<fieldset class="form-group">
										<legend>Select any 4 (four) subjects</legend>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="banglaArts" id="banglaArts" checked readonly value="Bangla" onclick="return false;"> Bangla
											</label>
											<label>
												<input type="checkbox" name="englishArts" id="englishArts" checked readonly value="English" onclick="return false;"> English
											</label>
											<label>
												<input type="checkbox" name="ict" id="ICTArts" checked value="ICT" onclick="return false;"> ICT
											</label>
											<label>
												<input type="checkbox" name="civics" id="civics"  value="Civics"> Civics
											</label>
											<label>
												<input type="checkbox" name="ss" id="ss" value="Social Science"> Social Science
											</label>
											<label>
												<input type="checkbox" name="ih" id="ih" value="Islamic History"> Islamic History
											</label>
											<label>
												<input type="checkbox" name="gh" id="gh" value="General History"> General History
											</label>
											<label>
												<input type="checkbox" name="ec" id="ec" value="Economics"> Economics
											</label>
											<label>
												<input type="checkbox" name="logic" id="ec" value="Logic"> Logic
											</label>
											
										</div>
										
									</fieldset>
								</div>
							</div><!-- end subject science row-->


							<div class="row" id="subjectCom">
								<div class="col-sm-12">
								<br>
									<fieldset class="form-group">
										<legend>There is no subject to select</legend>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="banglaCom" id="banglaArts" checked readonly value="Bangla" onclick="return false;"> Bangla
											</label>
											<label>
												<input type="checkbox" name="englishCom" id="englishArts" checked readonly value="English" onclick="return false;"> English
											</label>
											<label>
												<input type="checkbox" name="ict" id="ICTCom" checked value="ICT" onclick="return false;"> ICT
											</label>
											<label>
												<input type="checkbox" name="accounting" id="civics"  value="Accounting" onclick="return false;" checked> Accounting
											</label>
											<label>
												<input type="checkbox" name="bom" id="gh" value="Business Organization and Management" checked onclick="return false;"> Business Organization and Management
											</label>
											<label>
												<input type="checkbox" name="statistics" id="ss" value="Statistics" checked onclick="return false;"> Statistics
											</label>
											<label>
												<input type="checkbox" name="pmm" id="ih" value="Production Management and Marketing" checked onclick="return false;"> Production Management and Marketing
											</label>
											
											
											
										</div>
										
									</fieldset>
								</div>
							</div><!-- end subject science row-->

							
							
							<!-- Here for other subjects -->
							<hr>
							<div class="row">
								<div class="col-sm-4 col-xs-12">
									
								</div>
								<div class="col-sm-8">
									<input type="submit" value="Submit" name="submit" class="btn btn-info" style="width: 390px;">		
								</div>
							</div>
							
						</form>		

					</div>
				

					
				</div><!-- end col -->
			</div><!-- end row-->
		</div>




		<script type="text/javascript" src="../../bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


		<script type="text/javascript">
			
			$("#section").change(function(){
					
					$("#default").show();

					var section  = $("#section").val();

					if(section == 'sci'){
						$("#optionalSc").show();
						$("#optionalArts").hide();
						$("#optionalCom").hide();
					}else if(section == 'arts'){
						$("#optionalSc").hide();
						$("#optionalArts").show();
						$("#optionalCom").hide();
					}else if(section == 'com'){
						$("#optionalSc").hide();
						$("#optionalArts").hide();
						$("#optionalCom").show();
					}
					

					$("#method").change(function(){
						var def = $("#method").val();
						if(def == "def"){
							$("#subjectSc").hide();
							$("#subjectArts").hide();
							$("#subjectCom").hide();

					}else if(def == "cus"){
							var sec = $("#section").val();
						if(sec == "sci"){
							$("#subjectSc").show();
							$("#subjectArts").hide();
							$("#subjectCom").hide();

						}else if( sec == "arts"){
							$("#subjectSc").hide();
							$("#subjectArts").show();
							$("#subjectCom").hide();
						}else if( sec == "com"){
							$("#subjectSc").hide();
							$("#subjectArts").hide();
							$("#subjectCom").show();
						}
					}	
				});

					
				
				
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

			

			if(isset($_POST['submit'])){


			

			if(isset($_POST['roll'])){
				$roll = $_POST['roll'];
			}

			if(isset($_POST['name'])){
				$name = $_POST['name'];
			}

			if(isset($_POST['fname'])){
				$fname = $_POST['fname'];
			}
			if(isset($_POST['mname'])){
				$mname = $_POST['mname'];
			}
			if(isset($_POST['session'])){
				$session = $_POST['session'];
			}
			if(isset($_POST['mobile'])){
				$mobile = $_POST['mobile'];
			}

			if(isset($_POST['section'])){
				$section = $_POST['section'];
			}

			if(isset($_POST['method'])){
				$method = $_POST['method'];
			}






			$val = 0;
			$subjects = "";
			if($section == "sci"){

				$optional = $_POST['optionalSc'];

				if($method == "def"){
					$finalSubject = "Bangla,English,ICT,Physics,Chemistry,Mathematics,Biology";

				}elseif($method == "cus"){
					
					if(isset($_POST['banglaSc'])){
						$bangla = $_POST['banglaSc'];
						$val = $val +1;
						$subjects .= $bangla;
					}
					if(isset($_POST['englishSc'])){
						$english = $_POST['englishSc'];
						$val++;
						$subjects .= ",".$english;
					}
					if(isset($_POST['ict'])){
						$ict = $_POST['ict'];
						$val++;
						$subjects .= ",".$ict;
					}
					if(isset($_POST['physics'])){
						$physics = $_POST['physics'];
						$val++;
						$subjects .= ",".$physics;
					}
					if(isset($_POST['chemistry'])){
						$chemistry = $_POST['chemistry'];
						$val++;
						$subjects .= ",".$chemistry;
					}
					if(isset($_POST['math'])){
						$math = $_POST['math'];
						$val++;
						$subjects .= ",".$math;
					}
					if(isset($_POST['biology'])){
						$biology = $_POST['biology'];
						$val++;
						$subjects .= ",".$biology;
					}
					if(isset($_POST['computer'])){
						$computer = $_POST['computer'];
						$val++;
						$subjects .= ",".$computer;
					}
					if(isset($_POST['agriculture'])){
						$agr = $_POST['agriculture'];
						$val++;
						$subjects .= ",".$agr;
					}
				}
			}elseif($section == "arts"){


				if($method == "def"){
					$finalSubject = "Bangla,English,ICT,Civics,Social Science,Economics,Logic";
				}elseif($method == "cus"){

					if(isset($_POST['banglaArts'])){
						$bangla = $_POST['banglaArts'];
						$val = $val +1;
						$subjects .= $bangla;
					}
					if(isset($_POST['englishArts'])){
						$english = $_POST['englishArts'];
						$val++;
						$subjects .= ",".$english;
					}
					if(isset($_POST['ict'])){
						$ict = $_POST['ict'];
						$val++;
						$subjects .= ",".$ict;
					}
					if(isset($_POST['civics'])){
						$civics = $_POST['civics'];
						$val++;
						$subjects .= ",".$civics;
					}
					if(isset($_POST['ss'])){
						$ss = $_POST['ss'];
						$val++;
						$subjects .= ",".$ss;
					}
					if(isset($_POST['ih'])){
						$ih = $_POST['ih'];
						$val++;
						$subjects .= ",".$ih;
					}
					if(isset($_POST['gh'])){
						$gh = $_POST['gh'];
						$val++;
						$subjects .= ",".$gh;
					}
					if(isset($_POST['ec'])){
						$ec = $_POST['ec'];
						$val++;
						$subjects .= ",".$ec;
					}
					if(isset($_POST['logic'])){
						$logic = $_POST['logic'];
						$val++;
						$subjects .= ",".$logic;
					}
				}	
			}elseif($section == "com"){

				if($method == "def"){
					$finalSubject = "Bangla,English,ICT,Accounting,Business Organization and Management,Statistics,Production Management and Marketing";
				}elseif($method == "cus"){		

					if(isset($_POST['banglaCom'])){
						$bangla = $_POST['banglaCom'];
						$val = $val +1;
						$subjects .= $bangla;
					}
					if(isset($_POST['englishCom'])){
						$english = $_POST['englishCom'];
						$val++;
						$subjects .= ",".$english;
					}
					if(isset($_POST['ict'])){
						$ict = $_POST['ict'];
						$val++;
						$subjects .= ",".$ict;
					}
					if(isset($_POST['accounting'])){
						$accounting = $_POST['accounting'];
						$val++;
						$subjects .= ",".$accounting;
					}
					if(isset($_POST['bom'])){
						$bom = $_POST['bom'];
						$val++;
						$subjects .= ",".$bom;
					}
					if(isset($_POST['pmm'])){
						$pmm = $_POST['pmm'];
						$val++;
						$subjects .= ",".$pmm;
					}
					if(isset($_POST['statistics'])){
						$statistics = $_POST['statistics'];
						$val++;
						$subjects .= ",".$statistics;
					}
				}
					
			}

			if($val > 7){
				echo "<h2>More subjects are selected!</h2>";
			}elseif($val < 7){
				echo "<h2>Need more subject to select</h2>";
			}elseif($val == 7){
				$finalSubject = $subjects;
			}

			echo $finalSubject;

				
				

				include "../../classes/students.php";
				echo $name; echo $name; echo $roll;
				$stu = new students($roll,$name, $fname, $mname, $session, $mobile,$section,$finalSubject);
				$stu -> insert_info();
				
			}

		?>



			<?php


		}else{
			include "../../recesorces/auth.php";
			?>

			<script type="text/javascript" src="../../bower_components/jquery/dist/jquery.min.js"></script>
			<script type="text/javascript" src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
			<?php
		}

	?>
		

	</body>
</html>