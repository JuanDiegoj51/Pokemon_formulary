<?php
    include("connect.php");
    if(isset($_GET["username"])){
        $nick = trim($_GET['username']);
        $query = "DELETE FROM `info_user` WHERE `info_user`.`nick` = '$nick' ";
        $rows = mysqli_query($conexion, $query);
        if ($rows){
                $_SESSION['message'] = 'Se han borrado los datos';
                $_SESSION['message_type'] = 'danger';
            }
        }else{
            $_SESSION['message'] = 'Verifique el Nickname';
            $_SESSION['message_type'] = 'warning';
        }
        header("Location: http://localhost/dashboard/p/public/index.php");
        
?>