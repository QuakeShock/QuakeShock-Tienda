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
    private $region;
    private $ciudad;
    private $comuna;
    private $calle;
    private $usuario_id_usuario;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
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

    function setRegion($region) {
        $this->region = $region;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setComuna($comuna) {
        $this->comuna = $comuna;
    }

    function setCalle($calle) {
        $this->calle = $calle;
    }

    function setUsuario_id_usuario($usuario_id_usuario) {
        $this->usuario_id_usuario = $usuario_id_usuario;
    }

    

}
