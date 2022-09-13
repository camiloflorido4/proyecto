<div class="container">
    <div class="myCard">
      <div class="row">
        <div class="col-md-6">
          <div class="myLeftCtn">
            <form id="formlogin" class="myForm text-center" action="login.php" method="POST">
              <header>Iniciar sesión</header>
              <div class="form-group">
                <i class="fas fa-user"></i>
                <input class="myInput" type="text" placeholder="Nombre de usuario" id="username" name="username" required />
              </div>

              <div class="form-group">
                <i class="fas fa-lock"></i>
                <input class="myInput" type="password" id="password" name="contraseña" placeholder="Contraseña" required />
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