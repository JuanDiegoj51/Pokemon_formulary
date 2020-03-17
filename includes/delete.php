<?php
    include("connect.php");
    if(isset($_GET["username"])){   
        $nick = trim($_GET['username']);
        $query = "SELECT * FROM `info_user` WHERE `info_user`.`nick` = '$nick' ";
        $rows = mysqli_query($conexion, $query);
        if ($row=mysqli_fetch_array($rows)){
            $delete = "DELETE FROM `info_user` WHERE `info_user`.`nick` = '$nick' ";
            $del = mysqli_query($conexion, $delete);
            $_SESSION['message'] = 'Se han eliminado los datos';
            $_SESSION['message_type'] = 'danger';
        }else{
            $_SESSION['message'] = 'Verifique el usuario';
            $_SESSION['message_type'] = 'warning';
            }
            header("Location: http://localhost/dashboard/p/public/index.php");
        }
?>