<?php include('header.php'); ?>
</div>
<div class="content">
	<div class="wrap">
		<div class="content-top">
			<div class="row">
				<div class="col-md-12">
					<div class="titlepage">
						<h2>Cartelera</h2>
					</div>
				</div>
			</div>

			<?php
			$today = date("Y-m-d");
			$qry2 = mysqli_query($con, "select * from  tbl_pelicula ");

			while ($m = mysqli_fetch_array($qry2)) {
			?>

				<div class="col_1_of_4 span_1_of_4">
					<div class="imageRow">
						<div class="single">
							<?php

							?>
							<a href="about.php?id=<?php echo $m['pelicula_id']; ?>"><img src="<?php echo $m['image']; ?>" alt="" /></a>
						</div>
						<div class="pelicula-text">
							<h4 class="h-text"><a href="about.php?id=<?php echo $m['pelicula_id']; ?>" style="text-decoration:none;"><?php echo $m['pelicula_name']; ?></a></h4>
							Cast: <Span class="color2" style="text-decoration:none;"><?php echo $m['cast']; ?></span><br>

						</div>
					</div>
				</div>

			<?php
			}
			?>

		</div>
		<div class="clear"></div>
	</div>
	<?php include('footer.php'); ?>

