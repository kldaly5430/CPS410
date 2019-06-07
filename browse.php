<!DOCTYPE html>
<html>
	<head>
		<style>
			.sidebar {
				height: 100%; 
				width: 160px; 
				position: fixed; 
				z-index: 1; 
				top: 0; 
				left: 0;
				background-color: #2196F3; 
				overflow-x: hidden; 
				padding-top: 20px;
				float: left;
			}
			
			button {
				display: block;
				padding-right: 5px;
				padding-left: 5px;
			}
<!-- 			.sidenav a {
				padding: 6px 8px 6px 16px;
				text-decoration: none;
				font-size: 15px;
				color: #818181;
				display: block;
				border: none;
				outline: none;
				background-color: #f1f1f1;
			} -->

			.show {display: block;}
			
			.sidenav a:hover {color: #f1f1f1;}

			.main {
				margin-left: 160px;
				padding: 0px 10px;
			}
			
			@media screen and (max-height: 450px) {
				.sidenav {padding-top: 15px;}
				.sidenav a {font-size: 18px;}
			}
			
			img {width: 100%;}
			
			.row {
				vertical-align: center;
				display: flex;
				flex-wrap: wrap;
				padding-bottom: 5px;
			}
			
			.column img {
				margin-top: 0px;
				vertical-align: center;
				padding: 4px;
			}
			
			.filterDiv {
				display: none;
			}
			
			.show {
				display: block;
			}
			
		</style>
		
		<meta http-equi="X-UA-Compatible" content="IE=Edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--<link href="passwordValid.css" rel="stylesheet" type="text/css">-->
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
		
		<!--Side Navigation -->
		<div class="sidenav" style="float:left; padding-left: 10px; width: 300px">
			<div id="accordion">
			<!-- Manufacturer Navigation -->
				<div class="card" style="width: 275px">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Manufacturer</button>
						</h5>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<div id="mybtnContainer" style="padding-left: 10px">
								<div class="row">
									<button class="btn" onclick="filterSelection('Ferrari')">Ferrari<br></button>
									<button class="btn" onclick="filterSelection('Fiat')">Fiat<br></button>
								</div>
								<div class="row">
									<button class="btn" onclick="filterSelection('GMC')">GMC<br></button>
									<button class="btn" onclick="filterSelection('Lamborghini')">Lamborghini<br></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Color Navigation -->
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Color</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
							<div id="mybtnContainer" style="padding-left: 10px">
								<div class="row">
									<button class="btn" onclick="filterSelection('Red')">Red<br></button>
									<button class="btn" onclick="filterSelection('Purple')">Purple<br></button>
								</div>
								<div class="row">
									<button class="btn" onclick="filterSelection('Green')">Green<br></button>
									<button class="btn" onclick="filterSelection('Black')">Black<br></button>
								</div>
								<div class="row">
									<button class="btn" onclick="filterSelection('Blue')">Blue<br></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Seats Navigation -->
				<div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Seats</button>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							<div id="mybtnContainer" style="padding-left: 10px">
								<div class="row">
									<button class="btn" onclick="filterSelection('Two')">Two<br></button>
									<button class="btn" onclick="filterSelection('Four')">Four<br></button>
								</div>
								<div class="row">
									<button class="btn" onclick="filterSelection('Six')">Six<br></button>
									<button class="btn" onclick="filterSelection('Eight')">Eight<br></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- Type Navigation -->
				<div class="card">
					<div class="card-header" id="headingFour">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Type</button>
						</h5>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
						<div class="card-body">
							<div id="mybtnContainer" style="padding-left: 10px">
								<div class="row">
									<button class="btn" value="Sedan" onclick="filterSelection('Sedan')">Sedan<br></button>
									<button class="btn" onclick="filterSelection('Van')">Van<br></button>
								</div>
								<div class="row">
									<button class="btn" onclick="filterSelection('Luxury')">Luxury<br></button>
									<button class="btn" onclick="filterSelection('Truck')">Truck<br></button>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="padding-top: 20px; padding-left: 10px">
						<button class="btn" onclick="filterSelection('all')">Remove Filter<br></button>
					</div>
				</div>
			</div>
		</div>
		
		<!--Page Content -->
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row" style="vertical-align:center;">

						<div class="filterDiv Ferrari Green Two Luxury" style="padding-bottom: 30px; padding-right: 5px">
							<img src="https://images.autotrader.com/scaler/620/420/cms/images/oversteer/2017/03-mar/atfindcalifornia/263693.jpg" img class="filterDiv Ferrari Green Two Luxury" style="width:400px;height:250px;">
							<button class="btn" id="checkOut" style="width: 400px; padding-bottom: 20px" onClick="window.location.href='checkout.php'">Select</button>
						</div>
						<div class="filterDiv Ferrari Red Two Luxury" style="padding-bottom: 30px; padding-right: 5px">
							<img src="http://www.whatsthecolour.com/uploads/images/made/uploads/images/2015-08-25_JeannetteHanenburg3_550_329shar-70.jpg" img class="filterDiv Ferrari Red Two Luxury" style="width:400px;height:250px;">
							<button class="btn" id="checkOut" style="width: 400px; padding-bottom: 20px" onClick="window.location.href='checkout.php'">Select</button>
						</div>
						<div class="filterDiv Fiat Blue Four Luxury" style="padding-bottom: 30px; padding-right: 5px">
							<img src="https://images-ae.azureedge.net/AETA22467/AETV24848461_1b.jpg" img class="filterDiv Fiat Blue Four Luxury" style="width:400px;height:250px;">
							<button class="btn" id="checkOut" style="width: 400px; padding-bottom: 20px" onClick="window.location.href='checkout.php'">Select</button>
						</div>

						<div class="filterDiv GMC Blue Four Truck" style="padding-bottom: 30px; padding-right: 5px">
							<img src="https://file.kbb.com/kbb/vehicleimage/housenew/480x360/2013/2013-gmc-sierra%201500%20extended%20cab-frontside_gmsr1e131.jpg" img class="filterDiv GMC Blue Four Truck" style="width:400px;height:250px;">
							<button class="btn" id="checkOut" style="width: 400px; padding-bottom: 20px" onClick="window.location.href='checkout.php'">Select</button>
						</div>
						<div class="filterDiv Lamborghini Purple Two Luxury" style="padding-bottom: 30px; padding-right: 5px">
							<img src="https://www.powerrackstrength.com/wp-content/uploads/2015/06/lambo-2.jpg" img class="filterDiv Lamborghini Purple Two Luxury" style="width:400px;height:250px;">
							<button class="btn" id="checkOut" style="width: 400px; padding-bottom: 20px" onClick="window.location.href='checkout.php'">Select</button>
						</div>
						<div class="filterDiv Lamborghini Black Two Luxury" style="padding-bottom: 30px; padding-right: 5px">
							<img src="http://all4desktop.com/data_images/1440%20x%20900/4185989-2011-lamborghini-gallardo.jpg" img class="filterDiv Lamborghini Black Two Luxury" style="width:400px;height:250px;">
							<button class="btn" id="checkOut" style="width: 400px; padding-bottom: 20px" onClick="window.location.href='checkout.php'">Select</button>
						</div>

						<div class="filterDiv GMC Green Four Truck" style="padding-bottom: 30px; padding-right: 5px">
							<img src="http://www.chevytv.com/wp-content/uploads/2015/06/Screen-Shot-2015-06-09-at-10.19.12-PM.png" img class="filterDiv GMC Green Four Truck" style="width:400px;height:250px;">
							<button class="btn" id="checkOut" style="width: 400px; padding-bottom: 20px" onClick="window.location.href='checkout.php'">Select</button>
						</div>
						<div class="filterDiv Fiat Black Two Luxury" style="padding-bottom: 30px; padding-right: 5px">
							<img src="http://www.eurocarnews.com/media/pictorials/2473/15530.jpg" img class="filterDiv Fiat Black Two Luxury" style="width:400px;height:250px;">
							<button class="btn" id="checkOut" style="width: 400px; padding-bottom: 20px" onClick="window.location.href='checkout.php'">Select</button>
						</div>
						<div class="filterDiv Fiat Red Two Luxury" style="padding-bottom: 30px; padding-right: 5px">
							<img src="https://i.pinimg.com/736x/49/07/9b/49079b2586f7723e80664ac3f58a78c8--fiat--sport-fiat-c.jpg" img class="filterDiv Fiat Red Two Luxury" style="width:400px;height:250px;">
							<button class="btn" id="checkOut" style="width: 400px; padding-bottom: 20px" onClick="window.location.href='checkout.php'">Select</button>
						</div>
					
				</div>
			</div>
		</div>
		
		<!-- Bottom Text -->
		<div>		
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
		</div>
		
		<!-- Javascript -->
		<script>
			filterSelection("all")
			function filterSelection(c) {
			  var x, i;
			  x = document.getElementsByClassName("filterDiv");
			  if (c == "all") c = "";
			  for (i = 0; i < x.length; i++) {
				w3RemoveClass(x[i], "show");
				if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
			  }
			}

			function w3AddClass(element, name) {
			  var i, arr1, arr2;
			  arr1 = element.className.split(" ");
			  arr2 = name.split(" ");
			  for (i = 0; i < arr2.length; i++) {
				if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
			  }
			}

			function w3RemoveClass(element, name) {
			  var i, arr1, arr2;
			  arr1 = element.className.split(" ");
			  arr2 = name.split(" ");
			  for (i = 0; i < arr2.length; i++) {
				while (arr1.indexOf(arr2[i]) > -1) {
				  arr1.splice(arr1.indexOf(arr2[i]), 1);     
				}
			  }
			  element.className = arr1.join(" ");
			}

			// Add active class to the current button (highlight it)
			var btnContainer = document.getElementById("sidenav");
			var btns = btnContainer.getElementsByClassName("mybtnContainer");
			for (var i = 0; i < btns.length; i++) {
			  btns[i].addEventListener("click", function(){
				var current = document.getElementsByClassName("active");
				current[0].className = current[0].className.replace(" active", "");
				this.className += " active";
			  });
			}
			
			var check = document.getElementById('checkOut');
			check.addEventListener('click', function() {
				document.location.href='/checkout.php';
			});
		</script>
	</body>
</html>