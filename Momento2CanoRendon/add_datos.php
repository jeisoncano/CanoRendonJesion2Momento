<?php include_once ('layouts/header.php');?>
<div id="error"></div>
<form id="form" name="form" action="save_datos.php" onsubmit=" return validate()"  method="POST">
  <div class="form-group">
    <label for="name">Nombre/s</label>
    <input type="text" name="name" class="form-control" id="name"  placeholder="Ingrese el nombre completo del paciente" >
  </div>
  <div class="form-group">
    <label for="lastname">Apellidos</label>
    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Ingrese  Apellido completo del paciente"  >
  </div>
  <div class="form-group">
    <label for="documento">Documento de Identidad</label>
    <input type="text" name="documento" class="form-control" id="documento" placeholder="Ingrese  Documento de Identidad" 
    >
  </div>
  <div class="form-group">
    <label for="birthdate">Fecha de Nacimiento aa/mm/dd</label>
    <input type="date" name="birthdate" class="form-control" id="birthdate" placeholder="Ingrese Su Fecha de Nacimiento Año/Mes/Dia" >
  </div>
  <div class="form-group">
    <label for="city">Ciudad</label>
    <input type="text" name="city" class="form-control" id="city" placeholder="Ingrese Ciudad de Recidencia"  >
  </div>
  <div class="form-group">
    <label for="zone">Barrio</label>
    <input type="text" name="zone" class="form-control" id="zone" placeholder="Ingrese Barrio donde vive actualmente" >
  </div>
  <div class="form-group">
    <label for="mobile">Celular</label>
    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Ingrese un numero de celular de 10 digitos, de lo contrario sus datos no seran ingresados" >
  </div>
  <button type="submit"   class="btn btn-outline-warning  btn-lg btn-block">Agendar Cita</button>
</form>




<?php include_once ('layouts/footer.php');?>

