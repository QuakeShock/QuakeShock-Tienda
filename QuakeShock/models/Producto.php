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
class Producto {

    private $id_producto;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $categoria_id_categoria;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }
    function getId_producto() {
        return $this->id_producto;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getStock() {
        return $this->stock;
    }

    function getCategoria_id_categoria() {
        return $this->categoria_id_categoria;
    }

    function setId_producto($id_producto) {
        $this->id_producto = $id_producto;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setStock($stock) {
        $this->stock = $stock;
    }

    function setCategoria_id_categoria($categoria_id_categoria) {
        $this->categoria_id_categoria = $categoria_id_categoria;
    }
    
    

}