<div class="lightbox-crear-categoria">
    <img src="<?=base_url?>assets/img/icons/x.png" onclick='cerrarTodo()' class='cerrar'>
    <h1 class="titulo"> Crear categoria</h1>    
    <div class="conten-form">
        
        <form class="formulario" name="form-categoria" action="<?= base_url ?>categoria/guardar" method="post" enctype="multipart/form-data">
            <div class="conten-producto-input">
                <label for="txtCategoria" class="lbl-producto">Nombre: </label>
                <input type="text" name="txtCategoria" class="txtProducto" value="" placeholder="Audifonos" required data-parsley-error-message="<p id='error-rut'>Ingresé su rut sin puntos y con guión!</p>">
            </div>
            <div class="conten-producto-input img">
                <label for="img" class="lbl-file">Imagen: </label>  
                <input type="file" name="img" id="img" class="img-producto">
            </div>
            <div class="conten-btn-form">
                <input type="submit" name="btnCrearCategoria" class="btn-form eliminarCat" value="Crear categoria">
            </div>
        </form>
    </div>
</div>