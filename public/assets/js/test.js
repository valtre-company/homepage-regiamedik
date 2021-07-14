$('.your-class').slick({
  infinite: true,
  autoplay: true,
  slidesToShow: 3,
  draggable: true,
  swipe: true,
  nextArrow: '.right-arrow-example',
  prevArrow: '.left-arrow-example',
  responsive: [{
    breakpoint: 1600,
    settings: {
      slidesToShow: 3
    }
  },
  {
    breakpoint: 1200,
    settings: {
      slidesToShow: 3
    }
  },
  {
    breakpoint: 992,
    settings: {
      slidesToShow: 2
    }
  },
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 1
    }
  }
  ]
});

$('.paquetes-carousel').slick({
  infinite: true,
  autoplay: true,
  slidesToShow: 3,
  draggable: true,
  swipe: true,
  nextArrow: '.right-arrow-packages',
  prevArrow: '.left-arrow-packages',
  responsive: [{
    breakpoint: 1600,
    settings: {
      slidesToShow: 3
    }
  },
  {
    breakpoint: 1200,
    settings: {
      slidesToShow: 3
    }
  },
  {
    breakpoint: 992,
    settings: {
      slidesToShow: 2
    }
  },
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 1
    }
  }
  ]
});

$('.promotions-carousel').slick({
  infinite: true,
  autoplay: true,
  slidesToShow: 1,
  draggable: true,
  swipe: true,
  fade: true,
  nextArrow: '.right-arrow-promo',
  prevArrow: '.left-arrow-promo'
});
