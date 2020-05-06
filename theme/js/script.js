/*

Script  : Script JS
Version : 1.0
Author  : Surjith S M
URI     : http://themeforest.net/user/surjithctly

Copyright © All rights Reserved
Surjith S M / @surjithctly

*/


$(function() {

    "use strict";

    /* ================================================
       Slick Sliders
       ================================================ */

    // Home Event date
    if ($('.event-date-slide').length) {
        $('.event-date-slide').slick({
            arrows: false,
            dots: true,
            autoplay: true
        });
    }
    // About
    if ($('.single-item').length) {
        $('.single-item').slick({
            arrows: false,
            dots: true,
            autoplay: true
        });
    }

    // Admission Detail
    if ($('.admission-testi_slider').length) {
        $('.admission-testi_slider').slick({
            dots: true,
            autoplay: true
        });
    }


    // Resours
    if ($('.resources-slick').length) {
        $('.resources-slick').slick({
            infinite: true,
            dots: true,
            autoplay: true,
            autoplaySpeed: 5000,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }]
        });
    }

    /* ================================================
    FIXED HEADER
    ================================================ */

    // affix Navbar fixed
    var toggleAffix = function(affixElement, scrollElement, wrapper) {

        var height = affixElement.outerHeight(),
            top = wrapper.offset().top;

        if (scrollElement.scrollTop() >= top) {
            wrapper.height(height);
            affixElement.addClass("affix");
        } else {
            affixElement.removeClass("affix");
            wrapper.height('auto');
        }

    };


    $('[data-toggle="affix"]').each(function() {
        var ele = $(this),
            wrapper = $('<div></div>');

        ele.before(wrapper);
        $(window).on('scroll resize', function() {
            toggleAffix(ele, $(this), wrapper);
        });

        // init
        toggleAffix(ele, $(window), wrapper);
    });



    /* ================================================
    Video BG
    ================================================ */
    if ($('.player').length) {
        $(".player").mb_YTPlayer();
    }

    /* ================================================
    Mgnific popup
    ================================================ */
    if ($('.image-link').length) {
        $('.image-link').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }
    if ($('.image-link2').length) {
        $('.image-link2').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }

    /* ================================================
    Mega Menu
    ================================================ */
    jQuery(document).on('click', '.mega-dropdown', function(e) {
        e.stopPropagation()
    })


    /* ================================================
    Dropdown Menu
    ================================================ */
    if ($('.dropdown-menu a.dropdown-toggle').length) {
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).closest('.dropdown').hasClass('show')) {
                $(this).closest('.dropdown').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).closest(".dropdown");
            $subMenu.toggleClass('show');


            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });


            return false;
        });
    }
    /* ================================================
        Masonry Gallery
        ================================================ */
    if ($('#portfolio').length) {
        jQuery('#portfolio').mixItUp({
            selectors: {
                target: '.tile',
                filter: '.filter',
                sort: '.sort-btn'
            },

            animation: {
                animateResizeContainer: false,
                effects: 'fade scale'
            }

        });
    }

    /* ================================================
    Event Toggle
    ================================================ */

    $('.event-toggle').on('click', function() {
        $(this).text($(this).text() == 'Hide Details' ? 'Show Details' : 'Hide Details');
    });
    /* ================================================
      Full Calendar
      ================================================ */

    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        if ($('#calendar').length) {
            $('#calendar').fullCalendar('render');
        }
    });
    if ($('#calendar').length) {
        var todayDate = moment().startOf('day');
        var YM = todayDate.format('YYYY-MM');
        var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
        var TODAY = todayDate.format('YYYY-MM-DD');
        var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [{
                title: 'All Day Event',
                start: YM + '-01',
                className: 'bg-success'
            }, {
                title: 'Long Event',
                start: YM + '-07',
                end: YM + '-10'
            }, {
                id: 999,
                title: 'Repeating Event',
                start: YM + '-09T16:00:00',
                className: 'bg-danger'
            }, {
                id: 999,
                title: 'Repeating Event',
                start: YM + '-16T16:00:00',
                className: 'bg-danger'
            }, {
                title: 'Conference',
                start: YESTERDAY,
                end: TOMORROW,
                className: 'bg-warning'
            }, {
                title: 'Meeting',
                start: TODAY + 'T10:30:00',
                end: TODAY + 'T12:30:00',
                className: 'bg-success'
            }, {
                title: 'Lunch',
                start: TODAY + 'T12:00:00',
                className: 'bg-info'
            }, {
                title: 'Meeting',
                start: TODAY + 'T14:30:00',
                className: 'bg-success'
            }, {
                title: 'Happy Hour',
                start: TODAY + 'T17:30:00',
                className: 'bg-info'
            }, {
                title: 'Dinner',
                start: TODAY + 'T20:00:00',
                className: 'bg-success'
            }, {
                title: 'Birthday Party',
                start: TOMORROW + 'T07:00:00',
                className: 'bg-orange'
            }, {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: YM + '-28'
            }]
        });
    }



    /* ================================================
      Toggle Accordian
      ================================================ */


    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        }
    }


    /* ================================================
      Counter
      ================================================ */

    if ($('.counter').length) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    }


    /* ================================================
      Instagram Feed
      ================================================ */

    /* Want to customize? Read Documentation */
    if ($('#instafeed').length) {
        var feed = new Instafeed({
            get: 'user',
            userId: '3401121086',
            resolution: 'low_resolution',
            clientId: 'a42e80c86661419b94a5ac01dc022221',
            accessToken: '3401121086.ca9c5d8.49a154f2d6034846ae4e37962de804e8',
            template: '<div class="instafeed_img"><a href="{{link}}" target="_blank"><div class="instagram_img_holder" style="background-image: url({{image}});"></div><div class="instafeed_img_overlay"><span>Instagram</span></div></a></div>',
            after: function() {
                runInstaCarousel();
            },
            error: function() {
                $('#instafeed').html('<p class="text-center">To setup Instagram feed, Please read the documentation.</p>')
            }
        });
        feed.run();

        function runInstaCarousel() {
            if ($('#instafeed').attr("dir") == "rtl") {
                $("#instafeed").owlCarousel({
                    rtl: true,
                    center: false,
                    loop: true,
                    autoplay: true,
                    responsive: {
                        0: {
                            items: 3
                        },
                        600: {
                            items: 5
                        },
                        1000: {
                            items: 7
                        }
                    }
                });
            } else(
                $("#instafeed").owlCarousel({
                    center: false,
                    loop: true,
                    autoplay: true,
                    responsive: {
                        0: {
                            items: 3
                        },
                        600: {
                            items: 5
                        },
                        1000: {
                            items: 7
                        }
                    }
                })
            )
        }
    }


    /* ================================================
      Twitter Feed
      ================================================ */
    if ($('.tweet').length) {
        $('.tweet').twittie({
            'count': 2,
            'username': 'Cambridge_Uni', // Change username here
            'hideReplies': true,
            'template': '<i class="fa fa-twitter fa-tweet" aria-hidden="true"></i> <div> {{tweet}} </div>',
            'apiPath': 'php/twitter/tweet.php',
            'loadingText': 'Twitter feed will load here. Please read documentation for instructions. <br><br> PS: it will NOT work on localhost or via file. Please upload to a PHP server to test.'
        }, function() {
            //alert('loaded!');
        });
    }

}); // End $fn


