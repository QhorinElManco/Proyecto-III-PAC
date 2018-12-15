<?php
    session_start(); //Tiene que ser la primera funcion.
    if($_POST["tipoUsuario"]==1){
        $archivo = fopen("../data/usuarios/usuariosDireccion.json","r");
        while(($linea=fgets($archivo))){
            $registro = json_decode($linea,true);
            if (
                $_POST["id"]==$registro["id"] && 
                $_POST["password"]==$registro["password"]
            ){
                $registro["estatus"] = "1"; //Acceso exitoso
                $registro["mensaje"] = "Acceso autorizado";
                $_SESSION["id"] = $_POST["id"];
                $_SESSION["tipoUsuario"] = $registro["tipoUsuario"];
                $_SESSION["nombreCompleto"] = $registro["nombreCompleto"];

                echo json_encode($registro);
                exit;
            }
        }
        noFound();
    }
    elseif($_POST["tipoUsuario"]==2){
        $archivo = fopen("../data/usuarios/usuariosDipp.json","r");
        while(($linea=fgets($archivo))){
            $registro = json_decode($linea,true);
            if (
                $_POST["id"]==$registro["id"] && 
                $_POST["password"]==$registro["password"]
            ){
                $registro["estatus"] = "1"; //Acceso exitoso
                $registro["mensaje"] = "Acceso autorizado";
                $_SESSION["id"] = $_POST["id"];
                $_SESSION["tipoUsuario"] = $registro["tipoUsuario"];
                $_SESSION["nombreCompleto"] = $registro["nombreCompleto"];

                echo json_encode($registro);
                exit;
            }
        }
        noFound();
    }
    //No encontro el registro
    else{
        noFound();
    }


    function noFound(){
        $registro = array();
        $registro["estatus"] = "0"; //Acceso no autorizado
        $registro["mensaje"] = "Acceso no autorizado";
        echo json_encode($registro);
    }
?>