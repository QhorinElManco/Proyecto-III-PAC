<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DIPP UNAH</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css">
        <script defer src="https://use.fontawesome.com/releases/v5.4.2/js/all.js" integrity="sha384-wp96dIgDl5BLlOXb4VMinXPNiB32VYBSoXOoiARzSTXY+tsK8yDTYfvdTyqzdGGN"
            crossorigin="anonymous"></script>
    
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" 
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                            aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto" style="margin-left:auto; margin-right:auto;">
                        <li class="nav-item">
                          <a class="nav-link" href="index.html">Inicio <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
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
        <div id="fondo" style="background-image: url(img/estudiante.jpeg); background-size: cover; ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="container" id="login">
                        <h6 style="color: rgb(1, 49, 94)">Para acceder a los servicios estudiantiles debes autenticarte</h6>
                        <div class="card card-container">
                            <img id="profile-img" class="profile-img-card" src="https://image.flaticon.com/icons/png/512/194/194931.png">
                            <p id="profile-name" class="profile-name-card"></p>
                            <div id="alert"></div>
                            <form class="form-signin">
                                <span id="reauth-email" class="reauth-email"></span>
                                <input class="form-control" type="text" id="cuenta" placeholder="Numero de cuenta o ID" required autofocus><br>
                                <input class="form-control" type="password" id="password" placeholder="Contraseña"required autofocus><br>
                                <select class="form-control" id="slc-usuario" required autofocus>
                                    <option value="">Tipo de usuario</option>
                                    <option value="1">Estudiante</option>
                                    <option value="2">Docente</option>
                                    <option value="3">Coodinador de asignatura</option>
                                    <option value="4">Coodinador de carrera</option>
                                    <option value="5">Jefe de departamento</option>
                                </select>
                                <br>
                                <button class="btn btn-lg btn-primary btn-block btn-signin" type="button" id="btn-login">Ingresar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/controlador.js"></script>
</body>
</html>