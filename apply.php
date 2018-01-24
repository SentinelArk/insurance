<?php
	date_default_timezone_set("Asia/Colombo"); 
?>
<!doctype html>
<html lang="en">
	<head>
		<title>Sentry: Apply New Policy</title>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta content="" name="description">
		<meta content="" name="author">

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- Custom fonts for this template -->
		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css"><!-- Custom styles for this template -->
		<link href="css/freelancer.min.css" rel="stylesheet">
		</head>
		<body>
			<!-- Navigation -->
			<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
				<div class="container">
					<a class="navbar-brand js-scroll-trigger" href="#page-top">Sentry</a> <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" data-toggle="collapse" type="button">Menu <i class="fa fa-bars"></i></button>
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" data-toggle="modal" data-target="#signin" href="#">Sign In</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          					Account
		        				</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">My Applications</a>
									<a class="dropdown-item" href="apply.php">Apply New Policy</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Support Ticket</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Safety</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<nav aria-label="breadcrumb" role="navigation" style="background-color: #e9ecef;">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">New</a></li>
						<li class="breadcrumb-item" aria-current="page"><a href="#">Vehicle</a></li>
						<li class="breadcrumb-item active" aria-current="page">Policy Application</li>
					</ol>
				</div>
			</nav>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-xs-12 offset-md-2">
						<h4>Apply Vehicle Registration Policy Online</h4>
					</div>
				</div>
				<div class="row" >
					<div class="col-md-8 col-xs-12 offset-md-2">
						<form>
							<div class="form-row">
								<div class="col">
									<label for="inputEmail4">First Name</label>
									<input type="text" class="form-control" placeholder="First name">
								</div>
								<div class="col">
									<label for="inputEmail4">Last Name</label>
									<input type="text" class="form-control" placeholder="Last name">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail4">Email</label>
									<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
								</div>
								<div class="form-group col-md-6">
									<label for="inputPassword4">NIC</label>
									<input type="nic" class="form-control" id="inputPassword4" placeholder="National ID Card Number">
								</div>
							</div>
							<div class="form-group">
								<label for="inputAddress">House Name/No</label>
								<input type="text" class="form-control" id="inputAddress" placeholder="12/34">
							</div>
							<div class="form-group">
								<label for="inputAddress2">Street Name</label>
								<input type="text" class="form-control" id="inputAddress2" placeholder="Sagam Lane">
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputCity">City</label>
									<input type="text" class="form-control" id="inputCity" placeholder="Wellewatte/Colombo 06">
								</div>
								<div class="form-group col-md-4">
									<label for="inputState">State/Province</label>
									<select id="inputState" class="form-control">
										<option selected>Colombo/Western</option>
										<option value='Ampara/EasternProvince'>Ampara/EasternProvince</option>
										<option value='Anuradhapura/North CentralProvince'>Anuradhapura/North CentralProvince</option>
										<option value='Badulla/UvaProvince'>Badulla/UvaProvince</option>
										<option value='Batticaloa/EasternProvince'>Batticaloa/EasternProvince</option>
										<option value='Colombo/WesternProvince'>Colombo/WesternProvince</option>
										<option value='Galle/SouthernProvince'>Galle/SouthernProvince</option>
										<option value='Gampaha/WesternProvince'>Gampaha/WesternProvince</option>
										<option value='Hambantota/SouthernProvince'>Hambantota/SouthernProvince</option>
										<option value='Jaffna/NorthernProvince'>Jaffna/NorthernProvince</option>
										<option value='Kalutara/WesternProvince'>Kalutara/WesternProvince</option>
										<option value='Kandy/CentralProvince'>Kandy/CentralProvince</option>
										<option value='Kegalle/SabaragamuwaProvince'>Kegalle/SabaragamuwaProvince</option>
										<option value='Kilinochchi/NorthernProvince'>Kilinochchi/NorthernProvince</option>
										<option value='Kurunegala/North WesternProvince'>Kurunegala/North WesternProvince</option>
										<option value='Mannar/NorthernProvince'>Mannar/NorthernProvince</option>
										<option value='Matale/CentralProvince'>Matale/CentralProvince</option>
										<option value='Matara/SouthernProvince'>Matara/SouthernProvince</option>
										<option value='Monaragala/UvaProvince'>Monaragala/UvaProvince</option>
										<option value='Mullaitivu/NorthernProvince'>Mullaitivu/NorthernProvince</option>
										<option value='Nuwara Eliya/CentralProvince'>Nuwara Eliya/CentralProvince</option>
										<option value='Polonnaruwa/North CentralProvince'>Polonnaruwa/North CentralProvince</option>
										<option value='Puttalam/North WesternProvince'>Puttalam/North WesternProvince</option>
										<option value='Ratnapura/SabaragamuwaProvince'>Ratnapura/SabaragamuwaProvince</option>
										<option value='Trincomalee/EasternProvince'>Trincomalee/EasternProvince</option>
										<option value='Vavuniya/NorthernProvince'>Vavuniya/NorthernProvince</option>
									</select>
								</div>
								<div class="form-group col-md-2">
									<label for="inputZip">Zip/Postal Code</label>
									<input type="text" class="form-control" id="inputZip">
								</div>
							</div>
							<div class="form-group">
								<label for="inputAddress">Vehicle Registration Book Copy</label>
								<div class="alert alert-warning" role="alert">
									<h4 class="alert-heading">This is absolutly required</h4>
									<p><small>You need to take a clear photograph or upload scanned pdf document of the vehicle regisration book in order for this service to work properly</small></p>
									<hr>
									<p class="mb-0"><small>Once you upload, click submit we will get back to you with 3 days</small></p>
								</div>
								<input type="file" accept="image/*" required="true" class="form-control" id="inputAddress" placeholder="12/34">
							</div>

							<button type="submit" class="btn btn-primary btn-block btn-large">Apply Online</button>
						</form>
					</div>
				</div>
				<div>
					&nbsp;
				</div>
			</div>
		</div>
		<!-- Footer -->
		<footer class="text-center">
			<div class="footer-above">
				<div class="container">
					<div class="row">
						<div class="footer-col col-md-4">
							<h3>Location</h3>
							<p>55, Sri Saranankaran Road<br>
							Dehiwala 10350, Sri Lanka</p>
						</div>
						<div class="footer-col col-md-4">
							<h3>Around the Web</h3>
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-facebook"></i></a>
								</li>
								<li class="list-inline-item">
									<a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-google-plus"></i></a>
								</li>
								<li class="list-inline-item">
									<a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-twitter"></i></a>
								</li>
								<li class="list-inline-item">
									<a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-linkedin"></i></a>
								</li>
								<li class="list-inline-item">
									<a class="btn-social btn-outline" href="#"><i class="fa fa-fw fa-dribbble"></i></a>
								</li>
							</ul>
						</div>
						<div class="footer-col col-md-4">
							<h3>About Sentry</h3>
							<p>Sentry is a brokerage application for applying for online insurance.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-below">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							Copyright &copy; 2017 - <?php echo date("Y");?> - Sentry by Sentinel Ark
						</div>
					</div>
				</div>
			</div>
		</footer><!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
		<div class="scroll-top d-lg-none">
			<a class="btn btn-primary js-scroll-trigger" href="#page-top"><i class="fa fa-chevron-up"></i></a>
		</div>
		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js">
		</script> 
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js">
		</script> <!-- Plugin JavaScript -->
		 
		<script src="vendor/jquery-easing/jquery.easing.min.js">

		</script> <!-- Contact Form JavaScript -->
		 
		<script src="js/jqBootstrapValidation.js">
		</script> 
		<script src="js/contact_me.js">
		</script> <!-- Custom scripts for this template -->
		 
		<script src="js/freelancer.min.js">
		</script>
	</body>
</html>