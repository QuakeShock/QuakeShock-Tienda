        <div class="darkbox">
        </div>
        <div class="lightbox-login">
          <div class="login-text-container">
            <h2 class="login-text">Ingresa tus datos</h2>
          </div>
          <div class="login-form-container">
            <form id="login-form" action="php/procesarLogin.php" method="post">
              <div class="conten-login-correo">
                <label for="txtCorreo" class="lbl-login">Correo: </label>
                <input type="email" name="txtCorreo" id="txtCorreo" value="" placeholder="correo@mail.com" required data-parsley-error-message="<p id='error-email'>Ingrese un correo valido!</p>">
              </div>
              <div class="conten-login-clave">
                <label for="txtPassword" class="labelLogin">Contraseña: </label>
                <input type="password" name="txtClave" id="txtClave" value="" placeholder="******" required minlength="6" data-parsley-error-message="<p id='error-password'>Mínimo 6 caracteres!</p>">
              </div>
              <div class="conten-btn-login">
                <input type="submit" name="btnLogin" class="btn-login" value="Iniciar Sesión">
              </div>
            </form>
            <div class="conten-no-registrado">
              <p class="no-registrado-text">¿Aún no tienes cuenta?</p><a class="no-registrado-link" href="#">Registrate aquí</a>
            </div>
          </div>
        </div>