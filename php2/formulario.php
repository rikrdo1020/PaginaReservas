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

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Formulario de usuario</h2>
                    </div>
                    <p>Por favor llenar los campos con los datos del usuario.</p>
                    <form action="insert_formulario.php" method="post">
 
                        <div class="form-group">
                            <label>Nombre de usuario</label>
                            <input type="text" name="nombre_usuario" class="form-control">
                        </div>
 
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>
 
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" name="apellido" class="form-control">
                        </div>

			<div class="form-group">
                            <label>Correo</label>
                            <input type="email" name="correo" class="form-control">
                        </div>
 
                        <div class="form-group">
                            <label>Identificacion</label>
                            <input type="text" name="identificacion" class="form-control">
                        </div>

			<div class="form-group">
                            <label>Tipo de Indentificacion</label>
                            <input type="text" name="tipo_identificacion" class="form-control">
                        </div>
 
                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" name="direccion" class="form-control">
                        </div>
 
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="mobile" name="telefono" class="form-control">
                        </div>

			<div class="form-group">
                            <label>Contrasena</label>
                            <input type="text" name="contrasena" class="form-control">
                        </div>

                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">

                    </form>
                </div>
            </div>        
        </div>
    </div>
</td>
</tr>
</table>
</body>
</html>
