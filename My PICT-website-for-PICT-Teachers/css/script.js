/**
 * Created by Tejas Sangani on 3/9/2016.
 */

$(document).ready(function(){

    $('.carousel').carousel();
});

(function($) {

    $(document).ready(function(){

        $(window).scroll(function(){
            if ($(this).scrollTop() > 200) {
                //$("#fixed").css("background-color","#000");
                console.log('fixed');
                //$('#fixed').fadeIn(500);
            } else {
                //$("#fixed").css("background-color","transparent");
                //console.log('unfixed');

                //$('#fixed').fadeOut(500);
            }
        });

    });

})(jQuery);

if ( ($(window).height() + 100) < $(document).height() ) {
    $('#top-link-block').removeClass('hidden').affix({
        // how far to scroll down before link "slides" into view
        offset: {top:100}
    });
}

//$(document).ready(function(){
//    $('body').append('<div id="toTop" class="btn btn-info"><i class="fa fa-arrow-up"></i></div>');
//    $(window).scroll(function () {
//        if ($(this).scrollTop() != 0) {
//            $('#toTop').fadeIn();
//        } else {
//            $('#toTop').fadeOut();
//        }
//    });
//    $('#toTop').click(function(){
//        $("html, body").animate({ scrollTop: 0 }, 600);
//        return false;
//    });
//});

//$(window).load(function(){

  //  setTimeout(function(){
    //    $('.preloader').fadeOut();
      //  $('.preloader-container').fadeOut();
      //  $('.wrapper').css('display','block');
      //  new WOW().init();

    //},1000);

//});

