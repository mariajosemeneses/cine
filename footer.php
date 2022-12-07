<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/auto-complete.css">

	<link rel="stylesheet" href="css/estiloFooter.css">
	<script src="js/auto-complete.js"></script>
</head>
<body>




<footer class="site-footer">
      <div class="container">
        <div class="row">
		<div class="col-xs-6 col-md-3">
            <h6>Menu</h6>
           

			<ul class="footer-links">
						<li><a href="index.php" >Inicio</a></li>
						<li><a href="peliculas_events.php" >Cartelera</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
          </div>
          <div class="col-sm-12 col-md-6">
            <h6>Sistema de cine online</h6>
            <p class="text-justify">is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

		  
          <div class="col-xs-6 col-md-3">
            <h6>Diseñado por:</h6>
            <ul class="footer-links">
              <li>Jose Collaguazo</li>
              <li>Hector Jimenez</li>
              <li>Maria Jose Meneses</li>
            </ul>
          </div>

          
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 Todos los derechos reservados por 
         <a href="#">Grupo desarrollo Web</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
</footer>

<script>
	var demo1 = new autoComplete({
		selector: '#search111',
		minChars: 1,
		source: function(term, suggest) {
			term = term.toLowerCase();
			<?php
			$qry2 = mysqli_query($con, "select * from tbl_pelicula");
			?>
			var string = "";
			<?php $string = "";
			while ($ss = mysqli_fetch_array($qry2)) {

				$string .= "'" . strtoupper($ss['pelicula_name']) . "'" . ",";
				//$string=implode(',',$string);


			}
			?>
			//alert("<?php echo $string; ?>");
			var choices = [<?php echo $string; ?>];
			var suggestions = [];
			for (i = 0; i < choices.length; i++)
				if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
			suggest(suggestions);
		}
	});
</script>


</body>
</html>