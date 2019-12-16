<?php
if (isset($_SESSION['resultado_eliminar_favorito'])) {

    if ($_SESSION['resultado_eliminar_favorito'] == "exito") {
        ?>
        <script type="text/javascript">
            var msg = "Favorito eliminado exitosamente!";
            mostrarMensaje(msg);
            
        </script>
        <?php
        $_SESSION['resultado_eliminar_favorito'] = null;
    } else {
        if ($_SESSION['resultado_eliminar_favorito'] == "fallo") {
            ?>
            <script type="text/javascript">
                var msg = "Error al eliminar favorito!";
                mostrarMensaje(msg);
            </script>
            
            <?php
            $_SESSION['resultado_eliminar_favorito'] = null;
        }
    }
}

if (isset($_SESSION['resultado_agregar_favorito'])) {

    if ($_SESSION['resultado_agregar_favorito'] == "exito") {
        ?>
        <script type="text/javascript">
            var msg = "Producto agregado a favoritos!";
            mostrarMensaje(msg);
            
        </script>
        <?php
        $_SESSION['resultado_agregar_favorito'] = null;
    } else {
        if ($_SESSION['resultado_agregar_favorito'] == "fallo") {
            ?>
            <script type="text/javascript">
                var msg = "Error al agregar a favoritos!";
                mostrarMensaje(msg);
            </script>
            
            <?php
            $_SESSION['resultado_agregar_favorito'] = null;
        }
    }
}