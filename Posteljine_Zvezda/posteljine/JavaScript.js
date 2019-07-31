/* smoothscroll */
$(document).on('click', 'a[href^="#"]', function (event){
    event.preventDefault();
    var headerHeight = $('#showcase').outerHeight();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - headerHeight
    },1000);
});

/* animirani navBar pozadina */
$(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('#showcase').addClass('showcase2');
    }
        else{
            $('#showcase').removeClass('showcase2');
    }
});

/* animirani logo u navBar-u */
$(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('.logo').addClass('logo2');
    }
        else{
            $('.logo').removeClass('logo2');
    }
});

/* animirani tekst u navBar-u */
$(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('.navTekst').addClass('navTekst2');
    }
        else{
            $('.navTekst').removeClass('navTekst2');
    }
});

/* animirana trakica u navBar-u,  izbacena je*/
$(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('#trakica').addClass('trakica2');
    }
        else{
            $('#trakica').removeClass('trakica2');
    }
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
