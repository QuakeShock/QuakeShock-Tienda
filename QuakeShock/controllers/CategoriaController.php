<?php

ob_start();

require_once 'models/Categoria.php';
require_once 'models/Producto.php';

class CategoriaController {

    public function index() {
        $categoria = new Categoria();
        $id = $_GET['id'];
        $categoria->setId_categoria($id);
        $cat = $categoria->getCategoriaById();
        $producto = new Producto();
        $productos = $producto->getProductosByCat($cat->ID_CATEGORIA);
        require_once 'views/producto/catalogo-categoria.php';
    }

    public function guardar() {
        utils::isEmpleado();
        if (isset($_POST)) {
            $categoria = new Categoria();
            $categoria->setNombre($_POST['txtCategoria']);

            if ($_FILES['img'] != null) {
                $archivo = $_FILES['img'];
                $nombre_archivo = $archivo['name'];
                $tipo_archivo = $archivo['type'];

                if ($tipo_archivo == "image/jpg" || $tipo_archivo == "image/jpeg" || $tipo_archivo == "image/png") {
                    if (!is_dir('uploads/images')) {
                        mkdir('uploads/images', 0777, true);
                    }
                    move_uploaded_file($archivo['tmp_name'], 'uploads/images/' . $nombre_archivo);
                    $categoria->setImagen($nombre_archivo);
                } else {
                    $_SESSION['resultado_crear_categoria'] = "fallo_tipo_archivo";
                }
            }
            $resultado = $categoria->save();
            if ($resultado) {
                $_SESSION['resultado_crear_categoria'] = "exito";
            } else {
                $_SESSION['resultado_crear_categoria'] = "fallo";
            }
        } else {
            $_SESSION['resultado_crear_categoria'] = "fallo";
        }
        header("Location:" . base_url . 'producto/gestion');
    }

    public function eliminar() {
        utils::isEmpleado();
        if (isset($_POST)) {

            $categoria = new Categoria();
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                var_dump($id);
                $categoria->setId_categoria($id);
                $cat = $categoria->getCategoriaById();
                $img = $cat->IMAGEN;
                $resultado = $categoria->delete();
            } else {
                $id = $_POST['txtId'];
                $categoria->setId_categoria($id);
                $cat = $categoria->getCategoriaById();
                $img = $cat->IMAGEN;
                $resultado = $categoria->delete();
            }
            if ($resultado) {
                $_SESSION['resultado_eliminar_categoria'] = "exito";
                
                if (file_exists('uploads/images/' . $img)) {
                    unlink('uploads/images/' . $img);
                }
            } else {
                $_SESSION['resultado_eliminar_categoria'] = "fallo";
            }
        } else {
            header("Location:" . base_url . 'producto/gestion');
        }
        header("Location:" . base_url . 'producto/gestion');
    }

    public function ver() {
        utils::isEmpleado();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        require_once 'views/categoria/ver-categorias.php';
    }

}

ob_end_flush();

