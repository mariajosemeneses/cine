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
        Agregar Nueva Pelicula de Estreno
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active">Agregar Estreno</li>
      </ol>
    </section>

   
    <section class="content">

      
      <div class="box">
        <div class="box-body">
            <form action="process_add_news.php" method="post" enctype="multipart/form-data" id="form1">
              <div class="form-group">
                <label class="control-label">Nombre</label>
                <input type="text" name="name" class="form-control"/>
                <?php $frm->validate("name",array("required","label"=>"pelicula Name"));  ?>
              </div>
              <div class="form-group">
                 <label class="control-label">Actores</label>
                <input type="text" name="cast" class="form-control">
                <?php $frm->validate("cast",array("required","label"=>"Cast","regexp"=>"text"));  ?>
              </div>
              
              <div class="form-group">
                <label class="control-label">Fecha de Estreno</label>
                <input type="date" name="date" class="form-control"/>
                <?php $frm->validate("date",array("required","label"=>"Release Date"));  ?>
              </div>
              
              <div class="form-group">
                <label class="control-label">Descripcion</label>
                 <input type="text" name="descripcion" class="form-control">
                 <?php $frm->validate("descripcion",array("required","label"=>"Descripcion"));  ?>
              </div>
              <div class="form-group">
                  <label class="control-label">Imagen</label>
              <input type="file"  name="attachment" class="form-control" placeholder="Images">
               <?php $frm->validate("attachment",array("required","label"=>"Image"));  ?>
              </div>
              <div class="form-group">
                <button class="btn btn-success">Agregar</button>
              </div>
        </form>
        </div> 
      </div>
     

    </section>
   
  </div>
  <?php
include('footer.php');
?>
<script>
        <?php $frm->applyvalidations("form1");?>
    </script>