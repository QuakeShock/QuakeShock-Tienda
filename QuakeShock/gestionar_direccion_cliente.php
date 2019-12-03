<!DOCTYPE html>
<html>
<head>
  <title> Direcciones </title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/menubar.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="assets/css/perfil.css">
  <link rel="stylesheet" href="css/buttons.css">
  <link rel="stylesheet" href="assets/css/gestion_direccion_cliente.css">


</head>
<body>
  <div id="central">
    <?php include_once('views/layout/header_perfil.php');?>
    <div id="central-menu">
      <?php include_once('views/layout/menubar.php');?>
    </div>

    <div id="contenedor_general">
      <h1> Mis Direcciones </h1>
      <div id="contenido_direccion">
        <div id="añadir_direccion">
          <a href="#" class="botonCliente">
          <span class="icon-añadir-direccion"> <img src="img/perfil/añadir.png" width="30px;" height="30px;"></span> Añadir </a>
        </div>
        <div id="datos_direccion">

        </div>
      </div>
    </div>
    <?php include_once('views/layout/footer.php');?>
  </div>
</body>
</html>
