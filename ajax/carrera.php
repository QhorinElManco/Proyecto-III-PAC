<?php
    switch($_GET["opcion"]){
        case "1":
            $archivo = fopen("../data/carreras/carreras.json","r");
            while(($linea=fgets($archivo))){

                $registros[] = json_decode($linea,true);
            }
            //Funcion de utileria para imprimir un arrreglo en formato html
            //var_dump($registros);
            fclose($archivo);
            //Convierte el arreglo en una cadena en formato json
            echo json_encode($registros);
        break;
    }
    
?>