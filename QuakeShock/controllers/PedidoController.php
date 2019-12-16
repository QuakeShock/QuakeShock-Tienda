<?php

ob_start();

require_once 'models/Pedido.php';
require_once 'models/Lineas_Pedido.php';

class PedidoController {

    public function index() {
        echo "Controlador pedido index";
    }

    public function realizar() {
        $carrito = $_SESSION['carrito'];
        require_once 'views/pedido/realizar-pedido.php';
    }

    public function add() {
        if (isset($_SESSION['identidad'])) {
            $id_usuario = $_SESSION['identidad']->ID_USUARIO;
//        private $tipo_pago;
//        private $tipo_despacho;
//        private $estado;
//        private $valor;
//        private $fecha_emision;
//        private $usuario_id_usuario;
//        private $direccion_id_direccion;

            $tipo_pago = isset($_POST['tipo-pago']) ? $_POST['tipo-pago'] : false;
            $tipo_despacho = isset($_POST['tipo-despacho']) ? $_POST['tipo-despacho'] : false;
            $estado = 'Pendiente de pago';
            $stats = utils::statsCarrito();
            $valor = $stats['total'];
            $comentario = isset($_POST['txtComentario']) ? $_POST['txtComentario'] : false;
            $id_direccion = isset($_POST['lbDireccion']) ? $_POST['lbDireccion'] : false;

            //Guardar el pedido
            if ($tipo_despacho && $tipo_pago) {
                $pedido = new Pedido();
                $lineas_pedido = new Lineas_Pedido();
                $pedido->setTipo_pago($tipo_pago);
                $pedido->setTipo_despacho($tipo_despacho);
                $pedido->setEstado($estado);
                $pedido->setUsuario_id_usuario($id_usuario);
                $pedido->setValor($valor);
                if ($comentario) {
                    $pedido->setComentarios($comentario);
                }
                if ($tipo_despacho == 'domicilio' && $id_direccion) {
                    $pedido->setDireccion_id_direccion($id_direccion);
                }
                $save = $pedido->save();
                $save_lineas = $lineas_pedido->saveLinea();
            }
            if ($save && $save_lineas) {
                $_SESSION['resultado_add_pedido'] = 'exito';
            } else {
                $_SESSION['resultado_add_pedido'] = 'fallo';
            }
            header("Location: " . base_url . 'pedido/confirmado');
        } else {
            ?>
            <script type="text/javascript">
                var msg = "Error! debes iniciar sesión";
                mostrarMensaje(msg);
            </script>
            <?php

            header("refresh:2;url=" . base_url . 'inicio/qs');
        }
    }

    public function confirmado() {
        if (isset($_SESSION['identidad'])) {
            $identidad = $_SESSION['identidad'];
            $pedido = new Pedido();
            $pedido->setUsuario_id_usuario($identidad->ID_USUARIO);

            $pedido = $pedido->getPedidoByUsuario();

            if ($pedido->Direccion_ID_DIRECCION != null) {
                $direccion = new Direccion();
                $dir = $direccion->getDireccionById();
                $direccion_completa = $dir->CALLE . ', ' . $dir->COMUNA . ', ' . $dir->CIUDAD . '.';
            }

            $pedido_productos = new Lineas_Pedido();
            $productos = $pedido_productos->getProductosByPedido($pedido->ID_PEDIDO);

            require_once 'views/pedido/detalle-pedido.php';
        }
    }

    public function misPedidos() {
        utils::isLogged();
        $id_usuario = $_SESSION['identidad']->ID_USUARIO;
        $pedido = new Pedido();
        //Obtener pedidos del usuario:
        $pedido->setUsuario_id_usuario($id_usuario);
        $pedidos = $pedido->getAllByUser();
        

        require_once 'views/pedido/mis-pedidos.php';
    }

    public function detalle() {
        utils::isLogged();

        if (isset($_GET['id'])) {
            $id_pedido = $_GET['id'];

            //Obtener el pedido.
            $pedido = new Pedido();
            $pedido->setId_pedido($id_pedido);
            $pedido = $pedido->getPedidoById();

            if ($pedido->Direccion_ID_DIRECCION != null) {
                $direccion = new Direccion();
                $dir = $direccion->getDireccionById();
                $direccion_completa = $dir->CALLE . ', ' . $dir->COMUNA . ', ' . $dir->CIUDAD . '.';
            }

            //Sacar los productos.
            $pedido_productos = new Lineas_Pedido();
            $productos = $pedido_productos->getProductosByPedido($pedido->ID_PEDIDO);
        } else {
            header("Location: " . base_url . 'pedido/misPedidos');
        }
        require_once 'views/pedido/detalle-pedido.php';
    }

    public function cancelar() {
        utils::isLogged();
        if ($_GET['id']) {
                $id_pedido = $_GET['id'];

                $id_usuario = $_SESSION['identidad']->ID_USUARIO;

                $lineas_pedido = new Lineas_Pedido();
                $lineas_pedido->setPedido_id_pedido($id_pedido);
                $lineas_pedido->deleteByPedido();
                
                $pedido = new Pedido();
                $pedido->setId_pedido($id_pedido);
                $delete_pedido = $pedido->delete();

                if ($delete_pedido) {
                    $_SESSION['resultado_eliminar_pedido'] = 'exito';
                    ?>
                    <script type="text/javascript">
                        var msg = "Pedido cancelado con exito!";
                        mostrarMensaje(msg);
                    </script>
                    <?php

                    header("refresh:2;url=" . base_url . 'pedido/misPedidos');
                } else {
                    $_SESSION['resultado_eliminar_pedido'] = 'fallo';
                    ?>
                    <script type="text/javascript">
                        var msg = "No se pudo cancelar el pedido!";
                        mostrarMensaje(msg);
                    </script>
                    <?php

                    header("refresh:2;url=" . base_url . 'pedido/misPedidos');
                }
            } else {
                header("Location: " . base_url . 'pedido/misPedidos');
            }
        }

}

ob_end_flush();
