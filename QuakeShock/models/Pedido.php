<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pedido
 *
 * @author saez_
 */
class Pedido {
    private $id_pedido;
    private $tipo_pago;
    private $tipo_despacho;
    private $estado;
    private $valor;
    private $comentarios;
    private $fecha_emision;
    private $usuario_id_usuario;
    private $direccion_id_direccion;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }
    
    function getId_pedido() {
        return $this->id_pedido;
    }

    function getTipo_pago() {
        return $this->tipo_pago;
    }

    function getTipo_despacho() {
        return $this->tipo_despacho;
    }

    function getEstado() {
        return $this->estado;
    }

    function getValor() {
        return $this->valor;
    }

    function getFecha_emision() {
        return $this->fecha_emision;
    }

    function getHora_emision() {
        return $this->hora_emision;
    }

    function getUsuario_id_usuario() {
        return $this->usuario_id_usuario;
    }

    function setId_pedido($id_pedido) {
        $this->id_pedido = $id_pedido;
    }

    function setTipo_pago($tipo_pago) {
        $this->tipo_pago = $tipo_pago;
    }

    function setTipo_despacho($tipo_despacho) {
        $this->tipo_despacho = $tipo_despacho;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setFecha_emision($fecha_emision) {
        $this->fecha_emision = $fecha_emision;
    }

    function setUsuario_id_usuario($usuario_id_usuario) {
        $this->usuario_id_usuario = $usuario_id_usuario;
    }
    
    function getDireccion_id_direccion() {
        return $this->direccion_id_direccion;
    }

    function setDireccion_id_direccion($direccion_id_direccion) {
        $this->direccion_id_direccion = $direccion_id_direccion;
    }

    function getComentarios() {
        return $this->comentarios;
    }

    function setComentarios($comentarios) {
        $this->comentarios = $comentarios;
    }

    
    
        
    public function save(){
        $query = "INSERT INTO pedido VALUES (NULL, '{$this->getTipo_pago()}', '{$this->getTipo_despacho()}', '{$this->getEstado()}', {$this->getValor()}";
        if($this->getComentarios() != null){
        $query .= ", '{$this->getComentarios()}'";
        }else{
          $query .= ", NULL";
        }
        $query .=", CURDATE(), {$this->getUsuario_id_usuario()}";
        
        if($this->getDireccion_id_direccion() != null){
            $query .= ", {$this->getDireccion_id_direccion()});";
        }else{
            $query .= ", NULL);";
        }
        $save = $this->db->query($query);
        $_SESSION['ultima_id'] = $this->db->insert_id;
        $result = false;

        if ($save) {
            $result = true;
        }
        return $result;
    }
    
    public function delete(){
        $result = false;
        $query = "DELETE FROM pedido WHERE id_pedido = {$this->id_pedido}";

        if ($this->db->query($query)==TRUE && $this->db->affected_rows > 0 ) {
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    public function deleteByUsuario(){
        $result = false;
        $query = "DELETE FROM pedido WHERE usuario_id_usuario = {$this->usuario_id_usuario}";

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
    
    public function getPedidoById(){
        $result = false;
        $query = "SELECT * FROM pedido WHERE id_pedido = '{$this->id_pedido}' LIMIT 1";
        $pedido = $this->db->query($query);
        if($pedido){
            $result = $pedido->fetch_object();
        }
        return $result;
    } 
    
    public function getPedidoByUsuario(){
        $result = false;
        $query = "SELECT * FROM pedido WHERE usuario_id_usuario= {$this->getUsuario_id_usuario()} ORDER BY id_pedido DESC LIMIT 1;";
        $pedido = $this->db->query($query);
        
        if($pedido){
            $result = $pedido->fetch_object();
        }
        return $result;
    }
    
    public function getAllByUser(){
        $query = "SELECT * FROM pedido WHERE usuario_id_usuario = {$this->getUsuario_id_usuario()} ORDER BY id_pedido DESC";
        $pedidos = $this->db->query($query);
        return $pedidos;
    }
    
}
