/*-------------gallery----------------------------*/

$(function(){
  $('#gallery-link-1').on({
    mouseenter: function(){
      $(this).css("background-color", "rgba(52, 51, 51, 0.7)");
      $('#display-none-1').slideDown(400);
    },
    mouseleave: function(){
      $(this).css("background-color", "rgba(0, 0, 0, 0)");
      $('#display-none-1').slideUp(400);
    }
  })
});


$(function(){
  $('#gallery-link-2').on({
    mouseenter: function(){
      $(this).css("background-color", "rgba(52, 51, 51, 0.7)");
      $('#display-none-2').slideDown(400);
    },
    mouseleave: function(){
      $(this).css("background-color", "rgba(0, 0, 0, 0)");
      $('#display-none-2').slideUp(400);
    }
  })
});

$(function(){
  $('#gallery-link-3').on({
    mouseenter: function(){
      $(this).css("background-color", "rgba(52, 51, 51, 0.7)");
      $('#display-none-3').slideDown(400);
    },
    mouseleave: function(){
      $(this).css("background-color", "rgba(0, 0, 0, 0)");
      $('#display-none-3').slideUp(400);
    }
  })
});

$(function(){
  $('#gallery-link-4').on({
    mouseenter: function(){
      $(this).css("background-color", "rgba(52, 51, 51, 0.7)");
      $('#display-none-4').slideDown(400);
    },
    mouseleave: function(){
      $(this).css("background-color", "rgba(0, 0, 0, 0)");
      $('#display-none-4').slideUp(400);
    }
  })
});

$(function(){
  $('#gallery-link-5').on({
    mouseenter: function(){
      $(this).css("background-color", "rgba(52, 51, 51, 0.7)");
      $('#display-none-5').slideDown(400);
    },
    mouseleave: function(){
      $(this).css("background-color", "rgba(0, 0, 0, 0)");
      $('#display-none-5').slideUp(400);
    }
  })
});



/*----------carousel-slider------------------------*/

$(function(){
 $('#gallery-link-1').click(function(){
   $('#gallery-carousel-1').slideDown(600);
 });
});

$(function(){
  $('#gallery-close-1').click(function(){
    $('#gallery-carousel-1').slideUp(600);
  });
});

/*--------------------------------------------*/

$(function(){
 $('#gallery-link-2').click(function(){
   $('#gallery-carousel-2').slideDown(600);
 });
});

$(function(){
  $('#gallery-close-2').click(function(){
    $('#gallery-carousel-2').slideUp(600);
  });
});

/*--------------------------------------------*/

$(function(){
 $('#gallery-link-3').click(function(){
   $('#gallery-carousel-3').slideDown(600);
 });
});

$(function(){
  $('#gallery-close-3').click(function(){
    $('#gallery-carousel-3').slideUp(600);
  });
});

/*--------------------------------------------*/

$(function(){
 $('#gallery-link-4').click(function(){
   $('#gallery-carousel-4').slideDown(600);
 });
});

$(function(){
  $('#gallery-close-4').click(function(){
    $('#gallery-carousel-4').slideUp(600);
  });
});

/*--------------------------------------------*/

$(function(){
 $('#gallery-link-5').click(function(){
   $('#gallery-carousel-5').slideDown(600);
 });
});

$(function(){
  $('#gallery-close-5').click(function(){
    $('#gallery-carousel-5').slideUp(600);
  });
});
