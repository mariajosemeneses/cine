<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/efect.css">

	<link rel="stylesheet" href="css/efecto2.css">
	<link rel="icon" type="image/x-icon" href="images/Logo.png">
</head>

<body>
	<?php
	include('header.php');
	?>
	
	<div class="container">
		<div class="row">

			<div class="col-md-12">

				<?php include('pelicula_sidebar.php'); ?>
			</div>
		</div>
	</div>

	<br><br>
	
	<div class="product_main">
		<?php
		$qry3 = mysqli_query($con, "SELECT * FROM tbl_news LIMIT 5");
		while ($n = mysqli_fetch_array($qry3)) {
		?>
			<div class="project_box ">
				<div class="dark_white_bg">
					<div class="wrap">
						<div class="tarjeta-wrap">
							<div class="tarjeta">
								<div class="adelante card1">
									<img width="200%" height="150%"  src="admin/<?php echo $n['attachment']; ?>">
								</div>
								<div class="atras">
									
										<span style="text-color:#000" class="data"><strong><?php echo $n['name']; ?></strong><br>
											<span style="text-color:#000" class="data"><strong>Actores :<?php echo $n['cast']; ?></strong><br>
												<div class="data">Fecha de Estreno :<?php echo $n['news_date']; ?></div>

												<span class="text-top"><?php echo $n['descripcion']; ?></span>
						
								</div>
							</div>
						</div>
					<?php
				}
					?>
				</div>
			</div>
	</div>
	</div>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
	<?php include('searchbar.php'); ?>
</body>

</html>