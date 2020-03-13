<?php
    include('config.php');
    $conexion = mysqli_connect($dbhost, $dbuser, $dbpassw) or 
    die (mysqli_error());
    mysqli_select_db($conexion, $dbname);
?>