<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lineas_Pedido
 *
 * @author saez_
 */
class Lineas_Pedido {
    private $id;
    private $pedido_id_pedido;
    private $producto_id_producto;
    private $unidades;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }
    function getId() {
        return $this->id;
    }

    function getPedido_id_pedido() {
        return $this->pedido_id_pedido;
    }

    function getProducto_id_producto() {
        return $this->producto_id_producto;
    }


    function getUnidades() {
        return $this->unidades;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPedido_id_pedido($pedido_id_pedido) {
        $this->pedido_id_pedido = $pedido_id_pedido;
    }

    function setProducto_id_producto($producto_id_producto) {
        $this->producto_id_producto = $producto_id_producto;
    }

    function setUnidades($unidades) {
        $this->unidades = $unidades;
    }

        
    public function saveLinea(){
        $result = false;
        $last_id = $_SESSION['ultima_id'];
        foreach ($_SESSION['carrito'] as $indice => $elemento){
            $producto = $elemento['producto'];
            $insert = "INSERT INTO lineas_pedido VALUES(NULL, {$last_id}, {$producto->ID_PRODUCTO}, {$elemento['unidades']});";
            $save = $this->db->query($insert);
            echo $this->db->error;
        }
        unset($_SESSION['ultima_id']);
        if ($save) {
            $result = true;
        }
        return $result;
       }
    
    
    public function getProductosByPedido($id){
        $query = "SELECT pr.*,lp.UNIDADES FROM producto pr "
                . "INNER JOIN lineas_pedido lp ON pr.id_producto = lp.producto_id_producto "
                . "WHERE lp.pedido_id_pedido = {$id}";
        $productos = $this->db->query($query);
        
        return $productos;
    }
    public function deleteByPedido(){
        $query = "DELETE FROM lineas_pedido WHERE pedido_id_pedido = {$this->pedido_id_pedido}";
        if ($this->db->query($query)==TRUE && $this->db->affected_rows > 0 ) {
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
}