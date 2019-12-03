<?php
if (isset($_SESSION['resultado_crear_usuario'])) {

    if ($_SESSION['resultado_crear_usuario'] == "exito") {
        ?>
        <script type="text/javascript">
            var msg = "Usuario creado exitosamente!";
            mostrarMensaje(msg);
            
        </script>
        <?php
        $_SESSION['resultado_crear_usuario'] = null;
    } else {
        if ($_SESSION['resultado_crear_usuario'] == "fallo") {
            ?>
            <script type="text/javascript">
                var msg = "Error al crear usuario!";
                mostrarMensaje(msg);
            </script>
            
            <?php
            $_SESSION['resultado_crear_usuario'] = null;
        }
    }
}

if (isset($_SESSION['resultado_eliminar_usuario'])) {

    if ($_SESSION['resultado_eliminar_usuario'] == "exito") {
        ?>
        <script type="text/javascript">
            var msg = "Usuario eliminado exitosamente!";
            mostrarMensaje(msg);
            
        </script>
        <?php
        $_SESSION['resultado_eliminar_usuario'] = null;
    } else {
        if ($_SESSION['resultado_eliminar_usuario'] == "fallo") {
            ?>
            <script type="text/javascript">
                var msg = "Error al eliminar usuario!";
                mostrarMensaje(msg);
            </script>
            
            <?php
            $_SESSION['resultado_eliminar_usuario'] = null;
        }
    }
}