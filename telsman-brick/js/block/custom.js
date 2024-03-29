jQuery(document).ready(function ($) {
    "use strict";
    function changeFooterPosition() {
        $('header').css('top', window.scrollY + "px");
    }

    if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
        if (!(window.devicePixelRatio > 1)) {
            $(document).bind('scroll', function () {
                changeFooterPosition();
            });
        }
    }
    ;

    $('.nav.js nav').onePageNav({

        filter: ':not(.external)',
        scrollThreshold: 0.25

    });
    $('.mob_nav.js ul').onePageNav({

        filter: ':not(.external)',
        scrollThreshold: 0.25

    });
    $('.trigger').toggle(function () {
        $(this).next().slideDown('normal');
    }, function () {
        $(this).next().slideUp('normal');
    });
    $('ul.top_navigation').supersubs({

        minWidth: 8,
        maxWidth: 27

    }).superfish({

            delay: 500,
            animation: {

                opacity: 'show',
                height: 'show'

            },
            speed: 'fast',
            autoArrows: false,
            dropShadows: false

        });
    $('.top_navigation').tinyNav({

        active: 'current-menu-item',
        header: 'Menu'

    });
    $('nav a').each(function () {
        $(this).wrapInner('<span class="menu_name"></span>');
        $(this).append('<span class="hover"><span class="arr"></span></span>');
    });
    $('.lines').each(function () {
        $(this).wrapInner('<span class="plug"></span>');
    });
    $('.back2top').click(function () {
        $('html, body').animate({scrollTop: 0}, 'slow');
        return false;
    });
    $('.speed_box:nth-child(2n+1)').addClass('ipad');
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    $('form#cf').submit(function () {
        var a = $(this).find('input[name="name"]').val();
        var b = $(this).find('input[name="email"]').val();
        var c = $(this).find('textarea[name="msg"]').val();
        if (a === "") {
            $(this).append('<div class="alert error"><div class="msg">Type your name please!</div><a class="toggle-alert" href="#"></a></div>').fadeIn("slow");
            return false;
        }
        if (!validateEmail(b)) {
            $(this).append('<div class="alert error"><div class="msg">Type your email correctly please!</div><a class="toggle-alert" href="#"></a></div>').fadeIn("slow");
            return false;
        }
        if (c === "") {
            $(this).append('<div class="alert error"><div class="msg">Type your message please!</div><a class="toggle-alert" href="#"></a></div>').fadeIn("slow");
            return false;
        }
        else {
            $.ajax({

                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (data) {
                    if (data === 0) {
                        $('form').append('<div class="alert error"><div class="msg">Something goes wrong, message wasn\'t send!</div><a class="toggle-alert" href="#"></a></div>').fadeIn("slow");
                    } else if (data === 1) {
                        $('form').append('<div class="alert success"><div class="msg">Your message has been sent!</div><a class="toggle-alert" href="#"></a></div>').fadeIn("slow");
                    }

                }

            });
            return false;
        }
    });
    $('.portfolio_pop, .portfolio_img_pop').magnificPopup({

        type: 'ajax'

    });
    $(window).load(function () {
        $('#container').isotope('reLayout');
        var iso_h = $('.portfolio').height() - 60;
        $('.over_box_inner').height(iso_h);
        $('a.soc_font').tooltip();
        $('.fsoc').tooltip();
        $('.man_box').animate({opacity: 1}, 1);
        $('.intro').animate({opacity: 1}, 1);
        $('.progress-bar').each(function () {
            var percentage = $(this).find('.progress-bar-content').data('percentage');
            $(this).find('.progress-bar-content').css('width', '0%');
            $(this).find('.progress-bar-content').animate({

                width: percentage + '%'

            }, 'slow');
        });
        $('#progress-bars').waypoint(function () {
            $('.progress-bar').each(function () {
                var percentage = $(this).find('.progress-bar-content').data('percentage');
                $(this).find('.progress-bar-content').css('width', '0%');
                $(this).find('.progress-bar-content').animate({

                    width: percentage + '%'

                }, 'slow');
            });
        }, {

            triggerOnce: true,
            offset: '100%'

        });
    });
    // Tabs
    //When page loads...
    $('.tabs-wrapper').each(function () {
        $(this).find(".tab_content").hide(); //Hide all content
        $(this).find("ul.tabs li:first").addClass("active").show(); //Activate first tab
        $(this).find(".tab_content:first").show(); //Show first tab content
    });
    //On Click Event
    $("ul.tabs li").click(function (e) {
        $(this).parents('.tabs-wrapper').find("ul.tabs li").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        $(this).parents('.tabs-wrapper').find(".tab_content").hide(); //Hide all tab content
        var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
        $(this).parents('.tabs-wrapper').find(activeTab).fadeIn(); //Fade in the active ID content
        e.preventDefault();
    });
    $("ul.tabs li a").click(function (e) {
        e.preventDefault();
    });
    $("h4.toggle").click(function () {
        if ($(this).parents('.accordian').length >= 1) {
            var accordian = $(this).parents('.accordian');
            if ($(this).hasClass('active')) {
                $(accordian).find('h4.toggle').removeClass('active');
                $(accordian).find(".toggle-content").slideUp();
            } else {
                $(accordian).find('h4.toggle').removeClass('active');
                $(accordian).find(".toggle-content").slideUp();
                $(this).addClass('active');
                $(this).next(".toggle-content").slideToggle();
            }
        } else {
            if ($(this).hasClass('active')) {
                $(this).removeClass("active");
            } else {
                $(this).addClass("active");
            }
        }
        return false;
    });
    $('.toggle-alert').live('click', function (e) {
        e.preventDefault();
        $(this).parent().slideUp();
    });
    $('.content-boxes').each(function () {
        var cols = $(this).find('.col').length;
        $(this).addClass('columns-' + cols);
    });
    var span_class = "";
    $('.pricing_table_sc').each(function () {
        var cols = $(this).find('.column').length;
        if (cols === 2) {
            span_class = "span6";
        }
        else if (cols === 3) {
            span_class = "span4";
        }
        else if (cols === 4) {
            span_class = "span3";
        }
        else if (cols === 5) {
            span_class = "span2";
        }
        else if (cols === 6) {
            span_class = "span2";
        }
        $(this).find('.column').addClass(span_class);
    });
    $('input, textarea').placeholder();
});
jQuery(function ($) {
    var $container = $('#container');
    $container.imagesLoaded(function () {
        $container.isotope({

            itemSelector: '.portfolio',
            masonry: {
                columnWidth: $container.width() / 12
            }

        });
    });
    $(window).on('smartresize', function () {
        $container.isotope({

            masonry: {
                columnWidth: $container.width() / 12
            }

        });
    });
    window.addEventListener("orientationchange", function () {
        $container.isotope({

            masonry: {
                columnWidth: $container.width() / 12
            }

        });
    }, false);
    var $optionSets = $('#options .option-set'), $optionLinks = $optionSets.find('a');
    $optionLinks.click(function () {
        var $this = $(this);
        // don't proceed if already selected
        if ($this.hasClass('selected')) {
            return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        $container.isotope(options);
        return false;
    });
    function reloy() {
        var $container = $('#container');
        $container.isotope('reLayout');
    }

    $('.load_more').click(function () {
        var offset_post = $('#container>div').length;
        $.ajax({

            url: $(this).attr('href'),
            data: 'offset=' + offset_post,
            method: 'GET',
            cache: false

        }).done(function (more) {
                if ($(more).length == '') {
                    $('.load_more').hide();
                }
                var $newEls = $(more);
                $container.isotope('insert', $newEls, reloy);
                var iso_h = $('.isotope-item').height() - 60;
                $('.over_box_inner').height(iso_h);
                $('.portfolio_pop, .portfolio_img_pop').magnificPopup({

                    type: 'ajax'

                });
            });
        return false;
    });
});





// JavaScript Document