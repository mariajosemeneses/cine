<?php
session_start();
include('../../config.php');

$mid=$_GET['mid'];
mysqli_query($con,"delete  from tbl_pelicula where pelicula_id='$mid'");
 $_SESSION['success']="pelicula deleted  successfully";
header("location:index.php");
?>