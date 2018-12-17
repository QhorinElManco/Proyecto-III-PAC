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

<script>
	$(document).ready(function(){
		
		$('#bt_del').click(function(){
			eliminar(id_fila_selected);
		});
		
		

	});
	var cont=0;
	var id_fila_selected=[];

	function seleccionar(id_fila){
		if($('#'+id_fila).hasClass('seleccionada')){
			$('#'+id_fila).removeClass('seleccionada');
		}
		else{
			$('#'+id_fila).addClass('seleccionada');
		}
		
		id_fila_selected.push(id_fila);
	}

	function eliminar(id_fila){
		
		for(var i=0; i<id_fila.length; i++){
			$('#'+id_fila[i]).remove();
		}
		
	}

	
	


</script>
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
                    <li class="nav-item">
                        <a class="nav-link" href="estudiante.php">Información<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
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
                    <li class="nav-item"><a class="navbar-brand" href="cerrar-sesion.php">Cerrar sesión<span style="margin-left: 5px; "><i
                                    class="fas fa-sign-out-alt" style="font-size:27px; margin-bottom:-4px;"></i></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section style="box-shadow: none;">
            <div class="row" style="margin:auto">
                    <div class="col-3">
                      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="matricular-Clase" data-toggle="pill" href="#matricularClase" role="tab" aria-controls="matricularClase" aria-selected="true">Matricula</a>
                        <a class="nav-link" id="cancelar-Clase" data-toggle="pill" href="#cancelarClase" role="tab" aria-controls="cancelarClase" aria-selected="false">Cancelar Clase</a>
                        <a class="nav-link" id="Clase-En-Espera" data-toggle="pill" href="#claseEnEspera" role="tab" aria-controls="claseEnEspera" aria-selected="false">Clases en Espera</a>
                        <a class="nav-link" id="forma-003" data-toggle="pill" href="#forma003" role="tab" aria-controls="forma003" aria-selected="false">Forma 003</a>
       </div>
       </div>
      <div class="col-9">
           <div class="tab-content" id="v-pills-tabContent">
             <div class="tab-pane fade show active" id="matricularClase" role="tabpanel" aria-labelledby="matricular-Clase">
                                                <div>
                                                        <section style="padding: 10px; margin:auto; box-shadow:none; border: solid lightgray">
                                                        Estudiante: <br>
                                                        cuenta: <br>
                                                        Carrera: <br>
                                                        UV Disponible: <br>
                                                        Periodo: <br>

                                                 </section><br>
                            <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Agregar Asignatura
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document" >
                                <div class="modal-content" >
                                    <div class="modal-header">
                                    <h5 class="modal-title" >Agrega tu Asignatura</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="table-responsive">
                                            <table class="table table-bordered">
                                                    <thead style="background-color:#007bff; color: white">
                                                    <tr>
                                                        <th scope="col" colspan="3"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr style="border-top-color: solid white; border-bottom:solid white">
                                                        <th scope="row"></th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                    
                                                    </tr>
                                                    <tr style="border-top: solid white; border-bottom:solid white">
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                    
                                                    </tr>
                                                    <tr style="border-top-color: solid white">
                                                        <th scope="row">3</th>
                                                        <td >Larry the Bird</td>
                                                        <td>Thornton</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Agregar</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                            </div>
                            <br><hr>
                            <div style="background-color: #007bff; color: white; text-align: center">Asignaturas Matriculadas</div><br>
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
                                    <tr>
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
                                    <tr>
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
                                        <tr class="selected" id="fila2" onclick="seleccionar(this.id)">
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
                                        <tr class="selected" id="fila3" onclick="seleccionar(this.id)">
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
                        <div class="tab-pane fade" id="forma003" role="tabpanel" aria-labelledby="forma-003">
                            <div class="row" >
                                <div  class="col-md-9" >
                                NOMBRE: <br>
                                CUENTA: <br>
                                CARRERA: <br>
                                PERIODO: <br>
                                AÑO: <br>
                                </div>
                                <div class="col-md-3">
                                <img src="img/usuario.png" class="rounded co-md-6" width="171px" height="150px"/>
                            </div>
                            </div><hr>
                            <div style="background-color: #007bff; color: white; text-align: center">Asignaturas Matriculadas</div><br>
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
                                    <tr>
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
                                    <tr>
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


                        </div>
                      </div>
                    </div>
                  </div>

                  
                </section>
</body>
</html>