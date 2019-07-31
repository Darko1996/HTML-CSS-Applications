/* smoothscroll */
$(document).on('click', 'a[href^="#"]', function (event){
    event.preventDefault();
    var headerHeight = $('#showcase').outerHeight();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - headerHeight
    },500);
  });

  /* animirani navBar  */
  
/*
$(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('#showcase').addClass('showcase2');
    }
        else{
            $('#showcase').removeClass('showcase2');
    }
  });

  
  /* animirani tekst u navBar-u */
  /*
  $(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('.navTekst').addClass('navTekst2');
    }
        else{
            $('.navTekst').removeClass('navTekst2');
    }
  });
*/
 