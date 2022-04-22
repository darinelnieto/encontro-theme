import '../sass/main.scss'
import $ from 'jquery';

window.ditto = {
    menu: (el) => {
        $(el).toggleClass('open');
    }
}

var acc = jQuery('.question');
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            acc.removeClass('active');
            this.classList.toggle("active");
            jQuery('.answer').css({'display':'none'});
            panel.style.display = "block";
        }
    });
    }

jQuery('.menu-hamburguesa').on('click', function(){
    jQuery('.main-menu').css({'display':'block'});
});
jQuery('.main-menu').on('click', function(){
    jQuery('.main-menu').css({'display':'none'});
});


    
jQuery(document).ready(function(){
    jQuery('.case-gallery-section').append('<div class="end-slik"></div>');
});


jQuery('.menu-hamburguesa-family-tree').on('click', function(){
    jQuery('.menu-perfil').slideToggle();
});