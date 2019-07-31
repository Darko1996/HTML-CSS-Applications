$('a.nav-link[href*="#"]:not([href="#"]), a.get-started[href*="#"]:not([href="#"])').click(function() {
    var clicked = $(this).hasClass('nav-link');
    var nav = 0;
    if(clicked) {
        var nav = $('.navbar').outerHeight();
    }
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: (target.offset().top - nav)
            }, 700);
            return false;
        }
    }
});

// lazy load
$('.lazy').lazy();


$(window).on('scroll', function(e) {
    var 
        nav = $('.navbar'),
        scroll = $(window).scrollTop();

    if(scroll > 100) {
        nav.addClass('navbar-bg');
    } else {
        console.log('not test');
        nav.removeClass('navbar-bg');
    }

});

setTimeout(function() {
    $('.welcome-box').hide();
},14000)