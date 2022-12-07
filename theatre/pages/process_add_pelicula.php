<?php
    session_start();
    include('../../config.php');
    extract($_POST);
    
    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    
    $flname="images/".basename($_FILES["image"]["name"]);
    
    mysqli_query($con,"insert into  tbl_pelicula values(NULL,'".$_SESSION['theatre']."','$name','$cast','$desc','$rdate','$flname','$video','0')");
    
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    
    $_SESSION['success']="Pelicula agregada";
    header('location:add_pelicula.php');
?>