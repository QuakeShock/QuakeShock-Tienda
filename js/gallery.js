var tipo;
tipo=1;
$(document).ready(function(){


    $('#derbtn').click(function()
    {
      switch (tipo) {
        case 1:
        $('#p1').css('margin-left', '-10px');
        $('#p1').css('margin-top', '20px');
        $('#p1').css('width', '1px');
        $('#p1').css('height', '1px');
        $('#p1').css('opacity', '0');
        $('#p2').css('margin-right', '200px');
        $('#p2').css('width', '350px');
        $('#p2').css('height', '350px');
        $( "#p2" ).css('opacity', '1' );
        tipo=tipo+1;

        break;

        case 2:
        $('#p2').css('margin-left', '-300px');
        $('#p2').css('margin-right', '800px');
        $('#p2').css('margin-top', '20px');
        $('#p2').css('width', '1px');
        $('#p2').css('height', '1px');
        $('#p3').css('margin-right', '-300px');
        $('#p3').css('margin-top', '20px');
        $('#p3').css('width', '350px');
        $('#p3').css('height', '350px');
        $( "#p2" ).css('opacity', '0' );
        $( "#p3" ).css('opacity', '1' );
        tipo=3;

        break;

        case 3:
        $('#p3').css('margin-left', '-100px');
        $('#p3').css('margin-right', '300px');
        $('#p3').css('margin-top', '20px');
        $('#p3').css('width', '1px');
        $('#p3').css('height', '1px');

        $('#p4').css('margin-right', '-500px');
        $('#p4').css('margin-top', '20px');
        $('#p4').css('width', '350px');
        $('#p4').css('height', '350px');
        $('#p3').css('opacity', '0' );
        $('#p4').css('opacity', '1' );
        default:

      }
    });
  $('#izbtn').click(function()
  {
    switch (tipo) {
      case 2:
      $('#p1').css('margin-left', '220px');
      $('#p1').css('width', '350px');
      $('#p1').css('height', '350px');
      $('#p1').css('margin-top', '20px');
      $('#p2').css('margin-right', '100px');
      $('#p2').css('width', '1px');
      $('#p2').css('height', '1px');
      $('#p2').css('opacity', '0');
      $('#p1').css('opacity', '1');
      tipo=tipo-1;
      break;
    }
  });
  $('.dial').knob({
    'min': 0,
    'max': 100,
    'width': 80,
    'height': 60,
    'fgColor':"#4FBA6F",
    'angleOffset':-125,
    'angleArc':250
  });
});
