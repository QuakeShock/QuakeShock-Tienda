<div class="lightbox-eliminar-producto">
    <img src="<?=base_url?>assets/img/icons/x.png" onclick='cerrarTodo()' class='cerrar'>
    <h1 class="titulo"> Eliminar Producto</h1>    
    <div class="conten-form">
        <form class="formulario" action="<?= base_url ?>producto/eliminar" method="post">
            <div class="conten-producto-input">
                <label for="txtId" class="lbl-producto">ID de producto: </label>
                <input type="text" name="txtId" class="txtProducto small eli-modi-bus" value="" placeholder="13" required data-parsley-error-message="<p id='error-rut'>Ingresé su rut sin puntos y con guión!</p>">
            </div>
            <div class="conten-btn-form">
                <input type="submit" name="btnEliminarProducto" class="btn-form eliminarCat" value="Eliminar Producto">
            </div>
        </form>
    </div>
</div>