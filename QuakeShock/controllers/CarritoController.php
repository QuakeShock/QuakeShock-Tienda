<?php

ob_start();

require_once 'models/producto.php';

class CarritoController {

    public function index() {
        if(isset($_SESSION['carrito'])){
            $carrito = $_SESSION['carrito'];
        }else{
            $carrito = null;
        }
        
        require_once 'views/carrito/index.php';
    }

    public function add() {
        if (isset($_GET['id'])) {
            $producto_id = $_GET['id'];
        } else {
            header('Location:' . base_url);
        }
        //Validar si ya existe un carrito:
        
        if (isset($_SESSION['carrito'])) {
            $contador = 0;
            foreach($_SESSION['carrito'] as $indice => $elemento){
                
                //Verificar si ya existe el producto en el carrito:
                
                if($elemento['id_producto'] == $producto_id){
                    
                    //Si existe, añadir una unidad del mismo producto al carrito:
                    
                    $_SESSION['carrito'][$indice]['unidades']++;
                    $contador++;
                }
            }
            
        }
        
        if(!isset($contador) || $contador==0){
            
            //Obtener el producto que se añadira al carrito:
            
            $producto = new Producto();
            $producto->setId_producto($producto_id);
            $prod = $producto->getProductoById();

            //Añadir producto al carrito creando un array de carrito:
            
            if (is_object($prod)) {
                $_SESSION['carrito'][] = array(
                    "id_producto" => $prod->ID_PRODUCTO,
                    "precio" => $prod->PRECIO,
                    "imagen" => $prod->Imagen1,
                    "unidades" => 1,
                    "producto" => $prod
                );
            }
        }
        header("Location: " . base_url . 'carrito/index');
    }
    
    public function deleteAll(){
        unset($_SESSION['carrito']);
    }

}

ob_end_flush();