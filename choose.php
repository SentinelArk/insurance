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
						<h4>Select Insurance Provider</h4>
					</div>
				</div>
				<div class="row" >
					<div class="col-md-8 col-xs-12 offset-md-2">
						<div class="row">
							<div class="col-3">
								<img class="img-fluid rounded-circle" style="height:200px" src="img/jana.jpg" /><br /><br />
								<button class="btn btn-success btn-block">Choose</button>
							</div>
							<div class="col-3">
								<img class="img-fluid rounded-circle" style="height:200px"  src="img/sril.jpg" /><br /><br />
								<button class="btn btn-success btn-block">Choose</button>
							</div>
							<div class="col-3">
								<img class="img-fluid rounded-circle" style="height:200px"  src="img/profile.png" /><br /><br />
								<button class="btn btn-success btn-block">Choose</button>
							</div>
							<div class="col-3">
								<img class="img-fluid rounded-circle" style="height:200px" src="img/profile.png" /><br /><br />
								<button class="btn btn-success btn-block">Choose</button>
							</div>
						</div>
						<div class="row">
							&nbsp;
						</div>
						<div class="row">
							<div class="col-3">
								<img class="img-fluid rounded-circle" style="height:200px" src="img/jana.jpg" /><br /><br />
								<button class="btn btn-success btn-block">Choose</button>
							</div>
							<div class="col-3">
								<img class="img-fluid rounded-circle" style="height:200px"  src="img/sril.jpg" /><br /><br />
								<button class="btn btn-success btn-block">Choose</button>
							</div>
							<div class="col-3">
								<img class="img-fluid rounded-circle" style="height:200px"  src="img/profile.png" /><br /><br />
								<button class="btn btn-success btn-block">Choose</button>
							</div>
							<div class="col-3">
								<img class="img-fluid rounded-circle" style="height:200px" src="img/profile.png" /><br /><br />
								<button class="btn btn-success btn-block">Choose</button>
							</div>
						</div>
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