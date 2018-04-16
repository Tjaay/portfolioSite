
jQuery(function ($) {
$("[data-menu-underline-from-center] a").addClass("underline-from-center");

})



jQuery(function ($) {
  $(document).ready(function(){

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
            if (isScrolledAfterElement("#nav-appear")) {
                $('.frontpage-header').slideDown();              
            }
        });
    });

       //Function that returns true if the window has scrolled beyond the given element
       function isScrolledAfterElement(ele) {
        var $ele = $(ele);
        var $window = $(window);

        var docViewTop = $window.scrollTop();
        var docViewBottom = docViewTop + $window.height();

        var eleTop = $ele.offset().top;

        return eleTop <= docViewBottom;
    }

});
  }(jQuery));
