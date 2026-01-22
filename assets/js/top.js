'use strict'

/* ====================================================
Swiper Initialization
==================================================== */
const topLeadSlider = new Swiper('.top-lead__slider', {
  loop: true,
  speed: 800,
  slidesPerView: 1,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.top-lead__slider-pagination',
    clickable: true,
  },
});

const topPickupSlider = new Swiper('.top-pickup__slider', {
  loop: true,
  speed: 800,
  slidesPerView: 2.1, // スマホ等で左右が少し見切れる
  spaceBetween: 5,
  centeredSlides: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.top-pickup__slider-pagination',
    clickable: true,
  },
  breakpoints: {
    768: {
      spaceBetween: 10,
    },
    1200: {
      spaceBetween: 18,
    },
  },
  on: {
    init: function () {
      setPickupSliderBg();
    },
    slideChange: function () {
      setPickupSliderBg2();
    }
  }
});

function setPickupSliderBg() {
  const wrapper = document.querySelector('.top-pickup__slider-wrapper');
  const activeImg = document.querySelector('.top-pickup__slider .swiper-slide.swiper-slide-active img');
  if (wrapper && activeImg) {
    wrapper.style.backgroundImage = `url('${activeImg.src}')`;
    wrapper.style.backgroundSize = 'cover';
    wrapper.style.backgroundPosition = 'center';
    wrapper.style.backgroundRepeat = 'no-repeat';
  }
}

function setPickupSliderBg2() {
  const wrapper = document.querySelector('.top-pickup__slider-wrapper');
  const nextSlideImg = document.querySelector('.top-pickup__slider .swiper-slide.swiper-slide-next img');
  if (wrapper && nextSlideImg) {
    wrapper.style.backgroundImage = `url('${nextSlideImg.src}')`;
    wrapper.style.backgroundSize = 'cover';
    wrapper.style.backgroundPosition = 'center';
    wrapper.style.backgroundRepeat = 'no-repeat';
  }
}

const topNewsSlider = new Swiper('.top-news__slider', {
  loop: true,
  speed: 800,
  slidesPerView: 2,
  spaceBetween: 10,
  centeredSlides: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.top-news__slider-pagination',
    type: 'progressbar',
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 25,
    },
    1200: {
      slidesPerView: 5,
      spaceBetween: 35,
    },
  },
});

const topJournalSlider = new Swiper('.top-journal__slider', {
  loop: true,
  speed: 800,
  slidesPerView: 2,
  spaceBetween: 10,
  centeredSlides: true,
  loopAdditionalSlides: 1,
  initialSlide: 1,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.top-journal__slider-pagination',
    type: 'progressbar',
    clickable: true,
  },
  breakpoints: {
    768: {
      spaceBetween: 25,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 25,
    },
    1500: {
      slidesPerView: 4,
      spaceBetween: 35,
    },
  },
});

/* ====================================================
Medical Program Controller
==================================================== */
const programControllerItems = document.querySelectorAll('.top-medical-program__controller-item');
programControllerItems.forEach(item => {
  item.addEventListener('click', function () {
    programControllerItems.forEach(i => i.classList.remove('active'));
    this.classList.add('active');
  });
});