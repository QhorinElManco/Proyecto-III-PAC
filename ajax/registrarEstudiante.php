<?php
            $archivo = fopen("../data/usuarios/usuariosEstudiante.json","a+");
            $registro = array();
            $registro["nombreCompleto"] = $_POST["nombreCompleto"];
            $registro["urlImagen"] = $_POST["urlImagen"];
            $registro["direccion"] = $_POST["direccion"];
            $registro["centro"] = $_POST["centro"];
            $registro["carrera"] = $_POST["carrera"];
            $registro["numeroCuenta"] = $_POST["numeroCuenta"];
            $registro["password"] = $_POST["password"];
            $registro["estado"] = "activo";
            fwrite($archivo, json_encode($registro)."\n");
            fclose($archivo);
            echo json_encode($registro);
?>