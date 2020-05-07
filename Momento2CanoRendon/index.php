<?php include_once('layouts/header.php') ?>


  <tbody>
      <?php
        try{
            include_once('db_connection.php');
            $sql = "SELECT * FROM citamedica";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rowTemplate = "
                    <div class='form-group'>
                    <div class='form-group row'>
                    <label  class='col-sm-2 col-form-label'>ID PACIENTE</label>
                    <div class='col-sm-10'>
                      <li name='id' class='list-group-item border-light'>{$row['id']}</li>
                    </div>
                    </div>

                    <div class='form-group row'>
                    <label  class='col-sm-2 col-form-label'>NOMBRE DEL PACIENTE</label>
                    <div class='col-sm-10'>
                      <li name='id' class='list-group-item border-light'>{$row['name']}</li>
                    </div>
                    </div>

                    <div class='form-group row'>
                    <label  class='col-sm-2 col-form-label'>APELLIDO DEL PACIENTE</label>
                    <div class='col-sm-10'>
                      <li name='id' class='list-group-item border-light'>{$row['lastname']}</li>
                    </div>
                    </div>

                    <div class='form-group row'>
                    <label  class='col-sm-2 col-form-label'>DOCUMENTO DEL PACIENTE</label>
                    <div class='col-sm-10'>
                      <li name='id' class='list-group-item border-light'>{$row['documento']}</li>
                    </div>
                    </div>

                    <div class='form-group row'>
                    <label  class='col-sm-2 col-form-label'>FECHA DE CUMPLEAÑOS DEL PACIENTE</label>
                    <div class='col-sm-10'>
                      <li name='id' class='list-group-item border-light'>{$row['birthdate']}</li>
                    </div>
                    </div>

                    <div class='form-group row'>
                    <label  class='col-sm-2 col-form-label'>CIUDAD DE RECIDENCIA DEL PACIENTE</label>
                    <div class='col-sm-10'>
                      <li name='id' class='list-group-item border-light'>{$row['city']}</li>
                    </div>
                    </div>

                    <div class='form-group row'>
                    <label  class='col-sm-2 col-form-label'>BARRIO DEL PACIENTE</label>
                    <div class='col-sm-10'>
                      <li name='id' class='list-group-item border-light'>{$row['zone']}</li>
                    </div>
                    </div>

                    <div class='form-group row'>
                    <label  class='col-sm-2 col-form-label'>NUMERO CELULAR DEL PACIENTE</label>
                    <div class='col-sm-10'>
                      <li name='id' class='list-group-item border-light'>{$row['mobile']}</li>
                    </div>
                    </div>
                    <div class='form-group row'>
                      <a type='button' class='btn btn-primary btn-lg btn-block' href='edit_datos.php?id={$row['id']}' >Editar registros</a>
                      <a type='button' class='btn btn-danger btn-lg btn-block' href='delete_datos.php?id={$row['id']}' onclick='return confirmDelete()' >Eliminar Registros</a>
                    </div>
                    </div>
                   ";
                    echo $rowTemplate; 
                }
            }
        }catch(Exception $ex){
            echo "error";
        }
      ?>
  </tbody>

<?php include_once('layouts/footer.php') ?>