$('.btn.login').click(function(){
      
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");
    
    $(".lightbox-register").css("visibility","hidden");
    $(".lightbox-register").css("opacity","0");
    
    $(".lightbox-login").css("visibility","visible");
    $(".lightbox-login").css("opacity","1");
    
    $("html, body").animate( { scrollTop : 0}, 800);
});
  
  
$('.btn.register').click(function(){
      
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");
    
    $(".lightbox-login").css("visibility","hidden");
    $(".lightbox-login").css("opacity","0");
    
    $(".lightbox-register").css("visibility","visible");
    $(".lightbox-register").css("opacity","1");

    $("html, body").animate( { scrollTop : 0}, 800);
});
  
  
$('.darkbox').click(function(){
      
    $(".darkbox").css("visibility", "hidden");
    $(".darkbox").css("opacity", "0");
    
    $(".lightbox-login").css("visibility","hidden");
    $(".lightbox-login").css("opacity","0");
    
    $(".lightbox-register").css("visibility","hidden");
    $(".lightbox-register").css("opacity","0");
});
$(".not-registered-link").click(function(){
    $(".lightbox-login").css("visibility","hidden");
    $(".lightbox-login").css("opacity","0");
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");
    $(".lightbox-register").css("visibility","visible");
    $(".lightbox-register").css("opacity","1");
});
$(".already-registered-link").click(function(){
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");
    $(".lightbox-login").css("visibility","visible");
    $(".lightbox-login").css("opacity","1");
    $(".lightbox-register").css("visibility","hidden");
    $(".lightbox-register").css("opacity","0");
});
$('#loginform').parsley();
$('#registerform').parsley();

//AJAX

$("#loginform").submit(function(e) 
{
    e.preventDefault(); // PARA EVITAR LA EJECUCION POR DEFECTO DEL FORMULARIO
    $.ajax(
        {
        type: "POST",
        url: 'php/procesarLogin.php',
        data: $(this).serialize(),
        success: function(data)
           {
               $(".lightbox-login").css("visibility","hidden");
               $(".lightbox-login").css("opacity","0");
               $(".exito-login-lightbox").css("visibility", "visible");
               $(".exito-login-lightbox").css("opacity", "1");
               $(".exito-login-ajax").text("Bienvenido "+data); // el data es la respuesta del PHP
                if(data === 'error') //
                {
                    $(".exito-login-ajax").text("Error, usuario no encontrado!");

                    setTimeout(
                        function()
                        {
                            $(".lightbox-login").css("visibility","visible");
                            $(".lightbox-login").css("opacity","1");
                            $(".exito-login-lightbox").css("visibility", "hidden");
                            $(".exito-login-lightbox").css("opacity", "0");
                        }, 2000);
               }
               else{
                    setTimeout(
                        function()
                        {
                            window.location.href = 'principal.php';
                        }, 2000);
                    }
           },
                error: function()
                {
                    alert("Error con Ajax!");
                }
        });
});

$("#registerform").submit(function(e) 
{
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: 'php/procesarRegister.php',
        data: $(this).serialize(),
            success: function(data)
                {
                    $(".lightbox-register").css("visibility","hidden");
                    $(".lightbox-register").css("opacity","0");
                    $(".exito-login-lightbox").css("visibility", "visible");
                    $(".exito-login-lightbox").css("opacity", "1");
                    $(".exito-login-ajax").text("Bienvenido "+data);
                    if(!$.trim(data))
                    {
                        $(".exito-login-ajax").text("Error al registrar");

                        setTimeout(
                            function()
                            {
                                $(".lightbox-register").css("visibility","visible");
                                $(".lightbox-register").css("opacity","1");
                                $(".exito-login-lightbox").css("visibility", "hidden");
                                $(".exito-login-lightbox").css("opacity", "0");
                            }, 2000);
                    }
                    else{
                      setTimeout(
                        function()
                        {
                          window.location.href = 'primera-config.php';
                        }, 2000);
                    }

                },
                error: function()
                {
                    $(".mensaje-ajax").text('Error con ajax!');
                }
              });
            });



  
  
$(document).ready(function(){
  $(".lightbox-login").draggable();
  $('.btn.login').click(function(){
    $(".darkbox").css("visibility", "hidden");
    $(".darkbox").css("opacity", "0.7");
    $(".lightbox-login").css("visibility","visible");
    $(".lightbox-login").css("opacity","1");
  });
  $('.btn.register').click(function(){
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");
    $(".lightbox-register").css("visibility","visible");
    $(".lightbox-register").css("opacity","1");
  });
  $('.darkbox').click(function(){
    $(".darkbox").css("visibility", "hidden");
    $(".darkbox").css("opacity", "0");
    $(".lightbox-login").css("visibility","hidden");
    $(".lightbox-login").css("opacity","0");
    $(".lightbox-register").css("visibility","hidden");
    $(".lightbox-register").css("opacity","0");
  });
  $(".not-registered-link").click(function(){
    $(".lightbox-login").css("visibility","hidden");
    $(".lightbox-login").css("opacity","0");
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");
    $(".lightbox-register").css("visibility","visible");
    $(".lightbox-register").css("opacity","1");
  });
  $(".already-registered-link").click(function(){
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");
    $(".lightbox-login").css("visibility","visible");
    $(".lightbox-login").css("opacity","1");
    $(".lightbox-register").css("visibility","hidden");
    $(".lightbox-register").css("opacity","0");
  });


//AJAAAAX


});
