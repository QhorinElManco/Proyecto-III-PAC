<?php
  include("validar-sesion.php");  
?>
<!Doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rendimiento Académico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
     
    <script type="text/javascript" src="dist/Chart.bundle.min.js"></script>

    <script type="text/javascript"> 
    $(document).ready(function(){
        var datos={ 
            type: "line",
            data: {
                
                pointBorderWidth: 2,
                datasets:[{
                    data:[
                    {x:10, y:65,},
                    {x:15,y:70,},
                    {x:25,y:88,},
                    {x:25,y:60,},
                    {x:25,y:76,},
                    100
                    
                ],
                    borderColor: [
                    "#F7464A",
                    ],
                    backgroundColor: false,
                }],
                labels:[ 
                    "Matematica 1",
                    "Geometria y Trigonometria",
                    "Calculo 1",
                    "Calculo 2",
                    "Ecuaciones Diferenciales",]
            },
                options: {
                     responsive: true,
                }
            
            };

            var canvas= document.getElementById('Chart').getContext('2d');
            window.line = new Chart(canvas, datos);
            
            var densityCanvas = document.getElementById("densityChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'Indice de repitencia',
  data: [0,100, 50, 100, 50 ]
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: {
    labels: ["Matematica 1", "Geometria y Trigonometria", "Ecuaciones Diferenciales","calculo 2"],
    datasets: [densityData]
  }
});


        });

    </script>
    <style>
    /*pestanas*/
section {
    padding: 60px 0;
    margin:20px 20px;
    box-shadow: 0 10px 10px 0px rgba(0, 0, 0, 0.8);
}

section .section-title {
    text-align: center;
    color: white;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#tabs{
	background: white;
    color: black;
}
#tabs h6.section-title{
    color: black;
}

#tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: black;
    background-color: transparent;
    border-color: transparent transparent black;
    border-bottom: 4px solid !important;
    font-size: 20px;
    font-weight: bold;
}
#tabs .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: black;
    font-size: 20px;
}</style>
    

</head>
<body>
    <?php
    include("header.php");
    ?>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="margin-left:auto; margin-right:auto;">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Información<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="matricula.php">Matricula</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historial.php">Historial Academico</a>
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
                    <li class="nav-item"><a class="navbar-brand" href="cerrar-sesion.php">Cerrar sesión<span style="margin-left: 5px; "><i
                                    class="fas fa-sign-out-alt" style="font-size:27px; margin-bottom:-4px;"></i></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <section id="tabs">
                <div class="container">
                    <div class="xm-col-4">
                        <h6 class="section-title h2 ">Rendimiento Académico </h6>
                     </div>  
                    <div class="row">
                        <div class="col-12 ">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-historial-tab" data-toggle="tab" href="#historial" role="tab" aria-controls="nav-home" aria-selected="true">Historial</a>
                                    <a class="nav-item nav-link" id="nav-seguimiento-tab" data-toggle="tab" href="#seguimiento-calificaciones" role="tab" aria-controls="nav-profile" aria-selected="false">Seguimiento de Calificaciones</a>
                                    <a class="nav-item nav-link" id="nav-reprobadas-tab" data-toggle="tab" href="#reprobadas-materias" role="tab" aria-controls="nav-contact" aria-selected="false">Materias Reprobadas</a>
                                    
                                </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent" style="width: auto">
                                <div class="tab-pane fade show active" id="Historial" role="tabpanel" aria-labelledby="nav-historial-tab">
                                    <div class="table-responsive-md">    
                                    <table class="table">
                                                <thead class="thead-dark">
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Asignatura</th>
                                                    <th scope="col">Periodo</th>
                                                    <th scope="col">Nota</th>
                                                    <th scope="col">Año</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                  </tr>
                                                </tbody>
                                              </table> 
                                            </div>
                                </div>
                                <div class="tab-pane fade" id="seguimiento-calificaciones" role="tabpanel" aria-labelledby="nav-seguimiento-tab">
                                    <div style="width:auto; height:auto">
                                        <canvas id="Chart" width="auto" height="auto"></canvas>
                                
                                     </div>
                                </div>
                                <div class="tab-pane fade" id="reprobadas-materias" role="tabpanel" aria-labelledby="nav-reprobadas-tab">
                                 <canvas id="densityChart" width="auto" height="auto"></canvas>
                                </div>
                                
                            </div>
                        
                        </div>
                    </div>
                </div>
            </section>
   
</body>
</html>