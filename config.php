<?php
    $host = "127.0.0.1";
    $user = "root";                     
    $pass = "Majo1906";                                  
    $db = "movietheatredb";
    $port = 3306;
     $con = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
?>