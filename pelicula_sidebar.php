<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="titlepage">
						<h2>Peliculas Disponibles</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
				$today = date("Y-m-d");
				$qry2 = mysqli_query($con, "select * from  tbl_pelicula where status='0' order by rand() limit 5");

				while ($m = mysqli_fetch_array($qry2)) {
				?>
					<div class="col-md-12 margin_top40">
						<div class="row d_flex">
							<div class="col-md-4">
								<div class="news_img">
									<figure>
										<a href="about.php?id=<?php echo $m['pelicula_id']; ?>"><img src="<?php echo $m['image']; ?>"></a>
									</figure>
								</div>
							</div>
							<div class="col-md-8">
								<div class="news_text">
									<h3><a href="about.php?id=<?php echo $m['pelicula_id']; ?>"><?php echo $m['pelicula_name']; ?></a></h3>
									<span class="data">Release Date: <?php echo $m['release_date']; ?></span>
									<p>Descripcion:<?php echo $m['desc']; ?></p>

								</div>
							</div>
						</div>
					</div>
				<?php
				}
				?>
				<br>
			</div>
		</div>
	</div>
</body>

</html>