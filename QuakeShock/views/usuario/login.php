<?php
//MENSAJE DE LOGOUT
if (isset($_SESSION['logout'])) {

    if ($_SESSION['logout'] == "exito") {
        ?>
        <script type="text/javascript">
            var msg = "Sesión cerrada!";
            mostrarMensaje(msg);
        </script>
        <?php
        $_SESSION['logout'] = null;
    } else {
        if ($_SESSION['logout'] == "fallo") {
            ?>
            <script type="text/javascript">
                var msg = "Error al cerrar sesión!";
                mostrarMensaje(msg);
            </script>
            
            <?php
            $_SESSION['logout'] = null;
        }
    }
}

//MENSAJE DE RESULTADO DE LOGIN
if (isset($_SESSION['resultado_login'])) {

    if ($_SESSION['resultado_login'] == 'exito') {
        $nombre = $_SESSION['identidad']->NOMBRE;
        ?>
        <script type="text/javascript">
            var msg = "Bienvenido <?=$nombre?>!";
            mostrarMensaje(msg);
        </script>
        <?php
        $_SESSION['resultado_login'] = null;
    } else {
        if ($_SESSION['resultado_login'] == "fallo") {
            ?>
            <script type="text/javascript">
                var msg = "Error al iniciar sesión!";
                mostrarMensaje(msg);
                verLogin();
            </script>
            
            <?php
            $_SESSION['resultado_login'] = null;
        }
    }
}

?>
<div class="lightbox-login">
    <img src="<?=base_url?>assets/img/icons/x.png" onclick='cerrarTodo()' class='cerrar'>
    <div class="conten-login-text">
        <h2 class="login-text">Ingresa tus datos</h2>
    </div>
    <div class="conten-login-form">
        <form id="login-form" action="<?=base_url?>usuario/login" method="post">
            <div class="conten-login-correo">
                <label for="txtCorreo" class="lbl-login">Correo: </label>
                <input type="email" name="txtCorreoLogin" id="txtCorreoLogin" value="" placeholder="correo@mail.com" required data-parsley-error-message="<p id='error-email'>Ingrese un correo valido!</p>">
            </div>
            <div class="conten-login-clave">
                <label for="txtPassword" class="lbl-login">Contraseña: </label>
                <input type="password" name="txtClaveLogin" id="txtClaveLogin" value="" placeholder="******" required minlength="6" data-parsley-error-message="<p id='error-password'>Mínimo 6 caracteres!</p>">
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