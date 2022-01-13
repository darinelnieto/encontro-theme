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

    var stickyActive = false;
	var endSticky = false;
	var lastPositionContactForm;
	var maxSticky = jQuery('.case-gallery').offset();
    // agregar div vacio despues de case-gallery, 
    //luego tomar la clase de ese ultimo div y reemplazarla en jQuery().offset();
    var Stiky = jQuery('Reemplaz-aqui').offset();
	jQuery(window).scroll(function() {
		if (jQuery(window).width() >= 1200) {
			var positionPage = window.pageYOffset;
			var positionContactForm = jQuery('.case-text-section').offset();	
			if (positionPage < maxSticky.top) {
				if (endSticky) {
					endSticky = false;
                    jQuery('.case-text-section').css({
                        'position':'inherit',
                        'width':'100%',
                        'margin-left':'0px'
                    });
                    jQuery('.case-gallery-section').css({
                        'position':'inherit',
                        'width':'100%',
                        'margin-left':'0px'
                    })
                    jQuery('.bottom-case-section > .row').css({
                        'align-items':'flex-start'
                    });
				}
				if (!stickyActive) {
					if (positionPage >= (positionContactForm.top >= 120)) {
						stickyActive = true;
                        jQuery('.case-text-section').css({
                            'position':'inherit',
                            'width':'100%',
                            'margin-left':'0px'
                        });
                        jQuery('.case-gallery-section').css({
                            'position':'inherit',
                            'width':'100%',
                            'margin-left':'0px'
                        })
                        jQuery('.bottom-case-section > .row').css({
                            'align-items':'flex-start'
                        });
					}	
				} else {
					if ((positionPage < (lastPositionContactForm - 120)) && stickyActive) {
						stickyActive = false;
						
                        jQuery('.case-text-section').css({
                            'top':'-126px',
                            'position':'fixed',
                            'width':'calc((((100vw - 320px)/ 12) * 6) + 100px)',
                            'margin-left':'20px'
                        });
                        jQuery('.case-gallery-section').css({
                            'position':'relative',
                            'right':'-50%',
                            'top':'-119px'
                        })
					}
				}
			} else if (positionPage >= maxSticky.top && !endSticky) {
				endSticky = true;

                jQuery('.case-text-section').css({
                    'top':'-126px',
                    'position':'fixed',
                    'width':'calc((((100vw - 320px)/ 12) * 6) + 100px)',
                    'margin-left':'20px'
                });
                jQuery('.case-gallery-section').css({
                    'position':'relative',
                    'right':'-50%',
                    'top':'-119px'
                })
			}else if(positionPage >= Stiky.top){
                jQuery('.case-text-section').css({
                    'position':'inherit',
                    'width':'100%',
                    'margin-left':'0px'
                });
                jQuery('.case-gallery-section').css({
                    'position':'inherit',
                    'width':'100%',
                    'margin-left':'0px'
                })
                jQuery('.bottom-case-section > .row').css({
                    'align-items':'flex-end'
                });
            }else if(positionPage < Stiky.top && positionPage >= maxSticky.top){
                jQuery('.case-text-section').css({
                    'top':'-126px',
                    'position':'fixed',
                    'width':'calc((((100vw - 320px)/ 12) * 6) + 100px)',
                    'margin-left':'20px'
                });
                jQuery('.case-gallery-section').css({
                    'position':'relative',
                    'right':'-50%',
                    'top':'-119px'
                })
            }

            // por si el header lo llegan a poner en fixed
			if (positionPage > 100) {
				jQuery('#navbar-portorosso').addClass('show-navbar-portorosso');
			} else {
				jQuery('#navbar-portorosso').removeClass('show-navbar-portorosso');
			}
		}
	});


    jQuery(window).scroll(function(){
        var maxSticky = jQuery('.case-gallery:last-child').offset();
       if(jQuery(window).scrollTop()){
        alert(maxSticky.top);
       }
    });