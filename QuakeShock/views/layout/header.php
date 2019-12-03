<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">>
        <title>QuakeShock Tienda On-Line</title>
        <link rel="stylesheet" href="<?= base_url ?>assets/css/header.css">
        <link rel="stylesheet" href="<?= base_url ?>assets/css/galeria.css">
        <link rel="stylesheet" href="<?= base_url ?>assets/css/index.css">
        <link rel="stylesheet" href="<?= base_url ?>assets/css/menubar.css">
        <link rel="stylesheet" href="<?= base_url ?>assets/css/footer.css">
        <link rel="stylesheet" href="<?= base_url ?>assets/css/login-registro.css">
        <link rel="stylesheet" href="<?= base_url ?>assets/css/botones.css">
        <link rel="stylesheet" href="<?= base_url ?>assets/css/tablas.css">
        <link rel="stylesheet" href="<?= base_url ?>assets/css/perfil.css">
        <link rel="stylesheet" href="<?= base_url ?>assets/css/categoria.css">
        <link rel="stylesheet" href="<?= base_url ?>assets/css/gestion-usuarios.css">
        <script src="<?= base_url ?>assets/js/parsley.js"></script>
        <script src="<?= base_url ?>assets/js/jquery.js"></script>
        <script src="<?= base_url ?>assets/js/index.js"></script>
        <script src="<?= base_url ?>assets/js/parameters.js"></script>
        <script src="<?= base_url ?>assets/js/header.js"></script>
        <script src="<?= base_url ?>assets/js/toolbar.js"></script>
        <script src="<?= base_url ?>assets/js/gallery.js"></script>
        <script src="<?= base_url ?>assets/js/jqueryknob.js"></script>
        <script src="<?= base_url ?>assets/js/general.js"></script>
        <script src="<?= base_url ?>assets/js/login-registro.js"></script>
        <script src="<?= base_url ?>assets/js/gestion-usuarios.js"></script>
    </head>
    <body>
        <div class="darkbox">
        </div>

        <nav>
            <div class="toolbar">
                <div id="mini-logo-qs"></div>
                <div id="main-menu">
                    <div id="area-buscador">
                        <div class="conten-buscar">
                            <form action="<?= base_url ?>/funciones/buscar_producto.php">
                                <input type="text" placeholder="Buscar..." name="buscar" class="txt-busqueda">
                                <div id="icono-buscar"></div>
                            </form>
                        </div>
                        <div>
                            <button type="button" name="btnFiltros" id="btn-filtros">Filtros</button>
                        </div>
                    </div>
                    <div id="area-usuario">
                        <?php
                        if (isset($_SESSION['nombre_usuario'])):
                            if ($_SESSION['tipo_usuario'] == 'cliente'):
                                require_once('views/layout/header-perfil.php');
                            else:
                                if ($_SESSION['tipo_usuario'] == 'empleado'):
                                    include_once('views/layout/header-perfil.php');
                                else:
                                    if ($_SESSION['tipo_usuario'] == 'admin'):
                                        include_once('views/layout/header-perfil.php');
                                    endif;
                                endif;
                            endif;
                        else:
                            ///onClick="document.location.href = '' + baseurl + 'cliente/login'"
                            ?>

                            <button type="button" name="btnLogin" class="btn login">Iniciar Sesión</button>
                            <button type="button" name="btnCarrito" class="btn carrito"><img src="<?= base_url ?>assets/img/icons/carrito.png" id="btn-carrito-img"></button>
                            <button type="button" name="btnRegister" class="btn registro">Registrarse</button>

                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </nav>
        <div id="central">

            <div class="lightbox-msg">
                <div class="conten-msg">
                    <h2 class="x-msg"></h2>
                </div>
            </div>

