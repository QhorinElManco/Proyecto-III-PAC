
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
    <script defer src="https://use.fontawesome.com/releases/v5.4.2/js/all.js" integrity="sha384-wp96dIgDl5BLlOXb4VMinXPNiB32VYBSoXOoiARzSTXY+tsK8yDTYfvdTyqzdGGN"
        crossorigin="anonymous"></script>


        <style>
        
       #icono-ul{
          display: flex;
          top: 50%;
          left: 50%;
        }
        #icono-ul #icono-li{
          list-style:none;

        }

        #icono-ul #icono-li #link-a{
          width:80px;
          height:80px;
          background: #fff;
          text-align: center;
          line-height: 80px;
          font-size: 35px;
          margin:0 10px;
          display:block;
          border-radius:50%;
          overflow: hidden;
          border: 3px solid blue;
          z-index: 1;
        }

        #icono-ul #icono-li #link-a .fa{
        
          color; black;
          transition: .8s;

        }
        
        </style>
        
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
         
          <section class="container-fluid" style=" display:flex; background-image: url(img/unah.jpeg);background-repeat: no-repeat;background-size: cover; max-width: 1341px; height:auto">
    <br> <br>
    
    <section class="col-xl-8 col-sm-8">
    
    <h5>CENTROS EN EL PAIS</h5>
    <div id="carouselExampleIndicators" class="carousel slide col-xl-10 col-sm-10" style="max-height:320px"  data-ride="carousel" >
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="width:auto; height:auto;"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1" style="width:auto; height:auto;"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2" style="width:auto; height:auto;"></li>
            </ol>
            <div class="carousel-inner" style="background-size:cover; margin:auto" >
              <div class="carousel-item active" style="background-color: rgba(0, 0, 0, 0.6)" >
                <img class="d-block" src="img/unah.jpg" style="max-width:100%; max-height:330px; margin:auto"  alt="First slide">
              </div>
              <div class="carousel-item" style="background-color: rgba(0, 0, 0, 0.6)">
                <img class="d-block" src="img/unah-vs.jpeg" style="max-width:100%; max-height:330px;margin:auto" alt="Second slide">
              </div>
              <div class="carousel-item" style="background-color: rgba(0, 0, 0, 0.6)" >
                <img class="d-block " src="img/curla.jpg " style="max-width:100%; max-height:330px ;margin:auto" alt="Third slide">
              </div>
              <div class="carousel-item" style="background-color: rgba(0, 0, 0, 0.6)">
                <img class="d-block " src="img/curlp.jpeg " style="max-width:100%; max-height:330px; margin:auto " alt="Fifth slide">
              </div>
              <div class="carousel-item" style="background-color: rgba(0, 0, 0, 0.6)" >
                <img class="d-block " src="img/unah-curno.jpg" style="max-width:100%; max-height:330px; background-size:cover; margin:auto" alt="Sixth slide">
              </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="witdth:auto; heigh:auto;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="witdth:auto; heigh:auto;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
                  <br>
                  <div style="display:flex">
                 <section style="width:260px;height:180px; background-color: rgb(1, 49, 94); margin:10px;; background-size:cover">
                <a href="http://www.admisiones.unah.edu.hn/Portals/0/calendarioA2018.png"><img  style="width:100%"src="img/Calendarioacademico2018.jpg" alt="Calendario 2018"></a>
                 </section>
                 <section style="width:270px;height:180px; background-color: rgb(1, 49, 94); margin:10px; background-image: url(); background-size:cover;">
                <a href=" http://www.admisiones.unah.edu.hn/Portals/0/ALFABETICO%203ER%20PROCESO-%20Lunes%206.jpg"><img style="width:92%; margin-top:18px; margin-left: 10px"src="img/boton-calendario-alfabetico2018.jpg" alt="Calendario entrega de documentos"></a>
                 </section>
                  </div>
                  <br><hr>

                  <div class="accordion" id="accordionExample">
  <div class="card" style="border: 2px solid rgb(1, 49, 94); padding: 10px;background-color:white;">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          NOTICIAS
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <img src="img/noticias.jpg" alt="">
      </div>
    </div>
  </div>
  <div class="card" style="border: 2px solid rgb(1, 49, 94); padding: 10px;background-color:white;">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          AVISOS IMPORTANTES
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="https://registro.unah.edu.hn/images/avisoRecepcionDocumentos.jpeg">Creacion de expedientes estudiantiles</a><br>
        <a href="https://registro.unah.edu.hn/images/CALENDARIORECEPCION2019.jpg">Calendario de recepcion de documentos</a><br>
        <a href="https://registro.unah.edu.hn/img/calendarioPagoIII2018.jpg">pago de matricula</a><br>
        <a href="https://registro.unah.edu.hn/img/pagoLabIII2018.jpg">pago de laboratorio</a><br>
      </div>
    </div>
  </div>
  
</div>

                  <br>
                  </section>
                  
<br>

<section style="background-color: rgba(0, 0, 0, 0.6); display:block; height:auto" class="col-xl-4"><br>
<br><div> <img src="img/puma.jpg" alt=""class="col-12"style=" height:180px"></div><br><br>
<div class="card text-center " style="margin:auto; width: 345px; height:220px; border: 5px solid blue-light; background-color:  rgba(255, 255, 255);">
<div class="card-body">
<h5 class="card-title"> ADMISIONES</h5>
<p class="card-text">¿TE GUSTARIA UNIRTE A NUESTRA UNIVERSIDAD?</p>
<a href="http://www.admisiones.unah.edu.hn/" class="btn btn-primary">Ven y Descubre</a>
</div>
</div><br><br>
<div class="clearfix" style="margin:auto">
  <h4 class="mb-1 ls1 t700" style="color:white; margin:5px"> redes sociales </h4><hr style="background-color: gray"><br>
<div class="col-4 col-xl-4 col-sm-1" >
<ul id="icono-ul">
<li id="icono-li"><a id="link-a" href="#" ><i class="fab fa-facebook "  aria-hidden="true"></i></a></li>
<li id="icono-li"><a id="link-a" href="#" ><i class="fab fa-twitter "></i></a></li>
<li id="icono-li"><a id="link-a" href="#" ><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
<br><br>
</section><br><br>

</section>


    
    <footer class="footer" style="margin-right: 0px; margin-left: auto; background-color: rgb(1, 49, 94); height:150px;">
        <div style="margin:auto; text-align: center; padding:auto; ">
            <a href="https://www.unah.edu.hn/?cat=1477&fcats" style="color:white; margin-top:20px;">Dirección Ejecutiva de Gestión de Tecnología (DEGT)</a>
       <hr style="background-color:white; margin: 15px">
       <p style="text-align:left;margin:20px; color:white">Bulevar Suyapa, Tegucigalpa, M.D.C, Honduras, Centroamérica<br> 
info@unah.edu.hn <br>
2216-6100, 2216-5100, 2216-3000, 2216-7000</p>
        </div>
    </footer>

</body>

</html>