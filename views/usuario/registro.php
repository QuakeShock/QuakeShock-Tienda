        <div class="lightbox-autenticacion-msg">
          <div class="conten-login-msg">
            <h2 class="autenticacion-ajax-msg"></h2>
          </div>
        </div>
        <div class="lightbox-registro">
            <div class="conten-registro-text">
              <h2 class="registro-text">Crea tu cuenta</h2>
            </div>
            <div class="conten-registro-form">
              <form id="registro-form" action="index.php?controller=usuario" method="post">
                <div class="conten-registro-nombre">
                  <label for="txtNombre" class="lbl-registro">Nombre: </label>
                  <input type="text" name="txtNombre" id="txtNombre" value="" placeholder="Juan" required data-parsley-error-message="<p id='error-nombre'>Ingresé su nombre!</p>">
                </div>
                <div class="conten-registro-apellido">
                  <label for="txtApellido" class="lbl-registro">Apellido: </label>
                  <input type="text" name="txtApellido" id="txtApellido" value="" placeholder="Vega" required data-parsley-error-message="<p id='error-apellido'>Ingresé su apellido!</p>">
                </div>
                <div class="conten-registro-correo">
                  <label for="txtCorreoRegister" class="lbl-registro">Correo: </label>
                  <input type="email" name="txtCorreoRegistro" id="txtCorreoRegistro" value="" placeholder="correo@mail.com" required data-parsley-error-message="<p id='error-email-reg'>Ingresé un correo valido!</p>">
                </div>
                <div class="conten-registro-clave">
                  <label for="txtPasswordRegister" class="lbl-registro">Contraseña: </label>
                  <input type="password" name="txtClaveRegistro" id="txtClaveRegistro" value="" placeholder="Mínimo 6 caracteres" minlength="6" required data-parsley-error-message="<p id='error-password-reg'>Mínimo 6 caracteres</p>">
                </div>
                <div class="conten-registro-clave">
                  <input type="password" name="txtClaveValidar" id="txtClaveValidar" value="" placeholder="Repetir contraseña"  data-parsley-equalto="#txtPasswordRegister" required data-parsley-error-message="<p id='error-password-repetir'>Contraseña no coincide!</p>">
                </div>
                <div class="conten-registro-terminos">
                  <input type="checkbox" name="terminos" id="cb-terminos" value="" required data-parsley-error-message="<p id='error-terminos'>Acepté los terminos y condiciones!</p>">
                  <label for="terms-checkbox" class="acepto-los"> Acepto los </label><a class="terminosycondiciones-link" href="#">Terminos y condiciones</a>
                </div>
                <div class="conten-btn-registro">
                  <input type="submit" name="btnRegister" class="btnRegistro" value="Registrarse">
                </div>
              </form>
              <div class="conten-ya-registrado">
                <p class="ya-registrado-text">¿Ya tienes cuenta?</p><a class="ya-registrado-link" href="#">Inicia sesión aquí</a>
              </div>
            </div>
        </div>