<?php include("../includes/header.php") ?>
<?php include("../includes/connect.php") ?>
    <nav class="navbar navbar-dark" style="background-color: #ff851b;">
        <div class="container">
            <a class="navbar-brand" href="index.php">Bienvenidos a Pokemon GO</a>
        </div>
    </nav>

    <div class="contenedor-form">
        <div class="toggle">
            <span> Crear cuenta </span>
        </div>

        <div class="formulario">
            <h3> Actualizar </h3> <br/>
            <form action="../includes/edit.php" method="get">
                <input type="text" name="username" placeholder="Nickname" required>
                <input type="submit" name="edit" value="Editar datos">

            </form>
            <br/> <h3> Eliminar </h3><br/>
            <form action="../includes/delete.php" method="get">
                <input type="text" name="username" placeholder="Nickname" required> 
                <input type="submit" name="delete" value="Eliminar datos">
            </form>
        </div>

        <div class="formulario">
            <h3>Crea tu cuenta</h3><br/>
            <form action="../includes/save.php" method="post">
                 <p> <input type="text" placeholder="Nickname" name="username" required>
                   <input type="password" placeholder="Contraseña" name="contraseña" required>
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
    