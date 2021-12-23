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