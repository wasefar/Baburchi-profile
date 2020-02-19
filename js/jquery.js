$(document).ready(function () {

    $('.owl-carousel.kitchen').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

   

    $('.owl-carousel.baburchi').owlCarousel({
        loop: true,
        margin: 50,
        nav: false,
        dots: true,
        autoplay: true,
        smartSpeed: 1000,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })

    $('.owl-carousel.kitchen_bottom').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        smartSpeed: 1000,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 7
            },
            600: {
                items: 12
            },
            1000: {
                items: 12
            }
        }
    })


    $('.owl-carousel.customar').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        margin: 10,
        autoplay: true,
        smartSpeed: 1000,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })


    $('.owl-carousel.homepage-slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: true,
        smartSpeed: 1000,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    $('.owl-carousel.list-baburchi').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        // autoplay: true,
        smartSpeed: 1000,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    $('.owl-carousel.list-baburchi-single').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        navText: ["<img src='image/left-arrow.png'>","<img src='image/right-arrow.png'>"],
        dots: false,
        // autoplay: true,
        smartSpeed: 1000,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

     $('.owl-carousel.list-baburchi-recipe').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        navText: ["<img src='image/left-arrow.png'>","<img src='image/right-arrow.png'>"],
        dots: false,
        // autoplay: true,
        smartSpeed: 1000,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

      $('.owl-carousel.list-baburchi-baburchi--').owlCarousel({
        loop: true,
        margin: 5,
        nav: true,
        navText: ["<img src='image/left-arrow.png'>","<img src='image/right-arrow.png'>"],
        dots: false,
        // autoplay: true,
        smartSpeed: 1000,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })



    $(".back_to_top").click(function () {

        $("html, body").animate({
            scrollTop: 0
        }, 1000);
    });


    $(window).scroll(function () {
        if ($(document).scrollTop() > 50) {
            $(".top-header-area").addClass("black");
        } else {
            $(".top-header-area").removeClass("black");
        }

    });


    $('.menu-icon-bars').click(function () {

        $('.Overlay').addClass('animated fadeInLeft faster').show();
    });


    $('.menu-icon-bars-cross').click(function () {

        $('.Overlay').removeClass('animated fadeInRight slow').hide();
    });


});