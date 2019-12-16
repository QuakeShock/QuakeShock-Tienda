<div class="conten-general">
    <h1 class="titulo"> Categorias</h1>    
    <div class="conten-bg">
        <?php
        while ($cat = $categorias->fetch_object()):
            if ($cat->Imagen == null) {
                $imagen = base_url . 'uploads/images/default.jpg';
            } else {
                $imagen = base_url . 'uploads/images/' . $cat->Imagen;
            }
            ?>
            <a href="<?= base_url . 'categoria/index&id=' . $cat->ID_CATEGORIA; ?>" >
                <div class="conten-categoria-img">
                    <img src="<?= $imagen ?>" class='categoria-img' href="<?= base_url . 'categoria/index&id=' . $cat->ID_CATEGORIA; ?>"></br>
                    <div id="conten-categoria-text"><span class="categoria-img-text"><?= $cat->NOMBRE; ?></span></div>
                </div>
            </a>

            <?php
        endwhile;
        ?>   
    </div>
</div>