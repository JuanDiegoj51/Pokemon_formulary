<?php
    include('connect.php');

    if(isset($_POST["ingresar"])) {
        if (strlen($_POST["username"]) >=1
        && strlen($_POST["contraseña"]) >=1
        && strlen($_POST["correo"]) >=1
        && strlen($_POST['genero']) >=1
        && strlen($_POST['poke']) >=1
        && strlen($_POST["pokeparada"]) >=1
        && strlen($_POST["comentario"]) >=1) {
            $nick = trim($_POST['username']);
            $password = trim($_POST['contraseña']);
            $correo = trim($_POST["correo"]);
            $genero =  trim($_POST["genero"]);
            $poke = trim($_POST["poke"]);
            $pokeparada = trim($_POST["pokeparada"]);
            $comentario = trim($_POST["comentario"]);
    
            $query = "INSERT INTO info_user(nick, passw, correo, genero, pokemon, pokeparada, usercom) VALUES 
            ('$nick','$password','$correo','$genero','$poke','$pokeparada','$comentario')";
            $rows = mysqli_query($conexion,$query);
            if($rows){
                $_SESSION['message'] = 'Se han ingresado los datos';
                $_SESSION['message_type'] = 'success';
            }else{
                $_SESSION['message'] = 'No se pudieron ingresar los datos';
                $_SESSION['message_type'] = 'danger';
            }
        }   
        else{
                $_SESSION['message'] = 'Porfavor, llene las casillas';
                $_SESSION['message_type'] = 'warning';
            }


            header("Location: http://localhost/dashboard/p/public/index.php");
    }
    
    /*$sql = "UPDATE `info_user` SET `nick` = \'Mike\' WHERE `info_user`.`nick` = \'Rose\'";*/
?>


