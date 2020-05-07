<?php
    if(isset($_GET['id'])){
        include_once('db_connection.php');
        $id = $_GET['id'];
        $sql = "DELETE FROM citamedica WHERE id = {$id}";
        $result = $conn->query($sql);
        header("location: index.php");
    }
?>