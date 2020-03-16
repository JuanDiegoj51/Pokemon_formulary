<?php include("../includes/header.php") ?>
<?php include("../includes/connect.php") ?>


    <div class="contenedor-form">
        <div class="toggle">
            <span> Crear cuenta </span>
        </div>

        <div class="formulario">
            <h3> Buscar </h3> <br/>
            <form action="../includes/search.php" method="get">
                <input type="text" name="username" placeholder="Nickname" required>
                <input type="submit" name="buscar" value="Buscar Username">
                
                
            </form>
        </div>

        <div class="formulario">
            <h3>Crea tu cuenta</h3><br/>
            <form action="../includes/save.php"method="post">
                 <p> <input type="text" placeholder="Nickname" name="username" required>
                   <input type="password" placeholder="Contraseña" name="contraseña">
                  <input type="email" placeholder="Correo electronico" name="correo" required></p>
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
                <h5>¿Te gustó el formulario? </h5> <br/>
                    <textarea name="comentario" rows="5" cols="50" placeholder="Deja tu comentario"></textarea>
                    <input type="submit" name="ingresar" value="Ingresar el formulario">
            </form>
        </div>
    </div>
    <?php include("../includes/save.php");?>
    <?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>                    
        </div>
        <?php session_unset(); } ?>                
    <?php include("../includes/footer.php"); ?>
    