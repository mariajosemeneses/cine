<?php
session_start();
include('../../config.php');

$mid=$_GET['mid'];
mysqli_query($con,"DELETE FROM tbl_pelicula WHERE pelicula_id='$mid'");
 $_SESSION['success']="pelicula Deleted";
header("location:view_pelicula.php");
?>