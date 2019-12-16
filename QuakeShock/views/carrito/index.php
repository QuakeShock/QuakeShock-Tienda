<div class="conten-general">
    <h1 class="titulo">Mi Carrito</h1>
    <div class="conten-bg">
        <?php
        $stats = utils::statsCarrito();
        if ($carrito != null):
            foreach ($carrito as $indice => $elemento):
                $producto = $elemento['producto'];
                ?>
                <div class="producto-carrito">
                    <img class="producto-carrito-img" src="<?= base_url . 'uploads/images/' . $producto->Imagen1; ?>">
                    <a href="<?= base_url . 'producto/detalle&id=' . $producto->ID_PRODUCTO ?>"><span class="producto-carrito-nombre"><?= $producto->NOMBRE; ?></span></a>
                    <div class="linea-carrito"></div>
                    <span class="producto-carrito-id">Codigo: <?= $producto->ID_PRODUCTO; ?></span>
                    <span class="producto-carrito-cantidad">Cantidad: <?= $elemento['unidades']; ?></span><br>
                    <span class="producto-carrito-precio">Unidad: $<?= number_format($elemento['precio'], 0); ?></span>
                    <span class="producto-carrito-subtotal">Subtotal: $<?= number_format($elemento['precio'] * $elemento['unidades'], 0) ?></span>
                </div>
            <?php endforeach; ?>
            <div class="linea-carrito-total"></div>
            <div class="conten-carrito-total"> 
                <span class="carrito-total-text">Total: </span><span class="carrito-total-text total">$<?= number_format($stats['total'], 0) ?></span>
                <form action="<?= base_url ?>pedido/realizar" method="POST">
                    <input type="submit" name="" class="btn realizar-pedido" value="Realizar Pedido" >
                </form>
            </div>
            <?php else:
            ?>
            </br>
            </br>
            <h1 class="texto-grande">No hay ningún producto en el carrito.</h1>
            <img class="carrito-triste" src="<?=base_url.'assets/img/icons/empty-cart.png'?>">
        <?php 
        endif; ?>
    </div>
</div>