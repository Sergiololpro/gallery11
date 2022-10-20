$(document).ready(function () {

    $(window).on('scroll load', function() {
        if ($(this).scrollTop() > 0) {
            $('.header').removeClass('transparent');
        } else {
            $('.header').addClass('transparent');
        }
    });

    // Открыть меню
    $(".header__menu").on("click", function() {
        $(".navigate").addClass("active");
    });

    // Закрыть меню
    $(".header__close").on("click", function() {
        $(".navigate").removeClass("active");
    });

    // Продукты
    $(".tabs__tab").on("click", function() {
        var id = $(this).data("id");

        $(".tabs__tab, .products, .actions").removeClass("active");

        $(this).addClass("active");
        $(".products[data-id=" + id + "]").addClass("active");
        $(".actions[data-id=" + id + "]").addClass("active");
    });

    // Меню
    $(".navigate__nav").on("mouseenter", function() {
        var id = $(this).data("id");

        $(".navigate__nav, .navig").removeClass("active");

        $(this).addClass("active");
        $(".navig[data-id=" + id + "]").addClass("active");
    });

    $(".navigate, .navig").on("mouseleave", function() {
        var check = true;

        setTimeout(function(){
            document.querySelectorAll(':hover').forEach(function(em){
                if (em.className.includes("navigate__nav") || em.className.includes("navig")) {
                    check = false;
                }
            });

            if (check) {
                $(".navigate__nav, .navig").removeClass("active");
            }
        }, 100)
    });

});
