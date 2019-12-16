<?php

ob_start();

require_once 'models/Favorito.php';

class FavoritoController {

    public function index() {
        utils::isLogged();
        $id_usuario = $_SESSION['identidad']->ID_USUARIO;
        $favorito = new Favorito();
        //Obtener favoritos del usuario:
        $favorito->setUsuario_id_usuario($id_usuario);
        $favoritos = $favorito->getProductosByUsuario($id_usuario);

        require_once 'views/favorito/index.php';
    }

    public function add() {
        if (isset($_SESSION['identidad'])) {
            if ($_GET['id']) {
                $id_usuario = $_SESSION['identidad']->ID_USUARIO;
                $id_producto = $_GET['id'];
                $favorito = new Favorito();
                $favorito->setUsuario_id_usuario($id_usuario);

                $favoritos = $favorito->getAllByUser();

                while ($fav = $favoritos->fetch_object()) {
                    if ($fav->Producto_ID_PRODUCTO != $id_producto) {
                        $igual = false;
                    } else {
                        $igual = true;
                    }
                }
                if ($igual) {
                    ?>
                    <script type = "text/javascript">
                        var msg = "Ya tienes este producto en favoritos!";
                        mostrarMensaje(msg);
                    </script>
                    <?php

                    header("refresh:2;url=" . base_url . 'producto/detalle&id=' .$id_producto);
                } else {
                    $favorito->setProducto_id_producto($id_producto);
                    $resultado = $favorito->save();
                    if ($resultado) {
                        $_SESSION['resultado_add_favorito'] = 'exito';
                        header("Location: " . base_url . 'favorito/index');
                    } else {
                        $_SESSION['resultado_add_favorito'] = 'fallo';
                        header("Location: " . base_url);
                    }
                }
            } else {
                header("Location: " . base_url);
            }
        } else {
            ?>
            <script type="text/javascript">
                var msg = "Error! debes iniciar sesión";
                mostrarMensaje(msg);
            </script>
            <?php

            header("refresh:2;url=" . base_url . 'inicio/qs');
        }
    }

    public function eliminar() {
        utils::isLogged();

        if ($_GET['id']) {
            $id_favorito = $_GET['id'];
            $favorito = new Favorito();
            $favorito->setId_favorito($id_favorito);
            $resultado = $favorito->delete();

            if ($resultado) {
                $_SESSION['resultado_eliminar_favorito'] = 'exito';
                header("Location: " . base_url . 'favorito/index');
            } else {
                $_SESSION['resultado_eliminar_favorito'] = 'fallo';
                header("Location: " . base_url . 'favorito/index');
            }
            header("Location: " . base_url . 'favorito/index');
        } else {
            $_SESSION['resultado_eliminar_favorito'] = 'fallo';
            header("Location: " . base_url . 'favorito/index');
        }
    }

}

ob_end_flush();

