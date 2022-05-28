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
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
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
});
