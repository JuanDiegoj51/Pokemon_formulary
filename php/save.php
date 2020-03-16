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
                ?>
                <h3 class="ok">¡Ingresado de manera correcta!</h3>
                <?php
            }else{
                ?>
                <div class="alert alert-warning" role="alert">
                    No se pudo ingresar la información 
                </div>
                <?php
            }
        }   
        else{
            ?>
            <h3 class="bad">Porfavor, complete las casillas</3>
            <?php
            }
    }
    /*$sql = "UPDATE `info_user` SET `nick` = \'Mike\' WHERE `info_user`.`nick` = \'Rose\'";*/
?>


