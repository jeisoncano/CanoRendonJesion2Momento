<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="estilos.css">
    <title>Adicionar Datos</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <script defer src="validated_form.js"></script>

    <script type="text/javascript">
    function confirmDelete()
    {
        var respuesta = confirm("ESTA SEGURO QUE DESEA ELIMINAR EL REGISTRO?");

        if (respuesta==true){
            return true;
        }  else{
                return false;
            }
    }
    
    </script>

</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Consultorio Medico JFCR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="navbar-brand" href="index.php">Registro de Datos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand" href="add_datos.php">Formulario De Ingreso de Datos</a>
            </li>
            </ul>
        </div>
        </nav>
        <div class="container">