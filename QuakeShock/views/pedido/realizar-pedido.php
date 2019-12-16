<?php if (isset($_SESSION['identidad'])): ?>
    <div class="conten-general">
        <h1 class="titulo">Pedido</h1>
        <div class="conten-bg">
            <?php
            $stats = utils::statsCarrito();
            foreach ($carrito as $indice => $elemento):
                $producto = $elemento['producto'];
                ?>
                <form action="<?= base_url ?>pedido/add" method="POST">
                    <div class="conten-comentarios">
                        <label for="txtComentario" class="lbl-registro">Deja el color u opciones especificadas en los comentarios: </label><input type="text" name="txtComentario" placeholder="Ingresa aquí tus comentarios sobre el pedido.." class="txtComentario">
                    </div>
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

                <div class="conten-carrito-total"> 
                    <span class="carrito-total-text">Total (no incluye envio): </span><span class="carrito-total-text total">$<?= number_format($stats['total'], 0) ?></span>
                </div>

                <div class="linea-carrito-total"></div>
                <div class="conten-metodo-despacho">
                    <h1 class='lbl-registro'>Metodo de despacho</h1>
                    <input type="radio" name="tipo-despacho" value="domicilio" id='domicilio'><label for='domicilio' class='lbl-registro'>Despacho a domicilio</label><input type="radio" name="tipo-despacho" id='metro' value="metro"><label for='metro' class='lbl-registro'>Entrega en estaciones de metro</label>
                    <select name="lbDireccion" class="txtDireccion" placeholder="Selecciona una dirección..">
                        <option disabled selected>Selecciona una dirección</option>
                        <?php
                        $dirs = utils::getDirecciones($_SESSION['identidad']->ID_USUARIO);
                        while ($dir = $dirs->fetch_object()):
                            ?>
                            <option value="<?= $dir->ID_DIRECCION ?>"<?= $dir->NOMBRE ?></option>
                            <?php
                        endwhile;
                        ?>
                    </select>
                    <button class='btn gestionar-direcciones'>Gestionar direcciones</button>
                    <a class='tyc-envios'>Terminos y Condiciones de envios a domicilio</a>
                    <a class='tyc-metros'>Terminos y Condiciones de entregas en estaciones de metro</a>
                </div>
                <div class="linea-carrito-total"></div>
                <div class='conten-metodo-pago'>
                    <h1 class='lbl-registro'>Metodo de pago</h1>
                    <input checked type="radio" name="tipo-pago" value="virtual" id='virtual'><label for='virtual' class='lbl-registro'>Tarjeta de credito, debito y transferencia electronica</label>
                </div>
                <div class="linea-carrito-total"></div>
                <div class="conten-acuerdo">
                    <input type="checkbox" value="true" name="tyc-acuerdo" class="cb-acuerdo" required="true"><label for="tyc-acuerdo" class="lbl-acuerdo">Estoy de acuerdo con los terminos y condiciones de toda la pagina.</label>
                    <input type="submit" class="btn pagar-pedido" value="Confirmar y Pagar">
                </div>
            </form>
        </div>
    </div>


<?php else:
    ?>
    <script type="text/javascript">
        var msg = "Error! debes iniciar sesión";
        mostrarMensaje(msg);
    </script>
    <?php
    header("refresh:2;url=" . base_url . 'carrito/index');
endif;

