!function(t) {
    "use strict";
    t(".switcher-toggle").on("click", function() {
        var s = t("#styles-switcher.left")
          , e = t("#styles-switcher.right");
        "-204px" === e.css("right") ? t(e).animate({
            right: "0px"
        }, 300).addClass("shadow") : t(e).animate({
            right: "-204px"
        }, 300).removeClass("shadow"),
        "-204px" === s.css("left") ? t(s).animate({
            left: "0px"
        }, 300).addClass("shadow") : t(s).animate({
            left: "-204px"
        }, 300).removeClass("shadow")
    }),
    t("#styles-switcher ul li").on("click", function() {
        var s = t(this).data("path");
        t("#color-switcher").attr("href", s),
        t(this).parent().find("li").removeClass("active"),
        t(this).addClass("active")
    }),
    t("#reset-color").on("click", function() {
        t("#color-switcher").removeAttr("href"),
        t("#styles-switcher ul li").parent().find("li").removeClass("active")
    })
}(jQuery);
