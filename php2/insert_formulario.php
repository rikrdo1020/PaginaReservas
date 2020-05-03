<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<table>
<tr>
<td>
      <button onclick="window.location.href = 'http://localhost/php2/index.php';">Centro Deportivo A</button>
</td>
<td>
      <button onclick="window.location.href = 'http://loclahost/php2/index.php';">Centro Deportivo B</button>
</td>
</tr>
</table>   
</body>
</html>

<?php
include_once 'config_formulario.php';
if(isset($_POST['submit']))
{    
     $nombre_usuario = $_POST['nombre_usuario'];
     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];

     $correo = $_POST['correo'];
     $identificacion = $_POST['identificacion'];
     $tipo_identificacion = $_POST['tipo_identificacion'];

     $direccion = $_POST['direccion'];
     $telefono = $_POST['telefono'];
     $contrasena = $_POST['contrasena'];
 
     $sql = "INSERT INTO usuario (nombre_usuario,nombre,apellido,correo,identificacion,tipo_identificacion, direccion, telefono, contrasena, estado, id_rol)
     VALUES ('$nombre_usuario','$nombre','$apellido','$correo','$identificacion','$tipo_identificacion', '$direccion', '$telefono', '$contrasena', 1, 1)";
 
     if (mysqli_query($conn, $sql)) {
        echo "Registro agregado con exito!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
