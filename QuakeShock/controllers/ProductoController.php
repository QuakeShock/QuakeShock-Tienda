<?php

require_once 'models/producto.php';
require_once 'models/categoria.php';
require_once 'helpers/utils.php';

class ProductoController {

    public function index() {
        require_once('views/layout/galeria-index.php');
        require_once('views/layout/destacados-index.php');
    }

    public function catalogo() {
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        require_once('views/producto/catalogo-general.php');
    }
        public function categorias() {
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        require_once('views/categoria/categorias.php');
    }

    public function gestion() {
        utils::isEmpleado();
        $producto = new Producto();
        $productos = $producto->getAll();

        require_once 'views/producto/gestion-productos.php';
    }

    public function ver() {
        utils::isEmpleado();
        $producto = new Producto();
        $productos = $producto->getAll();
        require_once 'views/producto/ver-productos.php';
    }

    public function guardar() {
        utils::isEmpleado();
        if (isset($_POST)) {
            //            private $nombre;
//            private $descripcion;
//            private $precio;
//            private $stock;
//            private $categoria_id_categoria;
//            private $imagen1;
//            private $imagen2;
//            private $imagen3;
//            private $imagen4;[
//            private $imagen5;
//            private $imagen6;
            $nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : false;
            $descripcion = isset($_POST['txtDescripcion']) ? $_POST['txtDescripcion'] : false;
            $precio = isset($_POST['txtPrecio']) ? $_POST['txtPrecio'] : false;
            $stock = isset($_POST['txtStock']) ? $_POST['txtStock'] : false;
            $categoria = isset($_POST['lbCategoria']) ? $_POST['lbCategoria'] : false;
//            $img1 = isset($_POST['img1']) ? $_POST['img1'] : false;

            if ($nombre && $descripcion && $precio && $stock && $categoria) {
                $producto = new Producto();
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setCategoria_id_categoria($categoria);

                //Guardar las imagenes
                
                require_once 'helpers/guardar-img-producto.php';

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $producto->setId_producto($id);
                    $modify = $producto->modify();
                } else {
                    $save = $producto->save();
                }

                if (isset($save) && $save == true) {
                    $_SESSION['resultado_crear_producto'] = 'exito';
                } elseif ($save == false & $save != null) {
                    $_SESSION['resultado_crear_producto'] = 'fallo';
                }

                if (isset($modify) && $modify == true) {
                    $_SESSION['resultado_modificar_producto'] = 'exito';
                } elseif ($modify == false & $modify != null) {
                    $_SESSION['resultado_modificar_producto'] = 'fallo';
                }
            } else {
                $_SESSION['resultado_crear_producto'] = 'fallo';
            }
        } else {
            $_SESSION['resultado_crear_producto'] = 'fallo';
        }
        header("Location:" . base_url . 'producto/gestion');
    }

    public function eliminar() {
        utils::isEmpleado();
        if (isset($_GET['id'])) {
            $producto = new Producto();
            $id = $_GET['id'];
            $producto->setId_producto($id);
            $prod = $producto->getProductoById();
            $resultado = $producto->delete();
            if ($resultado) {
                $_SESSION['resultado_eliminar_producto'] = "exito";
                require_once 'helpers/eliminar-img-producto.php';
            } else {
                $_SESSION['resultado_eliminar_producto'] = "fallo";
            }
            header("Location:" . base_url . 'producto/gestion');
        } else {
            if (isset($_POST)) {
                $producto = new Producto();
                $id = $_POST['txtId'];
                $producto->setId_producto($id);
                $prod = $producto->getProductoById();

                $resultado = $producto->delete();
                if ($resultado) {
                    $_SESSION['resultado_eliminar_producto'] = "exito";
                    require_once 'helpers/eliminar-img-producto.php';
                } else {
                    $_SESSION['resultado_eliminar_producto'] = "fallo";
                }
                header("Location:" . base_url . 'producto/gestion');
            } else {
                header("Location:" . base_url . 'producto/gestion');
            }
        }
    }

    public function modificar() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $modificar = true;
            $producto = new Producto();
            $producto->setId_producto($id);

            $prod = $producto->getProductoById();

            require_once 'views/producto/lightbox-crear-producto.php';
        } else {
            header("Location:" . base_url . 'producto/gestion');
        }
    }

    public function btnModificar() {
        if (isset($_POST)) {
            $id = isset($_POST['txtId']) ? $_POST['txtId'] : false;
            $producto = new Producto();
            $producto->setId_producto($id);
            $prod = $producto->getProductoById();

            if ($prod) {
                header("Location:" . base_url . 'producto/modificar&id=' . $id);
            } else {
                header("Location:" . base_url . 'producto/gestion');
            }
        } else {
            header("Location:" . base_url . 'producto/gestion');
        }
    }

    public function detalle() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $producto = new Producto();
            $producto->setId_producto($id);

            $prod = $producto->getProductoById();

            require_once 'views/producto/detalle-producto.php';
        } else {
            header("Location:" . base_url . 'producto/gestion');
        }
    }

}
