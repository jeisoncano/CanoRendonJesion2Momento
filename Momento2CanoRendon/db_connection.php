<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = 'citas';
    $conn = new mysqli($host,$username,$password,$dbName);
    if($conn->connect_error){
        die($conn->connect_error);
    }
    //echo "connection successfuly";
?>