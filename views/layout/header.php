<?php
include_once('funciones/funciones_header.php');
session_start();

?>
<nav>
    <div class="toolbar">
        <div id="logo"></div>
            <div id="main-menu">
                <div id="area-buscador">
                  <div class="contenedor-buscar">
                    <form action="/funciones/buscar_producto.php">
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
                $_SESSION['nombre_usuario'] = null;
                if($_SESSION['nombre_usuario'] != null):
                
                    $chequear_login = chequear_login($_SESSION['nombre_usuario']);
                    if ($chequear_login==true):
                         
                        echo "logueado";
                    else:
                        
                        echo "no logueado"; ?>
                        <button type="button" name="btnLogin" class="btn login">Iniciar Sesión</button>
                        <button type="button" name="btnCarrito" class="btn carrito"><img src="img/header/carrito.png" height="45px" width="80px"></button>
                        <button type="button" name="btnRegister" class="btn register">Registrarse</button>
                        
                    <?php endif;
                else:?>
                    <button type="button" name="btnLogin" class="btn login">Iniciar Sesión</button>
                    <button type="button" name="btnCarrito" class="btn carrito"><img src="img/header/carrito.png" height="45px" width="80px"></button>
                    <button type="button" name="btnRegister" class="btn register">Registrarse</button>
                    
                <?php
                endif; 
                
                
                
                /*              
                 * <div id="contacto">
                <a href="javascript:delay('contacto.html')" id="menu-title-contacto">CONTACTO</a>
                <div id="tracks-in"></div>
              </div>*/
                ?>
              </div>
            </div>
        </div>
</nav>


