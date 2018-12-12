<?php
    session_start(); //Tiene que ser la primera funcion.
    //if(tipoUsuario==estudiante){
        $archivo = fopen("../data/usuarioEstudiante.json","r");
        while(($linea=fgets($archivo))){
            $registro = json_decode($linea,true);
            if (
                $_POST["usuario"]==$registro["usuario"] && 
                $_POST["password"]==$registro["password"]
            ){
                $registro["estatus"] = "1"; //Acceso exitoso
                $registro["mensaje"] = "Acceso autorizado";
                $_SESSION["usuario"] = $_POST["usuario"];
                $_SESSION["tipoUsuario"] = $registro["tipoUsuario"];
                echo json_encode($registro);
                exit;
            }
        }
    //}
    //No encontro el registro
   // else{
        $registro = array();
        $registro["estatus"] = "0"; //Acceso no autorizado
        $registro["mensaje"] = "Acceso no autorizado";
        echo json_encode($registro);
    //}
?>
