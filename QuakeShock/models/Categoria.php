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
    private $imagen;
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
    function getImagen() {
        return $this->imagen;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    
    public function getAll(){
        $categorias = $this->db->query("SELECT * FROM categoria;");
        return $categorias;
    }
    
    public function save() {
        $query = "INSERT INTO categoria VALUES (NULL, '{$this->getNombre()}', '{$this->getImagen()}');";
        $save = $this->db->query($query);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
    public function delete(){
        $result = false;
        $query = "DELETE FROM categoria WHERE id_categoria = '{$this->id_categoria}'";

        if ($this->db->query($query)==TRUE && $this->db->affected_rows > 0 ) {
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    
    public function getCategoriaById(){
        $result = false;
        $query = "SELECT * FROM categoria WHERE id_categoria = '{$this->id_categoria}' LIMIT 1";
        $categoria = $this->db->query($query);
        
        if($categoria){
            $result = $categoria->fetch_object();
        }
        return $result;
    }
}
