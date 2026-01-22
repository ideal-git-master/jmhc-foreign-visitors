'use strict'

/* ====================================================
// Mneu Toggle
// ==================================================== */
const headerMenuToggle = document.querySelector('.header__apply-btn--menu');
const menu = document.querySelector('.menu');
const menuCloseBtn = document.querySelector('.menu__close');

if (headerMenuToggle && menu) {
  headerMenuToggle.addEventListener('click', (e) => {
    e.preventDefault();
    menu.classList.toggle('active');
    if (menu.classList.contains('active')) {
      document.body.style.overflow = 'hidden';
    } else {
      document.body.style.overflow = '';
    }
  });
}

if (menuCloseBtn && menu) {
  menuCloseBtn.addEventListener('click', (e) => {
    e.preventDefault();
    menu.classList.remove('active');
    document.body.style.overflow = '';
  });
}
/* ====================================================
Menu Swiper Initialization
==================================================== */
const menuSlider = new Swiper('.menu__slider', {
  loop: true,
  speed: 800,
  slidesPerView: 1,
  spaceBetween: 10,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.menu__slider-pagination',
    clickable: true,
  },
});

/* ====================================================
// Mega Menu
// ==================================================== */
const megaMenuItem = document.querySelector('.mega-menu-item');
const megaMenu = document.querySelector('.mega-menu');

if (megaMenuItem && megaMenu) {
  // クリック
  megaMenuItem.addEventListener('click', (e) => {
    e.preventDefault();
    megaMenu.classList.toggle('open');
  });
  // ホバー（PC）
  megaMenuItem.addEventListener('mouseenter', () => {
    megaMenu.classList.add('open');
  });
  // メガメニュー本体から離れたとき
  megaMenu.addEventListener('mouseleave', (e) => {
    // トリガーに戻っていなければ閉じる
    const toElement = e.relatedTarget;
    if (!megaMenuItem.contains(toElement)) {
      megaMenu.classList.remove('open');
    }
  });
  // タップ（スマホ）
  megaMenuItem.addEventListener('touchstart', (e) => {
    e.preventDefault();
    megaMenu.classList.toggle('open');
  });
}

/* ====================================================
// Header Follow Scroll
// ==================================================== */
const header = document.querySelector('.header');
const headerNavWrapper = document.querySelector('.header__nav-wrapper');

window.addEventListener('scroll', () => {
  if (window.scrollY > 30) {
    header.classList.add('scrolled');
    headerNavWrapper.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
    headerNavWrapper.classList.remove('scrolled');
  }
});

/* ====================================================
// medical-program-keyword-search__form
// ==================================================== */

const keywordSearch = document.querySelector('.medical-program-keyword-search');
const keywordFormClose = document.querySelector('.medical-program-keyword-search__close-button');

if (keywordSearch) {
  keywordFormClose.addEventListener('click', () => {
    keywordSearch.style.display = 'none';
  });
}