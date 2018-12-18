<?php
    switch($_GET["opcion"]){
        case "1":
            $archivo = fopen("../data/carreras/carreras.json","r");
            while(($linea=fgets($archivo))){

                $registros[] = json_decode($linea,true);
            }
            fclose($archivo);
            echo json_encode($registros);
            
        break;
    }
    
?>