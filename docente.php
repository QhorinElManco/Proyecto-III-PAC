<?php
  include("validar-sesion-admin.php");  
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Docente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.4.2/js/all.js" integrity="sha384-wp96dIgDl5BLlOXb4VMinXPNiB32VYBSoXOoiARzSTXY+tsK8yDTYfvdTyqzdGGN"
        crossorigin="anonymous"></script>
    <style type="text/css">
        td {
            text-align: center;
        }
        th {
            text-align: center;
        }
    </style>
</head>

<body>
<?php
    include("header.php")
?>

    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <div style="margin-left:auto;"><a class="navbar-brand" href="cerrar-sesion.php"><span>Cerrar Sesión <i class="fas fa-sign-out-alt"></i></span></a></div>
    </nav> <br>
    <div class="container">
    <div class="container-fluid">
        <div></div>
        <h2>Listado de estudiantes por asignatura</h2>
        <p>asegurese de ingresar todas las notas antes de guardar</p>
        <select class="form-control">
            <option value="-">Seleccione una asignatura</option>
            <option value="1">MM-201</option>
            <option value="2">MM-110</option>
            <option value="3">MM-111</option>
        </select>
    </div><br>
    
    <div style="min-height:600px;">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>N° Cuenta</th>
                        <th>Nombre completo</th>
                        <th>Nota</th>
                        <th>Obs</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>20131575292</td>
                        <td>Maritza Isabel Gutierrez</td>
                        <td><input class="form-control" type="text" placeholder="100"  maxlength="3" style="width: 60px; margin-right: auto; margin-left: auto;"></td>
                        <td><textarea class="form-control" placeholder="Escriba su observación" rows="1" cols="50"
                                style="width: 500px; margin-right: auto; margin-left: auto;"></textarea></td>
                    </tr>
                    <tr>
                        <td>20141575894</td>
                        <td>Jorge Isaac Martínez</td>
                        <td><input class="form-control" type="text" placeholder="100" maxlength="3" style="width: 60px; margin-right: auto; margin-left: auto;"></td>
                        <td><textarea class="form-control" placeholder="Escriba su observación" rows="1" cols="50"
                                style="width: 500px; margin-right: auto; margin-left: auto;"></textarea></td>
                    </tr>
                    <tr>
                        <td>20141010292</td>
                        <td>John Snow</td>
                        <td><input class="form-control" type="text" placeholder="100" maxlength="3" style="width: 60px; margin-right: auto; margin-left: auto;"></td>
                        <td><textarea class="form-control" placeholder="Escriba su observación" rows="1" cols="50"
                                style="width: 500px; margin-right: auto; margin-left: auto;"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="button" style="width:200px; margin-left:auto;">Registrar</button>

        </div>

    </div>
    </div>



</body>
<?php
    include("footer.php");
?>

</html>