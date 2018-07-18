$(window).on('scroll', function(e) {
    var top = $(window).scrollTop() + $(window).height(),
        isVisible = top > $(".timeline .lower").offset().top;
    if (isVisible) {
        if (!$(".timeline").hasClass("animation-start")) {
            $(".timeline").addClass("animation-start");
            $(".timeline table .timeline-line-row .timeline-line").css("animation", "line linear 2s");
            $(".timeline .timeline-end").css("animation", "end-circle linear 0.2s 2s both");
            var height = $(".timeline table").height() - $(".timeline table .upper").height() - 29;
            $(".timeline .timeline-start").css("bottom", height + "px");
            $(".timeline .timeline-end").css("bottom", height + "px");
            var delay = 0.2;
            $(".timeline table .upper td").each(function() {
                var contentdelay = delay + 0.2;
                $(this).find(".timeline-content").css("animation", "content linear 0.2s " + contentdelay + "s both");
                $(this).find(".vertical-line").css("animation", "vertical-line linear 0.2s " + delay + "s both");
                delay += 0.4
            });
            delay = 0.2;
            $(".timeline table .timeline-line-row td").each(function() {
                $(this).find(".timeline-circle").css("animation", "circle linear 0.2s " + delay + "s both");
                delay += 0.4
            });
            delay = 0.2;
            $(".timeline table .lower td").each(function() {
                $(this).find(".timeline-content").css("animation", "content linear 0.2s " + delay + "s both");
                $(this).find(".vertical-line").css("animation", "vertical-line-reverse linear 0.2s " + delay + "s both");
                delay += 0.4
            })
        }
    }
});
