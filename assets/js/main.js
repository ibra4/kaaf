$(function () {
  var slider = $(".slick-slider");
  var latestProjectsSlick = $(".latest-projects-slick");
  var latestProjectsHelpRequestsSlick = $(
    ".latest-projects-help-requests-slick"
  );

  slider.slick({
    dots: true,
    infinite: false,
    rtl: $("html").attr("dir") == "rtl" ? true : false,
    appendArrows: ".slick-custom-buttons",
    nextArrow:
      "<div class='slick-custom-next'><i class='fa fa-caret-right'></i></div>",
    prevArrow:
      "<div class='slick-custom-prev'><i class='fa fa-caret-left'></i></div>",
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
        breakpoint: 1563,
        settings: {
          slidesToShow: 2.5,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2.2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1.1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  latestProjectsHelpRequestsSlick.slick({
    infinite: true,
    rtl: $(document).attr("dir") == "rtl",
    slidesToShow: 4,
    slidesToScroll: 1,
    appendArrows: ".help-requests-slick-buttons",
    nextArrow:
      "<div class='help-requests-slick-custom-next'><i class='fa fa-chevron-right'></i></div>",
    prevArrow:
      "<div class='help-requests-slick-custom-prev'><i class='fa fa-chevron-left'></i></div>",
    responsive: [
      {
        breakpoint: 1563,
        settings: {
          slidesToShow: 3.1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2.1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1.1,
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

  $(".navbar-collapse.desktop-menu").on("show.bs.collapse", function (e) {
    $(this).css("display", "none");
  });

  // Scroll to top whene open dropdown menu
  $(".dropdown-toggle").on("click change", function (e) {
    window.scrollTo({
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

  $(".select2").select2();

  Dropzone.autoDiscover = false;
  // var myDropzone = new Dropzone("#id_dropzone", { url: "/file/post"});
  $("#id_dropzone").dropzone({
    maxFiles: 1,
    multiple: false,
    url: "/ajax_file_upload_handler/",
    success: function (file, response) {
      console.log(response);
    },
  });

  $(".country_selector").selectize({
    render: {
      option: function (data, escape) {
        return (
          '<div class="option"><span class="fi fi-' +
          String(escape(data.value)).toLowerCase() +
          '"></span>' +
          escape(data.text) +
          "</div>"
        );
      },
      item: function (data, escape) {
        return (
          '<div class="item"><span class="fi fi-' +
          String(escape(data.value)).toLowerCase() +
          '"></span>' +
          escape(data.text) +
          "</div>"
        );
      },
    },
  });

  // function getRangeSliderVals() {
  //   // Get slider values
  //   var parent = this.parentNode;
  //   var slides = parent.getElementsByTagName("input");
  //   var slide1 = parseFloat(slides[0].value);
  //   var slide2 = parseFloat(slides[1].value);
  //   // Neither slider will clip the other, so make sure we determine which is larger
  //   if (slide1 > slide2) {
  //     var tmp = slide2;
  //     slide2 = slide1;
  //     slide1 = tmp;
  //   }

  //   $('#from').val(slide1)
  //   $('#to').val(slide2)
  //   // var displayElement = parent.getElementsByClassName("rangeValues")[0];
  //   // displayElement.innerHTML = slide1 + " - " + slide2;
  // }

  // // Initialize Sliders
  // var sliderSections = document.getElementsByClassName("range-slider");
  // for (var x = 0; x < sliderSections.length; x++) {
  //   var sliders = sliderSections[x].getElementsByTagName("input");
  //   for (var y = 0; y < sliders.length; y++) {
  //     if (sliders[y].type === "range") {
  //       sliders[y].oninput = getRangeSliderVals;
  //       // Manually trigger event first time to display values
  //       sliders[y].oninput();
  //     }
  //   }
  // }

  $("#slider-range").slider({
    range: true,
    min: 50,
    max: 250,
    values: [100, 200],
    slide: function (event, ui) {
      // $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
      $("#from").val(ui.values[0]);
      $("#to").val(ui.values[1]);
    },
  });
});
