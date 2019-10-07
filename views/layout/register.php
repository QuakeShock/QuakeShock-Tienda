        <div class="exito-login-lightbox">
          <div class="exito-login-container">
            <h2 class="exito-login-ajax"></h2>
          </div>
        </div>
        <div class="lightbox-register">
            <div class="register-text-container">
              <h2 class="register-text">Crea tu cuenta</h2>
            </div>
            <div class="register-form-container">
              <form id="registerform" action="php/procesarRegister.php" method="post">
                <div class="register-nombre-container">
                  <label for="txtNombre" class="labelRegister">Nombre: </label>
                  <input type="text" name="txtNombre" id="txtNombre" value="" placeholder="Juan" required data-parsley-error-message="<p id='error-nombre'>Ingresé su nombre!</p>">
                </div>
                <div class="register-apellido-container">
                  <label for="txtApellido" class="labelRegister">Apellido: </label>
                  <input type="text" name="txtApellido" id="txtApellido" value="" placeholder="Vega" required data-parsley-error-message="<p id='error-apellido'>Ingresé su apellido!</p>">
                </div>
                <div class="register-correo-container">
                  <label for="txtCorreoRegister" class="labelRegister">Correo: </label>
                  <input type="email" name="txtCorreoRegister" id="txtCorreoRegister" value="" placeholder="correo@mail.com" required data-parsley-error-message="<p id='error-email-reg'>Ingresé un correo valido!</p>">
                </div>
                <div class="register-password-container">
                  <label for="txtPasswordRegister" class="labelRegister">Contraseña: </label>
                  <input type="password" name="txtPasswordRegister" id="txtPasswordRegister" value="" placeholder="Mínimo 6 caracteres" minlength="6" required data-parsley-error-message="<p id='error-password-reg'>Mínimo 6 caracteres</p>">
                </div>
                <div class="register-password-container">
                  <input type="password" name="txtPasswordValidate" id="txtPasswordValidate" value="" placeholder="Repetir contraseña"  data-parsley-equalto="#txtPasswordRegister" required data-parsley-error-message="<p id='error-password-repetir'>Contraseña no coincide!</p>">
                </div>
                <div class="register-terminos-container">
                  <input type="checkbox" name="terms-checkbox" id="terms-checkbox" value="" required data-parsley-error-message="<p id='error-terminos'>Acepté los terminos y condiciones!</p>">
                  <label for="terms-checkbox" class="acepto-los"> Acepto los </label><a class="terminosycondiciones-link" href="#">Terminos y condiciones</a>
                </div>
                <div class="register-button-container">
                  <input type="submit" name="btnRegister" class="btnRegister" value="Registrarse">
                </div>
              </form>
              <div class="already-registered-container">
                <p class="already-registered-text">¿Ya tienes cuenta?</p><a class="already-registered-link" href="#">Inicia sesión aquí</a>
              </div>
            </div>
        </div>