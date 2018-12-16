<?php 
    session_start();  
    if (!isset($_SESSION["usuario"]))
        header("Location: login-administrativo.html");//Redireccion con PHP
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="css/fontawesome/js/all.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>DIPP UNAH</title>
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
                <!--<ul class="navbar-nav mr-auto" style="margin-left:auto; margin-right:auto;">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Registro de personal docente<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="matricula.php">Registro de personal administrativo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="matricula-laboratorios.php">Registro de estudiantes</a>
                    </li>
                </ul>-->
                <ul class="navbar-nav mr-auto nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#menu1">Registro de estudiantes</a></li>
                    <li><a data-toggle="tab" href="#menu2">Registro de personal docente</a></li>
                    <li><a data-toggle="tab" href="#menu3">Registro de personal administrativo</a></li>
                </ul>

            </div>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="margin-left:auto; margin-right:auto;">
                    <li class="nav-item"><a class="navbar-brand" href="index.html">Cerrar sesión<span style="margin-left: 5px; "><i
                                    class="fas fa-sign-out-alt" style="font-size:27px; margin-bottom:-4px;"></i></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active">
                <h3>Registro de estudiantes</h3>
                <p>Por favor asegurese de llenar todos los campos.</p>
                <div class="container">
                    <form>
                        <input class="form-control" type="text" id="nombreCompleto" placeholder="Nombre completo" required autofocus><br>
                        <input class="form-control" type="text" id="carrera" placeholder="Carrera" required autofocus><br>
                        <input class="form-control" type="text" id="urlImagen" placeholder="Ingrese la url de la foto de perfil" required autofocus><br>
                        <input class="form-control" type="text" id="dirección" placeholder="Dirección completa donde reside" required autofocus><br>
                        <select class="form-control" id="centro" required autofocus>
                            <option value="">Seleccione el centro</option>
                            <option value="1">Ciudad Universitaria - CU</option>
                            <option value="2">Universidad Nacional Autónoma de Honduras del Valle de Sula - UNAH-VS</option>
                            <option value="3">Centro Universitario Regional del Litoral Atlántico - CURLA</option>
                            <option value="4">Centro Universitario Regional del Valle de Aguan - CURVA</option>
                            <option value="5">Centro Universitario Regional del Litoral Pacífico - CURLP</option>
                            <option value="6">Centros Asociados del Sistema de Educación a Distancia - CASUED</option>
                            <option value="7">Centro Universitario Regional Nororiental - CURNO</option>
                            <option value="8">Centro Universitario Regional de Occidente - CUROC</option>
                            <option value="9">Centro Universitario de la Zona Oriental - UNAH Tec Danlí</option>
                            <option value="10">Centro Tecnológico del Valle de Aguán - UNAH-TEC Aguán</option>
                            <option value="11">Instituto Tecnológico Superior de Tela - ITST</option>
                        </select>
                        <select class="form-control" id="centro" required autofocus>
                            <option value="">Seleccione el centro</option>
                            <option value="1">Ciudad Universitaria - CU</option>
                            <option value="2">Universidad Nacional Autónoma de Honduras del Valle de Sula - UNAH-VS</option>
                            <option value="3">Centro Universitario Regional del Litoral Atlántico - CURLA</option>
                            <option value="4">Centro Universitario Regional del Valle de Aguan - CURVA</option>
                            <option value="5">Centro Universitario Regional del Litoral Pacífico - CURLP</option>
                            <option value="6">Centros Asociados del Sistema de Educación a Distancia - CASUED</option>
                            <option value="7">Centro Universitario Regional Nororiental - CURNO</option>
                            <option value="8">Centro Universitario Regional de Occidente - CUROC</option>
                            <option value="9">Centro Universitario de la Zona Oriental - UNAH Tec Danlí</option>
                            <option value="10">Centro Tecnológico del Valle de Aguán - UNAH-TEC Aguán</option>
                            <option value="11">Instituto Tecnológico Superior de Tela - ITST</option>
                        </select>










                    </form>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade in fade">
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam.</p>
            </div>
            <div id="menu3" class="tab-pane fade in fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
        </div>
    </div>

    <!--<hr>
    <h2 style="text-align: center">Bienvenido
        <?php echo $_SESSION["nombreCompleto"]; ?>
    </h2>
    <hr>
    <br>
    <div class="container">
        <div style="width:100%; height:100%; background-color:yellow;">
            <div>
            </div>
        </div>
    </div>-->
    </div>
</body>

</html>