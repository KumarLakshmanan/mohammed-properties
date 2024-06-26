"use strict";
if (
  ($(".main-header li.dropdown ul").length &&
    $(".main-header .navigation li.dropdown").append(
      '<div class="dropdown-btn"><span class="fa fa-angle-right"></span></div>'
    ),
  $(".mobile-menu").length)
) {
  $(".mobile-menu .menu-box").mCustomScrollbar();
  var mobileMenuContent = $(".main-header .nav-outer .main-menu").html();
  $(".mobile-menu .menu-box .menu-outer").append(mobileMenuContent),
    $(".sticky-header .main-menu").append(mobileMenuContent),
    $(".mobile-menu li.dropdown .dropdown-btn").on("click", function () {
      $(this).toggleClass("open"), $(this).prev("ul").slideToggle(500);
    }),
    $(".mobile-menu li.dropdown .dropdown-btn").on("click", function () {
      $(this).prev(".megamenu").slideToggle(900);
    }),
    $(".mobile-nav-toggler").on("click", function () {
      $("body").addClass("mobile-menu-visible");
    }),
    $(".mobile-menu .menu-backdrop,.mobile-menu .close-btn").on(
      "click",
      function () {
        $("body").removeClass("mobile-menu-visible");
      }
    );
}
if (
  ($(".scroll-to-target").length &&
    $(".scroll-to-target").on("click", function () {
      var e = $(this).attr("data-target");
      $("html, body").animate({ scrollTop: $(e).offset().top }, 1e3);
    }),
  $(".parallax-scene-1").length)
)
  var scene = $(".parallax-scene-1").get(0),
    parallaxInstance = new Parallax(scene);
if ($(".parallax-scene-2").length)
  (scene = $(".parallax-scene-2").get(0)),
    (parallaxInstance = new Parallax(scene));
if ($(".parallax-scene-3").length)
  (scene = $(".parallax-scene-3").get(0)),
    (parallaxInstance = new Parallax(scene));
if ($(".parallax-scene-4").length)
  (scene = $(".parallax-scene-4").get(0)),
    (parallaxInstance = new Parallax(scene));
if ($(".parallax-scene-5").length)
  (scene = $(".parallax-scene-5").get(0)),
    (parallaxInstance = new Parallax(scene));
