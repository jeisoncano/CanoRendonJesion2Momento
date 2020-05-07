<?php
if (!isset($_POST['name'])) {
    die("failure connection");
}

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$documento = $_POST['documento'];
$birthdate = $_POST['birthdate'];
$city = $_POST['city'];
$zone = $_POST['zone'];
$mobile = $_POST['mobile'];




if ( $name == ''){
  $alertTemplate = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
<strong>Holy guacamole!</strong> You should check in on some of those fields below.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>&times;</span>
</button>
</div>";
}
echo  $alertTemplate;



try{
    include_once('db_connection.php');
    $sql = "INSERT INTO citamedica (name,lastname,documento,birthdate,city,zone,mobile) VALUES ('{$name}','{$lastname}','{$documento}','{$birthdate}','{$city}','{$zone}','{$mobile}')";
    $result = $conn->query($sql);
    header("location: index.php");
}catch(Exception $ex){
  
    echo "DB connection error";
}






