<?php 
    session_start();  
    if (!isset($_SESSION["usuario"]))
        header("Location: login-administrativo.html");//Redireccion con PHP
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a dirección académica</h1>
<h2 style="text-align: center">Bienvenido
        <?php echo $_SESSION["nombreCompleto"]; ?>
    </h2>
</body>
</html>