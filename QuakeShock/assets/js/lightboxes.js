
//-----------------------------------------------------------AUTENTICACIÓN--------------------------------------------------------------------------------
//-----------------------------------------------------------AUTENTICACIÓN--------------------------------------------------------------------------------
////-----------------------------------------------------------AUTENTICACIÓN--------------------------------------------------------------------------------
//$('#login-form').parsley();
//$('#registro-form').parsley();
//-----------------------------------------------------------LIGHTBOX LOGIN

$('.btn.login').click(function () {
    //Al dar click en el boton de Iniciar sesión dentro del HEADER.
    //Muestra la caja negra, muestra la venta de login y oculta la posible venta de registro.
    //
    verDarkbox();

    ocultarRegistro();

    verLogin();
    
    $("html, body").animate({scrollTop: 0}, 800);
});

$(".no-registrado-link").click(function () {
    //Al dar click al link de "No tienes cuenta? registrate aquí" en la venta de login.
    //Oculta la venta de login, oculta la caja negra y muestra la venta de registro.
    //
    ocultarLogin();
    
    ocultarDarkbox();
    
    verRegistro();
    
});

//-----------------------------------------------------------LIGHTBOX REGISTRO

$('.btn.registro').click(function () {
    //Al dar click en el boton de registrarse dentro del HEADER.
    //Muestra la caja negra, muestra la venta de registro y oculta la posible ventana de login.
    //
    verDarkbox();
    
    verRegistro();
    
    ocultarLogin();

    $("html, body").animate({scrollTop: 0}, 800);
});

$(".ya-registrado-link").click(function () {
    //Al dar click al link de "Ya tienes cuenta? Inicia sesión aqui" en la venta de registro.
    //Oculta la caja negra, muestra la ventana de login y oculta la ventana de registro.
    //
    ocultarDarkbox();
    
    verLogin();
    
    ocultarRegistro();
});

//-----------------------------------------------------------GESTIÓN DE PERFIL--------------------------------------------------------------------------------
//-----------------------------------------------------------GESTIÓN DE PERFIL--------------------------------------------------------------------------------
//-----------------------------------------------------------GESTIÓN DE PERFIL--------------------------------------------------------------------------------

//-----------------------------------------------------------LIGHTBOX MODIFICAR PERFIL

$('.btn.modificar-perfil').click(function () {
    //Al dar click al boton de crear usuario dentro del panel de gestion de usuarios de administrador.
    //Muestra la caja negra, muestra la venta de crear usuario y oculta la posible venta de eliminar usuario, modificar usuario y buscar usuario.
    //
    verDarkbox();
    
 
    //ocultarRecuperarClave();

    //ocultarGestionarDir();
    
    verModificarPerfil();
    
    $("html, body").animate({scrollTop: 0}, 800);
});

//-----------------------------------------------------------GESTIÓN DE USUARIOS--------------------------------------------------------------------------------
//-----------------------------------------------------------GESTIÓN DE USUARIOS--------------------------------------------------------------------------------
//-----------------------------------------------------------GESTIÓN DE USUARIOS--------------------------------------------------------------------------------

//-----------------------------------------------------------LIGHTBOX CREAR USUARIO

$('.btn.crear-usuario').click(function () {
    //Al dar click al boton de crear usuario dentro del panel de gestion de usuarios de administrador.
    //Muestra la caja negra, muestra la venta de crear usuario y oculta la posible venta de eliminar usuario, modificar usuario y buscar usuario.
    //
    verDarkbox();
    
    ocultarEliminarUsu();
    
    //ocultarModificarUsu();

    //ocultarBuscarUsu();
    
    verCrearUsu();
    
    $("html, body").animate({scrollTop: 0}, 800);
});

//-----------------------------------------------------------LIGHTBOX ELIMINAR USUARIO

$('.btn.eliminar-usuario').click(function () {
    //Al dar click al boton de eliminar usuario dentro del panel de gestion de usuarios de administrador.
    //Muestra la caja negra, muestra la venta de eliminar usuario y oculta la posible venta de crear usuario, modificar usuario y buscar usuario.
    //
    verDarkbox();
    
    verEliminarUsu();
    
    ocultarCrearUsu();
    
    //ocultarModificarUsu();

    //ocultarBuscarUsu();
    
    $("html, body").animate({scrollTop: 0}, 800);
});

//-----------------------------------------------------------LIGHTBOX BUSCAR USUARIO

//-----------------------------------------------------------LIGHTBOX MODIFICAR USUARIO


//-----------------------------------------------------------GESTIÓN DE PRODUCTOS--------------------------------------------------------------------------------
//-----------------------------------------------------------GESTIÓN DE PRODUCTOS--------------------------------------------------------------------------------
//-----------------------------------------------------------GESTIÓN DE PRODUCTOS--------------------------------------------------------------------------------

//-----------------------------------------------------------LIGHTBOX CREAR PRODUCTO

$('.btn.crear-producto').click(function () {
    //Al dar click al boton de crear producto dentro del panel de gestion de productos de administrador y empleado.
    //Muestra la caja negra, muestra la ventana de crear producto y oculta la posible ventana de eliminar producto, modificar producto,
    // buscar producto, eliminar categoria y crear categoria.
    //
    
    verDarkbox();
    
    ocultarEliminarProd();
    
    //modificarProd();
    
    //buscarProd();
    
    ocultarEliminarCat();
    
    ocultarCrearCat();
    
    verCrearProd();
    
    $("html, body").animate({scrollTop: 0}, 800);
});

//-----------------------------------------------------------LIGHTBOX ELIMINAR PRODUCTO

$('.btn.eliminar-producto').click(function () {
    verDarkbox();
    
    ocultarCrearProd();
    
    //ocultarBuscarProd();
    
    ocultarCrearCat();
    
    ocultarEliminarCat();
    
    verEliminarProd();
    
    $("html, body").animate({scrollTop: 0}, 800);
});

//-----------------------------------------------------------LIGHTBOX MODIFICAR PRODUCTO

$('.btn.modificar-producto').click(function () {
    verDarkbox();
    
    verModificarProd();
    
    ocultarCrearProd();
    
    ocultarEliminarProd();
    
    //ocultarBuscarProd();
    
    ocultarEliminarCat();
    
    ocultarCrearCat();
    
    $("html, body").animate({scrollTop: 0}, 800);
});

//-----------------------------------------------------------LIGHTBOX CREAR CATEGORIA

$('.btn.crear-categoria').click(function () {
    verDarkbox();
    
    verCrearCat();
    
    ocultarEliminarCat();
    
    ocultarCrearProd();;
    
    ocultarEliminarProd();
    
    //ocultarBuscarProd();
    
    ocultarModificarProd();
    
    $("html, body").animate({scrollTop: 0}, 800);
});

//-----------------------------------------------------------LIGHTBOX ELIMINAR CATEGORIA

$('.btn.eliminar-categoria').click(function () {
    verDarkbox();

    verEliminarCat();
    
    ocultarCrearCat();
    
    ocultarCrearProd();;
    
    ocultarEliminarProd();
    
    //ocultarBuscarProd();
    
    ocultarModificarProd();
});

