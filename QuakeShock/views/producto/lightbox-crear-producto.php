    <?php
    if(isset($modificar) && isset($prod) && is_object($prod)):?>
        <?php $url_action = base_url."producto/guardar&id=$prod->ID_PRODUCTO";?>
        <div class="conten-general">
        <h1 class="titulo"> Modificar producto</h1>
        <div class="conten-bg">
    <?php
    else:?>
        <h1 class="titulo"> Crear producto</h1>
        <?php $url_action = base_url."producto/guardar";?>
    <?php
    endif;?>
    <div class="conten-form">
        <form class="formulario" action="<?= $url_action ?>" method="post" enctype="multipart/form-data">
            <div class="conten-producto-input">
                <label for="txtNombre" class="lbl-producto">Nombre: </label>
                <input type="text" name="txtNombre" class="txtProducto" value="<?=isset($prod) && is_object($prod) ? $prod->NOMBRE : ''; ?>" placeholder="Audifonos" required data-parsley-error-message="<p id='error-rut'>Ingresé su rut sin puntos y con guión!</p>">
            </div>
            <div class="conten-producto-input">
                <label for="txtNombre" class="lbl-producto">Precio: </label>
                <input type="number" name="txtPrecio" class="txtProducto small" value="<?=isset($prod) && is_object($prod) ? $prod->PRECIO : ''; ?>" placeholder="30000" required data-parsley-error-message="<p id='error-nombre'>Ingresé sus nombres!</p>">
            </div>
            <div class="conten-producto-input">
                <label for="txtStock" class="lbl-producto">Stock: </label>
                <input type="number" name="txtStock" class="txtProducto small" value="<?=isset($prod) && is_object($prod) ? $prod->STOCK : ''; ?>" placeholder="30" required data-parsley-error-message="<p id='error-apellido'>Ingresé sus apellidos!</p>">
            </div>
            <div class="conten-producto-input">
                <label for="lbCategoria" class="lbl-producto">Categoria: </label>
                <select name="lbCategoria" class="txtProducto" placeholder="Selecciona una categoria..">
                    <option disabled selected>Selecciona una categoria</option>
                    <?php
                    $cats = utils::getCategorias();
                    while ($cat = $cats->fetch_object()): 
                    ?>
                        <option value="<?=$cat->ID_CATEGORIA?>" <?=isset($prod) && is_object($prod) && $cat->ID_CATEGORIA == $prod->Categoria_ID_CATEGORIA ? 'selected' : ''; ?>><?=$cat->NOMBRE?></option>
                    <?php
                    endwhile;
                    ?>
                </select>                
            </div>
            <div class="conten-producto-input textarea">
                <label for="txtDescripcion" class="lbl-registro">Descripción: </label>
                <textarea id="editArea" name="txtDescripcion" id="txtDescripcion" placeholder="Ingresé aquí una descripción del producto.." class="txtProducto textarea"><?=isset($prod) && is_object($prod) ? $prod->DESCRIPCION : ''; ?></textarea>
            </div>
            <div class="conten-producto-input img">
                <label for="img1" class="lbl-file">Imagen 1: </label>
                <input type="file" name="img1" class="img-producto">
            </div>
            <div class="conten-producto-input img">
                <label for="img2" class="lbl-file">Imagen 2: </label>
                <input type="file" name="img2" class="img-producto">
            </div>
            <div class="conten-producto-input img">
                <label for="img3" class="lbl-file">Imagen 3: </label>
                <input type="file" name="img3" class="img-producto">
            </div>
            <div class="conten-producto-input img">
                <label for="img4" class="lbl-file">Imagen 4: </label>
                <input type="file" name="img4" class="img-producto">
            </div>
            <div class="conten-producto-input img">
                <label for="img5" class="lbl-file">Imagen 5: </label>
                <input type="file" name="img5" class="img-producto">
            </div>
            <div class="conten-producto-input img">
                <label for="img6" class="lbl-file">Imagen 6: </label>
                <input type="file" name="img6" class="img-producto">
            </div>
            <div class="conten-btn-form">
                
                <input type="submit" name="btnCrearProducto" class="btn-form" value="<?=isset($modificar) && isset($prod) && is_object($prod) ? 'Guardar cambios' : 'Crear producto';?>">
            </div>
        </form>
    </div>
    <?php
if(isset($modificar)):?>
</div>
</div>
<?php
endif;?>