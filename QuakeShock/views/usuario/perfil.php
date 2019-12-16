<?php
if (isset($_SESSION['identidad'])) {
$usuario = $_SESSION['identidad'];
$rut = $usuario->RUT;
$nombre = $usuario->NOMBRE;
$apellidos = $usuario->APELLIDOS;
$telefono = $usuario->TELEFONO;
$correo = $usuario->CORREO;

?>
<div class="conten-general">
    <h1 class="titulo"> Mi Perfil </h1>
    <div class="conten-bg">
        <div id="conten-datos-perfil">
            <div>
                <label class="lbl-perfil" > RUT: <?= $rut ?> </label>
            </div>
            <div>
                <label class="lbl-perfil"> Nombre: <?= $nombre ?> </label>
            </div>
            <div>
                <label class="lbl-perfil"> Apellidos: <?= $apellidos ?> </label>
            </div>
            <div>
                <label class="lbl-perfil"> Telefono: <?= $telefono ?> </label>
            </div>
            <div>
                <label class="lbl-perfil"> Correo: <?= $correo ?> </label>
            </div>
        </div>
        <div id="linea"></div>
        <div id="conten-opciones-perfil">
            <?php
            if (isset($_SESSION['tipo_usuario'])):
                $tipo_usuario = $_SESSION['tipo_usuario'];
            
                if($tipo_usuario == "cliente"):
                ?>
                    <button type="button" name="btnDirecciones" class="btn direcciones" onClick="document.location.href = '' + baseurl + 'usuario/logout'"><img src="<?= base_url ?>assets/img/icons/house.png" id="btn-direcciones-img" > <label id = "btn-direcciones-text">Gestionar Direcciones</label> </button>
                <?php
                    elseif ($tipo_usuario == "admin"): ?>
                        <button type="button" name="btnGestionarUsuarios" class="btn gestionar-usuarios" onClick="document.location.href = '' + baseurl + 'admin/gestion_usuarios'"><img src="<?= base_url ?>assets/img/icons/user.png" id="btn-gestionar-usuarios-img" > <label id = "btn-gestionar-usuarios-text">Gestionar Usuarios</label> </button>
                        <button type="button" name="btnGestionarDestacados" class="btn gestionar-destacados" onClick="document.location.href = '' + baseurl + 'admin/gestion_destacados'"><img src="<?= base_url ?>assets/img/icons/star.svg" id="btn-gestionar-destacados-img" > <label id = "btn-gestionar-destacados-text">Gestionar Destacados</label> </button>
                        <button type="button" name="btnGestionarTyc" class="btn gestionar-tyc" onClick="document.location.href = '' + baseurl + 'admin/gestion-tyc'"><img src="<?= base_url ?>assets/img/icons/tyc.png" id="btn-gestionar-tyc-img" > <label id = "btn-gestionar-tyc-text">Gestionar Terminos y Condiciones</label> </button> 
                <?php    
                        elseif ($tipo_usuario == "empleado"): ?>
                            <button type="button" name="btnGestionarProductos" class="btn gestionar-productos" onClick="document.location.href = '' + baseurl + 'producto/gestion'"><img src="<?= base_url ?>assets/img/icons/product.png" id="btn-gestionar-productos-img" > <label id = "btn-gestionar-productos-text">Gestionar Productos</label> </button>
                            <button type="button" name="btnGestionarPedidos" class="btn gestionar-pedidos" onClick="document.location.href = '' + baseurl + 'pedido/gestion'"><img src="<?= base_url ?>assets/img/icons/order.png" id="btn-gestionar-pedidos-img" > <label id = "btn-gestionar-pedidos-text">Gestionar Pedidos</label> </button>
                <?php
                endif;
            endif;
            ?>

            <button type="button" name="btnModificarPerfil" class="btn modificar-perfil"><img src="<?= base_url ?>assets/img/icons/edit.png" id="btn-modificar-perfil-img" > <label id = "btn-modificar-perfil-text">Modificar Perfil</label> </button>
            <button type="button" name="btnRecuperarClave" class="btn recuperar-clave" onClick="document.location.href = '' + baseurl + 'usuario/recuperar-clave'"><img src="<?= base_url ?>assets/img/icons/unlock.png" id="btn-recuperar-clave-img" > <label id = "btn-recuperar-clave-text">Recuperar Clave</label> </button>
            <button type="button" name="btnLogout" class="btn logout" onClick="document.location.href = '' + baseurl + 'usuario/logout'"><img src="<?= base_url ?>assets/img/icons/logout.png" id="btn-logout-img" > <label id = "btn-logout-text">Cerrar sesión</label> </button>
        </div>
    </div>
</div>
<?php
}else{
    ?>
        <script type="text/javascript">
            var msg = "Error! debes iniciar sesión";
            mostrarMensaje(msg);
        </script>
        <?php
        
    header("refresh:2;url=" . base_url . 'inicio/qs');
    
}