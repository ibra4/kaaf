$(function () {
  var slider = $(".slick-slider");
  var latestProjectsSlick = $(".latest-projects-slick");

  slider.slick({
    dots: true,
    appendArrows: ".slick-custom-buttons",
    nextArrow: "<div class='slick-custom-next'></div>",
    prevArrow: "<div class='slick-custom-prev'></div>",
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
    nextArrow: "<div class='latest-projects-slick-custom-next'></div>",
    prevArrow: "<div class='latest-projects-slick-custom-prev'></div>",
  });

  $('#decrease-shares').on('click', function (e) {
    e.preventDefault()
    console.log($(this).parent().find("input"))
    const sharesElement = $('#shares-value')
    let value = parseInt(sharesElement.val())
    if (value > 5) {
      sharesElement.val(value - 5)
    }
  })
  $('#increase-shares').on('click', function (e) {
    e.preventDefault()
    const sharesElement = $('#shares-value')
    let value = parseInt(sharesElement.val())
    sharesElement.val(value + 5)
  })

  $('#increase-peojects').on('click', function (e) {
    e.preventDefault()
    const sharesElement = $('#shares-value')
    let value = parseInt(sharesElement.val())
    sharesElement.val(value + 5)
  })
  
});
