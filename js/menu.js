$(function(){
$('#gallery-btn').on('click', function(e){
  var fixed_offset = 100;
  $('html,body').stop().animate({scrollTop: $('#layout-exp').offset().top - fixed_offset}, 1500);
  e.preventDefault();
});
});

$(function(){
 $('#show_menu').click(function(){
   $('#menu-box').toggle(600);
 });
});

$(function(){
  $('#close').click(function(){
    $('#menu-box').hide(600);
  });
});


$(function(){
 $('#show_include_button').click(function(){
   $('#show_include').toggle(600);
 });
});

$(function(){
 $('#show_include_button').click(function(){
   $('#show_include_button').hide(150);
 });
});

$(function(){
 $('#btn-suite-table').click(function(){
   $('#suite-table').show(600);
 });
});

$(function(){
 $('#btn-gh-table').click(function(){
   $('#gh-table').show(600);
 });
});


$(function(){
 $('#btn-suite-table1').click(function(){
   $('#suite-table').show(600);
   $('#hotel-price-sm-table').show(600);
 });
});

$(function(){
  $('#close-suite-table').click(function(){
    $('#suite-table').hide(600);
  });
});

$(function(){
  $('#close-gh-table').click(function(){
    $('#gh-table').hide(600);
  });
});

$(function(){
  $('#close-suite-table1').click(function(){
    $('#hotel-price-sm-table').hide(600);
    $('#suite-table').hide(600);
  });
});

$(function(){
  $('.pill').css("color", "black")
});


$(function(){
  $('#pill-1').on({
    mouseenter: function(){
      $('.pill1').css("background-color", "rgba(52, 51, 51, 0.7)");
      $('.pill1').css("color", "white");
    },
    mouseleave: function(){
      $('.pill1').css("background-color", "rgba(255, 255, 255, 0.7)");
      $('.pill1').css("color", "black");
    }
  })
});



$(function(){
  $('#pill-2').on({
    mouseenter: function(){
      $('.pill2').css("background-color", "rgba(52, 51, 51, 0.7)");
      $('.pill2').css("color", "white");
    },
    mouseleave: function(){
      $('.pill2').css("background-color", "rgba(255, 255, 255, 0.7)");
      $('.pill2').css("color", "black");
    }
  })
});


$(function(){
  $('#pill-3').on({
    mouseenter: function(){
      $('.pill3').css("background-color", "rgba(52, 51, 51, 0.7)");
      $('.pill3').css("color", "white");
    },
    mouseleave: function(){
      $('.pill3').css("background-color", "rgba(255, 255, 255, 0.7)");
      $('.pill3').css("color", "black");
    }
  })
});


$(function(){
  $('#pill-4').on({
    mouseenter: function(){
      $('.pill4').css("background-color", "rgba(52, 51, 51, 0.7)");
      $('.pill4').css("color", "white");
    },
    mouseleave: function(){
      $('.pill4').css("background-color", "rgba(255, 255, 255, 0.7)");
      $('.pill4').css("color", "black");
    }
  })
});


$(function(){
  $('#pill-5').on({
    mouseenter: function(){
      $('.pill5').css("background-color", "rgba(52, 51, 51, 0.7)");
      $('.pill5').css("color", "white");
    },
    mouseleave: function(){
      $('.pill5').css("background-color", "rgba(255, 255, 255, 0.7)");
      $('.pill5').css("color", "black");
    }
  })
});



/*-------guesthouse-page-pop-up-pictures-----------------*/

/*-----1й  рисунок----*/

$(function(){
 $('#pill-1').click(function(){
   $('#gh-pop-up-pic1').show(600);
 });
});

$(function(){
  $('#close-gh-pop-up-pic1').click(function(){
    $('#gh-pop-up-pic1').hide(600);
  });
});

/*-----2й  рисунок----*/

$(function(){
 $('#pill-2').click(function(){
   $('#gh-pop-up-pic2').show(600);
 });
});

$(function(){
  $('#close-gh-pop-up-pic2').click(function(){
    $('#gh-pop-up-pic2').hide(600);
  });
});

/*-----3й  рисунок----*/

$(function(){
 $('#pill-3').click(function(){
   $('#gh-pop-up-pic3').show(600);
 });
});

$(function(){
  $('#close-gh-pop-up-pic3').click(function(){
    $('#gh-pop-up-pic3').hide(600);
  });
});

/*-----4й  рисунок----*/

$(function(){
 $('#pill-4').click(function(){
   $('#gh-pop-up-pic4').show(600);
 });
});

$(function(){
  $('#close-gh-pop-up-pic4').click(function(){
    $('#gh-pop-up-pic4').hide(600);
  });
});

/*-----5й  рисунок----*/

$(function(){
 $('#pill-5').click(function(){
   $('#gh-pop-up-pic5').show(600);
 });
});

$(function(){
  $('#close-gh-pop-up-pic5').click(function(){
    $('#gh-pop-up-pic5').hide(600);
  });
});

/*-----------------Проверить места-------------------*/


  $('#button').click(function(){
      var start_date = $('#start_date').val();
      var end_date = $('#end_date').val();

  $.ajax({
url: 'blocks/start-end.php',
type: 'POST',
cache: false,
data: {'start_date' :start_date, 'end_date' :end_date},
dataType: 'html',
});
  });

/*-----------------------Youtube-------------------------------*/

var i, c, y, v, s, n;
v = document.getElementsByClassName("youtube");
if (v.length > 0) {
    s = document.createElement("style");
    s.type = "text/css";
    s.innerHTML = '.youtube{background-color:#000;max-width:100%;height:inherit;overflow:hidden;position:relative;cursor:hand;cursor:pointer}.youtube .thumb{bottom:0;display:block;left:0;margin:auto;max-width:100%;position:absolute;right:0;top:0;width:100%;height:auto}.youtube .play{filter:alpha(opacity=80);opacity:.8;height:77px;left:50%;margin-left:-38px;margin-top:-38px;position:absolute;top:50%;width:77px;background:url("img/youtube-play-icon.png") no-repeat}';
    document.body.appendChild(s)
}
for (n = 0; n < v.length; n++) {
    y = v[n];
    i = document.createElement("img");
    i.setAttribute("src", "https://i.ytimg.com/vi/" + y.id + "/hqdefault.jpg");
    i.setAttribute("class", "thumb");
    c = document.createElement("div");
    c.setAttribute("class", "play");
    y.appendChild(i);
    y.appendChild(c);
    y.onclick = function() {
        var a = document.createElement("iframe");
        a.setAttribute("src", "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1&border=0&wmode=opaque&enablejsapi=1&rel=0&showinfo=0");
        a.setAttribute("allowfullscreen","");
        a.style.width = this.style.width;
        a.style.height = this.style.height;
        this.parentNode.replaceChild(a, this)
    }
};

$(function(){
 $('#video-btn').click(function(){
   $('#video').fadeIn(600);
 });
});

$(function(){
  $('#video-close').click(function(){
    $('#video').fadeOut(600);
  });
});
