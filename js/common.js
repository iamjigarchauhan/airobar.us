$(function () {

    $('.mobile-back').click(function () {
        window.history.back(-1);
    })
    if ($(window).width() <= 420) {
        $('.public-header .top-nav li').mouseup(function () {
            if (!$(this).hasClass('showlanguagebox')) {
                $('.openheaderbar').show()
                $('.closeheaderbar').hide()
                setTimeout(function () {
                    $('.public-header').css('overflow', 'hidden')
                    $('.top-nav').removeClass('in');
                }, 300)
            }
        })
    }

    $('.openheaderbar').click(function () {
        $('.public-header').css('overflow', 'visible')
        $('.closeheaderbar').show()
        $(this).hide()
        setTimeout(function () {
            $('.top-nav').addClass('transition in');
        }, 100)
        if ($(window).scrollTop() > 100) {
            $(".top-nav").css("top", "56px")
        } else {
            $(".top-nav").css("top", "104px")

        }
    })

    $('.closeheaderbar').click(function () {
        $('.top-nav').removeClass('in');
        $('.openheaderbar').show()
        $(this).hide()
        setTimeout(function () {
            $('.public-header').css('overflow', 'hidden')
        }, 300)
    })
    if (window.innerWidth > 1024) {
        $('.slide-li').hover(function () {
            $(this).find('.category-wrapper').stop().slideDown();
            $(this).find('a').addClass("active")
        }, function () {
            $(this).find('.category-wrapper').stop().slideUp();
            $(this).find('a').removeClass("active")
        });
    }
    if (window.innerWidth >= 1024) {
        $('.navbar .nav-item').on('mouseenter', function () {
            var index = $(this).data('index');
            $(this).find('a').addClass('active');
            $(this).siblings().find('a').removeClass('active');
            $(".dropdown-list[data-index=" + index + "]").slideDown().siblings('.dropdown-list').hide();
            if (index == 1 || index == 4) {
                $('.dropdown-mask').show();
            } else {
                $('.dropdown-mask').hide();
            }
        })
    } else {
        $('.navbar .nav-item-show').on('click', function () {
            var index = $(this).data('index');
            $('.dropdown-list').show();
            $(this).addClass('show').siblings().removeClass('show');
            $(".dropdown-list[data-index=" + index + "]").addClass('nav-item-spread').siblings('.dropdown-list').removeClass('nav-item-spread');
        })
    }

    $('.navbar-wrapper').on('mouseleave', function () {
        $('.dropdown-list').slideUp();
        $('.navbar .nav-item a').removeClass('active');
        $('.dropdown-mask').hide();
        $('.navbar .nav-item').removeClass('show');
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() < 60) {
            $('.public-header').removeClass("fixed")
        }
        else {
            $('.public-header').addClass("fixed")
        }

        if ($(window).scrollTop() < 100) {
            $(".top-nav").css("top", "104px")
        } else {
            $(".top-nav").css("top", "56px")
        }
    })
});
