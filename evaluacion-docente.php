<?php
  include("validar-sesion.php");  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evaluacion docente</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
<?php
    include("header.php")
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
                        <a class="nav-link" href="#">Información<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="matricula.php">Matricula</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historial.php">Historial</a>
                    </li>
                    <li class="nav-item active">
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
    <div class="container">
    <div class="table-responsive">
        <table class="table" style="width:100%; text-align:center;">
            <tbody>
                <tr>
                    <td><strong>Nombre:</strong></td>
                    <td>ERICK VLADIMIR REYES MARIN</td>
                                                        
                                                         
                </tr>
                <tr>
                    <td colspan="1"><strong>Centro:</strong></td>
                    <td colspan="1">CIUDAD UNIVERSITARIA</td>
                    <td colspan="1"><strong>Departamento:</strong></td>
                    <td colspan="1">INGENIERIA DE SISTEMAS</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>ESTIMADO ESTUDIANTE:</strong><br>
                        <p class="text-align: center;">El propósito de este instrumento es conocer su opinión sobre el desempeño del docente en esta asignatura y sección, para
                            poder determinar qué aspectos del que hacer docente pueden <strong>reforzarse o mejorarse</strong> y de esta manera contribuir a elevar la calidad de 
                            su formación profesional. Los resultados serán utilizados únicamente con fines académicos y son estrictamente confidenciales. Los datos del estudiante 
                            se mantienen en forma anónima y en ningún momento son de conocimiento del docente evaluado.</p>
                        <br>
                        <strong>INSTRUCCIONES:</strong><br>
                        <p class="text-align: center;">Para cada uno de los aspectos que se plantean, exprese su opinión seleccionando una casilla con la valoración que según su 
                            criterio corresponda al desempeño del docente que le imparte esta asignatura. Se requiere la mayor objetividad y honestidad en sus respuestas, para 
                            contribuir a la mejora continua de su proceso de aprendizaje en la UNAH.</p>
                        <br>
                        </div>
                    </div>
                </div>
        </div>
        <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th colspan="3">Evaluacion Docente</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <p>EL DOCENTE DEMUESTRA ESTAR ACTUALIZADO Y TENER DOMINIO DE LA DISCIPLINA QUE IMPARTE.</p>
                            </td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>EL CONTENIDO DE LA ASIGNATURA SE DESARROLLA CON ADECUADA PROFUNDIDAD PARA EL NIVEL DE
                                EDUCACIÓN UNIVERSITARIA.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>EL DOCENTE INDICA LAS FUENTES DE CONSULTA ACCESIBLES PARA EL DESARROLLO DE ESTA ASIGNATURA,
                                TALES COMO: LIBROS, ARTÍCULOS DE REVISTAS CIENTÍFICAS,
                                INVESTIGACIONES, BLOGS U OTROS.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>EL DOCENTE VINCULA LOS CONTENIDOS DE LA ASIGNATURA CON LA REALIDAD NACIONAL Y LA RESPONSABILIDAD CIUDADANA.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>EL DOCENTE PROMUEVE EN EL DESARROLLO DE LA ASIGNATURA, LA INCORPORACIÓN DEL ESTUDIANTE EN PROYECTOS DE INVESTIGACIÓN Y VINCULACIÓN UNIVERSIDAD SOCIEDAD.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>EL DOCENTE PRODUCE SUS PROPIOS MATERIALES DE ENSEÑANZA (RESÚMENES, GUÍAS, ENSAYOS, ARTÍCULOS PUBLICADOS U OTROS) PARA FACILITAR EL APRENDIZAJE DE
                            LOS ESTUDIANTES Y SE TIENE ACCESO A LOS MISMOS A TRAVÉS DE LA LIBRERÍA O BIBLIOTECA.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>EL DOCENTE ES AUTOR DE LIBROS, ENSAYOS, INVESTIGACIONES U OTRAS PUBLICACIONES SOBRE EL CAMPO DEL CONOCIMIENTO Y LA DISCIPLINA QUE IMPARTE.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>AL INICIAR EL PERÍODO ACADÉMICO EL DOCENTE LE PROPORCIONÓ EN FORMATO FÍSICO O DIGITAL EL PROGRAMA DE LA ASIGNATURA, CONTENIENDO LOS OBJETIVOS DE
                            APRENDIZAJE, TEMAS, CALENDARIZACIÓN DE CLASES Y EXÁMENES, FORMAS Y CRITERIOS DE EVALUACIÓN Y OTROS.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>EL DOCENTE EVIDENCIA LA PLANIFICACIÓN ADECUADA DE SUS CLASES, SECUENCIA LÓGICA Y DOSIFICACIÓN DE CONTENIDOS.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>EL DOCENTE MUESTRA DOMINIO DE TÉCNICAS PEDAGÓGICAS PARA EL PROCESO ENSEÑANZA-APRENDIZAJE A NIVEL UNIVERSITARIO.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>EN EL DESARROLLO DE LA CLASE, EL DOCENTE USA TÉCNICAS EDUCATIVAS QUE FACILITAN SU APRENDIZAJE DE ACUERDO A LA MODALIDAD DE
                            ENSEÑANZA Y LOS CONTENIDOS DE LA ASIGNATURA.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>LAS EVALUACIONES PRACTICADAS EN ESTA ASIGNATURA ESTÁN DE ACUERDO CON LOS OBJETIVOS PROPUESTOS PARA LA CLASE Y CON LOS CONTENIDOS
                            DESARROLLADOS POR EL DOCENTE.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td>EL DOCENTE LOGRA FACILITAR EL APRENDIZAJE DE LOS CONTENIDOS DE ESTA ASIGNATURA.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>                        
                        <tr>
                            <th scope="row">14</th>
                            <td>LA PRESENTACIÓN PERSONAL DEL DOCENTE ES PULCRA Y ADECUADA PARA UN CATEDRÁTICO UNIVERSITARIO.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>                        
                        <tr>
                            <th scope="row">15</th>
                            <td>EL DOCENTE ASISTE A LA CLASE CON PUNTUALIDAD Y SEGÚN LO PROGRAMADO.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>                        
                        <tr>
                            <th scope="row">16</th>
                            <td>EL DOCENTE INDICÓ EL HORARIO Y EL ESPACIO FÍSICO PARA ATENDER LAS CONSULTAS DE LOS ESTUDIANTES.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">17</th>
                            <td>EL DOCENTE ESTÁ DISPONIBLE Y MUESTRA BUENA DISPOSICIÓN PARA ATENDER A LOS ESTUDIANTES EN LAS HORAS DE CONSULTA.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">18</th>
                            <td>EL DOCENTE SE ESFUERZA POR FACILITAR EL APRENDIZAJE DE LOS ESTUDIANTES CON NECESIDADES ESPECIALES.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">19</th>
                            <td>EL DOCENTE TRATA EN FORMA RESPETUOSA Y CORDIAL A LOS ESTUDIANTES EN TODO MOMENTO.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">20</th>
                            <td>EL DOCENTE TIENE LENGUAJE Y ACTUACIONES PROPIAS DE UN PROFESOR UNIVERSITARIO.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">21</th>
                            <td>EL DOCENTE PROMUEVE Y PRACTICA LOS VALORES ÉTICOS Y MORALES DENTRO Y FUERA DE LOS ESPACIOS DE APRENDIZAJE.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">22</th>
                            <td>EL DOCENTE SE MUESTRA IDENTIFICADO CON LOS VALORES Y PRINCIPIOS INSTITUCIONALES.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">23</th>
                            <td>LA ASIGNACIÓN DE CALIFICACIONES POR EL DOCENTE ES JUSTA, EQUITATIVA Y TRANSPARENTE.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>EL DOCENTE INDICÓ EL HORARIO Y EL ESPACIO FÍSICO PARA ATENDER LAS CONSULTAS DE LOS ESTUDIANTES.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">24</th>
                            <td>LOS RESULTADOS DE LAS PRUEBAS O EXÁMENES Y TRABAJOS LE SON ENTREGADOS OPORTUNAMENTE EN UN TÉRMINO MÁXIMO DE 2 SEMANAS Y LAS
                            CALIFICACIONES SE REGISTRAN EN EL SISTEMA EN EL TIEMPO ESTABLECIDO.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">25</th>
                            <td>EL DOCENTE SE ADAPTA A LAS CONDICIONES DE TRABAJO, PARA DESARROLLAR DE LA MEJOR FORMA LOS CONTENIDOS DE LA ASIGNATURA.</td>
                            <td><select class="custom-select" style="width:200px">
                                    <option selected>Seleccione</option>
                                    <option value="1">Deficiente</option>
                                    <option value="2">Bueno</option>
                                    <option value="3">Muy Bueno</option>
                                    <option value="4">Excelente</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">26</th>
                            <td colspan="2">¿QUÉ CUALIDADES PERSONALES Y PROFESIONALES IDENTIFICA USTED EN EL DOCENTE?<br>
                                <textarea name="t-a" cols="100" rows="5" placeholder="Escriba su respuesta"></textarea></td>
                        </tr>
                        <tr>
                            <th scope="row">27</th>
                            <td colspan="2">¿A SU CRITERIO, EN QUÉ ASPECTOS DEL DESEMPEÑO PUEDE MEJORAR EL DOCENTE?<br>
                                <textarea name="t-a" cols="100" rows="5" placeholder="Escriba su respuesta"></textarea></td>
                        </tr>
                        <tr>
                            <th scope="row">28</th>
                            <td colspan="2">¿HA IDENTIFICADO USTED EN SU DOCENTE ALGUNA ACTITUD O PRÁCTICA QUE NO SEA APROPIADA EN UN PROFESOR UNIVERSITARIO?
                            POR FAVOR EXPLIQUE.
                            <br>
                            <textarea name="t-a" cols="100" rows="5" placeholder="Escriba su respuesta"></textarea></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="btn-guardar">ENVIAR ENCUESTA</button>
            <div>
        </div>
    </body>

</html>