<?php
    session_start(); //Tiene que ser la primera funcion
    $archivo = fopen("../data/carreras-depto-clases.json","r");
    while(($linea=fgets($archivo))){
        $registro = json_decode($linea,true);
        if ($_SESSION["carrera"]==$registro["carrera"]){
            echo json_encode($registro);
            exit;
        }
    }
?>