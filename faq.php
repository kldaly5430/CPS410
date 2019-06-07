<!DOCTYPE html>
<html>
	<head>
		<style>
			.center {
				text-align: left;
				font-size: 16px;
			}
			.aside {
				float: right;
				font-size: 16px;
				margin-right: 250px;
				margin-left: -250px;
				overflow-wrap: word-break;
			}
			
			.accordion {	
				background-color: #eee;
				color: #444;
				cursor: pointer;
				padding: 18px;
				width: 100%;
				border: none;
				text-align: left;
				outline: none;
				font-size: 16px;
				transition: 0.4s;
			}

			.active, .accordion:hover {
				background-color: #ccc; 
			}

			.panel {
				padding: 0 16px;
				display: none;
				background-color: white;
				overflow: hidden;
			}
		</style>
		
		<meta http-equi="X-UA-Compatible" content="IE=Edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="passwordValid.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="fb_admins_meta_tag" content>
	</head>
	
	<body>
		<!-- Login/Signup Dropdown Menu -->
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
		
		
		<!--Page Content -->
		<div>
			<div class="center">
				<button class="accordion">What are we?</button>
					<div class="panel">
						<p>We are a student project masquerading as a car rental service.</p>
					</div>
				<button class="accordion">Where did we come from?</button>
					<div class="panel">
						<p>We emerged like Aphrodite one winter morning, and decided overall that it was a very poor idea.</p>
					</div>
				<button class="accordion">What is our purpose?</button>
					<div class="panel">
						<p>To <b>rock</b>, primarily, but also to demonstrate the use of combining different languages in a website.  We're still learning.</p>
					</div>
				<button class="accordion">Is this legit?</button>
					<div class="panel">
						<p>Are you serious?</p>
					</div>
				<p></p>
			</div>
		</div>
		
		<!-- Bottom Text -->
		<footer class="container-fluid" style="background-color: #D3D3D3; bottom: 0px; height: 150px; width: 100%; display:block">
			<div class="container">
				<div class="row">
					<div class="col col-lg-6">
						<h3>Catch-A-Ride</h3>
						<p style="text-align:left">FILLER TEXT</p>
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
		<script>
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
				acc[i].addEventListener("click", function() {
					this.classList.toggle("active");
					var panel = this.nextElementSibling;
					if (panel.style.display === "block") {
						panel.style.display = "none";
					} else {
						panel.style.display = "block";
					}
				});
			}
		</script>
	</body>
</html>