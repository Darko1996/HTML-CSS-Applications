/* smoothscroll */
$(document).on('click', 'a[href^="#"]', function (event){
    event.preventDefault();
    var headerHeight = $('#showcase').outerHeight();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - headerHeight
    },1000);
  });

