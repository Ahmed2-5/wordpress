(function ($) {

  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
      "frontend/element_ready/home-banner.default",
      function (scope, $) {
        $("[data-background]").each(function () {
          $(this).css(
            "background-image",
            "url(" + $(this).attr("data-background") + ")"
          );
        });
      }
    );
  });

  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
      "frontend/element_ready/solution.default",
      function (scope, $) {
        $("[data-background]").each(function () {
          $(this).css(
            "background-image",
            "url(" + $(this).attr("data-background") + ")"
          );
        });
      }
    );
  });

  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
      "frontend/element_ready/grow-business.default",
      function (scope, $) {
        $("svg.circle-progress").each(function (index, value) {
          $(this).find($("circle.complete")).removeAttr("style");
        });
      }
    );
  });

  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
      "frontend/element_ready/team-slide.default",
      function (scope, $) {
        $("[data-background]").each(function () {
          $(this).css(
            "background-image",
            "url(" + $(this).attr("data-background") + ")"
          );
        });
        /*==========  Team Slider  ==========*/
        var swiper = new Swiper(".team-slider", {
          slidesPerView: 1,
          loop: true,
          speed: 600,
          autoplay: {
            delay: 3000,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      }
    );
  });

  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
      "frontend/element_ready/faqs.default",
      function (scope, $) {
        $(".faq__area-collapse-item-card-header").click(function () {
          if (
            $(this)
              .next(".faq__area-collapse-item-card-header-content")
              .hasClass("active")
          ) {
            $(this)
              .next(".faq__area-collapse-item-card-header-content")
              .removeClass("active")
              .slideUp();
            $(this)
              .children("i")
              .removeClass("flaticon-remove")
              .addClass("flaticon-plus");
          } else {
            $(
              ".faq__area-collapse-item-card .faq__area-collapse-item-card-header-content"
            )
              .removeClass("active")
              .slideUp();
            $(
              ".faq__area-collapse-item-card .faq__area-collapse-item-card-header i"
            )
              .removeClass("flaticon-remove")
              .addClass("flaticon-plus");
            $(this)
              .next(".faq__area-collapse-item-card-header-content")
              .addClass("active")
              .slideDown();
            $(this)
              .children("i")
              .removeClass("flaticon-plus")
              .addClass("flaticon-remove");
          }
        });
      }
    )
  });


})(jQuery);
