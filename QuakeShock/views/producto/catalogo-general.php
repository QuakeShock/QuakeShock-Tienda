
<div class="catalogo-mid">
    <?php
    while ($cat = $categorias->fetch_object()):
        $producto = new Producto();
        $productos = $producto->getProductosByCat($cat->ID_CATEGORIA);
        ?>
        <label class="txt-catalogo catalogo"><?= $cat->NOMBRE ?></label>
        <div class="catalogo-area">
            <div class="catalogo-area-in">
                <?php
                ;
                while ($prod = $productos->fetch_object()):
                    if ($prod->Imagen1 == null) {
                        $imagen = base_url . 'uploads/images/default.jpg';
                    } else {
                        $imagen = base_url . 'uploads/images/' . $prod->Imagen1;
                    }
                    ?>
                <a href="<?= base_url ?>producto/detalle&id=<?= $prod->ID_PRODUCTO ?>">
                    <div class="catalogo-producto">
                        <img class="catalogo-img-producto" src="<?= $imagen ?>"/>
                        <div class="conten-producto-nombre">
                            <label class="nombre-producto"><?= $prod->NOMBRE ?></label>
                        </div>

                        <div class="conten-producto-stock">
                            <label class="stock-producto"><?= $prod->STOCK ?> disponibles</label>
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
                </a>

                    <?php
                endwhile;
                ?>
                <a style="cursor: pointer;"href="<?= base_url . 'categoria/index&id=' . $cat->ID_CATEGORIA; ?>">
                    <div class="btn-ver-mas" style="cursor: pointer;" >
                        <label class="txt-ver-mas" style="cursor: pointer;">Ver más >></label>
                    </div>
                </a>

            </div>
        </div>

        <?php
    endwhile;
    ?>
</div>