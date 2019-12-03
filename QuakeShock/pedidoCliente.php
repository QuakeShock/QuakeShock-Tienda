<!DOCTYPE html>
<html>
<head>
  <title> Pedidos </title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/menubar.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="assets/css/perfil.css">
  <link rel="stylesheet" href="css/buttons.css">
  <link rel="stylesheet" href="assets/css/pedido_cliente.css">


</head>
<body>
  <div id="central">
    <?php include_once('views/layout/header_perfil.php');?>
    <div id="central-menu">
      <?php include_once('views/layout/menubar.php');?>
    </div>

    <div id="contenedor_general">
      <h1> Mis Pedidos </h1>
      <div id="contenido_pedido">
        <div class="pedidos_de_cliente">
          <br/>
          <br/>
          <label class="datos_cliente"> ID: </label>
          <br/>
          <br/>
          <label class="datos_cliente"> Cliente: </label>
          <br/>
          <br/>
          <label class="datos_cliente"> Fecha: </label>
          <div id="estado_pago">
            <label class="datos_cliente"> Estado: </label>
          </div>
          <div id="detalles_cliente"><a href="#"> Ver Detalles </a></div>
        </div>
      </div>
    </div>
    <?php include_once('views/layout/footer.php');?>
  </div>
</body>
</html>
