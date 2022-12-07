<?php
session_start();
include('../../config.php');

$mid=$_GET['mid'];
mysqli_query($con,"delete  from tbl_news where pelicula_id='$mid'");
 $_SESSION['success']="Pelicula eliminada con exito";
header("location:index.php");
?>