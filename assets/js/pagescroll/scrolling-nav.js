$(document).ready(function() {
    $('a[href^="#"]').bind('click.page-scroll', function(e) {
        e.preventDefault();
        var target = this.hash;
        console.log(target);

    $('html, body').stop().animate({
            'scrollTop': $(target).offset().top
        }, 1500, 'easeInOutExpo', function()
        {
            window.location.hash = target;
        });

    });
});

//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
// $(function() {
//     $('a.page-scroll').bind('click', function(event) {
//         var $anchor = $(this);
//         $('html, body').stop().animate({
//             'scrollTop': $($('a').attr('href')).offset().top
//         }, 1500, 'easeInOutExpo');
//         event.preventDefault();
//     })
// });

// });