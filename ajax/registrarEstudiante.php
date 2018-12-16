<?php
            $archivo = fopen("../data/usuarios/usuariosEstudiante.json","a+");
            $registro = array();
            $registro["nombreCompleto"] = $_POST["nombreCompleto"];
            $registro["urlImagen"] = $_POST["urlImagen"];
            $registro["dirección"] = $_POST["dirección"];
            $registro["centro"] = $_POST["centro"];
            $registro["carrera"] = $_POST["carrera"];
            $registro["numeroCuenta"] = $_POST["numeroCuenta"];
            $registro["contraseña"] = $_POST["contraseña"];
            $registro["estado"] = "activo";
            fwrite($archivo, json_encode($registro)."\n");
            echo json_encode($registro);
            fclose($archivo);
?>