(function($) {

    /* Toggle Open Menu function */

    $('.toggle').click(function() {
        if ($('#menuOnClick').css('display') === 'block') {
            $('.toggle').removeClass('cross');
            $('#menuOnClick').css('display', 'none');
        } else {
            $('.toggle').addClass('cross');
            $('#menuOnClick').css('display', 'block');
        }
    });

    /* Toggle Open Search function */

    $('.edvo-search').click(function() {
        if ($('.modal').css('display') === 'flex') {
            $('.modal').css('display', 'none');
        } else {
            $('.modal').css('display', 'flex');
            $('body').addClass('noScroll');
        }
    });

    /* Toggle Closed Search function */

    $('.modalClose').click(function() {
        if ($('.modal').css('display') === 'flex') {
            $('.modal').css('display', 'none');
            $('body').removeClass('noScroll');
        } else {
            $('.modal').css('display', 'flex');
        }
    });

    /* Accordion Panel*/

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("isActivePanel");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
            panel.style.maxHeight = null;
            } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            } 
        });
    }

    /* Increase / Decrease Font Size on Mobile */

    var $affectedElements = $("section p, section h1 a, section a, section li, section p a, section p strong, section li a, .infoContainer h1, .infoContainer h3, .infoContainer h3 span, section h1, section, h2, section h3, section h4, section p em, section p blockquote, section em, section blockquote, .navLink p a, .notFound h1, .otherSearch h1, form h1, form p, form h4, .insidePost"); // Can be extended, ex. $("div, p, span.someClass")

    // Storing the original size in a data attribute so size can be reset

    $(".edvo-increase-font").click(function(){
        changeFontSize(1);
    })

    $(".edvo-decrease-font").click(function(){
        changeFontSize(-1);
    })

    function changeFontSize(direction){
        $affectedElements.each( function(){
            var $this = $(this);
            $this.css( "font-size" , parseInt($this.css("font-size"))+direction );
        });
    }

    /* Smooth Scroll */

    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) { 
                $('html, body').animate({
                    scrollTop: (target.offset().top - ($('.header').height() * 2.5 ))
                }, 1000);
                return false;
            }
        }
    });

    /* Fixed Header After Scroll */
	
    $(window).scroll(function () {
        if (($(this).scrollTop() > 30 )) {
            $('.header').addClass('isFixedTop');
        }
        else {
            $('.header').removeClass('isFixedTop');	
        }
    });

    /* Fixed Charity Menu After Scroll & Before Footer */

    $(document).scroll(function () {
        if (($(document).scrollTop() > 30 ) && ($(document).scrollTop() < ($(document).height() - (($(window).height()) + ($('.footer').height()))) ) ) {
            $('.contributionContainer').addClass('isFixedBottom');
        }
        else {
            $('.contributionContainer').removeClass('isFixedBottom');		
        }
    });

     /* Fixed Share Menu After Scroll & Before Footer */

     $(document).scroll(function () {
        if (($(document).scrollTop() > ($(window).height()) ) && ($(document).scrollTop() < ($(document).height() - (($(window).height()) + ($('.footer').height())))) && (($(window).width() < 1025 ))  ) {
            $('.shareContainer').addClass('isShareFixedBottom');
        }
        else {
            $('.shareContainer').removeClass('isShareFixedBottom');	
        }
    });

})(jQuery);