<?php
    if(isset($_GET['id'])){
        include_once('db_connection.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM citamedica WHERE id = {$id}";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            $row = $result->fetch_assoc();
        }
    }

?>

<?php include_once('layouts/header.php'); ?>
<form action="update_datos.php?id=<?php echo $row['id']?>"  method="POST">
    <div class="form-group">
        <label for="name">Nombre/s</label>
        <input type="text" value="<?php echo $row['name'] ?>" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Ingrese el nombre completo del paciente">
    </div>
    <div class="form-group">
        <label for="lastname">Apellidos</label>
        <input type="text" value="<?php echo $row['lastname'] ?>" name="lastname" class="form-control" id="lastname" placeholder="Ingrese  Apellido completo del paciente" >
    </div>
    <div class="form-group">
        <label for="documento">Documento de Identidad</label>
        <input type="text" value="<?php echo $row['documento'] ?>" name="documento" class="form-control" id="documento" placeholder="Ingrese  Documento de Identidad" >
    </div>
    <div class="form-group">
        <label for="taskDate">Fecha de Nacimiento dd/mm/aa</label>
        <input type="date" value="<?php echo $row['birthdate'] ?>" name="birthdate" class="form-control" id="birthdate" placeholder="Ingrese Su Fecha de Nacimiento Año/Mes/Dia" >
    </div>
    <div class="form-group">
        <label for="taskDate">Ciudad</label>
        <input type="text" value="<?php echo $row['city'] ?>" name="city" class="form-control" id="city" placeholder="Ingrese Ciudad de Recidencia" >
    </div>
    <div class="form-group">
        <label for="taskDate">Barrio</label>
        <input type="text" value="<?php echo $row['zone'] ?>" name="zone" class="form-control" id="zone" placeholder="Ingrese Barrio donde vive actualmente" >
    </div>
    <div class="form-group">
        <label for="taskDate">Celular</label>
        <input type="text" value="<?php echo $row['mobile'] ?>" name="mobile" class="form-control" id="mobile" placeholder="Ingrese un numero de celular de 10 digitos, de lo contrario sus datos no seran ingresados" >
    </div>
    <button type="submit" class="btn btn-danger btn-lg btn-block">Finalizar Edicion</button>
</form>
<?php include_once('layouts/footer.php');?>