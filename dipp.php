<?php
    include("validar-sesion-admin.php");
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
    <script src="css/fontawesome/js/all.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIPP UNAH</title>
</head>

<body>

    <header class="header">
        <?php
        include("header.php");
        ?>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="margin-left:auto; margin-right:auto;">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Registro de estudiantes<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Registro de docentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Registro de personal administrativo</a>
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
    <div class="container" style="min-height:600px;text-align:center;">
    <br>
    <br>
                    <form style="width: 400px; margin-left:auto; margin-right:auto;">
                        <input class="form-control" type="text" id="nombreCompleto" placeholder="Nombre completo" required autofocus><br>
                        <input class="form-control" type="text" id="direccion" placeholder="Dirección completa donde reside" required autofocus><br>
                        <select class="form-control" id="centro" required autofocus>
                            <option value="">Seleccione el centro</option>
                            <option value="CU">Ciudad Universitaria - CU</option>
                            <option value="UNAH-VS">Universidad Nacional Autónoma de Honduras del Valle de Sula - UNAH-VS</option>
                            <option value="CURLA">Centro Universitario Regional del Litoral Atlántico - CURLA</option>
                            <option value="CURVA">Centro Universitario Regional del Valle de Aguan - CURVA</option>
                            <option value="CURLP">Centro Universitario Regional del Litoral Pacífico - CURLP</option>
                            <option value="CASUED">Centros Asociados del Sistema de Educación a Distancia - CASUED</option>
                            <option value="CURNO">Centro Universitario Regional Nororiental - CURNO</option>
                            <option value="CUROC">Centro Universitario Regional de Occidente - CUROC</option>
                            <option value="UNAH Tec Danlí">Centro Universitario de la Zona Oriental - UNAH Tec Danlí</option>
                            <option value="UNAH-TEC Aguán">Centro Tecnológico del Valle de Aguán - UNAH-TEC Aguán</option>
                            <option value="ITST">Instituto Tecnológico Superior de Tela - ITST</option>
                        </select><br>
                        <select class="form-control" id="slc-carrera" required autofocus>
                            <option value="">Seleccione una carrera</option>
                        </select><br>
                        <input class="form-control" type="number" id="numeroCuenta" placeholder="Ingrese numero de cuenta" required autofocus><br>
                        <input class="form-control" type="password" id="password" placeholder="Ingrese una contraseña" required autofocus><br>
                        <input class="form-control" type="text" id="urlImagen" placeholder="Ingrese la url de la foto de perfil" required autofocus><br><br>
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="button" id="registra" style="width:150px; margin:auto;">Registrar</button>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador-dipp.js"></script>
</body>
<?php
    include("footer.php");
?>

</html>