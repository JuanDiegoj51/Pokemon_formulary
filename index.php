<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>POKEMON GO Formulario</title>
        <link href="../p/Styles/Lillipup.png" type="image/x-icon" rel="shorcut icon" />
        <link rel="stylesheet" href="../p/Styles/estilos.css">
        <script type="text/javascript" src="../p/Scripts/jquery-3.1.1.min.js"></script>
        
        <h1> Bienvenido al registro de Pokemon GO</h1>
    </head>

    <body>
    <div class="contenedor-form">
        <div class="toggle">
            <span> Revisar y modificar </span>
        </div>
        <div class="formulario">
             <h2>Crea tu cuenta</h2><br/>
            <form method="post">
                 <p> <input type="text" placeholder="nickname" name="username" required>
                   <input type="password" placeholder="Contraseña" name="contraseña">
                  <input type="email" placeholder="Correo electronico" name="correo" required></p>
                <div class="radio-group">
                  <h4>Genero</h4>
                      <label class="radio">
                          <input type="radio" name="sexo" value="Hombre">Hombre 
                          <span></span>
                      </label>
                      <label class="radio">
                      <input type="radio" name="sexo" value="Mujer"> Mujer
                      <span></span>
                      </label>
                    
                </div>
                <br/>
                <div class="check">
                <h4>¿Cual es el pokemon que más te gusta?</h4> <br/>
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
                <h4>¿En que pokeparada estas ubicado?</h4><br/>
                <div class="custom-select" style="width: 210px;">
                <select name="pokeparada">
                    <option>Selecciona tu pokeparada:</option>
                    <option value"colombia">Colombia</option>
                    <option value"brasil">Brasil</option>
                    <option value"argentina">Argentina</option>
                    <option value"estadosunidos">Estados Unidos</option>
                    <option value"mexico">Mexico</option>
                </select>
                </div>
                <br/>
                <h4>¿Te gustó el formulario? </h4> <br/>
                    <textarea name="comentario" rows="5" cols="50" placeholder="Deja tu comentario"></textarea>
                    <input type="submit" name="submit" value="Ingresar el formulario">
            </form>
            <script src="../p/Scripts/poke.js"></script>
        </div>

        <div class="formulario 2">



        </div>
        <script src="Scripts/toggle.js"></script>
    </div>
    <?php
    include("../p/php/client.php");
    ?>
    </body>


</html>