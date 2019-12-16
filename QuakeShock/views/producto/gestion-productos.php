<?php 
require_once 'views/categoria/lightbox-crear-categoria.php';
require_once 'views/categoria/lightbox-eliminar-categoria.php';

?>
<div class="lightbox-crear-producto"> 
    <img src="<?=base_url?>assets/img/icons/x.png" onclick='cerrarTodo()' class='cerrar'>
<?php
require_once 'views/producto/lightbox-crear-producto.php';?>
</div>
<?php
require_once 'views/producto/lightbox-eliminar-producto.php';
require_once 'views/producto/lightbox-modificar-producto.php';

require_once 'views/categoria/mensajes-resultado.php';
require_once 'views/producto/mensajes-resultado.php';
?>

<darkbox></darkbox>
<div class="conten-general">
    <h1 class="titulo"> Gestión Productos</h1>
    <div class="conten-bg">
        <div class="conten-btn-gestion">
            <button type="button" name="btnCrearProducto" class="btn crear-producto"><img src="<?= base_url ?>assets/img/icons/add.png" id="btn-crear-producto-img" > <label id = "btn-crear-producto-text">Crear Producto</label> </button>
            <button type="button" name="btnEliminarProducto" class="btn eliminar-producto"><img src="<?= base_url ?>assets/img/icons/remove.png" id="btn-eliminar-producto-img" > <label id = "btn-eliminar-producto-text">Eliminar Producto</label> </button>
            <button type="button" name="btnBuscarProducto" class="btn buscar-producto"><img src="<?= base_url ?>assets/img/icons/search.png" id="btn-buscar-producto-img" > <label id = "btn-buscar-producto-text">Buscar Producto</label> </button>
            <button type="button" name="btnModificarProducto" class="btn modificar-producto"><img src="<?= base_url ?>assets/img/icons/edit.png" id="btn-modificar-producto-img" > <label id = "btn-modificar-producto-text">Modificar Producto</label> </button>
            <button type="button" name="btnVerProductos" onClick="document.location.href = '' + baseurl + 'producto/ver'" class="btn ver-productos" ><img src="<?= base_url ?>assets/img/icons/view.png" id="btn-ver-productos-img" > <label id = "btn-ver-productos-text">Ver Productos</label> </button>
        <div id="linea"></div>
            <button type="button" name="btnCrearCategoria" class="btn crear-categoria"><img src="<?= base_url ?>assets/img/icons/add.png" id="btn-crear-categoria-img" > <label id = "btn-crear-categoria-text">Crear Categoria</label> </button>
            <button type="button" name="btnEliminarCategoria" class="btn eliminar-categoria"><img src="<?= base_url ?>assets/img/icons/remove.png" id="btn-eliminar-categoria-img" > <label id = "btn-eliminar-categoria-text">Eliminar Categoria</label> </button>
            <button type="button" name="btnVerCategorias" onClick="document.location.href = '' + baseurl + 'categoria/ver'" class="btn ver-categorias" ><img src="<?= base_url ?>assets/img/icons/view.png" id="btn-ver-categorias-img" > <label id = "btn-ver-categorias-text">Ver Categorias</label> </button>
        </div>
        <?php
        require_once 'views/producto/ver-productos.php';?>
    </div>
</div>
