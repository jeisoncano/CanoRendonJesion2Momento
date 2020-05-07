<?php
    if(isset($_GET['id'])){
        include_once('db_connection.php');
        $id = $_GET['id'];
        
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $documento = $_POST['documento'];
        $birthdate = $_POST['birthdate'];
        $city = $_POST['city'];
        $zone = $_POST['zone'];
        $mobile = $_POST['mobile'];

        $sql = "UPDATE citamedica SET name='{$name}', lastname='{$lastname}', documento='{$documento}', birthdate='{$birthdate}', city='{$city}', zone='{$zone}', mobile='{$mobile}' WHERE id={$id}";
        $result = $conn->query($sql);
        header("location: index.php");
    }
?>