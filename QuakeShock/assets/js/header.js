$('#mini-logo-qs')      
    .on('mouseenter', function(){
        var div = $(this);
        div.stop(true, true).animate({ 
            margin: "-=2",
            width: "+=5",
            height: "+=5"
        }, 'fast');
    })
    .on('mouseleave', function(){
        var div = $(this);
        div.stop(true, true).animate({ 
            margin: "+=2",
            width: "-=5",
            height: "-=5"
        }, 'fast');
    })
    .on('click' , function() {
                window.location.href = ''+baseurl+'inicio/qs';
    })