<?php
include('config.php');
session_start();
date_default_timezone_set('America/Guayaquil');
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Proyecto_Cine</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
	<link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src='js/jquery.color-RGBa-patch.js'></script>
	<script src='js/example.js'></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/x-icon" href="images/Logo.png">
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>romofyi</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="css2/css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="css2/css/style.css">

	<!-- Responsive-->
	<link rel="stylesheet" href="css2/css/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="css2/images/fevicon.png" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
		<div class="header">
			<div class="header_top d_none1">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<ul class="conta_icon ">
								<li><a href="#"><img src="css2/images/call.png" alt="#" />Contactanos: +593 - 987 - 256 - 2365</a> </li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul class="social_icon">
								<li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li> <a href="#"><i class="fa fa-twitter"></i></a></li>

								<li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<div class="se_fonr1">
								<span class="time_o"> Abierto de: 8.00 - 18.00</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header_bottom">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
							<nav class="navigation navbar navbar-expand-md navbar-dark ">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarsExample04">
									<ul class="navbar-nav mr-auto">
										<li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
										<li class="nav-item"><a class="nav-link" href="peliculas_events.php">Cartelera</a></li>
										<li class="nav-item">
										<?php
											if (isset($_SESSION['user'])) {
												$us = mysqli_query($con, "select * from tbl_registration where user_id='" . $_SESSION['user'] . "'");
												$user = mysqli_fetch_array($us);
											?>
												<a class="nav-link" href="profile.php"><?php echo $user['name']; ?></a>
										<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
									<?php } else { ?><li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
										<li class="nav-item"><a class="nav-link" href="registration.php">Registarse</a></li><?php } ?>
									</li>
									</ul>
								</div>
							</nav>
						</div>
						<div class="col-md-4">
							<div class="search">
								<form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
									<fieldset>
										<div class="field">


											<input class="form_sea" type="text" placeholder="Ingrese el nombre de la pelicula" style="height:30px;width:300px" required id="search111" name="search">
											<button class="seach_icon" type="submit" value="Search" style="height:34px;padding-top:3px" id="button111"><i class="fa fa-search"></i></button>
										</div>

									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header_midil">
				<div class="container">
					<div class="row d_flex">
						<div class="col-md-12">
							<a class="logo" href="index.php"><img src="images/logo.png" alt="#" /></a>
						</div>
					</div>
				</div>
			</div>
			<div class="card-container">
  					<div class="image-card perspective-left"></div>
  					<div class="image-card perspective-right"></div>
			</div>
			
		</div>
		
		
		
		
	<!-- Busqueda de la Pelicula	 -->
	<script>
		function myFunction() {
			if ($('#hero-demo').val() == "") {
				alert("Porfavor Ingrese el nombre de la Pelicula");
				return false;
			} else {
				return true;
			}

		}
	</script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery-3.0.0.min.js"></script>
	<!-- sidebar -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>