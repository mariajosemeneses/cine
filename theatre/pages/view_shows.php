<?php
include('header.php');
?>


  
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Funciones
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active">Funciones</li>
      </ol>
    </section>

   
    <section class="content">
      
      <div class="box">
         <div class="box-header with-border">
              <h3 class="box-title">Funciones disponibles</h3>
            </div>
        <div class="box-body">
          <?php include('../../msgbox.php');?>
          <?php
          $sw=mysqli_query($con,"select * from tbl_shows where st_id in(select st_id from tbl_show_time where screen_id in(select screen_id from  tbl_screens where t_id='".$_SESSION['theatre']."')) and status='1'");
          if(mysqli_num_rows($sw))
          {?>
            <table class="table">
              <th class="col-md-1">
                Sala N°
              </th>
              <th class="col-md-2">
                Proyeccion
              </th>
              <th class="col-md-3">
                Hora de la Funcion
              </th>
              <th class="col-md-3">
                Pelicula
              </th>
              <th class="col-md-3">
                Opciones
              </th>
              <?php
              $sl=1;
              while($shows=mysqli_fetch_array($sw))
              {
                ?>
                <tr>
                  <td>
                    <?php echo $sl; $sl++;?>
                  </td>
                  <?php
                  $st=mysqli_query($con,"select * from tbl_show_time where st_id='".$shows['st_id']."'");
                  $show_time=mysqli_fetch_array($st);
                  $sr=mysqli_query($con,"select * from tbl_screens where screen_id='".$show_time['screen_id']."'");
                  $screen=mysqli_fetch_array($sr);
                  $mv=mysqli_query($con,"select * from tbl_pelicula where pelicula_id='".$shows['pelicula_id']."'");
                  $pelicula=mysqli_fetch_array($mv);
                  ?>
                  <td>
                    <?php echo $screen['screen_name'];?>
                  </td>
                  <td>
                    <?php echo date('h:i A',strtotime($show_time['start_time']))." ( ".$show_time['name']." Show )";?>
                  </td>
                  <td>
                    <?php echo $pelicula['pelicula_name'];?>
                  </td>
                  <td>
                    <?php if($shows['r_status']==1)
                    {
                    ?><a href="change_running.php?id=<?php echo $shows['s_id'];?>&status=0"><button class="btn btn-danger">Pausa</button></a>
                    <?php
                    }
                    else
                    {?><a href="change_running.php?id=<?php echo $shows['s_id'];?>&status=1"><button class="btn btn-success">Empezar</button></a>
                    <?php 
                    }?>
                    <a href="stop_running.php?id=<?php echo $shows['s_id'];?>"><button class="btn btn-warning">Terminar Funcion</button></a>
                  </td>
                </tr>
                <?php
              }
              ?>
            </table>
            <?php
          }
          else
          {
            ?>
            <h3>No se Agregaron Funciones</h3>
            <?php
          }
          ?>
        </div> 
      </div>
     
    </section>
   
  </div>
  <?php
include('footer.php');
?>