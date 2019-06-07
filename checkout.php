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
					<!-- Inserts car.jpg as company logo -->
					<img id="logo" src="car.jpg" class="img-responsive" style="width: 157px; height: 149px;" alt="Catch-A-Ride Logo">
					<a class="navbar-brand" href="#">Catch-A-Ride</a>
				</div>
				<!-- IF webpage is too small to display login/signup links then collapses them -->
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
		<div class="container">
			<div class="row">
				<div class="col-md-8 order-md-1">
					<h4 class="md-3">Billing Address</h4>
					<form class="needs-validation" action="checkOut">
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="fName">First Name</label>
								<input type="text" class="form-control" id="firstName" placeholder="First Name" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="lName">Last Name</label>
								<input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="address">Address</label>
								<input type="text" class="form-control" id="address" placeholder="Address" placeholder="1234 Main St" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 mb-3">
								<label for="city">City</label>
								<div class="form-group">
									<input type="city" class="form-control" name="city" id="exampleInputZip" placeholder="City" required>
								</div>
							</div>
							<div class="col-md-3 mb-3">
								<label for="zip">Zip code</label>
								<div class="form-group">
									<input type="zip" class="form-control" name="zip" id="exampleInputZip" placeholder="Zip Code" required>
								</div>
							</div>
							<div class="col-md-3 mb-3">
								<label for="Country">Country</label>
								<div class="btn-group">
									<select class="form-control" name="state">
										<option></option>
										<option value="1">United States</option>
									</select>
								</div>
							</div>
							<div class="col-md-3 mb-3" style="padding-top: 25px">
								<label for="state">State</label>
								<div class="btn-group">
									<select class="form-control" name="state">
										<option></option>
										<option value="1">MI</option>
									</select>
								</div>
							</div>
						</div>
						<hr class="mb-4">
						<h4 class="mb-3"><b>Payment</b></h4>
						<div class="d-block my-3">
							<div class="custom-control custom-radio">
								<input id="credit" name="paymentType" type="radio" class="custom-control-input" checked required>
								<label class="custom-control-label" for="credit">Credit Card</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="debt" name="paymentType" type="radio" class="custom-control-input" checked required>
								<label class="custom-control-label" for="debt">Debt Card</label>
							</div>
						</div>
						<hr class="order-mb-1">
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="ccn">Card Number</label>
								<input type="tel" class="form-control" id="creditCard" pattern=".{12,13}" placeholder="Credit Card #" required title="Enter a valid card number">
							</div>
							<div class="col-md-6 mb-3">
								<label for="cardName">Name on Card</label>
								<input type="text" class="form-control" id="cardName" placeholder="Name on card" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 mb-3">
								<label for="ccExpiration">Expiration Date</label>
								<select class="form-control" name="expMon" required>
									<option>Month</option>
									<option value="1">1 - January</option>
									<option value="2">2 - February</option>
									<option value="3">3 - March</option>
									<option value="4">4 - April</option>
									<option value="5">5 - May</option>
									<option value="6">6 - June</option>
									<option value="7">7 - July</option>
									<option value="8">8 - August</option>
									<option value="9">9 - September</option>
									<option value="10">10 - October</option>
									<option value="11">11 - November</option>
									<option value="12">12 - December</option>
								</select>
							</div>
							<div class="col-md-3 mb-3" style="padding-top: 25px">
								<select class="form-control" name="expYear" required>
									<option>Year</option>
									<option value="13">2018</option>
									<option value="14">2019</option>
									<option value="15">2020</option>
									<option value="16">2021</option>
									<option value="17">2022</option>
									<option value="18">2023</option>
									<option value="19">2024</option>
									<option value="20">2025</option>
								</select>
							</div>
							<div class="col-md-3 mb-3">
								<label for="text" >CCV</label>
								<input type="tel" class="form-control" id="CCV" placeholder="CCV" maxlength="3" required>
							</div>
						</div>
						<hr class="mb-4">
						<button class="btn btn-primary btn-lg btn-block" type="Submit" value="submit"onclick="window.location.href='recipt.php'">Checkout</button>
					</form>
					<br>
				</div>
			</div>
		</div>
		<!-- Footer of page. Contains link to other pages, social media, and about the company. -->
		<footer class="container-fluid" style="background-color: #D3D3D3; bottom: 0px; height: 150px; width: 100%; display:block;">
			<div class="container">
				<div class="row">
					<!-- Col class breaks row into 12 sections -->
					<!-- Creates section using 6/12 sections of row -->
					<div class="col col-lg-6">
						<h3>Catch-A-Ride</h3>
						<p style="text-align:left">About the company.</p>
					</div>
					<!-- Creates section using 4/12 sections of row -->
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
					<!-- Creates section using 2/12 sections of row -->
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