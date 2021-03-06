<?php
  include("validar-sesion.php");  
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Matricula</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="css/fontawesome/js/all.min.js"></script>

    <style>
        .modal-dialog{max-width: 1000px !important;}
	

	.selected{
		cursor: pointer;
	}
	.selected:hover{
		background-color: #0585C0;
		color: white;
	}
	.seleccionada{
		background-color: #0585C0;
        color: white;
	}
</style>


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
                    <li class="nav-item ">
                        <a class="nav-link" href="estudiante.php">Información<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Matricula</a>
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
    <section style="box-shadow: none; height:600px;">
        <div class="row" style="margin:auto">
            <div class="col-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="matricular-Clase" data-toggle="pill" href="#matricularClase" role="tab"
                        aria-controls="matricularClase" aria-selected="true">Matricula</a>
                    <a class="nav-link" id="cancelar-Clase" data-toggle="pill" href="#cancelarClase" role="tab"
                        aria-controls="cancelarClase" aria-selected="false">Cancelar Clase</a>
                    <a class="nav-link" id="Clase-En-Espera" data-toggle="pill" href="#claseEnEspera" role="tab"
                        aria-controls="claseEnEspera" aria-selected="false">Clases en Espera</a>

                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="matricularClase" role="tabpanel" aria-labelledby="matricular-Clase">
                        <div>
                            <section style="padding: 10px; margin:auto; box-shadow:none; border: solid lightgray" id="carga">
                                Estudiante: <br>
                                cuenta: <br>
                                Carrera: <br>
                                UV Disponible: <br>
                                Periodo: <br>

                            </section><br>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter" id="modal-active" onclick="cargarClases(this.id)">
                                Agregar Asignatura
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Agrega tu Asignatura</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <select id="slc-departamentos" required autofocus
                                                style="width:300px; height:100%;" size="10">
                                            </select>
                                            <select id="slc-clases" required autofocus style="width:300px; height:100%;" size="10">
                                            </select>
                                            <select id="slc-secciones" required autofocus style="width:300px; height:100%;" size="10">
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter" id="agregar" onclick="matricular(this.id)">Agregar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <hr>
                        <div style="background-color: #007bff; color: white; text-align: center">Asignaturas
                            Matriculadas</div><br>
                        <div class="table-responsive-lg">
                            <table class="table table-bordered">
                                <thead style="background-color: #007bff; color: white">
                                    <tr>
                                    <th scope="col">Asigantura</th>
                                        <th scope="col">Seccion</th>
                                        <th scope="col">UV</th>
                                        <th scope="col">Edificio</th>
                                        <th scope="col">Periodo</th>
                                        <th scope="col">Año</th>
                                    </tr>
                                </thead>
                                <tbody id="matriculadas">
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="cancelarClase" role="tabpanel" aria-labelledby="cancelar-Clase">
                        <div style="background-color: #007bff; color: white; text-align: center">Cancela tu clase</div><br>
                        <div class="table-responsive-lg">
                            <table class="table table-bordered">
                                <thead style="background-color: #007bff; color: white">
                                    <tr>
                                        <th scope="col">Cod.</th>
                                        <th scope="col">Asigantura</th>
                                        <th scope="col">Seccion</th>
                                        <th scope="col">HI</th>
                                        <th scope="col">HF</th>
                                        <th scope="col">Dias</th>
                                        <th scope="col">Edificio</th>
                                        <th scope="col">Aula</th>
                                        <th scope="col">UV</th>
                                        <th scope="col">Periodo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="selected" id="fila" onclick="seleccionar(this.id)">
                                        <th scope="row">MM-110</th>
                                        <td>Matemática I</td>
                                        <td>0900</td>
                                        <td>0800</td>
                                        <td>0900</td>
                                        <td>Lu-Vi</td>
                                        <td>F1</td>
                                        <td>302</td>
                                        <td>5</td>
                                        <td>3</td>
                                    </tr>


                                    <tr class="selected" id="fila1" onclick="seleccionar(this.id)">
                                        <th scope="row">MM-111</th>
                                        <td>Geometria y Trigonometría</td>
                                        <td>1001</td>
                                        <td>1000</td>
                                        <td>1100</td>
                                        <td>Lu-Vi</td>
                                        <td>F1</td>
                                        <td>305</td>
                                        <td>5</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button id="bt_del" class="btn btn-default">Eliminar</button>


                    </div>
                    <div class="tab-pane fade" id="claseEnEspera" role="tabpanel" aria-labelledby="clase-En-Espera">
                        <div style="background-color: #007bff; color: white; text-align: center">Clases en Espera</div><br>
                        <div class="table-responsive-lg">
                            <table class="table table-bordered">
                                <thead style="background-color: #007bff; color: white">
                                    <tr>
                                        <th scope="col">Cod.</th>
                                        <th scope="col">Asigantura</th>
                                        <th scope="col">Seccion</th>
                                        <th scope="col">HI</th>
                                        <th scope="col">HF</th>
                                        <th scope="col">Edificio</th>
                                        <th scope="col">Aula</th>
                                        <th scope="col">UV</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">MM-110</th>
                                        <td>Matemática I</td>
                                        <td>0900</td>
                                        <td>0800</td>
                                        <td>0900</td>
                                        <td>F1</td>
                                        <td>302</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">MM-111</th>
                                        <td>Geometria y Trigonometría</td>
                                        <td>1001</td>
                                        <td>1000</td>
                                        <td>1100</td>
                                        <td>F1</td>
                                        <td>305</td>
                                        <td>5</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>

    </section>
    <script src="js/modal-matricula.js"></script>
</body>
<?php
    include("footer.php");
?>
</html>