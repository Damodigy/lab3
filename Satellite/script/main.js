$('.carousel').slick();
$('.partner-carousel').slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: false,
    appendArrows: $('.carousel-buttons'),
    autoplaySpeed: 3600,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
$(document).ready(function () {
    $("#button-call").click(function () {
        $("#overlay").show();
        $(".callback-pop").show();
        $("body").addClass("fixed");
    })
    $("#login-btn").click(function () {
        $("#overlay").show();
        $(".login-pop").show();
        $("body").addClass("fixed");
    })
    $(".close-modal-callback").click(function () {
        $("#overlay").hide();
        $(".callback-pop").hide();
        $("body").removeClass("fixed");
    })
    $(".close-modal-login").click(function () {
        $("#overlay").hide();
        $(".login-pop").hide();
        $("body").removeClass("fixed");
    })
});
