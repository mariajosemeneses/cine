<html>
	<head>
	<link rel="stylesheet" href="css/efect.css">
	</head>
<body>
<?php
include('header.php');
?>

<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div >
					<h2 style="color:#555;">Proximos Estrenos</h2>
					<?php 
					$qry3=mysqli_query($con,"SELECT * FROM tbl_news LIMIT 5");
					
					while($n=mysqli_fetch_array($qry3))
					{
					?>
				
					<div >
						<div class="row">
							<div class="column">

							
						<div class="image">
							<div class="front">
								<div >
									<img src="admin/<?php echo $n['attachment'];?>">
								</div>
							</div>
							<div class="back">
								<div class="text list_1_of_2">
									<div class="extra-wrap">
										<span style="text-color:#000" class="data"><strong><?php echo $n['name'];?></strong><br>
										<span style="text-color:#000" class="data"><strong>Actores :<?php echo $n['cast'];?></strong><br>
											<div class="data">Fecha de Estreno :<?php echo $n['news_date'];?></div>
					
											<span class="text-top"><?php echo $n['descripcion'];?></span>
									</div>
								</div>
							</div>
							</div>
						<div class="clear"></div>
					</div>
					</div>
				</div>
				<?php
				}
				?>
				
			
		</div>				
		<div class="listview_1_of_3 images_1_of_3">
					<h2 style="color:#555;">Trailers</h2>
						<div class="middle-list">
					<?php 
					$qry4=mysqli_query($con,"SELECT * FROM tbl_pelicula ORDER BY rand() LIMIT 6");
				
					while($nm=mysqli_fetch_array($qry4))
					{
					?>
					
						<div class="listimg1">
							 <a target="_blank" href="<?php echo $nm['video_url'];?>"><img src="<?php echo $nm['image'];?>" alt=""/></a>
							 <a target="_blank" href="<?php echo $nm['video_url'];?>" class="link" style="text-decoration:none; font-size:14px;"><?php echo $nm['pelicula_name'];?></a>
						</div>
						<?php
					}
					?>
					</div>
					
					
		</div>			
		<?php include('pelicula_sidebar.php');?>
	</div>
</div>
<?php include('footer.php');?>
</div>
<?php include('searchbar.php');?>