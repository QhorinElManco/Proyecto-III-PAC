<?php
  include("validar-sesion.php");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.4.2/js/all.js" integrity="sha384-wp96dIgDl5BLlOXb4VMinXPNiB32VYBSoXOoiARzSTXY+tsK8yDTYfvdTyqzdGGN"
        crossorigin="anonymous"></script>
        
</head>
<body>
<?php
    include("header.php")
?>
                <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="margin-left:auto; margin-right:auto;">
                    <li class="nav-item ">
                        <a class="nav-link" href="estudiante.php">Información<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="matricula.php">Matricula</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historial.php">Historial Academico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="evaluacion-docente.php">Evaluacion al docente</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Calificaciones del periodo</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Más</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Solicitudes</a>
                            <a class="dropdown-item" href="#">Cambio de clave</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Censo de matricula</a>
                            <a class="dropdown-item" href="#">Ver programación académica</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="margin-left:auto; margin-right:auto;">
                    <li class="nav-item"><a class="navbar-brand" href="cerrar-sesion.php">Cerrar sesión<span style="margin-left: 5px; "><i
                                    class="fas fa-sign-out-alt" style="font-size:27px; margin-bottom:-4px;"></i></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="min-height:600px;">
        <div >
            <hr >
            <h3 style="text-align: center">Califaciones del Periodo</h3>
            <hr>
        </div>
        <br>
        <div class="table-responsive">
                <table class="table table-hover">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Clase</th>
                            <th scope="col">Sección</th>
                            <th scope="col">Docente</th>
                            <th scope="col">Nota</th>
                          </tr>
                        </thead>
                        <tbody class="thead-light">
                          <tr>
                            <th scope="row">POO</th>
                            <td>1500</td>
                            <td>Erick Marín</td>
                            <td>100</td>
                          </tr>
                          <tr>
                            <th scope="row">Estadística</th>
                            <td>1400</td>
                            <td>Wilfredo Murillo</td>
                            <td>85</td>
                          </tr>
                          <tr>
                            <th scope="row">Física I</th>
                            <td>1800</td>
                            <td>Carlos Sosa</td>
                            <td>80</td>
                          </tr>
                        </tbody>
                      </table>
                      
        </div>
</div>
<?php
    include("footer.php");
?>

</body>
</html>