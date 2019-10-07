        <div class="darkbox">
        </div>
        <div class="lightbox-login">
          <div class="login-text-container">
            <h2 class="login-text">Ingresa tus datos</h2>
          </div>
          <div class="login-form-container">
            <form id="loginform" action="php/procesarLogin.php" method="post">
              <div class="login-correo-container">
                <label for="txtCorreo" class="labelLogin">Correo: </label>
                <input type="email" name="txtCorreo" id="txtCorreo" value="" placeholder="correo@mail.com" required data-parsley-error-message="<p id='error-email'>Ingrese un correo valido!</p>">
              </div>
              <div class="login-password-container">
                <label for="txtPassword" class="labelLogin">Contraseña: </label>
                <input type="password" name="txtPassword" id="txtPassword" value="" placeholder="******" required minlength="6" data-parsley-error-message="<p id='error-password'>Mínimo 6 caracteres!</p>">
              </div>
              <div class="login-button-container">
                <input type="submit" name="btnLogin" class="btnLogin" value="Iniciar Sesión">
              </div>
            </form>
            <div class="not-registered-container">
              <p class="not-registered-text">¿Aún no tienes cuenta?</p><a class="not-registered-link" href="#">Registrate aquí</a>
            </div>
          </div>
        </div>