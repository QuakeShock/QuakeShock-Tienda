<div class="lightbox-eliminar-usuario">
    <img src="<?=base_url?>assets/img/icons/x.png" onclick='cerrarTodo()' class='cerrar'>
    <div class="conten-titulo-text">
        <h2 class="titulo-form-text">Elimina un usuario</h2>
    </div>
    <form id="eliminar-usuario-form" action="<?= base_url ?>admin/eliminar_usuario" method="post">
            <div class="conten-eliminar-rut">
                <label for="txtRut" class="lbl-registro">RUT del usuario: </label>
                <input type="text" name="txtRut" id="txtRutEliminar" value="" placeholder="19829063-7" required data-parsley-error-message="<p id='error-rut'>Ingresé su rut sin puntos y con guión!</p>">
            </div>
            <div class="conten-btn-eliminar">
                <input type="submit" name="btnEliminar" class="btn-registro" value="Eliminar usuario">
            </div>
    </form>
</div>

