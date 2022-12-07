<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/efect.css">
	<title>Document</title>
</head>

<body>
	<?php
	include('header.php');
	?>
	<div id="project" class="project">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="titlepage">
						<h2>Proximos Estrenos</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="product_main">
					<?php
					$qry3 = mysqli_query($con, "SELECT * FROM tbl_news LIMIT 5");

					while ($n = mysqli_fetch_array($qry3)) {
					?>
						<div class="project_box ">
							<div class="dark_white_bg">
								<div class="image" id="image">
									<div class="front">
										<img src="admin/<?php echo $n['attachment']; ?>">
									</div>
									<div class="back">
										<div class="text list_1_of_2">
											<div class="extra-wrap">
												<span style="text-color:#000" class="data"><strong><?php echo $n['name']; ?></strong><br>
													<span style="text-color:#000" class="data"><strong>Actores :<?php echo $n['cast']; ?></strong><br>
														<div class="data">Fecha de Estreno :<?php echo $n['news_date']; ?></div>

														<span class="text-top"><?php echo $n['descripcion']; ?></span>
											</div>
										</div>
									</div>

								</div>
							</div>
							<br>
							<h3><?php echo $n['name']; ?></h3>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<?php include('pelicula_sidebar.php'); ?>
			</div>

		</div>
	</div>

	<br><br>
	<footer>
		<?php include('footer.php'); ?>
	</footer>


	<?php include('searchbar.php'); ?>


</body>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
 
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

</body>
</html>