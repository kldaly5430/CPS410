<?php
	include("process.php");
?>
<!DOCTYPE html>
<html>
	<head>
			<meta http-equi="X-UA-Compatible" content="IE=Edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
		
		</script>

		<meta name="fb_admins_meta_tag" content>
	</head>
	<body>
		<nav class="nav navbar-default navbar" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<img id="logo" src="car.jpg" class="img-responsive" style="width: 157px; height: 149px;" alt="Catch-A-Ride Logo">
					<a class="navbar-brand" href="#">Catch-A-Ride</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
							<li><a href="login.php"><span class="glyphicon glyphicon-user"></span>Log In</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
				<!--Body of page -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-offset-4">
					<div class="panel panel-default" style="margin-top:10px; width: 40%; align:center">
						<div class="panel-heading">
							<h3 style="text-align:center">Log In</h3>
						</div>
						<div class="panel-body">
							<form action="login.php" method="post">
								<span><?php echo $error;?></span>
								<p style="text-align:left">Email</p>
								<div class="form-group" name="loginForm" method="get" action="go">
									<label class="sr-only" for="Email2">Email address</label>
									<input type="email" class="form-control" id="Email2" name="Email2" placeholder="Email address" required>
								</div>
								<p style="text-align:left">Password</p>
								<div class="form-group">
									<label class="sr-only" for="Password2">Password</label>
									<input type="password" class="form-control" id="Password2" name="Password2" placeholder="Password" required>
								</div>
								<div class="checkbox">
									<label><input type="checkbox">Remember me</label>
								</div>
								<div class="form-group">
									<button type="submit" value="submit" name="login_btn" class="btn btn-primary btn-block">Submit</button>
								</div>
								<div class="form-group">
									<div class="col-md-12" style="text-align:center">
										<a href="signup.php">Don't have an account?</a>
									</div>
									<div class="col-md-12" style="text-align:center">
										<a href="forgotPassword.php">Forgot your password</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="container" style=" bottom: 0px; height: 150px; width: 100%; background-color: #D3D3D3;">
			<div class="container">
				<div class="row">
					<div class="col col-lg-6">
						<h3>Catch-A-Ride</h3>
						<p style="text-align:left">FILLER FILLER FILLER FILLER FILLER FILLER FILLER FILLER FILLER FILLER FILLER FILLER FILLER FILLER FILLER FILLER FILLER FILLER</p>
					</div>
					<div class="col col-lg-4">
						<h3>Links</h3>
						<ul style="list-style-type:none">
							<li><a href="homepage.php">Home</a></li>
							<li><a href="browse.php">Browse</a></li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="about.php">About Us</a></li>
						</ul>
					</div>
					<div class="col col-lg-2">
						<h3>Contact Us</h3>
						<i class="fa fa-twitter-square" style="font-size:36px;color:#1DA1F2;"></i>
						<i class="fa fa-facebook-square" style="font-size:36px;color:#3b5998;"></i>
						<i class="fa fa-instagram" style="font-size:36px;color:#fb3958;"></i>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>