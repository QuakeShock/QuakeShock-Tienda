<?php
require_once 'views/admin/mensajes-resultado.php';
?>
<div class="darkbox"></div>
<?php
require_once 'views/admin/crear-usuario.php';
require_once 'views/admin/eliminar-usuario.php';
?>
<div id="conten-general">
    <h1 id="titulo"> Gestión Usuarios</h1>
    <div id="conten-perfil">
        <div id="conten-btn-gestion-usuarios">
            <button type="button" name="btnCrearUsuario" class="btn crear-usuario"><img src="<?= base_url ?>assets/img/icons/add.png" id="btn-crear-usuario-img" > <label id = "btn-crear-usuario-text">Crear Usuario</label> </button>
            <button type="button" name="btnEliminarUsuario" class="btn eliminar-usuario"><img src="<?= base_url ?>assets/img/icons/remove.png" id="btn-eliminar-usuario-img" > <label id = "btn-eliminar-usuario-text">Eliminar Usuario</label> </button>
            <button type="button" name="btnBuscarUsuario" class="btn buscar-usuario"><img src="<?= base_url ?>assets/img/icons/search.png" id="btn-buscar-usuario-img" > <label id = "btn-buscar-usuario-text">Buscar Usuario</label> </button>
            <button type="button" name="btnModificarUsuario" class="btn modificar-usuario"><img src="<?= base_url ?>assets/img/icons/edit.png" id="btn-modificar-usuario-img" > <label id = "btn-modificar-usuario-text">Modificar Usuario</label> </button>
            <button type="button" name="btnVerUsuarios" onClick="document.location.href = '' + baseurl + 'admin/ver_usuarios'" class="btn ver-usuarios" ><img src="<?= base_url ?>assets/img/icons/view.png" id="btn-ver-usuarios-img" > <label id = "btn-ver-usuarios-text">Ver Usuarios</label> </button>
        </div>
    </div>
    
</div>
