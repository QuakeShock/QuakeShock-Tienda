<?php

ob_start();

require_once 'models/Usuario.php';

class AdminController {

    public function gestion_usuarios() {
        require_once 'views/admin/gestion-usuarios.php';
    }

    public function crear_usuario() {
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setRut($_POST['txtRut']);
            $usuario->setNombre($_POST['txtNombre']);
            $usuario->setApellidos($_POST['txtApellidos']);
            $usuario->setTelefono($_POST['txtTelefono']);
            $usuario->setCorreo($_POST['txtCorreoRegistro']);
            $usuario->setClave($_POST['txtClaveRegistro']);
            $usuario->setTipo($_POST['radioTipo']);
            $resultado = $usuario->save();

            if ($resultado) {
                $_SESSION['resultado_crear_usuario'] = "exito";
            } else {
                $_SESSION['resultado_crear_usuario'] = "fallo";
            }
        } else {
            $_SESSION['resultado_crear_usuario'] = "fallo";
        }
        header("Location:" . base_url . 'admin/gestion_usuarios');
    }

    public function eliminar_usuario() {
        $usuario = new Usuario();
        $resultado = $usuario->delete($_POST['txtRut']);
        
        if ($resultado) {
            $_SESSION['resultado_eliminar_usuario'] = "exito";
        } else {
            $_SESSION['resultado_eliminar_usuario'] = "fallo";
        }
        header("Location:" . base_url . 'admin/gestion_usuarios');
    }

    public function modificar_usuario() {
        
    }

    public function buscar_usuario() {
        
    }

    public function ver_usuarios() {
        $usuario = new Usuario();
        $usuarios = $usuario->getAll();
        require_once 'views/admin/ver-usuarios.php';
    }

}

ob_end_flush();
