$(document).ready(function(){
  $("#portada-test1").css('background-image', 'url("img/test3.png")');
  //ARTISTAS
  $('#catalogo-menu').mouseenter(function()
  {
    $('#catalogo-menu').css("background-color", "#39A484");
  });
  $('#catalogo-menu').mouseleave(function()
  {

    $('#catalogo-menu').css("background-color", "#018059");
  });

  $('#catalogo-menu').click(function()
  {
    $('#catalogo-menu').css("background-color", "#00FF84");
  });

  //TRACKS
  $('#tracks').mouseenter(function()
  {
    $('#tracks').css("background-color", "#39A484");
  });
  $('#tracks').mouseleave(function()
  {

    $('#tracks').css("background-color", "inherit");
  });

  $('#tracks').click(function()
  {
    $('#tracks').css("background-color", "#00FF84");
  });

  //CONTACTO
  $('#contacto').mouseenter(function()
  {
    $('#contacto').css("background-color", "#39A484");
  });
  $('#contacto').mouseleave(function()
  {

    $('#contacto').css("background-color", "inherit");
  });

  $('#contacto').click(function()
  {
    $('#contacto').css("background-color", "#00FF84");
  });
});
