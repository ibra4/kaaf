$(function () {
  var slider = $(".slick-slider");
  var latestProjectsSlick = $(".latest-projects-slick");

  slider.slick({
    dots: true,
    appendArrows: ".slick-custom-buttons",
    nextArrow:
      "<div class='slick-custom-next'><i class='fa fa-chevron-right'></i></div>",
    prevArrow:
      "<div class='slick-custom-prev'><i class='fa fa-chevron-left'></i></div>",
  });

  $(".slick-custom-buttons .slick-custom-prev").on("click", function () {
    $(slider).slick("slickPrev");
  });

  $(".slick-custom-buttons .slick-custom-next").on("click", function () {
    $(slider).slick("slickNext");
  });

  latestProjectsSlick.slick({
    infinite: true,
    rtl: true,
    slidesToShow: 3.5,
    slidesToScroll: 1,
    appendArrows: ".latest-projects-slick-buttons",
    nextArrow:
      "<div class='latest-projects-slick-custom-next'><i class='fa fa-chevron-right'></i></div>",
    prevArrow:
      "<div class='latest-projects-slick-custom-prev'><i class='fa fa-chevron-left'></i></div>",
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".increase-5").on("click", function (e) {
    e.preventDefault();
    changeCount(this, "increase");
  });

  $(".decrease-5").on("click", function (e) {
    e.preventDefault();
    changeCount(this, "decrease");
  });

  function changeCount(button, type) {
    const targetInput = $(button).parent().find("input");
    let value = parseInt(targetInput.val());
    if (type == "increase") {
      targetInput.val(value + 5);
    } else if (type == "decrease" && value > 5) {
      targetInput.val(value - 5);
    }
  }

  $(".dropdown-menu").on("click", function (e) {
    e.stopPropagation();
  });

  $(".nav-item.dropdown").on("mouseover", function () {
    if (window.innerWidth > 992) {
      $(this).find(".dropdown-menu").addClass("show");
      $(this).find(".fa-chevron-down").addClass("reverse");
    }
  });

  $(".nav-item.dropdown").on("mouseleave", function () {
    if (window.innerWidth > 992) {
      $(this).find(".dropdown-menu").removeClass("show");
      $(this).find(".fa-chevron-down").removeClass("reverse");
    }
  });

  $(".dropdown-menu").on("click", ".back-to-main-menu", function (e) {
    $(this).closest(".dropdown-menu").removeClass("show");
  });

  $(".has-submenu").on("click", function (e) {
    e.stopPropagation();
    $(this).find(".dropdown-menu").addClass("show");
    $(this).find(".dropdown-title").text($(this).find("span").text());
  });

  $(".navbar-collapse").on("shown.bs.collapse", function (e) {
    $(".dropdown-menu").css(
      "height",
      $(this).find(".navbar-nav").height() + 90
    );
  });

  $(".navbar-collapse.desktop-menu").on("show.bs.collapse", function (e) {
    $(this).css("display", "none");
  });

  // Scroll to top whene open dropdown menu
  $(".dropdown-toggle").on("click change", function (e) {
    window.scrollTo({
      behavior: "smooth",
      top: 0,
    });
    $(this).parent().find(".dropdown-menu").first().addClass("show");
  });

  // Hide menu if scrollY is bigger than 0
  $(window).scroll(function (event) {
    setTimeout(function () {
      if (window.scrollY != 0) $(".dropdown-menu.show").removeClass("show");
    }, 400);
  });
});
