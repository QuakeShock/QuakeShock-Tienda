<?php
    $_SESSION['resultado_add_pedido'] = null;
    $id_pedido = $pedido->ID_PEDIDO;
    $tipo_despacho = $pedido->TIPO_DESPACHO;
    $metodo_pago = $pedido->TIPO_PAGO;
    $fecha = $pedido->FECHA_EMISION;

?>

<div class="conten-general">
    <h1 class="titulo">Pedido N°<?= $id_pedido ?></h1>
    <div class="conten-bg">
        <div class="conten-info-completado">
            <?php
            if($pedido->ESTADO == 'Pendiente de pago'):
                ?>
            <span class="lbl-registro" style="color: red;">Tu pedido aun no ha sido pagado, concreta la compra para seguír con el despacho!.</span> 
            <?php
            endif;
            if($pedido->ESTADO == 'En proceso'):
                ?>
               <span class="lbl-registro" style="color: darkorange">Tu pedido esta en proceso de despacho, cualquier duda comunicate a traves del chat o en la pagina de "Contacto"!.</span> 
        
            <?ph
            pendif;
            if($pedido->ESTADO == 'Completado'):
                ?>
               <span class="lbl-registro" style="color: #008000">Tu pedido ha sido completado, cualquier duda comunicate a traves del chat o en la pagina de "Contacto"!.</span> 
            <?php
            endif;
            if($pedido->ESTADO == 'Cancelado'):
                ?>
               <span class="lbl-registro" style="color: darkred">Tu pedido ha sido cancelado, cualquier duda comunicate a traves del chat o en la pagina de "Contacto"!.</span> 
            <?php
            endif;
            
            ?> 
        </div>
        <div class="conten-info-completado detalles">
            <span class="lbl-registro">
                Metodo de despacho: <?= $tipo_despacho ?> </br> 
                Metodo de pago: <?= $metodo_pago ?> </br>
                Fecha de emisión: <?= $fecha ?> </br>
            </span>
        </div>
        <?php if (isset($dir)) {
            ?>
            <div class="conten-info-completado detalles">
                <span class="lbl-registro">
                    Nombre de dirección: <?= $dir->NOMBRE ?> </br> 
                    Región: <?= $dir->REGION ?> </br>
                    Dirección: <?= $direccion_completa ?> </br>
                </span>
            </div>
        <?php }
        ?>
        <h1 class="titulo"> Productos: </h1>
        <?php
        $total = 0;
        while ($producto = $productos->fetch_object()):
            $imagen1 = base_url . 'uploads/images/' . $producto->Imagen1;
            $id_producto = $producto->ID_PRODUCTO;
            $unidades = $producto->UNIDADES;
            $subtotal = $producto->PRECIO * $unidades;
            $precio = number_format($producto->PRECIO, 0);
            $total += $subtotal;
            ?>
            <div class="producto-carrito">
                <img class="producto-carrito-img" src="<?= $imagen1 ?>">
                <a href="<?= base_url . 'producto/detalle&id=' . $id_producto ?>"><span class="producto-carrito-nombre"><?= $producto->NOMBRE; ?></span></a>
                <div class="linea-carrito"></div>
                <span class="producto-carrito-id">Codigo: <?= $id_producto; ?></span>
                <span class="producto-carrito-cantidad">Cantidad: <?= $unidades; ?></span><br>
                <span class="producto-carrito-precio">Unidad: $<?= $precio; ?></span>
                <span class="producto-carrito-subtotal">Subtotal: <?= number_format($subtotal, 0) ?></span>
            </div>
        <?php endwhile; ?>
        <div class="linea-carrito-total"></div>
        <div class="conten-carrito-total"> 
            <span class="carrito-total-text">Total (no incluye envio): </span><span class="carrito-total-text total">$<?= number_format($total, 0) ?></span>
        </div>
        <form action="<?=base_url.'pedido/pagar&id='.$pedido->ID_PEDIDO?>" method="GET">
            <div class="conten-pagar-pedido">
            <input type="checkbox" value="true" name="tyc-acuerdo" class="cb-acuerdo" required ><label for="tyc-acuerdo" class="lbl-acuerdo">Estoy de acuerdo con los terminos y condiciones de toda la pagina.</label>
            <input type="submit" class="btn pagar-pedido" name="pagar" value="Proceder al Pago">
            </div>
        </form>
        <form action="<?=base_url.'pedido/cancelar&id='.$pedido->ID_PEDIDO?>" method="GET">
            <div class="conten-pagar-pedido">
                <input type="submit" class="btn cancelar-pedido" name="cancelar" value="Cancelar Pedido">
            </div>
        </form>
       
        
        
    </div>
</div>
