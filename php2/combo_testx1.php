<?php
// Verificamos la conexión con el servidor y la base de datos
  $mysqli = new mysqli('localhost', 'root', 'Camaro1$', 'reservascourt2');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Demo de menú desplegable</title>
  <meta charset=utf-8" />
</head>
<body>
  <div align="center"> 
    <p>Seleccione un pais del siguiente menú:</p>
    <p>usuarios:
      <select>
        <option value="0">Seleccione:</option>
        <?php
// Realizamos la consulta para extraer los datos
          $query = $mysqli -> query ("SELECT * FROM usuario");
          while ($valores = mysqli_fetch_array($query)) {
// En esta sección estamos llenando el select con datos extraidos de una base de datos.
            echo '<option value="'.$valores[id_usuario].'">'.$valores[nombre_completo].'</option>';
          }
        ?>
      </select>
      <button>Enviar</button>
    </p>
  </div>
</body>
</html>
