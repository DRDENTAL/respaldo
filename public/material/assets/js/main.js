"use strict";
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var scrollDirection, $ = jQuery;
! function(e) {
    e.fn.scrollingTo = function(t) {
        var i = {
                animationTime: 1e3,
                easing: "",
                topSpace: 0,
                callbackBeforeTransition: function() {},
                callbackAfterTransition: function() {}
            },
            n = e.extend({}, i, t);
        return e(this).on("click", function(t) {
            var i = t;
            t.preventDefault();
            var a = e(document).find(e(this).data("section"));
            if (a.length < 1) return !1;
            e("html, body").is(":animated") && e("html, body").stop(!0, !0);
            var o = a.offset().top;
            if (e(window).scrollTop() == o + n.topSpace) return !1;
            n.callbackBeforeTransition(i, a);
            var l = o - n.topSpace;
            return e("html, body").animate({
                scrollTop: l + "px"
            }, n.animationTime, n.easing, function() {
                n.callbackAfterTransition(i, a)
            }), e(this)
        }), e(this).data("scrollOps", n), e(this)
    }
}(jQuery), $(document).ready(function(e) {
    var t = e("#skillSlider");
    t.owlCarousel({
        slideSpeed: 400,
        itemsCustom: [
            [0, 3],
            [400, 4],
            [500, 5],
            [620, 6],
            [700, 8],
            [992, 5],
            [1200, 6]
        ],
        pagination: !1
    });
    var i = t.data("owlCarousel");
    e(".skl-ctrl").find(".go").on("click", function(t) {
        t.preventDefault(), e(this).hasClass("go-left") ? i.prev() : i.next()
    });
    var n = e("#experienceSlider");
    n.owlCarousel({
        items: 3,
        slideSpeed: 600,
        itemsDesktop: [1e3, 3],
        itemsDesktopSmall: [900, 3],
        itemsTablet: [800, 2],
        itemsMobile: [500, 1],
        pagination: !1
    });
    var a = n.data("owlCarousel");
    e(".exp-ctrl").find(".go").on("click", function(t) {
        t.preventDefault(), e(this).hasClass("go-left") ? a.prev() : a.next()
    });
    var o = e("#educationSlider");
    o.owlCarousel({
        slideSpeed: 600,
        items: 3,
        itemsDesktop: [1e3, 3],
        itemsDesktopSmall: [900, 3],
        itemsTablet: [800, 2],
        itemsMobile: [500, 1],
        pagination: !1
    });
    var l = o.data("owlCarousel");
    e(".edu-ctrl").find(".go").on("click", function(t) {
        t.preventDefault(), e(this).hasClass("go-left") ? l.prev() : l.next()
    });
    var s = e("#teamSlider");
    s.owlCarousel({
        slideSpeed: 600,
        items: 3,
        itemsDesktop: [1e3, 3],
        itemsDesktopSmall: [900, 3],
        itemsTablet: [800, 2],
        itemsMobile: [500, 1],
        pagination: !1
    });
    var r = s.data("owlCarousel");
    e(".tmu-ctrl").find(".go").on("click", function(t) {
        t.preventDefault(), e(this).hasClass("go-left") ? r.prev() : r.next()
    });
    var c = e("#testimonialSlider");
    c.owlCarousel({
        slideSpeed: 600,
        items: 2,
        itemsDesktop: [1e3, 2],
        itemsDesktopSmall: [900, 2],
        itemsTablet: [600, 1],
        itemsMobile: !1,
        pagination: !1
    });
    var u = c.data("owlCarousel");
    e(".tmo-ctrl").find(".go").on("click", function(t) {
            t.preventDefault(), e(this).hasClass("go-left") ? u.prev() : u.next()
        }), e(".menu-smooth-scroll").scrollingTo({
            easing: "easeOutQuart",
            animationTime: 1800,
            callbackBeforeTransition: function(t) {
                "" !== t.currentTarget.hash && "#home" !== t.currentTarget.hash && e(t.currentTarget).parent().addClass("current").siblings().removeClass("current"), e(".button-collapse").sideNav("hide")
            },
            callbackAfterTransition: function(e) {
                "" !== e.currentTarget.hash && ("#home" === e.currentTarget.hash ? window.location.hash = "" : window.location.hash = e.currentTarget.hash)
            }
        }), e(".section-call-to-btn").scrollingTo({
            easing: "easeOutQuart",
            animationTime: 1800,
            callbackBeforeTransition: function(e) {},
            callbackAfterTransition: function(e) {}
        }), e(".hire-me-btn").on("click", function(t) {
            t.preventDefault(), e("html, body").animate({
                scrollTop: e("#contact").offset().top
            }, 500)
        }),
        function() {
            function t(t, i) {
                var n, a = {
                        domObj: t,
                        className: "small-menu",
                        position: "100px",
                        onIntellingenceMenu: function() {},
                        onNormalMenu: function() {}
                    },
                    o = e.extend({}, a, i),
                    l = {
                        displayMenu: function() {
                            o.domObj.hasClass(o.className) && o.domObj.removeClass(o.className)
                        },
                        hideMenu: function() {
                            o.domObj.hasClass(o.className) || o.domObj.addClass(o.className)
                        }
                    };
                return {
                    intelligent_menu: function() {
                        var t, i = 0;
                        void 0 != n && e(window).unbind("scroll", n), n = function(e) {
                            t = e.currentTarget.scrollY > i ? "down" : "up", i = e.currentTarget.scrollY, "up" == t ? l.displayMenu() : l.hideMenu()
                        }, e(window).bind("scroll", n), o.onNormalMenu()
                    },
                    fixed_menu: function() {
                        void 0 != n && e(window).unbind("scroll", n), n = function(e) {
                            l.displayMenu()
                        }, e(window).bind("scroll", n), o.onNormalMenu()
                    },
                    mobile_intelligent_menu: function() {
                        !0 === jQuery.browser.mobile ? this.intelligent_menu() : this.fixed_menu()
                    }
                }
            }
            e.fn.menu = function(e) {
                return new t(this.first(), e)
            }
        }();
    var d = e("header").menu({
        className: "hide-menu",
        position: "100px"
    });
    window.menuFun = d, d.intelligent_menu(),
        function() {
            function t(e, t) {
                return t.index(e)
            }
            var i = e(".scroll-section");
            i.length > 0 && i.waypoint({
                handler: function(n, a) {
                    var o, l;
                    o = e(this), l = t(e(this), i) - 1, "up" === a ? (scrollDirection = "up", o = l < 0 ? o : i.eq(l)) : scrollDirection = "Down", "home" != o.attr("id") ? e('.menu-smooth-scroll[href="#' + o.attr("id") + '"]').parent("li").addClass("current").siblings().removeClass("current") : e(".menu-smooth-scroll").parent("li").removeClass("current")
                },
                offset: "35%"
            })
        }();
    var m, f = [{
            featureType: "landscape",
            stylers: [{
                saturation: -100
            }, {
                lightness: 50
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "poi",
            stylers: [{
                saturation: -100
            }, {
                lightness: 40
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "road.highway",
            stylers: [{
                saturation: -100
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "road.arterial",
            stylers: [{
                saturation: -100
            }, {
                lightness: 20
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "road.local",
            stylers: [{
                saturation: -100
            }, {
                lightness: 30
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "transit",
            stylers: [{
                saturation: -100
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "administrative.province",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "water",
            elementType: "labels",
            stylers: [{
                visibility: "on"
            }, {
                lightness: -0
            }, {
                saturation: -0
            }]
        }, {
            featureType: "water",
            elementType: "geometry",
            stylers: [{
                hue: "#00baff"
            }, {
                lightness: -10
            }, {
                saturation: -95
            }]
        }],
        p = e("#map");
    m = !0 !== jQuery.browser.mobile, p.length > 0 && new GMaps({
        div: "#map",
        lat: 23.79473005386213,
        lng: 90.41430473327637,
        scrollwheel: !1,
        draggable: m,
        zoom: 16,
        disableDefaultUI: !0,
        styles: f
    }).addMarker({
        lat: 23.79473005386213,
        lng: 90.41430473327637,
        icon: "images/marker-icon.png",
        infoWindow: {
            content: "
BD InfoSys Ltd, Dhaka, Bangladesh"
        }
    })
}(jQuery)), $(window).load(function() {
    if ($(".section-call-to-btn.call-to-home").waypoint({
            handler: function(e, t) {
                var i = $(this);
                i.fadeIn(0).removeClass("btn-hidden");
                var n = setTimeout(function() {
                    i.addClass("btn-show").removeClass("btn-up"), clearTimeout(n)
                }, 1500)
            },
            offset: "90%"
        }), $(".section-call-to-btn.call-to-about").delay(1e3).fadeIn(0, function() {
            var e = $(this);
            e.removeClass("btn-hidden");
            var t = setTimeout(function() {
                e.addClass("btn-show").removeClass("btn-up"), clearTimeout(t)
            }, 1600)
        }), $("#protfolio-msnry").length > 0) {
        var e = 0,
            t = $("#protfolio-msnry").isotope({
                itemSelector: ".single-port-item",
                layoutMode: "fitRows"
            });
        $("#portfolio-msnry-sort a").on("click", function(e) {
            if (e.preventDefault(), $(this).parent("li").hasClass("active")) return !1;
            $(this).parent("li").addClass("active").siblings("li").removeClass("active");
            var i = $(this).data("target");
            return t.isotope({
                filter: i
            }), $(this)
        }), $("#portfolio-item-loader").on("click", function(i) {
            i.preventDefault();
            for (var n = $(this), a = 0; a < 3; a++) $.get("portfolioitems.html", function(i, a) {
                var o, l, s = $("#portfolio-msnry-sort li.active a").data("target");
                (o = "*" != s ? $(i).find("li" + s) : $(i).find("li")).length > 0 && (l = Math.floor(Math.random() * o.length), t.isotope("insert", o.eq(l)), 9 == ++e && n.remove())
            })
        });
        var i = $("#portfolioModal"),
            n = i.find(".model-img"),
            a = i.find(".modal-content .title"),
            o = i.find(".modal-content .m-content"),
            l = i.find(".modal-footer .modal-action");
        $("#protfolio-msnry").delegate("a.modal-trigger", "click", function(e) {
            e.preventDefault();
            var t = $(this);
            i.openModal({
                dismissible: !0,
                opacity: ".4",
                in_duration: 400,
                out_duration: 400,
                ready: function() {
                    var e = t.data("image-source"),
                        i = t.data("title"),
                        s = t.data("content"),
                        r = t.data("demo-link");
                    e && n.html('Portfolio Image'), a.text(i), o.text(s), l.attr("href", r)
                }
            })
        })
    }
    $("#skillSlider").waypoint({
        handler: function(e, t) {
            $(this).find(".singel-hr-inner").each(function() {
                var e = $(this).data("height");
                $(this).css("height", e)
            })
        },
        offset: "60%"
    }), new WOW({
        offset: 200,
        mobile: !1
    }).init()
});
var $countNumb = $(".countNumb");
$countNumb.length > 0 && $countNumb.counterUp({
    delay: 15,
    time: 1700
}), $("#contactForm").on("submit", function(e) {
    function t(e) {
        swal("Gracias!", "Mensaje enviado con exito!", "success"), n.find("input, textarea").val("")
    }

    function i(e) {
        n.find("input.invalid, textarea.invalid").removeClass("invalid"), e.name && o.removeClass("valid").addClass("invalid"), e.email && l.removeClass("valid").addClass("invalid"), e.message && s.removeClass("valid").addClass("invalid")
    }
    e.preventDefault();
    console.log("nones");
    var n = $(this),
        a = $(this).serialize(),
        o = n.find("#contact_name"),
        l = n.find("#email"),
        s = n.find("#textarea1"),
        r = n.find(".form-loader-area"),
        c = n.find('button, input[type="submit"]');
    r.show(), c.attr("disabled", "disabled"), $.ajax({
        type: "POST",
        url: "/contacto",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: a
    }).done(function(e) {
        var n = JSON.parse(e);
        n.OK ? t(n) : i(n);
        var a = setTimeout(function() {
            r.hide(), c.removeAttr("disabled"), clearTimeout(a)
        }, 1e3)
    }).fail(function() {
        sweetAlert("Oops...", "Problemas Tecnicos, Reintentar mas tarde!", "error");
        var e = setTimeout(function() {
            r.hide(), c.removeAttr("disabled"), clearTimeout(e)
        }, 1e3)
    })
});