<?php 
    $db_servername = "localhost";
    $db_nome = "biblioteca";
    $db_user = "root";
    $db_pass = "";

    $conn = new mysqli($db_servername, $db_user, $db_pass, $db_nome);
    if ($conn->connect_error){
        die("<p>Suca: ".$conn->connect_error."</p>");
    }
