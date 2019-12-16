
<div class="catalogo-mid">
    <label class="txt-catalogo catalogo"><?= $cat->NOMBRE ?></label>
    <div class="catalogo-area">
        <div class="catalogo-area-in">
            <?php
            while ($prod = $productos->fetch_object()):
                if ($prod->Imagen1 == null) {
                    $imagen = base_url . 'uploads/images/default.jpg';
                } else {
                    $imagen = base_url . 'uploads/images/' . $prod->Imagen1;
                }
                ?>
                <div class="catalogo-producto">
                    <img class="catalogo-img-producto" src="<?= $imagen ?>"/>
                    <div class="conten-producto-nombre">
                        <label class="nombre-producto"><?= $prod->NOMBRE ?></label>
                    </div>

                    <div class="conten-producto-stock">
                        <label class="stock-producto">STOCK: <?= $prod->STOCK ?></label>
                    </div>

                    <div class="conten-producto-precio">
                        <label class="precio-producto">$<?= $prod->PRECIO ?></label>
                    </div>
                    <form action="<?= base_url ?>producto/detalle&id=<?= $prod->ID_PRODUCTO ?>" method="GET">
                        <div class="conten-btn-form">
                            <input type="submit" class="btn-comprar" value="Comprar">
                        </div>
                    </form>
                </div>

                <?php
            endwhile;
            ?>
        </div>
    </div>
</div>

