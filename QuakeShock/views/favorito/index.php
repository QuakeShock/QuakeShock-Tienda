<?php
require_once 'views/favorito/mensajes-resultado.php'; ?>
<div class="conten-general">
    <h1 class="titulo">Mi Lista de Favoritos</h1>
    <div class="conten-bg">
        <?php
        while ($fav = $favoritos->fetch_object()):
            $id_fav = $fav->ID_FAVORITO;
            $nombre_prod = $fav->NOMBRE;
            $id_prod = $fav->ID_PRODUCTO;
            $precio = $fav->PRECIO;
            $imagen1 = $fav->Imagen1;
            ?>
        <a href="<?=base_url.'producto/detalle&id='.$id_prod?>">
            <div class="conten-favorito">
                <div class="conten-favorito-img">
                    <img src="<?=base_url.'uploads/images/'.$imagen1?>" class='favorito-imagen'>
                </div>
                <div class="conten-favorito-info">
                    <span class='texto-chico'>
                        
                        <?=$nombre_prod?></br>
                        
                    </span>
                    <span class='texto-diminuto'>
                        
                        Codigo: <?=$id_prod?></br>
                        
                    </span>
                </div>
                
                <div class="conten-favorito-precio">
                    <span class="subtitulo">
                        Precio: $<?= $precio ?></br>
                    </span>
                </div>
                <div class="conten-favorito-gestion">
                    <a href="<?=base_url.'favorito/eliminar&id='.$id_fav?>" class="btn gestion-tabla eliminar-favorito">
                        Eliminar
                    </a>
                </div>

            </div>
        </a>

            <?php endwhile;
        ?>
    </div>
    </div>
</div>
