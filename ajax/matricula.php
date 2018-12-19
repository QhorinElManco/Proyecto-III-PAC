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
            }
            fclose($archivo);
            break;
        case "2":
            $archivo = fopen("../data/clases.json","r");
            while(($linea=fgets($archivo))){
                $registro = json_decode($linea,true);
                if($_SESSION["carrera"]==$registro["carrera"] && $_GET["departamento"]==$registro["departamento"]){
                        $clases=$registro["clases"];
                        echo json_encode($clases);
                        exit;
                }
        }
        fclose($archivo);
        break;
        case "3":
            $archivo = fopen("../data/secciones.json","r");
            while(($linea=fgets($archivo))){
                $registro = json_decode($linea,true);
                if($_GET["clase"]=$registro["clase"]){
                        $clases=$registro["secciones"];
                        echo json_encode($clases);
                        exit;
                }
        }
        fclose($archivo);
        break;
        case "4":
            $archivo = fopen("../data/clases-matriculadas/matriculadas.json","a+");
            $registro = array();
            $registro["cuenta"] = $_SESSION["cuenta"];
            $registro["clase"] = $_POST["clase"];
            $registro["seccion"] = $_POST["seccion"];
            $registro["UV"] = "4";
            $registro["periodo"] = "III";
            $registro["anio"] = "2018";
            $registro["edificio"]="B2";
            fwrite($archivo, json_encode($registro)."\n");
            fclose($archivo);
            echo json_encode($registro);
}
?>