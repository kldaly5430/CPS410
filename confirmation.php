<!DOCTYPE html>
<html>
	<head>
			<meta http-equi="X-UA-Compatible" content="IE=Edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Bootsrap Style sheet references -->
		<link href="passwordValid.css" rel="stylesheet" type="text/css">
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
		<!-- Creates navigation bar at top of webpage -->
		<nav class="nav navbar-default navbar" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<!-- Inserts car.jpg as campany logo -->
					<img id="logo" src="car.jpg" class="img-responsive" style="width: 157px; height: 149px;" alt="Catch-A-Ride Logo">
					<a class="navbar-brand" href="#">Catch-A-Ride</a>
				</div>
				<!-- If webpage is too small to display login/signup links then collapses them -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<!-- Links user to signup.html -->
							<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
							<li><a href="login.php"><span class="glyphicon glyphicon-user"></span>Log In</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<!--Body of page -->
		<!-- Creates container the width of the webpage -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-offset-4">
					<div class="panel panel-default" style="margin-top:10px; width: 60%; align:center; height: 100%">
						<div class="panel-heading">
							<h3 style="text-align:center">Thank you for signing up!</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<p>An confirmation email will be sent to your email shortly. Please follow the link in the email to activate your account. Click the button below to be returned to the home page.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<!-- Links user back to homepage -->
										<button  value="Return to Home" onclick="window.location.href='homepage.php'">Return Home</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer of page. Contains link to other pages, social media, and about the company. -->
		<footer class="container-fluid" style="background-color: #D3D3D3; bottom: 0px; height: 150px; width: 100%; display:block">
			<div class="container">
				<div class="row">
					<!-- Col class breaks row into 12 sections -->
					<!-- Creates section using 6/12 section of row -->
					<div class="col col-lg-6">
						<h3>Catch-A-Ride</h3>
						<p style="text-align:left">About the company.</p>
					</div>
					<!-- Create section using 4/12 section of row -->
					<div class="col col-lg-4">
						<!-- Unorder list of links to home.html, browse.html, faq.html, and about.html -->
						<h3>Links</h3>
						<ul style="list-style-type:none">
							<li><a href="homepage.php">Home</a></li>
							<li><a href="browse.php">Browse</a></li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="about.php">About Us</a></li>
						</ul>
					</div>
					<!-- Create section using 2/12 section of row -->
					<div class="col col-lg-2">
						<!-- Create clickeable icon links to social media platforms. Currently unlinked. -->
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