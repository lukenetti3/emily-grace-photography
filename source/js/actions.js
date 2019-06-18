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

      // Photography Process jQuery
      var slide1 = ".rotate-1";
      var slide2 = ".rotate-2";
      var slide3 = ".rotate-3";

      $("button").click(function() {
        if($(slide1).hasClass("show")) {
          $(slide1).removeClass("show");
          $(slide2).addClass("show");
        }
        else if($(slide2).hasClass("show")) {
          $(slide2).removeClass("show");
          $(slide3).addClass("show");
        }
        else if($(slide3).hasClass("show")) {
          $(slide3).removeClass("show");
          $(slide1).addClass("show");
        }
      });


    });
})( jQuery );
