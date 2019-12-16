$(document).ready(function(){
  $("#portada-test1").css('background-image', 'url("img/test3.png")');
  
  //-----------------------------CATALOGO---------------------------------------
  
  $('#catalogo-menu').mouseenter(function()
  {
    $('#catalogo-menu').css("background-color", "#39A484");
    $('#catalogo-menu').css("margin-top", "-10px");
    $('#catalogo-menu').css("height", "60px");
  });
  $('#catalogo-menu').mouseleave(function()
  {
    $('#catalogo-menu').css("margin-top", "0px");
    $('#catalogo-menu').css("height", "50px");
    $('#catalogo-menu').css("background-color", "#018059");
  });

  $('#catalogo-menu').click(function()
  {
    $('#catalogo-menu').css("background-color", "#00FF84");
  });

  //---------------------------CATEGORIAS---------------------------------------
  
  $('#categorias-menu').mouseenter(function()
  {
    $('#categorias-menu').css("background-color", "#39A484");
    $('#categorias-menu').css("margin-top", "-10px");
    $('#categorias-menu').css("height", "60px");
  });
  $('#categorias-menu').mouseleave(function()
  {
    $('#categorias-menu').css("margin-top", "0px");
    $('#categorias-menu').css("height", "50px");
    $('#categorias-menu').css("background-color", "#018059");
  });

  $('#categorias-menu').click(function()
  {
    $('#categorias-menu').css("background-color", "#00FF84");
  });

  //------------------------------CONTACTO--------------------------------------
  
  $('#contacto-menu').mouseenter(function()
  {
    $('#contacto-menu').css("background-color", "#39A484");
    $('#contacto-menu').css("margin-top", "-10px");
    $('#contacto-menu').css("height", "60px");
  });
  $('#contacto-menu').mouseleave(function()
  {
    $('#contacto-menu').css("margin-top", "0px");
    $('#contacto-menu').css("height", "50px");
    $('#contacto-menu').css("background-color", "#018059");
  });

  $('#contacto-menu').click(function()
  {
    $('#contacto-menu').css("background-color", "#00FF84");
  });

  //------------------------------TERMINOS Y CONDICIONES--------------------------------------
  
  $('#tyc-menu').mouseenter(function()
  {
    $('#tyc-menu').css("background-color", "#39A484");
    $('#tyc-menu').css("margin-top", "-10px");
    $('#tyc-menu').css("height", "60px");
  });
  $('#tyc-menu').mouseleave(function()
  {
    $('#tyc-menu').css("margin-top", "0px");
    $('#tyc-menu').css("height", "50px");
    $('#tyc-menu').css("background-color", "#018059");
  });

  $('#tyc-menu').click(function()
  {
    $('#tyc-menu').css("background-color", "#00FF84");
  });
  
});

