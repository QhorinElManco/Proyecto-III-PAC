<?php
    session_start();
    if(!isset($_SESSION["cuenta"])){
        header("location:index.php");
    }
?>