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
    private $imagen1;
    private $imagen2;
    private $imagen3;
    private $imagen4;
    private $imagen5;
    private $imagen6;
    
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
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    function setPrecio($precio) {
        $this->precio = $this->db->real_escape_string($precio);
    }

    function setStock($stock) {
        $this->stock = $this->db->real_escape_string($stock);
    }

    function setCategoria_id_categoria($categoria_id_categoria) {
        $this->categoria_id_categoria = $categoria_id_categoria;
    }
    
    function getImagen1() {
        return $this->imagen1;
    }

    function getImagen2() {
        return $this->imagen2;
    }

    function getImagen3() {
        return $this->imagen3;
    }

    function getImagen4() {
        return $this->imagen4;
    }

    function getImagen5() {
        return $this->imagen5;
    }

    function getImagen6() {
        return $this->imagen6;
    }

    function setImagen1($imagen1) {
        $this->imagen1 = $this->db->real_escape_string($imagen1);
    }

    function setImagen2($imagen2) {
        $this->imagen2 = $this->db->real_escape_string($imagen2);
    }

    function setImagen3($imagen3) {
        $this->imagen3 = $this->db->real_escape_string($imagen3);
    }

    function setImagen4($imagen4) {
        $this->imagen4 = $this->db->real_escape_string($imagen4);
    }

    function setImagen5($imagen5) {
        $this->imagen5 = $this->db->real_escape_string($imagen5);
    }

    function setImagen6($imagen6) {
        $this->imagen6 = $this->db->real_escape_string($imagen6);
    }

        
    public function save(){
        $query = "INSERT INTO producto VALUES (NULL, '{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, '{$this->getCategoria_id_categoria()}', '{$this->getImagen1()}', '{$this->getImagen2()}', '{$this->getImagen3()}', '{$this->getImagen4()}', '{$this->getImagen5()}', '{$this->getImagen6()}');";
        $save = $this->db->query($query);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
    
    public function getAll(){
        $productos = $this->db->query("SELECT * FROM producto ORDER BY id_producto DESC");
        return $productos;
    }
    public function delete(){
        $result = false;
        $query = "DELETE FROM producto WHERE id_producto = '$this->id_producto'";

        if ($this->db->query($query)==TRUE && $this->db->affected_rows > 0 ) {
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    
    public function modify(){
        $query = "UPDATE producto SET nombre='{$this->getNombre()}', descripcion='{$this->getDescripcion()}', precio='{$this->getPrecio()}', stock='{$this->getStock()}', Categoria_ID_CATEGORIA = '{$this->getCategoria_id_categoria()}'";
        if($this->getImagen1() != null){
        $query .= ", imagen1='{$this->getImagen1()}'";
        }
        if($this->getImagen2() != null){
        $query .= ", imagen2='{$this->getImagen2()}'";
        }
        if($this->getImagen3() != null){
        $query .= ", imagen3='{$this->getImagen3()}'";
        }
        if($this->getImagen4() != null){
        $query .= ", imagen4='{$this->getImagen4()}'";
        }
        if($this->getImagen5() != null){
        $query .= ", imagen5='{$this->getImagen5()}'";
        }
        if($this->getImagen6() != null){
        $query .= ", imagen6='{$this->getImagen6()}'";
        }
        $query .= "WHERE id_producto={$this->id_producto};";
        
        $save = $this->db->query($query);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
    public function get4Productos(){
        $productos = $this->db->query("SELECT * FROM producto ORDER BY id_producto DESC LIMIT 4");
        return $productos;
    }
    
    public function getProductoById(){
        $result = false;
        $query = "SELECT * FROM producto WHERE id_producto = '{$this->id_producto}' LIMIT 1";
        $producto = $this->db->query($query);
        if($producto){
            $result = $producto->fetch_object();
        }
        return $result;
    } 
    
    public function getProductosByCat($cat_id){
        $query = "SELECT * FROM producto WHERE Categoria_ID_CATEGORIA = '$cat_id'";
        $productos = $this->db->query($query);
        
        return $productos;
    }
}