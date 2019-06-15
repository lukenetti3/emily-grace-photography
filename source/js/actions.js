(function($) {
  $(document).ready(function(){
     var scroll_start = 0;
     var startchange = $('.nav-scroll');
     var offset = startchange.offset();
      if (startchange.length){
       $(document).scroll(function() {
          scroll_start = $(this).scrollTop();
          if(scroll_start > offset.top) {
              $(".navbar").css('background-color', '#FCF9F2');
           } else {
              $('.navbar').css('background-color', 'transparent');
           }
       });
      }

      // Scroll for animation
      $(window).scroll(function(){
        var windowScrollTop = $(this).scrollTop();

        if(windowScrollTop>900){
          $(".appear").addClass("appearGo");
          $(".box-img img").addClass("fadeAnimateRight");
          $(".box-text").addClass("fadeAnimateLeft");
        }
      });
    });
})( jQuery );
