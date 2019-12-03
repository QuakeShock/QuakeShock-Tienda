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
class Favorito {

    private $id_favorito;
    private $producto_id_producto;
    private $usuario_id_usuario;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }
    
    function getId_favorito() {
        return $this->id_favorito;
    }

    function getProducto_id_producto() {
        return $this->producto_id_producto;
    }

    function getUsuario_id_usuario() {
        return $this->usuario_id_usuario;
    }

    function setId_favorito($id_favorito) {
        $this->id_favorito = $id_favorito;
    }

    function setProducto_id_producto($producto_id_producto) {
        $this->producto_id_producto = $producto_id_producto;
    }

    function setUsuario_id_usuario($usuario_id_usuario) {
        $this->usuario_id_usuario = $usuario_id_usuario;
    }


}
