$(document).ready(function () {
    "use strict";

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.search-form').hide();
            var header = {height: '104px'};
            $(".header").css(header);
            var logo = {marginTop: '1rem'};
            $(".logo_container").css(logo);
        } else {
            $('.search-form').fadeIn(1000);
            var header2 = {height: '10rem'};
            $(".header").css(header2);
            var logo2 = {marginTop: '2.5rem'};
            $(".logo_container").css(logo2);
        }
    });

    if ($(window).width() > 992 && $(window).width() < 1160) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.language').hide();
                var header = {height: '104px'};
                $(".header").css(header);
                var logo = {marginTop: '1rem'};
                $(".logo_container").css(logo);
            } else {
                $('.language').fadeIn(1000);
                var header2 = {height: '10rem'};
                $(".header").css(header2);
                var logo2 = {marginTop: '2.5rem'};
                $(".logo_container").css(logo2);
            }
        });
    }

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    $('.back-to-top').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
        return true;
    });

    function getAJAX(url) {
        var results;
        $.ajax
        ({
            type: 'GET',
            url: url,
            dataType: 'json',
            data: {},
            async: false,
            success: function (data) {
                //console.log(data);
                results = data;
            },
            error: function (data) {
                console.log(data);
                results = data;
            }
        });
        return results;
    }

    var language = $("html").attr("lang"); //get language from html set lang="en" or lang ="ar" if you don't set it

    /* countries */
    var conutriesURL = 'http://api.geonames.org/countryInfoJSON?q=&country=&lang=ar&username=abdulnaser_mohsen'; //url that get your conuntries
    var countries = getAJAX(conutriesURL); // the importance of async test without aync or aync is true
    //console.log(countries);
    //console.log(countries.geonames);
    $(countries.geonames).each(function (index, item) {
        //console.log(item.countryName , item.geonameId);
        var selectOption = $("<option>")
        selectOption.attr("value", item.geonameId).append(item.countryName);
        $('.country').append(selectOption);
    });
});

(function ($) {
    'use strict';

    // Preloader js
    $(window).on('load', function () {
        $('.preloader').fadeOut(700);
    });

    // Sticky Menu
    $(window).scroll(function () {
        var height = $('.top-header').innerHeight();
        if ($('header').offset().top > 10) {
            $('.top-header').addClass('hide');
            $('.navigation').addClass('nav-bg');
            $('.navigation').css('margin-top', '-' + height + 'px');
        } else {
            $('.top-header').removeClass('hide');
            $('.navigation').removeClass('nav-bg');
            $('.navigation').css('margin-top', '-' + 0 + 'px');
        }
    });

})(jQuery);
