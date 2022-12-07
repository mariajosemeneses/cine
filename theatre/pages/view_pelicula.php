<?php
include('header.php');
?>


  
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Peliculas
      </h1>
      <ol class="breadcrumb">
        <li><a href="index"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Peliculas</li>
      </ol>
    </section>

   
    <section class="content">

      
      <div class="box">
        <div class="box-body">
            <div class="box box-primary">
            
            <div class="box-body">
              <?php include('../../msgbox.php');?>
              <ul class="todo-list">
                 <?php 
                        $qry7=mysqli_query($con,"select * from tbl_pelicula");
                        if(mysqli_num_rows($qry7))
                        {
                        while($c=mysqli_fetch_array($qry7))
                        {
                        ?>
                <li>
                  <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-film"></i>
                        
                      </span>
                  <span class="text"><?php echo $c['pelicula_name'];?></span>
                  <div class="tools">
                    
                    <button class="fa fa-trash-o" onclick="del(<?php echo $c['pelicula_id'];?>)"></button>
                  </div>
                </li>
                  <?php
                       }}
                     ?>
                      
            </div>
          </div>
        </div> 
      </div>
     

    </section>
   
  </div>
  <?php
include('footer.php');
?>
<script>
function del(m)
    {
        if (confirm("¿Quiere eliminar esta pelicula?") == true) 
        {
            window.location="del_pelicula.php?mid="+m;
        } 
    }
    </script>