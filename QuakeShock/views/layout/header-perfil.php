<div id='conten-bg-perfil'>
    <div id="conten-nombre-perfil">
        <?php
        if (isset($_SESSION['identidad']) && isset($_SESSION['nombre_usuario'])) {
            $nombre = $_SESSION['identidad']->NOMBRE;
            $apellidos = $_SESSION['identidad']->APELLIDOS;
            $nombre_usuario = $nombre . ' ' . $apellidos;
        }
        ?>
        <label id='nombre-usuario-text'><?= $nombre_usuario ?></label>
    </div>
    <div id='conten-botones-header'>

        <button type="button" id="btnPerfil" class="btn mi-perfil" onClick="document.location.href = '' + baseurl + 'usuario/perfil'" >Mi Perfil</button><br>
        <button type="button" id="btnPedidos" class="btn mis-pedidos"> Mis Pedidos </button>

        <button type="button" name="btnCarrito" class="btn carrito-perfil"><img src="<?= base_url ?>assets/img/icons/carrito.png" id='btn-carrito-perfil-img'></button>
        <button type="button" name="btnFavoritos" class="btn favoritos-perfil"><img src="<?= base_url ?>assets/img/icons/redheart.svg" id='btn-favoritos-perfil-img'></button>
    </div>
</div>


