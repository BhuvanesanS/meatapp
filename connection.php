<?php 
    $servername = "localhost";
    $username = "vartut9u_deliaurafood";
    $password = "%#O;Nf_WeLlP";
    $dbname = "vartut9u_deliaura_food";
    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die ('connection faild:'.$conn->connect_error);
    }
?>