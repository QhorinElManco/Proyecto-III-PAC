<?php
switch($_GET["opcion"]){
        case "1":
            $archivo = fopen("../data/eval.json","r");
            while(($linea=fgets($archivo))){
                $registros[] = json_decode($linea,true);
               
            }
            fclose($archivo);
            echo json_encode($registros);
            
        break;
        
        case "2":
            $archivo = fopen("../data/obtener evaluacion.json","a+"); 
            $respuesta["evaluacion"] = $_POST["evaluacion"];
            $respuesta["dato"] = $_POST["dato"];
            fwrite($archivo, json_encode($respuesta)."\n");
            fclose($archivo);
            echo json_encode($respuesta);
        break;
    
}       

?>