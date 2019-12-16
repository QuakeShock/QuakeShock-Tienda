<?php

ob_start();

require_once 'models/Usuario.php';

class UsuarioController {

    public function index() {
        header('Location:' . base_url . 'inicio/qs');
    }

    public function perfil() {
        require_once('views/usuario/perfil.php');
    }

    public function login() {
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setCorreo($_POST['txtCorreoLogin']);
            $usuario->setClave($_POST['txtClaveLogin']);
            $identidad = $usuario->login();
            if ($identidad && is_object($identidad)) {
                $_SESSION['identidad'] = $identidad;
                $_SESSION['nombre_usuario'] = $identidad->NOMBRE;
                $_SESSION['tipo_usuario'] = $identidad->TIPO;
                $_SESSION['resultado_login'] = 'exito';
            } else {
                $_SESSION['resultado_login'] = 'fallo';
            }
        }
        header('Location:' . base_url . 'inicio/qs');
    }

    public function registrarse() {
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setRut($_POST['txtRut']);
            $usuario->setNombre($_POST['txtNombre']);
            $usuario->setApellidos($_POST['txtApellidos']);
            $usuario->setTelefono($_POST['txtTelefono']);
            $usuario->setCorreo($_POST['txtCorreoRegistro']);
            $usuario->setClave($_POST['txtClaveRegistro']);
            $usuario->setTipo('cliente');
            $resultado = $usuario->save();

            if ($resultado) {
                $_SESSION['resultado_registrarse'] = "exito";
            } else {
                $_SESSION['resultado_registrarse'] = "fallo";
            }
        } else {
            $_SESSION['resultado_registrarse'] = "fallo";
        }
        header("Location:" . base_url . 'inicio/qs');
    }

    public function logout() {
        if(isset($_SESSION['identidad'])){
           unset($_SESSION['identidad']);
           unset($_SESSION['nombre_usuario']);
           $_SESSION['logout'] = 'exito';
           header("Location:" . base_url . 'inicio/qs');
        }
    }
    
    

}

ob_end_flush();
