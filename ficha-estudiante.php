<?php
  include("validar-sesion.php");  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Informacion Personal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
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
            <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light" >
                    <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto" style="margin: auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Pregrado
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="estudiante.html">Estudiantes</a>
                                <a class="dropdown-item" href="#">Profesores</a>
                                <a class="dropdown-item" href="#">Jefe de departamento</a>
                                <a class="dropdown-item" href="#">Coordinadores de carrera</a>
                                <a class="dropdown-item" href="#">Programas especiales</a>
                                <a class="dropdown-item" href="#">Suficiencias</a>
                                <a class="dropdown-item" href="#">Coordinador de asignatura</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Postgrado
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Solicitud de ingreso</a>
                                <a class="dropdown-item" href="#">Oferta académica</a>
                                <a class="dropdown-item" href="#">Servicio al estudiante</a>
                                <a class="dropdown-item" href="#">Coordinadión de postgrados</a>
                                <a class="dropdown-item" href="#">Registro de calificacioness</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Administración
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Dirección académica</a>
                                <a class="dropdown-item" href="#">Comosionado universitario</a>
                                <a class="dropdown-item" href="#">Tesorería</a>
                                <a class="dropdown-item" href="#">Decanos</a>
                                <a class="dropdown-item" href="#">DIPP</a>
                                <a class="dropdown-item" href="#">SEAPI</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav> <br>
    <section class="col-12" style="margin:10px">
        <div class="col-12 col-ms-4" style="border: solid black; padding:10px; border-radius:0.4rem">
                <h3 style="margin-right:100px; text-align:right ;"> Ficha de estudiante</h3>
                </div><br>
               <div style="border: solid black; padding:10px;border-radius:0.4rem"><br>
                 <h4 style="text-align:center">INFORMACION GENERAL Y DEMOGRAFICA <br><hr style="width: 500px; background-color: teal"> </h4>
                 NOMBRE: <input type="text" class="col-xl-4 col-md-4 col-sm-4">  
                 APELLIDO: <input type="text" class="col-xl-4 col-md-4 col-sm-4"><br><br>
                 ID: <input type="text" class="col-xl-4 col-md-4 col-sm-4">
             FECHA DE NACIMIENTO: <input type="date" class="col-xl-4 col-md-4 col-sm-4"><br><br>
                 PAIS:     <input type="text" class="col-xl-10 col-md-6 col-sm-4"><br><br>
                 DEPARTAMENTO: <input type="text" class="col-xl-10 col-md-6 col-sm-4"><br><br>
                 MUNICIPIO: <input type="text" class="col-xl-10 col-md-6 col-sm-4">
                 <br><br>
                 
                 Datos Académicos<hr style="background-color:teal"><br >
                 Carrera: <input type="text" class="col-xl-12 col-md-6 col-sm-4"><br><br>
                 Correo Institucional: <input type="email" class="col-xl-12 col-md-6 col-sm-4">
                 
               </div>
            </section>
</body>
</html>