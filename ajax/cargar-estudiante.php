<?php
    session_start(); //Tiene que ser la primera funcion
    $archivo = fopen("../data/usuarios/usuariosEstudiante.json","r");
    while(($linea=fgets($archivo))){
        $registro = json_decode($linea,true);
        if ($_SESSION["cuenta"]==$registro["numeroCuenta"]){
            echo json_encode($registro);
            exit;
        }
    }
?>