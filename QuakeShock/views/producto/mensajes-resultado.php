<?php
if (isset($_SESSION['resultado_crear_producto'])) {

    if ($_SESSION['resultado_crear_producto'] == "exito") {
        ?>
        <script type="text/javascript">
            var msg = "Producto creado exitosamente!";
            mostrarMensaje(msg);
            
        </script>
        <?php
        $_SESSION['resultado_crear_producto'] = null;
    } else {
        if ($_SESSION['resultado_crear_producto'] == "fallo") {
            ?>
            <script type="text/javascript">
                var msg = "Error al crear producto!";
                mostrarMensaje(msg);
            </script>
            
            <?php
            $_SESSION['resultado_crear_producto'] = null;
        }
    }
}

if (isset($_SESSION['resultado_eliminar_producto'])) {

    if ($_SESSION['resultado_eliminar_producto'] == "exito") {
        ?>
        <script type="text/javascript">
            var msg = "Producto eliminado exitosamente!";
            mostrarMensaje(msg);
            
        </script>
        <?php
        $_SESSION['resultado_eliminar_producto'] = null;
    } else {
        if ($_SESSION['resultado_eliminar_producto'] == "fallo") {
            ?>
            <script type="text/javascript">
                var msg = "Error al eliminar producto!";
                mostrarMensaje(msg);
            </script>
            
            <?php
            $_SESSION['resultado_eliminar_producto'] = null;
        }
    }
}
if (isset($_SESSION['resultado_modificar_producto'])) {

    if ($_SESSION['resultado_modificar_producto'] == "exito") {
        ?>
        <script type="text/javascript">
            var msg = "Producto modificado exitosamente!";
            mostrarMensaje(msg);
            
        </script>
        <?php
        $_SESSION['resultado_modificar_producto'] = null;
    } else {
        if ($_SESSION['resultado_modificar_producto'] == "fallo") {
            ?>
            <script type="text/javascript">
                var msg = "Error al modificar producto!";
                mostrarMensaje(msg);
            </script>
            
            <?php
            $_SESSION['resultado_modificar_producto'] = null;
        }
    }
}