$(function(){
  $('.card-image').on({
    mouseenter: function(){
      $('.gh-carousel').show(500, "swing");
      $('.gh-carousel').css("background-color", "rgba(160, 160, 160, 0.8)");
    },
    mouseleave: function(){
      $('.gh-carousel').hide(500);
    }
  })
});
