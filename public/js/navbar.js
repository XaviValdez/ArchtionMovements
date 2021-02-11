(function($) {
    $(document).ready(function(){
        $(window).scroll(function(){                   
            if ($(this).scrollTop() > 200) {
                $('#navbar-logo').addClass("show");
            } else {
                $('#navbar-logo').removeClass("show");
            }
        });
    });
})(jQuery);