<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'config/parameters.php';

class utils {

    public static function isAdmin() {
        if (isset($_SESSION['tipo_usuario'])) {
            if ($_SESSION['tipo_usuario'] == 'admin') {
                return true;
            } else {
                header("Location: " . base_url);
            }
        }
    }

    public static function isEmpleado() {
        if (isset($_SESSION['tipo_usuario'])) {
            if ($_SESSION['tipo_usuario'] == 'empleado') {
                return true;
            } else {
                header("Location: " . base_url);
            }
        } else {
            header("Location: " . base_url);
        }
    }

    public static function isLogged() {
        if (isset($_SESSION['identidad'])) {
            return true;
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

    public static function getCategorias() {
        require_once 'models/Categoria.php';
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        return $categorias;
    }

    public static function getCategoria($id) {
        $result = false;
        require_once 'models/Categoria.php';
        $categoria = new Categoria();
        $categoria->setId_categoria($id);
        $cat = $categoria->getCategoriaById();

        if ($cat) {
            $result = $cat->NOMBRE;
        }
        return $result;
    }

    public static function statsCarrito() {
        $stats = array(
            'count' => 0,
            'total' => 0
        );

        if (isset($_SESSION['carrito'])) {
            $stats['count'] = count($_SESSION['carrito']);

            foreach ($_SESSION['carrito'] as $indice => $producto) {
                $stats['total'] += $producto['precio'] * $producto['unidades'];
            }
        }
        return $stats;
    }

    public static function getDirecciones($id_usuario) {
        require_once 'models/Direccion.php';
        $direccion = new Direccion();
        $direccion->setUsuario_id_usuario($id_usuario);
        $direcciones = $direccion->getAll();

        return $direcciones;
    }

}
