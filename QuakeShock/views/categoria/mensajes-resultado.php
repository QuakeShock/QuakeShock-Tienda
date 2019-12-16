<?php
if (isset($_SESSION['resultado_crear_categoria'])) {

    if ($_SESSION['resultado_crear_categoria'] == "exito") {
        ?>
        <script type="text/javascript">
            var msg = "Categoria creada exitosamente!";
            mostrarMensaje(msg);
            
        </script>
        <?php
        $_SESSION['resultado_crear_categoria'] = null;
    } else {
        if ($_SESSION['resultado_crear_categoria'] == "fallo") {
            ?>
            <script type="text/javascript">
                var msg = "Error al crear categoria!";
                mostrarMensaje(msg);
            </script>
            
            <?php
            $_SESSION['resultado_crear_categoria'] = null;
        }
    }
}

if (isset($_SESSION['resultado_eliminar_categoria'])) {

    if ($_SESSION['resultado_eliminar_categoria'] == "exito") {
        ?>
        <script type="text/javascript">
            var msg = "Categoria eliminada exitosamente!";
            mostrarMensaje(msg);
            
        </script>
        <?php
        $_SESSION['resultado_eliminar_categoria'] = null;
    } else {
        if ($_SESSION['resultado_eliminar_categoria'] == "fallo") {
            ?>
            <script type="text/javascript">
                var msg = "Error al eliminar categoria!";
                mostrarMensaje(msg);
            </script>
            
            <?php
            $_SESSION['resultado_eliminar_categoria'] = null;
        }
    }
}