<?php if(isset($_SESSION["email"])){ echo '<script> window.location = "login"; </script>'; exit();}elseif(isset($_SESSION["email"])){ echo '<script>window.location = "inicio";</script>'; exit();}?>

<div class="container">
    <div class="myCard">
      <div class="row">
        <div class="col-md-6">
          <div class="myLeftCtn">
            <form id="formlogin" class="myForm text-center" method="POST">
             <?php
                $respuesta = new Core_Controlador();
                $respuesta -> ingreso_controlador();
            ?>
              <header>Iniciar sesión</header>
              <div class="form-group">
                <i class="fas fa-user"></i>
                <input class="myInput" type="text" placeholder="Correo Electronico" id="ing_email" name="ing_email" required />
              </div>

              <div class="form-group">
                <i class="fas fa-lock"></i>
                <input class="myInput" type="password" id="ing_contrasena" name="ing_contrasena" placeholder="contrasena" required />
              </div>

              <input type="submit" class="butt" value="Iniciar sesión" />
              <input type="submit" class="butt-forg" value="¿Olvidó la contraseña?" disabled />
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="myRightCtn">
            <div class="box">
              <header>Bienvenido a Gestor-e</header>

              <p>
                Gestor-e es una herramienta web la cual le permitirá ayudarlo
                con la gestion de inventario dentro de su empresa.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  include "view/modulos/core/footer.php";
?>