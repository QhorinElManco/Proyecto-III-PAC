<?php
  include("validar-sesion.php");  
?>

<?php
  include("validar-sesion.php");  
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Area Estudiante</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="css/fontawesome/js/all.min.js"></script>
</head>

<body>

    <header class="header">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="logo">
                    <a class href="index.html">
                        <img class="img-responsive" src="img/logo-unah-blanco.png" alt="Universidad Nacional Autonoma de Honduras">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="margin-left:auto; margin-right:auto;">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Información<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="matricula.php">Matricula</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="matricula-laboratorios.php">Matricula de laboratorios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="evaluacion-docente.php">Evaluacion al docente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calificaciones-periodo.php">Calificaciones del periodo</a>
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
                    <li class="nav-item"><a class="navbar-brand" href="login-pregrado.php">Cerrar sesión<span style="margin-left: 5px; "><i
                                    class="fas fa-sign-out-alt" style="font-size:27px; margin-bottom:-4px;"></i></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    </div>
    <hr>
    <h2 style="text-align: center">Bienvenido
        <?php echo $_SESSION["nombre"]; ?>
    </h2>
    <hr>
    <br>
    <div class="container">
        <div style="width:100%; height:100%; background-color:yellow;">
            <div>
            </div>
        </div>
    </div>
        <!--<div class="container-fluid">
                        <div class="row">
                            <div id="conten" class="col-xl-4  col-lg-3 col-md-4 col-sm-6 col-12">
                                <section> Matricula</section>
                            </div>
                            <div id="conten" class="col-xl-4 col-lg-3 col-md-4 col-sm-6 col-12">
                                <section>  Ficha de Estudiante  </section>
                            </div>
                            <div id="conten" class="col-xl-4  col-lg-3 col-md-4 col-sm-6 col-12">
                                <section><a href="Historial.html">Historial Academico</a> </section>
                            </div>
                            <div id="conten" class="col-xl-4  col-lg-3 col-md-4 col-sm-6 col-12">
                                <section>  Forma 003 </section>
                            </div>
                            <div id="conten" class="col-xl-4  col-lg-3 col-md-4 col-sm-6 col-12">
                                <section> Evaluacion Docente  </section>
                            </div>
                            <div id="conten" class="col-xl-4  col-lg-3 col-md-4 col-sm-6 col-12">
                                <section>  calificaciones del Periodo  </section>
                            </div>
                        </div>
    -->



</body>
<footer class="footer" style="margin-right: auto; margin-left: auto;text-align:center; ">
    <div style="margin-right: auto; margin-left:auto; margin-top:40px">
        <a href="https://www.unah.edu.hn/?cat=1477&fcats">Dirección Ejecutiva de Gestión de Tecnología (DEGT)</a>
    </div>
</footer>

</html>