/* ================================================
  Styled Google Maps
  ================================================ */

// Want to customize colors? go to snazzymaps.com

function myMap() {
    var maplat = $('#map').data('lat');
    var maplon = $('#map').data('lon');
    var mapzoom = $('#map').data('zoom');
    // Styles a map in night mode.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: maplat, lng: maplon },
        zoom: mapzoom,
        scrollwheel: false,
        styles: [{
            "elementType": "geometry",
            "stylers": [{
                "color": "#f5f5f5"
            }]
        }, {
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#616161"
            }]
        }, {
            "elementType": "labels.text.stroke",
            "stylers": [{
                "color": "#f5f5f5"
            }]
        }, {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#bdbdbd"
            }]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
                "color": "#eeeeee"
            }]
        }, {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#757575"
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{
                "color": "#e5e5e5"
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#9e9e9e"
            }]
        }, {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#757575"
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [{
                "color": "#dadada"
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#616161"
            }]
        }, {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#9e9e9e"
            }]
        }, {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [{
                "color": "#e5e5e5"
            }]
        }, {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [{
                "color": "#eeeeee"
            }]
        }, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "color": "#c9c9c9"
            }]
        }, {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#9e9e9e"
            }]
        }]
    });
    var marker = new google.maps.Marker({
        position: { lat: maplat, lng: maplon },
        map: map,
        title: 'We are here!'
    });
}