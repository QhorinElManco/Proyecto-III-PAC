<?php 
    session_start();  
    if (!isset($_SESSION["usuario"]))
        header("Location: estudiante-login.html");//Redireccion con PHP
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
    
<style >

section{
            background-color:rgb(199, 196, 196);
            color:rgb(24, 24, 24);
            border-radius: 5px;
            margin:8px;
            height: 100px;
            text-align: center;
            box-shadow: 0 10px 10px 0px rgba(0, 0, 0, 0.8);
        }
        .row{
            margin: 8px;
        }
       

</style>
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
            </nav> 

          <hr>
          <h2 style="text-align: center">Bienvenido Estudiante</h2><hr>
          <br>


                <div class="container-fluid">
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

   
    
  </body>
  <footer class="footer" style="margin-right: auto; margin-left: auto;text-align:center; ">
        <div style="margin-right: auto; margin-left:auto; margin-top:40px">
            <a href="https://www.unah.edu.hn/?cat=1477&fcats">Dirección Ejecutiva de Gestión de Tecnología (DEGT)</a>
        </div>
    </footer>
  
</html>

