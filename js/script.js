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
    var build = "all",
        floor = "all",
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

        if (typeof build == "number") {
            row += "[data-build='" + build + "']";
        }

        if (typeof floor == "number") {
            row += "[data-floor='" + floor + "']";
        }

        $(".prods__el" + row).addClass("active");
    });

    // Закрыть окно
    $(".r_modal__close").on("click", function() {
        $(this).closest(".r_modal, .c_modal, .client_modal, .text_modal").removeClass("active");
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

    // Открыть окно
    $(".open_form").on("click", function() {
        $(".c_modal").addClass("active");
    });

    // Открыть окно 2
    $(".open_form_2").on("click", function() {
        $(".client_modal").addClass("active");
    });

    // Открыть окно персональное
    $(".open_perosonal").on("click", function() {
        $("#perosonal_modal").addClass("active");
    });

    // Открыть окно соглашение
    $(".open_agree").on("click", function() {
        $("#agree_modal").addClass("active");
    });

    // События
    if (typeof elements !== 'undefined') {
        var vue = new Vue({
            el: '#vue',
            data: {
                elements: elements.length ? elements : [],
                f_elements: [],
                type: window.location.hash ? window.location.hash.substring(1) : 0,
                more: false,
            },
            mounted: function() {
                var self = this;

                this.f_elements = this.elements;

                this.filter(this.type);

                $(".navig__nav").on("click", function() {
                    if ($("#vue").length) {
                        self.type = +window.location.hash.substring(1);
                        self.filter(self.type);
                    }
                });
            },
            computed: {
    
            },
            methods:{
                filter(id) {
                    var self = this,
                        array = [];

                    self.type = +id;

                    if (self.type) {
                        self.elements.forEach((element) => {
                            if (element.type == self.type) {
                                array.push(element);
                            }
                        });

                        self.f_elements = array;
                    } else {
                        self.f_elements = elements; 
                    }

                    $(".event__wp").removeClass("active");

                    setTimeout(function(){
                        $(".event__wp").addClass("active");
                    }, 300);
                },

                loadMore() {
                    this.more = true;

                    setTimeout(function(){
                        $(".event__wp").addClass("active");
                    }, 1);
                },
            }
        });
    }

    // Форма
	$('.make_order').on("click", function () {
        var $form = $(this).closest("form"),
            name = $form.find('input[name="name"]').val(),
            email = $form.find('input[name="email"]').val(),
            phone = $form.find('input[name="phone"]').val(),
            error = false;
            
        $form.find('input').parent().removeClass('error');

        if (!name.length) {
            $form.find('input[name="name"]').parent().addClass('error');
            error = true;
        }

        if (!phone.length) {
            $form.find('input[name="phone"]').parent().addClass('error');
            error = true;
        }

        if (!email.length) {
            $form.find('input[name="email"]').parent().addClass('error');
            error = true;
        }

        if (!$("#agree").is(':checked')) {
            $form.find('.checkbox').addClass('error');
            error = true;
        }

        if (!error) {
            $form.find('.contacts_map__button').click();
        }
    });

    // Маска телефона
    if ($('input[name="phone"]').length) {
        $('input[name="phone"]').mask('+0 000 000 00 00');
    }

    // Навигация на странице "О центре"
    if ($(".a_tabs").length) {
        var id = window.location.hash ? window.location.hash.substring(1) : 0;
    
        $(".a_tabs__tab, .about_block__content").removeClass("active");

        $(".a_tabs__tab[data-id=" + id + "]").addClass("active");
        $(".about_block__content[data-id=" + id + "]").addClass("active");

        $(".navig__nav").on("click", function() {
            setTimeout(function(){
                var id = window.location.hash.substring(1);

                $(".a_tabs__tab, .about_block__content").removeClass("active");

                $(".a_tabs__tab[data-id=" + id + "]").addClass("active");
                $(".about_block__content[data-id=" + id + "]").addClass("active");
            }, 100)
        });
    }

});
