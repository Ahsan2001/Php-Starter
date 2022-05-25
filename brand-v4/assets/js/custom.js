$('.bannerLeft-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    slideSpeed: 1000,
    autoplaySpeed: 2000,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})



$('.bannerRight-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    margin: 10,
    slideSpeed: 1000,
    autoplaySpeed: 2000,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})

















$('[data-tab]').on('click', function (e) {
    $(this).addClass('active').siblings('[data-tab]').removeClass('active')
    /* $(this).siblings('[data-content=' + $(this).data('tab') + ']').addClass('active').siblings('[data-content]').removeClass('active')
    e.preventDefault() */

    $(this).closest('.product-head-main').find('[data-content]').removeClass('active')
    $(this).closest('.product-head-main').find('[data-content=' + $(this).data('tab') + ']').addClass('active')

    /* $(this).addClass('active').siblings('[data-tab]').removeClass('active').siblings('[data-content=' + $(this).data('tab') + ']').addClass('active').siblings('[data-content]').removeClass('active') */
})






































































































