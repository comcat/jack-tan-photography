(function() {
    var a, e;
    window.log = function() {
        return log.history = log.history || [], log.history.push(arguments_), this.console ? console.log(Array.prototype.slice.call(arguments_)) : void 0;
    }, a = function() {
        return $(".nav-toggle").on("click", function(a) {
            return a.preventDefault(), $(".burg").toggleClass("activeBurg"), $("#nav-main").toggleClass("menu-open");
        }), $("#menu-primary-navigation").find("a").on("click", function(a) {
            return $(".burg").toggleClass("activeBurg"), $("#nav-main").toggleClass("menu-open");
        });
    }, e = function() {
        return $("#slides").length > 0 ? $("#slides").superslides({
            slide_easing: "easeInOutCubic",
            slide_speed: 1e3,
            pagination: !1,
            hashchange: !1,
            scrollable: !1,
            play: 7500
        }) : void 0;
    }, $(document).ready(function() {
        return a(), e();
    });
}).call(this);
