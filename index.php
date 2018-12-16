
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DIPP UNAH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/controlador.js"></script>
    <script type="text/javascript"src="js/bootstrap-hover-dropdown.js"></script>

</head>

<body>
  <?php
  include("header.php");
  ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                    aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto" style="margin-left:auto; margin-right:auto;">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Inicio <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login-pregrado.php">Pregrado</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Postgrado</a>
                      </li>
                <li class="nav-item">
                  <a class="nav-link" href="login-administrativo.php">Administrativo</a>
                </li>
              </ul>
            </div>
            </div>
          </nav>
          <br>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/sunset800-800x400.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/descarga.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/paisaje-10-2-800x400.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
                  <br>
    
    <footer class="footer" style="margin-right: auto; margin-left: auto;">
        <div style="margin-right: auto; margin-left: auto;">
            <a href="https://www.unah.edu.hn/?cat=1477&fcats">Dirección Ejecutiva de Gestión de Tecnología (DEGT)</a>
        </div>
    </footer>

</body>

</html>