function headerStyle() {
  if ($(".main-header").length) {
    var e = $(window).scrollTop(),
      a = $(".main-header"),
      t = $(".scroll-top");
    e >= 350
      ? (a.addClass("fixed-header"), t.fadeIn(300))
      : (a.removeClass("fixed-header"), t.fadeOut(300));
  }
}
function fullHeight() {
  $(".full-height").css("height", $(window).height());
}
function handlePreloader() {
  $(".loader-wrap").length && $(".loader-wrap").delay(1e3).fadeOut(500),
    TweenMax.to($(".loader-wrap .overlay"), 1.2, {
      force3D: !0,
      left: "100%",
      ease: Expo.easeInOut,
    });
}
function CounterNumberChanger() {
  var e = $(".timer");
  e.length &&
    e.appear(function () {
      e.countTo();
    });
}
function projectMasonaryLayout() {
  ($(".masonary-layout").length &&
    $(".masonary-layout").isotope({ layoutMode: "masonry" }),
  $(".post-filter").length &&
    $(".post-filter li")
      .children(".filter-text")
      .on("click", function () {
        var e = $(this),
          a = e.parent().attr("data-filter");
        return (
          $(".post-filter li").removeClass("active"),
          e.parent().addClass("active"),
          $(".filter-layout").isotope({
            filter: a,
            animationOptions: { duration: 500, easing: "linear", queue: !1 },
          }),
          !1
        );
      }),
  $(".post-filter.has-dynamic-filters-counter").length) &&
    $(".post-filter.has-dynamic-filters-counter")
      .find("li")
      .each(function () {
        var e = $(this).data("filter"),
          a = $(".filter-layout").find(e).length;
        $(this)
          .children(".filter-text")
          .append('<span class="count">' + a + "</span>");
      });
}
function onHoverthreeDmovement() {
  $(".js-tilt").length &&
    $(".js-tilt").tilt({
      maxTilt: 20,
      perspective: 700,
      glare: !0,
      maxGlare: 0,
    });
}
function tabBox() {
  $(".tabs-box").length &&
    $(".tabs-box .tab-buttons .tab-btn").on("click", function (e) {
      e.preventDefault();
      var a = $($(this).attr("data-tab"));
      if ($(a).is(":visible")) return !1;
      a
        .parents(".tabs-box")
        .find(".tab-buttons")
        .find(".tab-btn")
        .removeClass("active-btn"),
        $(this).addClass("active-btn"),
        a.parents(".tabs-box").find(".tabs-content").find(".tab").fadeOut(0),
        a
          .parents(".tabs-box")
          .find(".tabs-content")
          .find(".tab")
          .removeClass("active-tab"),
        $(a).fadeIn(300),
        $(a).addClass("active-tab");
    });
}
function directionswitch() {
  $(".page_direction").length &&
    $(".direction_switch button").on("click", function () {
      $(".boxed_wrapper").toggleClass(function () {
        return $(this).is(".rtl, .ltr") ? "rtl ltr" : "rtl";
      });
    });
}
function priceFilter() {
  $(".price-ranger").length &&
    ($(".price-ranger #slider-range").slider({
      range: !0,
      min: 10,
      max: 200,
      values: [11, 99],
      slide: function (e, a) {
        $(".price-ranger .ranger-min-max-block .min").val("$" + a.values[0]),
          $(".price-ranger .ranger-min-max-block .max").val("$" + a.values[1]);
      },
    }),
    $(".price-ranger .ranger-min-max-block .min").val(
      "$" + $(".price-ranger #slider-range").slider("values", 0)
    ),
    $(".price-ranger .ranger-min-max-block .max").val(
      "$" + $(".price-ranger #slider-range").slider("values", 1)
    ));
}
if (
  ($(".scroll-nav").length && $(".scroll-nav").onePageNav(),
  headerStyle(),
  $(".preloader-close").length &&
    $(".preloader-close").on("click", function () {
      $(".loader-wrap").delay(200).fadeOut(500);
    }),
  $(".quantity-spinner").length &&
    $("input.quantity-spinner").TouchSpin({ verticalbuttons: !0 }),
  $(".theme_carousel").length &&
    $(".theme_carousel").each(function (e) {
      var a = {},
        t = $(this).data("options");
      $.extend(a, t), $(this).owlCarousel(a);
    }),
  $(".banner-carousel").length &&
    $(".banner-carousel").owlCarousel({
      animateOut: "fadeOut",
      animateIn: "fadeIn",
      loop: !0,
      margin: 0,
      dots: !0,
      nav: !0,
      singleItem: !0,
      smartSpeed: 500,
      autoplay: !0,
      autoplayTimeout: 6e3,
      navText: [
        '<span class="flaticon-left-arrow"></span>',
        '<span class="flaticon-left-arrow"></span>',
      ],
      responsive: { 0: { items: 1 }, 600: { items: 1 }, 1024: { items: 1 } },
    }),
  $(".one-item-carousel").length &&
    $(".one-item-carousel").owlCarousel({
      loop: !0,
      margin: 30,
      dots: !1,
      nav: !0,
      stagePadding: 0,
      singleItem: !0,
      smartSpeed: 500,
      autoplay: !0,
      autoplayTimeout: 6e3,
      navText: [
        '<span class="fa fa-angle-left left"></span>',
        '<span class="fa fa-angle-right right"></span>',
      ],
      responsive: {
        0: { items: 1 },
        768: { items: 1 },
        850: { items: 1 },
        991: { items: 2 },
        1300: { items: 3 },
        1700: { items: 4 },
      },
    }),
  $(".partner-carousel").length &&
    $(".partner-carousel").owlCarousel({
      loop: !0,
      margin: 0,
      dots: !1,
      nav: !1,
      stagePadding: 0,
      singleItem: !0,
      smartSpeed: 500,
      autoplay: !0,
      autoplayTimeout: 6e3,
      navText: [
        '<span class="flaticon-next left"></span>',
        '<span class="flaticon-next right"></span>',
      ],
      responsive: {
        0: { items: 1 },
        500: { items: 1 },
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 4 },
        1300: { items: 4 },
      },
    }),
  $(".accordion-box").length &&
    $(".accordion-box").on("click", ".acc-btn", function () {
      var e = $(this).parents(".accordion-box"),
        a = $(this).parents(".accordion");
      if (
        (!0 !== $(this).hasClass("active") &&
          $(e).find(".accordion .acc-btn").removeClass("active"),
        $(this).next(".acc-content").is(":visible"))
      )
        return !1;
      $(this).addClass("active"),
        $(e).children(".accordion").removeClass("active-block"),
        $(e).find(".accordion").children(".acc-content").slideUp(300),
        a.addClass("active-block"),
        $(this).next(".acc-content").slideDown(300);
    }),
  $(".dial").length &&
    $(".dial").appear(
      function () {
        var e = $(this),
          a = (e.attr("data-fgColor"), e.attr("value"));
        e.knob({
          value: 0,
          min: 0,
          max: 100,
          skin: "tron",
          readOnly: !0,
          thickness: 0.05,
          dynamicDraw: !0,
          displayInput: !1,
        }),
          $({ value: 0 }).animate(
            { value: a },
            {
              duration: 2e3,
              easing: "swing",
              progress: function () {
                e.val(Math.ceil(this.value)).trigger("change");
              },
            }
          ),
          $(this).append(function () {});
      },
      { accY: 20 }
    ),
  $(".progress-levels .progress-box .bar-fill").length &&
    $(".progress-box .bar-fill").each(
      function () {
        $(".progress-box .bar-fill").appear(function () {
          var e = $(this).attr("data-percent");
          $(this).css("width", e + "%");
        });
      },
      { accY: 0 }
    ),
  $(".count-box").length &&
    $(".count-box").appear(
      function () {
        var e = $(this),
          a = e.find(".count-text").attr("data-stop"),
          t = parseInt(e.find(".count-text").attr("data-speed"), 10);
        e.hasClass("counted") ||
          (e.addClass("counted"),
          $({ countNum: e.find(".count-text").text() }).animate(
            { countNum: a },
            {
              duration: t,
              easing: "linear",
              step: function () {
                e.find(".count-text").text(Math.floor(this.countNum));
              },
              complete: function () {
                e.find(".count-text").text(this.countNum);
              },
            }
          ));
      },
      { accY: 0 }
    ),
  $(".video-popup").magnificPopup({ type: "iframe" }),
  $(".lightbox-image").length &&
    $(".lightbox-image").fancybox({
      openEffect: "fade",
      closeEffect: "fade",
      youtube: { controls: 0, showinfo: 0 },
      helpers: { media: {} },
    }),
  $(".paroller").length &&
    $(".paroller").paroller({
      factor: -0.1,
      factorLg: -0.1,
      type: "foreground",
      direction: "vertical",
    }),
  $(".paroller-2").length &&
    $(".paroller-2").paroller({
      factor: 0.05,
      factorLg: 0.05,
      type: "foreground",
      direction: "horizontal",
    }),
  $(".wow").length)
) {
  var wow = new WOW({
    boxClass: "wow",
    animateClass: "animated",
    offset: 0,
    mobile: !1,
    live: !0,
  });
  wow.init();
}
$("[data-aos]").length &&
  AOS.init({ duration: "1000", disable: "false", easing: "ease", mirror: !0 }),
  $("#contact-form").length &&
    $("#contact-form").validate({
      submitHandler: function (e) {
        var a = $(e).find('button[type="submit"]'),
          t = "#form-result";
        $(t).remove(),
          a.before(
            '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
          );
        var n = a.html();
        a.html(a.prop("disabled", !0).data("loading-text")),
          $(e).ajaxSubmit({
            dataType: "json",
            success: function (o) {
              (o.status = "true") && $(e).find(".form-control").val(""),
                a.prop("disabled", !1).html(n),
                $(t).html(o.message).fadeIn("slow"),
                setTimeout(function () {
                  $(t).fadeOut("slow");
                }, 6e3);
            },
          });
      },
    }),
  $("#search-popup").length &&
    ($(".search-toggler").on("click", function () {
      $("#search-popup").addClass("popup-visible");
    }),
    $(document).keydown(function (e) {
      27 === e.keyCode && $("#search-popup").removeClass("popup-visible");
    }),
    $(".close-search,.search-popup .overlay-layer").on("click", function () {
      $("#search-popup").removeClass("popup-visible");
    })),
  $("select:not(.ignore)").niceSelect(),
  jQuery(document).on("ready", function () {
    jQuery,
      tabBox(),
      directionswitch(),
      CounterNumberChanger(),
      onHoverthreeDmovement(),
      priceFilter();
  }),
  jQuery(window).on("scroll", function () {
    jQuery, headerStyle();
  }),
  jQuery(window).on("load", function () {
    jQuery, handlePreloader(), projectMasonaryLayout(), fullHeight();
  }),
  $(window).enllax();
