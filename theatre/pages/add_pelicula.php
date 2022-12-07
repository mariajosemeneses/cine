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
        Agregar pelicula
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active">Agregar pelicula</li>
      </ol>
    </section>

    <section class="content">
 
      <div class="box">
        <div class="box-body">
          <?php include('../../msgbox.php');?>
          <form action="process_add_pelicula.php" method="post" enctype="multipart/form-data" id="form1">
            <div class="form-group">
              <label class="control-label">Nombre</label>
              <input type="text" name="name" class="form-control"/>
              <?php $frm->validate("name",array("required","label"=>"pelicula Name"));  ?>
            </div>
            <div class="form-group">
              <label class="control-label">Actores</label>
              <input type="text" name="cast" class="form-control"/>
              <?php $frm->validate("cast",array("required","label"=>"Cast","regexp"=>"text"));  ?>
            </div>
            <div class="form-group">
              <label class="control-label">Descripcion</label>
              <textarea name="desc" class="form-control"></textarea>
              <?php $frm->validate("desc",array("required","label"=>"Description"));  ?>
            </div>
            <div class="form-group">
              <label class="control-label">Fecha de Estreno</label>
              <input type="date" name="rdate" class="form-control"/>
              <?php $frm->validate("rdate",array("required","label"=>"Release Date"));  ?>
            </div>
            <div class="form-group">
              <label class="control-label">Imagen</label>
              <input type="file" name="image" class="form-control"/>
              <?php $frm->validate("image",array("required","label"=>"Image"));  ?>
            </div>
            <div class="form-group">
              <label class="control-label">Trailer Link</label>
              <input type="text" name="video" class="form-control"/>
              <?php $frm->validate("video",array("label"=>"Image","max"=>"500"));  ?>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Agregar pelicula</button>
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