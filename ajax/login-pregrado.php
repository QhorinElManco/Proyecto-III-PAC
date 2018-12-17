<?php
    session_start(); //Tiene que ser la primera funcion.
    if($_POST["tipoUsuario"]==1){
        $archivo = fopen("../data/usuarios/usuariosEstudiante.json","r");
        while(($linea=fgets($archivo))){
            $registro = json_decode($linea,true);
            if (
                $_POST["cuenta"]==$registro["numeroCuenta"] && 
                $_POST["password"]==$registro["password"]
            ){
                $registro["tipoUsuario"]="estudiante";
                $registro["estatus"] = "1"; //Acceso exitoso
                $registro["mensaje"] = "Acceso autorizado";
                $_SESSION["cuenta"] = $_POST["cuenta"];
                $_SESSION["tipoUsuario"] = $registro["tipoUsuario"];
                $_SESSION["nombre"] = $registro["nombreCompleto"];
                $_SESSION["carrera"] = $registro["carrera"];
                echo json_encode($registro);
                exit;
            }
        }
        noFound();
    }
    elseif($_POST["tipoUsuario"]==2){
        $archivo = fopen("../data/usuarios/usuariosDocente.json","r");
        while(($linea=fgets($archivo))){
            $registro = json_decode($linea,true);
            if (
                $_POST["cuenta"]==$registro["cuenta"] && 
                $_POST["password"]==$registro["password"]
            ){
                $registro["tipoUsuario"]="docente";
                $registro["estatus"] = "1"; //Acceso exitoso
                $registro["mensaje"] = "Acceso autorizado";
                $_SESSION["cuenta"] = $_POST["cuenta"];
                $_SESSION["tipoUsuario"] = $registro["tipoUsuario"];
                $_SESSION["nombre"] = $registro["nombreCompleto"];

                echo json_encode($registro);
                exit;
            }
        }
        noFound();
    }
    elseif($_POST["tipoUsuario"]==3){
        $archivo = fopen("../data/usuarios/coordinadorAsignatura.json","r");
        while(($linea=fgets($archivo))){
            $registro = json_decode($linea,true);
            if (
                $_POST["cuenta"]==$registro["cuenta"] && 
                $_POST["password"]==$registro["password"]
            ){
                $registro["tipoUsuario"]="estudiante";
                $registro["estatus"] = "1"; //Acceso exitoso
                $registro["mensaje"] = "Acceso autorizado";
                $_SESSION["cuenta"] = $_POST["cuenta"];
                $_SESSION["tipoUsuario"] = $registro["tipoUsuario"];
                $_SESSION["nombre"] = $registro["nombreCompleto"];
                echo json_encode($registro);
                exit;
            }
        }
        noFound();
    }
    elseif($_POST["tipoUsuario"]==4){
        $archivo = fopen("../data/usuarios/coordinadorCarrera.json.json","r");
        while(($linea=fgets($archivo))){
            $registro = json_decode($linea,true);
            if (
                $_POST["cuenta"]==$registro["cuenta"] && 
                $_POST["password"]==$registro["password"]
            ){
                $registro["estatus"] = "1"; //Acceso exitoso
                $registro["mensaje"] = "Acceso autorizado";
                $_SESSION["cuenta"] = $_POST["cuenta"];
                $_SESSION["tipoUsuario"] = $registro["tipoUsuario"];
                $_SESSION["nombre"] = $registro["nombreCompleto"];
                echo json_encode($registro);
                exit;
            }
        }
        noFound();
    }
    elseif($_POST["tipoUsuario"]==5){
        $archivo = fopen("../data/usuarios/jefeDepartamento.json","r");
        while(($linea=fgets($archivo))){
            $registro = json_decode($linea,true);
            if (
                $_POST["cuenta"]==$registro["cuenta"] && 
                $_POST["password"]==$registro["password"]
            ){
                $registro["estatus"] = "1"; //Acceso exitoso
                $registro["mensaje"] = "Acceso autorizado";
                $_SESSION["cuenta"] = $_POST["cuenta"];
                $_SESSION["tipoUsuario"] = $registro["tipoUsuario"];
                $_SESSION["nombre"] = $registro["nombreCompleto"];
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