<?php
include('header.php');
?>
<link rel="stylesheet" href="../../validation/dist/css/bootstrapValidator.css"/>
    
<script type="text/javascript" src="../../validation/dist/js/bootstrapValidator.js"></script>

  <?php
    include('../../form.php');
    $frm=new formBuilder;      
  ?> 


  
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Agregar Funcion
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i>Inicio </a></li>
        <li class="active">Agregar Funcion</li>
      </ol>
    </section>

   
    <section class="content">

      
      <div class="box">
        <div class="box-body">
          <?php include('../../msgbox.php');?>
          <form action="process_addshow.php" method="post" id="form1">
            <div class="form-group">
              <label class="control-label">Seleccionar pelicula</label>
              <select name="pelicula" class="form-control">
                <option value>Selecionar pelicula</option>
                <?php
                  $mv=mysqli_query($con,"select * from tbl_pelicula where status='0'");
                  while($pelicula=mysqli_fetch_array($mv))
                  {
                    ?>
                    <option value="<?php echo $pelicula['pelicula_id'];?>"><?php echo $pelicula['pelicula_name']; ?></option>
                    <?php
                  }
                ?>
              </select>
              <?php $frm->validate("pelicula",array("required","label"=>"pelicula"));  ?>
            </div>
            <div class="form-group">
              <label class="control-label">Seleccionar Proyeccion</label>
              <select name="screen" class="form-control" id="screen">
                <option value>Selecionar Proyeccion</option>
                <?php
                  $sc=mysqli_query($con,"select * from tbl_screens where t_id='".$_SESSION['theatre']."'");
                  while($screen=mysqli_fetch_array($sc))
                  {
                    ?>
                    <option value="<?php echo $screen['screen_id']; ?>"><?php echo $screen['screen_name']; ?></option>
                    <?php
                  }
                ?>
              </select>
              <?php $frm->validate("screen",array("required","label"=>"Screen"));  ?>
            </div>
            <div class="form-group">
              <label class="control-label">Seleccionar Horario</label>
              <select name="stime[]" class="form-control" id="stime" multiple>
                <option value="0">Seleccionar Horario</option>
              </select>
              
            </div>
            <div class="form-group">
              <label class="control-label">Empezar Fecha</label>
              <input type="date" name="sdate" class="form-control"/>
              <?php $frm->validate("sdate",array("required","label"=>"Start Date"));  ?>
            </div>
            <div class="form-group">
              <button class="btn btn-success">Agregar Funcion</button>
            </div>
          </form>
        </div> 
      </div>
     

    </section>
   
  </div>
  <?php
include('footer.php');
?>
<script type="text/javascript">
  $('#screen').change(function(){
    screen=$(this).val();
    $.ajax({
			url: 'get_showtime.php',
			type: 'POST',
			data: 'screen='+screen,
			dataType: 'html'
		})
		.done(function(data){
			//console.log(data);	
			$('#stime').html(data);    
		})
		.fail(function(){
			$('#stime').html('<option><i class="glyphicon glyphicon-info-sign"></i> Algo sali?? mal. Por favor, vuelva a intentarlo...</option>');
		});
  });
</script>
<script>
        <?php $frm->applyvalidations("form1");?>
    </script>