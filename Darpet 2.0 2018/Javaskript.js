// Input Lock
$('textarea').blur(function () {
    $('#hire textarea').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('textarea + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('textarea + label + span').css({'opacity': 0});
        }
    });
});

$('#hire .field:first-child input').blur(function () {
    $('#hire .field:first-child input').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('.field:first-child input + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('.field:first-child input + label + span').css({'opacity': 0});
        }
    });
});

$('#hire .field:nth-child(2) input').blur(function () {
    $('#hire .field:nth-child(2) input').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('.field:nth-child(2) input + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('.field:nth-child(2) input + label + span').css({'opacity': 0});
        }
    });
});

/* smoothscroll */
$(document).on('click', 'a[href^="#"]', function (event){
  event.preventDefault();
  var headerHeight = $('.Showcase').outerHeight();
  $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top - headerHeight
  },1000);
});

/* animirani navBar  */
$(window).on('scroll', function(){
  if($(window).scrollTop()){
      $('.Showcase').addClass('Showcase2');
  }
      else{
          $('.Showcase').removeClass('Showcase2');
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


/* animirana strelica za gore u body-u */
$(window).on('scroll', function(){
  if($(window).scrollTop()){
      $('.fa-chevron-up').addClass('strelica2');
  }
      else{
          $('.fa-chevron-up').removeClass('strelica2');
  }
});

/* animirani sadrzaj u body-u */

  /* animirani kontakt  */
$(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('.kontaktforma').addClass('kontaktforma2');
    }
        else{
            $('.kontaktforma').removeClass('kontaktforma2');
    }
  });

  
  