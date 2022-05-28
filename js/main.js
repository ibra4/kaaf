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

  // $(".nav-item.dropdown").on("click", function (e) {
  //   const backElement = $("#back-to-parent-menu").clone();
  //   backElement.removeClass("d-none");
  //   const menu = $(this).find(".dropdown-menu");
  //   $(this).find(".row").removeClass("row");
  //   menu.find("button").hide();
  //   menu.prepend("<div class='submenu-title mt-3'>"+$(this).find('a').first().text()+"</div>")
  //   menu.prepend(backElement);
  //   menu.addClass("submenu-wrapper");
  // });

  // $(".dropdown-menu").on("click", ".back-to-parent-menu", function (e) {
  //   $(this).parent().removeClass("show");
  // });

  // $(".submenu > li").on("click", function (e) {
  //   console.log("click", $(this).parent().find("li"));
  // });
});
