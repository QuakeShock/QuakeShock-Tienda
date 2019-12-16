<?php
$img1 = $prod->Imagen1;
$img2 = $prod->Imagen2;
$img3 = $prod->Imagen3;
$img4 = $prod->Imagen4;
$img5 = $prod->Imagen5;
$img6 = $prod->Imagen6;

if (empty($img1)) {
    $img1 = 'default.jpg';
}
if (empty($img2)) {
    $img2 = 'default.jpg';
}
if (empty($img3)) {
    $img3 = 'default.jpg';
}
if (empty($img4)) {
    $img4 = 'default.jpg';
}
if (empty($img5)) {
    $img5 = 'default.jpg';
}
if (empty($img6)) {
    $img6 = 'default.jpg';
}
?>

<div class="conten-general">
    <div class="conten-detalle-bg">
        <div class="conten-detalle-nombre-producto">
            <label class="detalle-titulo-text"><?= $prod->NOMBRE; ?></label>
        </div>
        <div class="conten-detalle-categoria-producto">
            <label class="detalle-titulo-text"><?= utils::getCategoria($prod->Categoria_ID_CATEGORIA); ?></label>
        </div>
        <div class="conten-detalle-imagenes-producto">
            <div class="imagen-detalle-principal">
                <img class="img-detalle-grande"src="<?= base_url ?>uploads/images/<?= $prod->Imagen1; ?>"/>
            </div>
            <div class="imagen-detalle-linea1">
                <img class='img-detalle-chica' id="img1" src="<?= base_url ?>uploads/images/<?= $img1 ?>"/>
                <img class="img-detalle-chica" id="img2" src="<?= base_url ?>uploads/images/<?= $img2 ?>"/>
                <img class="img-detalle-chica" id="img3" src="<?= base_url ?>uploads/images/<?= $img3 ?>"/>
            </div>
            <div class="imagen-detalle-linea2">
                <img class="img-detalle-chica" id="img4" src="<?= base_url ?>uploads/images/<?= $img4 ?>"/>
                <img class="img-detalle-chica" id="img5" src="<?= base_url ?>uploads/images/<?= $img5 ?>"/>
                <img class="img-detalle-chica" id="img6" src="<?= base_url ?>uploads/images/<?= $img6 ?>"/>

            </div>
        </div>
        <div class="conten-detalle-info-producto">
            <div class="conten-detalle-stock-id-producto">
                <label class="detalle-stock">Cantidad en stock: <?=$prod->STOCK;?></label>
                <label class="detalle-id">Codigo: <?=$prod->ID_PRODUCTO;?></label>
            </div>
            <div class="linea-detalle"></div>
        </div>
        
            <div class="conten-detalle-btn">
                <label class="detalle-precio">$<?=$prod->PRECIO?></label>
                    <form action="<?= base_url ?>carrito/add&id=<?= $prod->ID_PRODUCTO ?>" method="GET">
                        <input type="submit" name="" class="btn add-carrito" value="Añadir al Carrito" >
                        
                    </form>
                <a href="<?=base_url.'favorito/add&id='.$prod->ID_PRODUCTO?>" class="btn add-favoritos"><img src="<?= base_url ?>assets/img/icons/redheart.svg" id='btn-add-favoritos-img'></a>
        </div>
            <div class="conten-descripcion-producto">
                <p class="textarea-descripcion"><?=$prod->DESCRIPCION;?></p>
            </div>
    </div>
</div>