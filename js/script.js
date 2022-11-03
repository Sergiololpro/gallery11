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
        $(".mobile_menu").addClass("active");
    });

    // Закрыть меню
    $(".mobile_menu__close").on("click", function() {
        $(".mobile_menu").removeClass("active");
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
    var timeout;

    $(".navigate__nav").on("mouseenter", function() {
        var $this = $(this);

        if (timeout != null) {
            clearTimeout(timeout);
        }

        timeout = setTimeout(function () {
            var id = $this.data("id");

            $(".navigate__nav, .navig").removeClass("active");

            $this.addClass("active");
            $(".navig[data-id=" + id + "]").addClass("active");
        }, 100);
    });

    $(".navigate, .navig").on("mouseleave", function() {
        var check = true;

        if (timeout != null) { 
            clearTimeout(timeout); 
            timeout = null;
        }

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

    // Фильтр
    var build = 0,
        floor = 0,
        row = "";

    $(".tab_filters__el").on("click", function() {
        if ($(this).data("build") != undefined) {
            build = $(this).data("build");
        }

        if ($(this).data("floor") != undefined) {
            floor = $(this).data("floor");
        }

        row = "";
        
        $(".prods__el").removeClass("active");
        $(this).parent().find(".tab_filters__el").removeClass("active");

        $(this).addClass("active");

        if (build) {
            row += "[data-build='" + build + "']";
        }

        if (floor) {
            row += "[data-floor='" + floor + "']";
        }

        $(".prods__el" + row).addClass("active");
    });

    // Закрыть окно
    $(".r_modal__close").on("click", function() {
        $(this).closest(".r_modal").removeClass("active");
    });

    // Открыть окно

    var can_click = true;

    $(".r_build__slide").on("click", function() {
        if (can_click) {
            var id = $(this).data("slick-index"),
                $slider = $(this).closest(".r_build__el").find(".r_build_hidden"),
                length = $slider.find(".r_build_hidden__el").length,
                str_1 = "",
                str_2 = "";

            for (var i = 0; i < length; i++) {
                var index = i + 1;

                str_1 += '<div class="r_slider_1__slide" style="' + $slider.find(".r_build_hidden__el:nth-child(" + index + ")").attr("style") + '"></div>',
                str_2 += '<div class="r_slider_2__slide" style="' + $slider.find(".r_build_hidden__el:nth-child(" + index + ")").attr("style") + '"></div>';
            }

            $(".r_slider_1").html(str_1);
            $(".r_slider_2").html(str_2);

            if ($(".r_slider_1.slick-slider").length) {
                $('.r_slider_1').slick('unslick');
            }

            if ($(".r_slider_2.slick-slider").length) {
                $('.r_slider_2').slick('unslick');
            }

            // Слайдер в окне 1
            if ($('.r_slider_1').length) {
                $(".r_slider_1").slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: '<div class="r_slider_1__nav r_slider_1__nav-prev"></div>',
                    nextArrow: '<div class="r_slider_1__nav r_slider_1__nav-next"></div>',
                    asNavFor: '.r_slider_2'
                });
            }

            // Слайдер в окне 2
            if ($('.r_slider_2').length) {
                $(".r_slider_2").slick({
                    slidesToShow: 6,
                    slidesToScroll: 6,
                    arrows: false,
                    responsive: [{
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 641,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }]
                });

                $(".r_slider_2__slide").on("click", function(){
                    var id = $(this).index() ;

                    $('.r_slider_1').slick('slickGoTo', id);
                });
            }

            $('.r_slider_1').slick('slickGoTo', id);
            
            $(".r_modal").addClass("active");
        }
    });

    // Слайдер аренда
    if ($('.r_build__slider').length) {
        $(".r_build__slider").slick({
            slidesToShow: 2,
            slidesToScroll: 2,
            prevArrow: '<div class="r_build__nav r_build__nav-prev"></div>',
            nextArrow: '<div class="r_build__nav r_build__nav-next"></div>',
            dots: true,
            responsive: [{
                breakpoint: 1025,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 641,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false
                }
            }]
        });

        $(".r_build__slider").on('beforeChange', function(event, slick, currentSlide, nextSlide){
            can_click = false;
        });

        $(".r_build__slider").on('afterChange', function(event, slick, currentSlide, nextSlide){
            can_click = true;
        });
    }

    if ($('.r_build__slider_verrtical').length) {
        $(".r_build__slider_verrtical").slick({
            slidesToShow: 5,
            slidesToScroll: 5,
            prevArrow: '<div class="r_build__nav r_build__nav-prev"></div>',
            nextArrow: '<div class="r_build__nav r_build__nav-next"></div>',
            dots: true,
            responsive: [{
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 641,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false
                }
            }]
        });

        $(".r_build__slider_verrtical").on('beforeChange', function(event, slick, currentSlide, nextSlide){
            can_click = false;
        });

        $(".r_build__slider_verrtical").on('afterChange', function(event, slick, currentSlide, nextSlide){
            can_click = true;
        });
    }

    // Аренда
    $(".r_tabs__tab").on("click", function() {
        var id = $(this).data("id");

        $(".r_tabs__tab, .r_build__el").removeClass("active");

        $(this).addClass("active");

        if (id) {
            $(".r_build__el[data-id=" + id + "]").addClass("active");
        } else {
            $(".r_build__el").addClass("active");
        }
    });

    // О центре
    $(".a_tabs__tab").on("click", function() {
        var id = $(this).data("id");

        $(".a_tabs__tab, .about_block__content").removeClass("active");

        $(this).addClass("active");

        if (id) {
            $(".about_block__content[data-id=" + id + "]").addClass("active");
        } else {
            $(".about_block__content").addClass("active");
        }
    });

    // События
    var vue = new Vue({
        el: '#vue',
        data: {
            elements: elements.length ? elements : [],
            f_elements: [],
            more: false,
        },
        mounted: function() {
            this.f_elements = this.elements;
            console.log(this.f_elements)
        },
        computed: {
 
        },
        methods:{
            filter(id) {
                var self = this,
                    array = [];

                if (id) {
                    self.elements.forEach((element) => {
                        if (element.type == id) {
                            array.push(element);
                        }
                    });

                    self.f_elements = array;
                } else {
                    self.f_elements = elements; 
                }
            },

            loadMore() {
                this.more = true;
            },
        }
    })

});
