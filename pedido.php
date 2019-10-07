<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>QuakeShock Records</title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/galeria.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/menubar.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/login_register.css">
<link rel="stylesheet" href="css/pedido.css">
  <link rel="stylesheet" href="css/buttons.css">
  <script src="js/jquery.js"> </script>
  <script src="js/index.js"></script>
  <script src="js/header.js"></script>
  <script src="js/toolbar.js"></script>
  <script src="js/gallery.js"></script>
  <script src="js/jqueryknob.js"></script>
  <script src="js/login_register.js"></script>
</head>
<body>
    <div id="central">
    
    <?=include_once('modulos/log-in.php');?>
    
    <?=include_once('modulos/header.php');?>
      
    <?=include_once('modulos/register.php');?>
     
      <div id="central-menu">
          <?=include_once('modulos/menubar.php');?>
      </div>
        <div id="title-container">
            <label class="titles">Pedido</label>
        </div>
        <div id="pedido-container">
            <div id="pedido-container-in">
                <label class="texts">Deja el color o las opciones especificadas en los comentarios de cada producto</label>
                <?=include_once('modulos/producto_pedido.php');?>   
                
                <div id="total-container">
                    <div id="total-container-in">
                        <div id="total-container-text"> <label id="total-text">Total (sin envio): </label></div>
                        <div id="total-container-precio"><label id="total-text-precio">$20.000</label></div>
                    </div>
                </div>
                
                <div id="despacho-container">
                    <div id="despacho-container-in">
                        <div id="metodo-despacho-text-container">
                            <label id="metodo-despacho-text">Metodo Despacho</label>
                        </div>
                        <div id="seleccion-despacho-container">
                            <div id="despacho-domicilio-radio-container">
                                <input type="radio" name="radioDespacho" value="" /><label class="texts">Despacho a domicilio</label>
                            </div>
                            <div id="despacho-estaciones-radio-container">
                                <input type="radio" name="radioDespacho" value="" /><label class="texts">Despacho en estaciones</label>
                            </div>
                        </div>
                        <div id="seleccion-direccion-container">
                            <select id="select-direccion">
                                <option value="casa">Casa</option>
                            </select>
                            <button type="button" name="btnAddDireccion" class="btn addDireccion">Añadir dirección</button>
                        </div>
                        <div id="tyc-estaciones-container">
                            <a id="tyc-estaciones" href="#">Terminos y condiciones despacho en estaciones</a>   
                        </div>
                        <div id="tyc-domicilio-container">
                            <a id="tyc-domicilio" href="#">Terminos y condiciones despacho a domicilio</a>   
                        </div>
                    </div>
                </div>
                <div id="pago-container">
                        <div id="metodo-pago-text-container">
                            <label id="metodo-pago-text">Metodo Pago</label>
                        </div>
                            <div id="pago-radio-container">
                                <input type="radio" name="radioPago" value="" /><label class="texts">Tarjetas de debito, credito y transferencia electronica</label>
                            </div>
                </div>
                <div id="tyc-acorde-container">
                    <input type="checkbox" name="checkTycPedido" value="ON" /><label id="tyc-acorde-text">Estoy de acuerdo con los terminos y condiciones</label>
                </div>
                <div id="pedido-buttons-container">
                    <button type="button" name="btnProceder" class="btn pagar">Pagar</button>
                    <button type="button" name="btnCancelarPedido" class="btn cancelarPedido">Cancelar pedido</button>
                </div>
            </div>
        </div>
    </div>
    <?=include_once('modulos/footer.php');?>
</body>
</html>