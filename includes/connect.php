<?php
    if (!isset($_SESSION)) { session_start(); }
    $conexion = mysqli_connect(
        'localhost',
        'root',
        '',
        'formulario'
        ) or die(mysqli_erro($mysqli));
?>