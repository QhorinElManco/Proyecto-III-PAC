<?php
    session_start(); //Tiene que ser la primera funcion
    switch($_GET["opcion"]){
        case "1":
            $archivo = fopen("../data/datos.json","r");
            while(($linea=fgets($archivo))){
                $registro = json_decode($linea,true);
                if ($_SESSION["carrera"]==$registro["carrera"]){
                    $departamento=$registro["departamentos"];
                    echo json_encode($departamento);
                    exit;
                }
                fclose($archivo);
                break;
            }
        case "2":
            $archivo = fopen("../data/datos.json","r");
            while(($linea=fgets($archivo))){
                $registro = json_decode($linea,true);
                if ($_GET["departamento"]==$registro["Fisica"]){
                    $clases=$registro["Fisica"];
                    echo json_encode($clases);
                    exit;
                }
            fclose($archivo);
        break;
        }
    
}
?>