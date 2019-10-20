<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>QuakeShock Tienda On-Line</title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/galeria.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/menubar.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/login_registro.css">

  <link rel="stylesheet" href="css/buttons.css">
  <script src="js/parsley.js"></script>
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
    
    <?php include_once('views/usuario/login.php');?>
    
    <?php include_once('views/layout/header.php');?>
      
    <?php include_once('views/usuario/registro.php');?>
     
      <div id="central-menu">
          <?php include_once('views/layout/menubar.php');?>
      </div>
    <div class="header" id="header">
        <div class='logo_container'>
            <img src='img/qslogo_full.png' class='logo_img'>
        </div>
    </div>
    <div id="destacados">
        <label id="destacados-txt">Productos destacados</label>
        <div id="destacados-in">
                <div id="destacados-in-box">
                    <div id="destacado1">

                    </div>

                    <div id="destacado2">

                    </div>

                    <div id="destacado3">

                    </div>

                    <div id="destacado4">

                    </div>
            </div>
        </div>
    </div>
  </div>
  <?php include_once('views/layout/footer.php');?>
</body>
  <script src="js/parsley.js"></script>
  <script src="js/jquery.js"> </script>
  <script src="js/index.js"></script>
  <script src="js/header.js"></script>
  <script src="js/toolbar.js"></script>
  <script src="js/gallery.js"></script>
  <script src="js/jqueryknob.js"></script>
  <script src="js/login_register.js"></script>
</html>


