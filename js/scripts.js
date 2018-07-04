$(function() {
    $('[data-toggle="tooltip"]').tooltip();
    if (($('a.active').text() == "HOME") || ($('a.active').text() == "CONFERENCE") && ($(window).width() > 990)) {
        $('body').css("padding-top", "0px");
        if ($(document).scrollTop() < 70) {
            $('nav').addClass('enlarge');
            $('nav').css("box-shadow", "none")
        }
        $('.tinted-header').css("padding", "13% 4%");
        $(window).scroll(function() {
            if ($(document).scrollTop() < 70) {
                $('nav').addClass('enlarge');
                $('nav').css("box-shadow", "none")
            } else {
                $('nav').removeClass('enlarge');
                $('nav').css("box-shadow", "0 5px 5px -5px rgb(100, 100, 100)")
            }
        })
    }
});
var items = $('#carouselHome .carousel-inner .carousel-item'),
    heights = [],
    tallest;

function normalizeHeights() {
    if (items.length) {
        items.each(function() {
            heights.push($(this).height())
        });
        tallest = Math.max.apply(null, heights) + 30;
        items.each(function() {
            $(this).find(".row").css('min-height', tallest + 'px')
        })
    }
}
normalizeHeights();
$(window).on('resize orientationchange', function() {
    tallest = 0, heights.length = 0;
    items.each(function() {
        $(this).css('min-height', '0');
    });
    normalizeHeights();
});
var prelimDeadline = "October 26 2018 23:59:59 GMT+0530";
var finalDeadline = "January 19 2019 23:59:59 GMT+0530";

function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        "total": t,
        "days": days
    }
}
var prelimDaysSpan = document.getElementById("prelim-days");
var finalDaysSpan = document.getElementById("final-days");

function updatePrelimClock() {
    var t = getTimeRemaining(prelimDeadline);
    if (t.days > 9) {
        prelimDaysSpan.innerHTML = t.days
    } else {
        prelimDaysSpan.innerHTML = ('0' + t.days).slice(-2)
    }
    if (t.total <= 0) {
        prelimDaysSpan.innerHTML = '00'
    }
}

function updateFinalClock() {
    var t = getTimeRemaining(finalDeadline);
    if (t.days > 9) {
        finalDaysSpan.innerHTML = t.days
    } else {
        finalDaysSpan.innerHTML = ('0' + t.days).slice(-2)
    };
    if (t.total <= 0) {
        fianlDaysSpan.innerHTML = '00'
    }
}
updatePrelimClock();
updateFinalClock();
