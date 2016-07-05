<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>SHOHID SMREETI COLLEGE</title>
    	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    	<link rel="stylesheet" href="styles/myDesign.css">
    	<style>
    		body{
    			background: #111;
    		}
    		.content{
    			height: 300px;
    			background: white;
    			margin-top: 130px;
    		}
    		#logpane{
    			background: white;
    			height: 60px;
    			border-bottom: 5px solid black;
    			border-radius-bottom: 30px;
    			box-shadow: 4px 4px 3px 4px black;
    		}


    	</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 content">
					<form class="inlilne-form" name="adminForm" method="post" action="recesorces/authorized.php">
						<div class="row" id="logpane">
							<div class="col-sm-6 col-sm-offset-3">
								<h4 style="padding-top: 8px;"><strong style="color: red;">Authorized</strong> Admin Login</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<div class="form-group has-feedback" style="margin-top: 50px;">
									<input type="text" class="form-control" name="user" placeholder="User" value="">
									<span class="form-control-feedback glyphicon glyphicon-user"></span>
								</div>
								<div class="form-group has-feedback">
									<input type="password" class="form-control" name="pass" placeholder="Password" 
									value="">
									<span class="form-control-feedback glyphicon glyphicon-lock"></span>
								</div>		
								<div class="form-group">
									<input type="submit" class="btn btn-danger form-control" name="login" value="Enter">
								</div>
							</div>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</body>
</html>