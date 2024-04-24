<?php
    $server = "localhost";
    $user = "root";
    $senha = "";
    $dbName = "bd_shapebuilder";
    
    $conn = mysqli_connect($server, $user, $senha, $dbName);
    
    if($conn){
        // echo"You are connected!";
    }
    else{
        // echo"Could not connect!";
    }
?>