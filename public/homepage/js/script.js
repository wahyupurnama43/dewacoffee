$(document).ready(function(){

    AOS.init();

    var navbar = document.querySelector('nav')

    window.onscroll = function() {

    // pageYOffset or scrollY
    if (window.pageYOffset > 0) {
        navbar.classList.add('scrolled')
    } else {
        navbar.classList.remove('scrolled')
    }
    }

    $('.post-module').hover(function() {
        $(this).find('.description').stop().animate({
        height: "toggle",
        opacity: "toggle"
        }, 300);
    });

    
}); 
// penutup