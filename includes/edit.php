<?php
    include('connect.php');
    if(isset($_GET['username'])){
        $nick = trim($_GET['username']);
        $query = "SELECT * FROM `info_user` WHERE `nick` LIKE '$nick' ";
        $rows = mysqli_query($conexion, $query);
        if(mysqli_num_rows($rows) == 1){
            $row = mysqli_fetch_array($rows);
            $nick = $row['0'];
            $password = $row['1'];
            $correo = $row['2'];
            $genero =  $row['3'];
            $poke = $row['4'];
            $pokeparada = $row['5'];
            $comentario = $row['6'];
        }else{
            echo "No se encuentra el nickname";
        }
    }

?>

<?php include("header.php"); ?>

    <nav class="navbar navbar-dark" style="background-color: #ff851b;">
        <div class="container">
            <a class="navbar-brand" href="edit.php?username=<?php echo $row['0']; ?>&edit=Editar+datos">Bienvenidos a Pokemon GO</a>
        </div>
    </nav>

    <div class="contenedor-form">
        <form action="">
            <h3> Actualiza tus datos </h3> <br/>
            <h6> Nickname </h6>
            <input type="text" name="username" value="<?php echo $row['0'] ?> ">
            <h6> Contraseña </h6>
            <input type="password" name="username" value="<?php echo $row['1']; ?>">
            <h6> Correo </h6>
            <input type="email" name="correo" value="<?php echo $row['2']; ?>">

            <div class="radio-group">
                  <h5>Genero</h5>
                      <label class="radio">
                          <input type="radio" name="genero" value="Hombre">Hombre 
                          <span></span>
                      </label>
                      <label class="radio">
                          <input type="radio" name="genero" value="Mujer"> Mujer
                          <span></span>
                      </label>
                </div>
                <br/>
                <div class="check">
                <h5>¿Cual es el pokemon que más te gusta?</h5> <br/>
                    <label class="radius">
                        <input type="radio" name="poke" value="Pikachu"> Pikachu
                        <span></span>
                        </label>
                    <label class="radius">
                      <input type="radio" name="poke" value="Chikorita"> Chikorita
                        <span></span>
                        </label>
                    <label class="radius">
                      <input type="radio" name="poke" value="jigglypuff"> Jigglypuff
                        <span></span>
                        </label>
                    <label class="radius">
                      <input type="radio" name="poke" value="Dratini"> Dratini
                        <span></span>
                        </label>
                </div>
                <br/>
                <h5>¿En que pokeparada estas ubicado?</h5><br/>
                
                <div class="group-select">
                    <select class="custom-select" name="pokeparada" style="width: 210px;">
                        <option selected>Selecciona tu pokeparada:</option>
                        <option value="colombia">Colombia</option>
                        <option value="brasil">Brasil</option>
                        <option value="argentina">Argentina</option>
                        <option value="estadosunidos">Estados Unidos</option>
                        <option value="mexico">Mexico</option>
                    </select>
                </div>
                <br/>
                <h5> ¿Te gustó el formulario? </h5>
                <textarea name="comentario" cols="50" rows="5" placeholder="<?php echo $comentario; ?>"></textarea>
                <input type="submit" name="actualizar" value="Actualizar" href="#">
        
        </form>

    </div>

<?php include("footer.php"); ?>