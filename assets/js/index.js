$(document).ready(function(){
      $('#nav-icon3').click(function(){
          $(this).toggleClass('open');
          $('#nav').toggleClass('displaynone');
          $('body').toggleClass('only-menu');
      })

    $('a').click(function(){
        $('body').removeClass('only-menu');
    })

    $('a')

    .mousedown(function(){
      $(this).css('cursor','url(/general-economy/assets/images/cursorclicked.png) 35 25, auto');
    })

    .mouseup(function(){
      $(this).css('cursor', 'url(/general-economy/assets/images/cursorclicked.png), auto');
    });

    $('.btn')
        .mousedown(function(){
      $(this).css('cursor','url(/general-economy/assets/images/cursorclicked.png) 35 25, auto');
    })

    .mouseup(function(){
      $(this).css('cursor', 'url(/general-economy/assets/images/cursorclicked.png), auto');
    });

        $('.footnote')
        .mousedown(function(){
      $(this).css('cursor','url(/general-economy/assets/images/cursorclicked.png) 35 25, auto');
    })

    .mouseup(function(){
      $(this).css('cursor', 'url(/general-economy/assets/images/cursorclicked.png), auto');
    });





 });