<?php
	session_start();

	$db = new mysqli('127.0.0.1', 'root', '', 'registration');

/* 	if($db->connect_error){
		die("Connection failed: " . $db->connect_error);
	}
	echo "Connected successfully"; */
	$email=$password=$fName=$lName=$address=$city=$state=$zip=$ssn=$ccn=$cvv=$bMon=$bDay=$bYear="";
	if(isset($_POST['register_btn'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['Password']);
		$password2 = mysqli_real_escape_string($db, $_POST['passwordValid']);
		$fName = mysqli_real_escape_string($db, $_POST['fName']);
		$lName = mysqli_real_escape_string($db, $_POST['lName']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$city = mysqli_real_escape_string($db, $_POST['city']);
		$state = mysqli_real_escape_string($db, $_POST['state']);
		$zip = mysqli_real_escape_string($db, $_POST['zip']);
		$ssn = mysqli_real_escape_string($db, $_POST['ssn']);
		$ccn = mysqli_real_escape_string($db, $_POST['ccn']);
		$cvv = mysqli_real_escape_string($db, $_POST['cvv']);
		$bMon = mysqli_real_escape_string($db, $_POST['bMon']);
		$bDay = mysqli_real_escape_string($db, $_POST['bDay']);
		$bYear = mysqli_real_escape_string($db, $_POST['bYear']);
		
		if($password == $password2) {
			//Create User
			$password = md5($password);//Hash Password

			$sql = "INSERT INTO users(email, password, firstName, lastName, address, city, state, zip, ssn, ccn, ccv, bMon, bDay, bYear) VALUES('$email','$password','$fName','$lName','$address','$city','$state','$zip','$ssn','$ccn','$cvv','$bMon','$bDay','$bYear')";
/* 			if($db->query($sql) == TRUE){
				echo "Record created";
			}else{
				echo "Error: " . $sql . "<br>" . $db->error;
			}  */
			header("location: confirmation.php"); //Confirmation page redirect
		}
		else
		{
			//Fail
			$_SESSION['message'] = "The two passwords do not match";
		}
	}
?>

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
		<!-- Creates container the width of page -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-offset-4">
					<div class="panel panel-default" style="margin-top:10px; width: 60%; align:center; height: 100%">
						<div class="panel-heading">
							<!-- Panel title using heading 3 -->
							<h3 style="text-align:center">Sign Up</h3>
						</div>
						<div class="panel-body">
						<form action="SignUp.php" method="post">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<p>Email</p>
									<!-- Email form. Required -->
									<div class="form-group">
										<label class="sr-only" for="exampleInputEmail2">Email address</label>
										<input type="email" name="email" class="form-control input-md" id="exampleInputEmail2" placeholder="Email address" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<p>Password</p>
									<!-- Password form (Valid characters in progress). Required -->
									<div class="form-group">
										<label class="sr-only" for="Password">Password</label>
										<input type="password" name="Password" class="form-control input-md" id="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}" placeholder="Password" required title="8 Characters longContain at least 1 special character">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<p>Re-enter Password</p>
									<!-- Password re-entry. Required -->
									<div class="form-group">
										<label class="sr-only" for="PasswordConfirm">Re-enter Password</label>
										<input type="password" name="passwordValid" class="form-control input-md" id="PasswordConfirm" placeholder="Password" required>
									</div>
								</div>
							</div>
							<!-- Takes in first and last name -->
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<p>First Name</p>
									<div class="form-group">
										<label class="sr-only" for="FirstName">First Name</label>
										<input type="firstName" class="form-control" name="fName" id="FirstName" placeholder="First Name" required>
									</div>
								</div>
								<div class="col-xs=6 col-sm-6 col-md-6">
									<p>Last Name</p>
									<div class="form-group">
										<label class="sr-only" for="LastName">Last Name</label>
										<input type="lastName" class="form-control" name="lName" id="LastName" placeholder="Last Name" required>
									</div>
								</div>
							</div>
							<!-- Takes in user address and city -->
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<p>Address</p>
									<div class="form-group">
										<label class="sr-only" for="Address">Address</label>
										<input type="address" class="form-control" name="address" id="Address" placeholder="Address" required>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<p>City</p>
									<div class="form-group">
										<label class="sr-only" for="City">City</label>
										<input type="city" class="form-control" name="city" id="City" placeholder="City" required>
									</div>
								</div>
							</div>
							<!-- Takes in State via dropdown list (Needs population), Zipcode, and SSN -->
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3">
									<p>State</p>
									<div class="btn-group">
										<select class="form-control" name="state">
											<option></option>
											<option value="1">MI</option>
										</select>
									</div>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3">
									<p>Zip code</p>
									<div class="form-group">
										<label class="sr-only" for="Zip">Zip Code</label>
										<input type="zip" class="form-control" name="zip" id="Zip" placeholder="Zip Code" required>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<p>Social Security Number</p>
									<div class="form-group">
										<label class="sr-only" for="SSN">SSN</label>
										<input type="SSN" class="form-control" name="ssn" id="SSN" placeholder="Social Security Number" required>
									</div>
								</div>
							</div>
							<!-- Takes in user CCN and CVV -->
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<p>Credit Card Number</p>
									<div class="form-group">
										<label class="sr-only" for="Credit">Credit Card Number</label>
										<input type="credit" class="form-control" name="ccn" id="Credit" placeholder="Credit Card #" required>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<p>CVV</p>
									<div class="form-group">
										<label class="sr-only" for="CVV">CVV</label>
										<input type="CVV" class="form-control" name="cvv" id="CVV" placeholder="CVV" required>
									</div>
								</div>
							</div>
							<!-- Takes user's birthday month/day/years -->
							<div class="row">
								<div class="col-xs-8 col-sm-8 col-md-8">
									<p>Birthday</p>
									<div class="btn-group">
										<select class="form-control" name="bMon">
											<option>Month</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									</div>
									<div class="btn-group">
										<select class="form-control" name="bDay">
											<option>Day</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
									</div>
									<div class="btn-group">
										<select class="form-control" name="bYear" id="year">
											<option>Year</option>
											<!-- Javascript populates dropdown list for the past 100 years and inserts years into list -->
											<script language ="javascript" type="text/javascript">
												(function() {
													var choice = 2018;
													var elm = document.getElementById('year'),
														df = document.createDocumentFragment();
													for(var i = 1; i <= 100; i++) {
														var option = document.createElement('option');
														option.value = i;
														option.appendChild(document.createTextNode(choice));
														df.appendChild(option);
														choice--;
												}
												elm.appendChild(df);
												}());
											</script>
										</select>
									</div>
								</div>
							</div>
							<br></br>
							<!-- Submits information -->
							<div class="form-group">
								<button type="submit" value="submit" name="register_btn" class="btn btn-primary btn-block">Submit</button>
							</div>
							<!-- Links to login.html -->
							<div class="form-group">
								<div class="col-md-12" style="text-align:center">
									<a href="login.php">Already have an account?</a>
								</div>
								<!-- Links to forgotAcc.html -->
								<div class="col-md-12" style="text-align:center">
									<a href="forgotAcc.php">Forgot your password</a>
								</div>
							</div>
							</form>
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