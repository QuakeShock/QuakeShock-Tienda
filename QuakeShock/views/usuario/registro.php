<?php
if (isset($_SESSION['resultado_registrarse'])) {

    if ($_SESSION['resultado_registrarse'] == "exito") {
        ?>
        <script type="text/javascript">
            var msg = "Registro exitoso!";
            mostrarMensaje(msg);
            
        </script>
        <?php
        $_SESSION['resultado_registrarse'] = null;
    } else {
        if ($_SESSION['resultado_registrarse'] == "fallo") {
            echo "fallo";
            ?>
            <script type="text/javascript">
                var msg = "Error al registrarse!";
                mostrarMensaje(msg);
            </script>
            
            <?php
            $_SESSION['resultado_registrarse'] = null;
        }
    }
}
?>
<div class="lightbox-registro">
    <img src="<?=base_url?>assets/img/icons/x.png" onclick='cerrarTodo()' class='cerrar'>
    <div class="conten-registro-text">
        <h2 class="registro-text">Crea tu cuenta</h2>
    </div>
    <div class="conten-registro-form">
        <form id="registro-form" action="<?=base_url?>usuario/registrarse" method="post">
            <div class="conten-registro-rut">
                <label for="txtRut" class="lbl-registro">RUT: </label>
                <input type="text" name="txtRut" id="txtRut" value="" placeholder="19829063-7" required data-parsley-error-message="<p id='error-rut'>Ingresé su rut sin puntos y con guión!</p>">
            </div>
            <div class="conten-registro-nombre">
                <label for="txtNombre" class="lbl-registro">Nombre: </label>
                <input type="text" name="txtNombre" id="txtNombre" value="" placeholder="Juan" required data-parsley-error-message="<p id='error-nombre'>Ingresé sus nombres!</p>">
            </div>
            <div class="conten-registro-apellido">
                <label for="txtApellido" class="lbl-registro">Apellidos: </label>
                <input type="text" name="txtApellidos" id="txtApellido" value="" placeholder="Vega" required data-parsley-error-message="<p id='error-apellido'>Ingresé sus apellidos!</p>">
            </div>
            <div class="conten-registro-telefono">
                <label for="txtTelefono" class="lbl-registro">Telefono: </label>
                <input type="text" name="txtTelefono" id="txtTelefono" value="" placeholder="56930310997" required data-parsley-error-message="<p id='error-telefono'>Ingresé sus telefono!</p>">
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
                <input type="submit" name="btnRegister" class="btn-registro" value="Registrarse">
            </div>
        </form>
        <div class="conten-ya-registrado">
            <p class="ya-registrado-text">¿Ya tienes cuenta?</p><a class="ya-registrado-link" href="#">Inicia sesión aquí</a>
        </div>
    </div>
</div>