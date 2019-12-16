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
class Direccion {

    private $id_direccion;
    private $nombre;
    private $region;
    private $ciudad;
    private $comuna;
    private $calle;
    private $usuario_id_usuario;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }
    function getNombre() {
        return $this->nombre;
    }

    function getId_direccion() {
        return $this->id_direccion;
    }

    function getRegion() {
        return $this->region;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getComuna() {
        return $this->comuna;
    }

    function getCalle() {
        return $this->calle;
    }

    function getUsuario_id_usuario() {
        return $this->usuario_id_usuario;
    }
    

    function setId_direccion($id_direccion) {
        $this->id_direccion = $id_direccion;
    }
    
    function setNombre($nombre) {
        $this->nombre = $this->real_escape_string($nombre);
    }

    function setRegion($region) {
        $this->region = $this->real_escape_string($region);
    }

    function setCiudad($ciudad) {
        $this->ciudad = $this->real_escape_string($ciudad);
    }

    function setComuna($comuna) {
        $this->comuna = $this->real_escape_string($comuna);
    }

    function setCalle($calle) {
        $this->calle = $this->real_escape_string($calle);
    }

    function setUsuario_id_usuario($usuario_id_usuario) {
        $this->usuario_id_usuario = $usuario_id_usuario;
    }

    public function save(){
        
    }
    
    public function delete(){
        
    }
    
    public function getAll(){
        $direcciones = false;
        $query = "SELECT * FROM direccion WHERE usuario_id_usuario='$this->usuario_id_usuario';";
        $direcciones = $this->db->query($query);
        
        return $direcciones;
    }
    
    public function getDireccionById(){
        
    }
}
