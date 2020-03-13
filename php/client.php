<?php
    include('connect.php');

    if(isset($_POST["submit"])) {
        if (strlen($_POST["username"]) >=1
        && strlen($_POST["contraseña"]) >=1
        && strlen($_POST["correo"]) >=1
        && strlen($_POST['sexo']) >=1
        && strlen($_POST['poke']) >=1
        && strlen($_POST["pokeparada"]) >=1
        && strlen($_POST["comentario"]) >=1) {
            $nick = trim($_POST['username']);
            $password = trim($_POST['contraseña']);
            $correo = trim($_POST["correo"]);
            $sexo =  trim($_POST["sexo"]);
            $poke = trim($_POST["poke"]);
            $pokeparada = trim($_POST["pokeparada"]);
            $comentario = trim($_POST["comentario"]);
    
            $query = "INSERT INTO info_user(nick, passw, correo, genero, pokemon, pokeparada, usercom) VALUES 
            ('$nick','$password','$correo','$sexo','$poke','$pokeparada','$comentario')";
            $rows = mysqli_query($conexion,$query);
            if($rows){
                ?>
                <h3 class="ok">¡Ingresado de manera correcta!</h3>
                <?php
            }else{
                ?>
                <h3 class="bad">¡No se realizo el ingreso</h3>
                <?php
            }
        }   
        else{
            ?>
            <h3 class="bad">Porfavor, complete las casillas</3>
            <?php
            }
    }
?>

