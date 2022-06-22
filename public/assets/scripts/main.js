$(document).ready(function () {
    // JQUERY MASK FOR PHONE

	jQuery(document).ready(function () {
		$(".phonemask").mask("+998 11 111 11 11");
	});

    // MOBILE MENU OPEN

    $(".mobile-button").click(function () {
        $(".header").toggleClass("active");
        $("body").toggleClass("overflow-hidden");
    });
    $(".dowm__drop").click(function () {
        $(".dowm__drop").toggleClass("active");
    });

    const faqTrigger = document.querySelectorAll(".text-downdrop");

    faqTrigger.forEach((trigger) => {
        trigger.addEventListener("click", function (e) {
            // faqTrigger.forEach(trigger => {
            //     trigger.classList.remove('active')
            // })
            this.classList.toggle("active");
        });
    });

    // MODAL OPEN

    $(".leaveapp-modal-btn").click(function () {
        $(".leaveapp-modal").addClass("active");
    });
    $(".modal-close").click(function () {
        $(this).parent().removeClass("active");
    });

    // LANGUAGE DROPDOWN

    $(".lang-drop").click(function () {
        $(".lang").toggleClass("opened");
    });

    // CAROUSELS

    $(".img-carousel").owlCarousel({
        items: 1,
        dots: false,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 8000,
        smartSpeed: 1250,
        mouseDrag: true,
        touchDrag: true,
    });

    $(".items").owlCarousel({
        items: 2,
        dots: false,
        nav: true,
        loop: true,
        autoplay: false,
        smartSpeed: 1000,
        mouseDrag: true,
        touchDrag: true,
        stagePadding: 100,
        responsive: {
            0: {
                items: 1,
                stagePadding: 10,
            },

            768: {
                items: 2,
                stagePadding: 30,
            },
            992: {
                items: 2,
                stagePadding: 100,
            },
        },
    });

    $("#nextItem").click(function () {
        $(".items").trigger("next.owl.carousel");
    });
    $("#prevItem").click(function () {
        $(".items").trigger("prev.owl.carousel");
    });

    $(".content-carousel").owlCarousel({
        items: 1,
        dots: false,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 8000,
        smartSpeed: 1000,
        mouseDrag: true,
        touchDrag: true,
        // responsive: {

        //     0: {

        //         items: 1

        //     },

        //     768: {

        //         items: 2

        //     },
        //     769: {

        //         items: 2

        //     },
        //     992: {

        //         items: 3

        //     },

        // }
    });
    $("#nextItem4").click(function () {
        $(".content-carousel").trigger("next.owl.carousel");
    });
    $("#prevItem4").click(function () {
        $(".content-carousel").trigger("prev.owl.carousel");
    });

    $(".lastNews-carousel").owlCarousel({
        items: 2,
        dots: false,
        nav: true,
        loop: true,
        autoplay: false,
        smartSpeed: 1000,
        mouseDrag: true,
        touchDrag: true,
        stagePadding: 150,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0,
            },

            768: {
                items: 2,
                stagePadding: 30,
            },
            992: {
                items: 2,
                stagePadding: 150,
            },
        },
    });

    $("#nextItem2").click(function () {
        $(".lastNews-carousel").trigger("next.owl.carousel");
    });
    $("#prevItem2").click(function () {
        $(".lastNews-carousel").trigger("prev.owl.carousel");
    });

    // $('.styler').styler();

    if ($(window).width() > 576) {
        $(".info-boxes").addClass("owl-carousel");
        $(".info-boxes").owlCarousel({
            items: 3,
            dots: false,
            nav: true,
            loop: true,
            autoplay: false,
            smartSpeed: 1000,
            mouseDrag: true,
            touchDrag: true,
            responsive: {
                0: {
                    items: 1,
                },

                768: {
                    items: 2,
                },
                769: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
            },
        });
    }
});

window.addEventListener('load', function() {
    const iObserver = new IntersectionObserver(callback, { rootMargin: '0px 0px -150px 0px', threshold: 0 })
    function callback(entries, observer) {
        entries.forEach(entry => {
            const targetElement = entry.target
            if (entry.isIntersecting) {
                targetElement.src = targetElement.getAttribute('data-src')
                targetElement.removeAttribute('data-src')
                targetElement.classList.remove('lazy-image')
                observer.unobserve(targetElement)
            }
        })
    }
    function startObserving() {
        const lazyLoadingImgs = document.querySelectorAll('.lazy-image')
        lazyLoadingImgs.forEach(img => {
            iObserver.observe(img)
        })
    }
	startObserving()
});