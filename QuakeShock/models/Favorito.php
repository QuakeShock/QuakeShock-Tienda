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
    
    public function save(){
        
        $query = "INSERT INTO favorito VALUES (NULL, {$this->getProducto_id_producto()}, {$this->getUsuario_id_usuario()});";
        $save = $this->db->query($query);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
    
    public function getAllByUser(){
        $query = "SELECT * FROM favorito WHERE usuario_id_usuario = {$this->usuario_id_usuario} ";
        $result = $this->db->query($query);
        
        return $result;
    }
    
    public function getProductosByUsuario($id){
        $query = "SELECT pr.*,f.* FROM producto pr "
                . "INNER JOIN favorito f ON pr.id_producto = f.producto_id_producto "
                . "WHERE f.usuario_id_usuario = {$id}";
        $productos = $this->db->query($query);
        
        return $productos;
    }
    
    public function delete(){
        $result = false;
        $query = "DELETE FROM favorito WHERE id_favorito = {$this->id_favorito}";

        if ($this->db->query($query)==TRUE && $this->db->affected_rows > 0 ) {
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    

}
