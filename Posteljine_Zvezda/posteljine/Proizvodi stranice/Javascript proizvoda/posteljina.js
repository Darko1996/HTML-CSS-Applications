/* smoothscroll */
$(document).on('click', 'a[href^="#"]', function (event){
    event.preventDefault();
    var headerHeight = $('#showcase').outerHeight();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - headerHeight
    },1000);
});

/* animirana strelica za gore u body-u */
$(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('.fa-chevron-circle-up').addClass('strelica2');
    }
        else{
            $('.fa-chevron-circle-up').removeClass('strelica2');
    }
});