<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author saez_
 */
class Categoria {

    private $id_categoria;
    private $nombre;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }
    function getId_categoria() {
        return $this->id_categoria;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId_categoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCategorias(){
        $categorias = $this->db->query("SELECT * FROM CATEGORIA;");
        return $categorias;
    }
    public function getAll(){
        $categorias = $this->db->query("SELECT * FROM categoria;");
        return $categorias;
    }
}
