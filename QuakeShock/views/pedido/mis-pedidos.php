<div class="conten-general">
    <h1 class="titulo">Mis Pedidos</h1>
    <div class="conten-bg">
        <?php
        while ($ped = $pedidos->fetch_object()):
            $id_pedido = $ped->ID_PEDIDO;
            $coste = $ped->VALOR;
            $fecha = $ped->FECHA_EMISION;
            $estado = $ped->ESTADO;?>
            <div class="conten-mis-pedidos-pedido">
                <div class="conten-mis-pedidos-left">
                    <span class="texto-grande">
                        ID: <?= $id_pedido ?></br>
                        Fecha: <?= $fecha ?></br>
                    </span>  
                </div>
                <div class="conten-img-productos">
                    <?php
                    $pedido_productos = new Lineas_Pedido();
                    $productos = $pedido_productos->getProductosByPedido($id_pedido);
                    while ($producto = $productos->fetch_object()):
                        $imagen1 = base_url . 'uploads/images/' . $producto->Imagen1;
                    ?>
                    <img class="imagen-mis-pedidos" src="<?=$imagen1?>">
                    <?php
                    endwhile;?>
                </div>
                <div class="conten-mis-pedidos-left coste">
                    <h2 class="subtitulo">
                        Coste: $<?= $coste ?></br>
                    </h2>
                </div>
                <div class="conten-mis-pedidos-right">
                    <span class="texto-grande">
                        Estado: <?= $estado ?></br>
                    </span>
                    <a href="<?=base_url.'pedido/detalle&id='.$id_pedido?>" class="btn gestion-tabla detalles">
                        Detalles
                    </a>
                </div>

            </div>


            <?php endwhile;
        ?>
    </div>
</div>

