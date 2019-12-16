<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author saez_
 */
class Usuario {

    private $id_usuario;
    private $rut;
    private $nombre;
    private $apellidos;
    private $telefono;
    private $correo;
    private $clave;
    private $activado;
    private $tipo;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getClave() {
        return password_hash($this->db->real_escape_string($this->clave), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    function getActivado() {
        return $this->activado;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    function setRut($rut) {
        $this->rut = $this->db->real_escape_string($rut);
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setApellidos($apellidos) {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    function setTelefono($telefono) {
        $this->telefono = $this->db->real_escape_string($telefono);
    }

    function setCorreo($correo) {
        $this->correo = $this->db->real_escape_string($correo);
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setActivado($activado) {
        $this->activado = $activado;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function login() {
        $result = false;
        $correo = $this->correo;
        $clave = $this->clave;

        //Comprobar que el usuario exista
        $query = "SELECT * FROM usuario WHERE correo = '$correo'";
        $login = $this->db->query($query);

        if ($login && $login->num_rows == 1) {
            $usuario = $login->fetch_object();
            $validar = password_verify($clave, $usuario->CLAVE);


            if ($validar) {

                $result = $usuario;
            }else{
                if($clave == $usuario->CLAVE){
                    $result = $usuario;
                }
            }
        }
        return $result;
    }

    //Metodos Cliente

    public function save() {
        $query = "INSERT INTO usuario VALUES (NULL, '{$this->getRut()}', '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getTelefono()}', '{$this->getCorreo()}', '{$this->getClave()}', '0', '{$this->getTipo()}', '1');";
        $save = $this->db->query($query);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
    
    public function getAll(){
    $usuarios = $this->db->query("SELECT * FROM usuario;");
        return $usuarios;
    }
    public function delete($rut){
        $result = false;
        $query = "DELETE FROM usuario WHERE rut = '$rut'";

        if ($this->db->query($query)==TRUE && $this->db->affected_rows > 0 ) {
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
}
