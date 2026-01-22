<?php
$page_ja = 'トップ';
$page_en = 'TOP';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include_once('parts/head.php'); ?>
  <!-- / head -->

  <!-- ページ固有のスタイルを読み込む -->
  <link rel="stylesheet" href="./assets/css/top.css">
  <!-- ページ固有のJSを読み込む -->
  <script src="./assets/js/top.js" defer></script>

</head>

<body>
  <?php include_once('parts/header.php'); ?>
  <!-- /.header -->

  <main>
    <?php include_once('parts/medical-program-keyword-search.php'); ?>
    <!-- / .medical-program-keyword-search -->

    <section class="top-lead">
      <div class="top-lead__inner">
        <div class="top-lead__wrapper">
          <div class="top-lead__slider-wrapper">
            <div class="top-lead__slider-title">
              <h2 class="top-lead__slider-heading">日本水準の医療を<br>世界の皆様に届ける</h2>
              <p class="top-lead__slider-description">安心・安全、信頼のサービスをあなたに。<br>
                日本の医療・ヘルスケアサービスを、<br class="sp">安心してご利用いただけるよう<br class="sp">充実したサポート体制を整えています。</p>
            </div>
            <div class="top-lead__slider">
              <ul class="swiper-wrapper">
                <li class="swiper-slide swiper-slide--01">
                  <div class="top-lead__slider-img"><img src="./assets/img/top/lead-slider-01.webp" alt="" width="1900" height="1040"></div>
                </li>
                <li class="swiper-slide swiper-slide--02">
                  <div class="top-lead__slider-img"><img src="./assets/img/top/lead-slider-02.webp" alt="" width="1900" height="1040"></div>
                </li>
                <li class="swiper-slide swiper-slide--03">
                  <div class="top-lead__slider-img"><img src="./assets/img/top/lead-slider-03.webp" alt="" width="1900" height="1040"></div>
                </li>
              </ul>
              <div class="top-lead__slider-pagination"></div>
            </div>
          </div>
          <!-- / .top-lead__slider -->

          <div class="top-pickup__slider-wrapper">
            <div class="top-pickup__title-wrapper">
              <h2 class="top-pickup__title">PICK UP PROGRAM</h2>
            </div>
            <div class="top-pickup__slider">
              <ul class="swiper-wrapper">
                <li class="swiper-slide">
                  <div class="top-pickup__slider-img"><img src="./assets/img/top/pickup-slider-01.webp" alt="" width="1000" height="710"></div>
                  <h3 class="top-pickup__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                  <ul class="top-pickup__slider-category">
                    <li>NKT細胞標的治療</li>
                    <li>レーザーケア</li>
                  </ul>
                  <div class="top-pickup__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
                </li>
                <li class="swiper-slide">
                  <div class="top-pickup__slider-img"><img src="./assets/img/top/pickup-slider-02.webp" alt="" width="1900" height="1040"></div>
                  <h3 class="top-pickup__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                  <ul class="top-pickup__slider-category">
                    <li>NKT細胞標的治療</li>
                    <li>レーザーケア</li>
                  </ul>
                  <div class="top-pickup__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
                </li>
                <li class="swiper-slide">
                  <div class="top-pickup__slider-img"><img src="./assets/img/top/pickup-slider-03.webp" alt="" width="1200" height="800"></div>
                  <h3 class="top-pickup__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                  <ul class="top-pickup__slider-category">
                    <li>NKT細胞標的治療</li>
                    <li>レーザーケア</li>
                  </ul>
                  <div class="top-pickup__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
                </li>
                <li class="swiper-slide">
                  <div class="top-pickup__slider-img"><img src="./assets/img/top/pickup-slider-01.webp" alt="" width="1000" height="710"></div>
                  <h3 class="top-pickup__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                  <ul class="top-pickup__slider-category">
                    <li>NKT細胞標的治療</li>
                    <li>レーザーケア</li>
                  </ul>
                  <div class="top-pickup__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
                </li>
                <li class="swiper-slide">
                  <div class="top-pickup__slider-img"><img src="./assets/img/top/pickup-slider-02.webp" alt="" width="1900" height="1040"></div>
                  <h3 class="top-pickup__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                  <ul class="top-pickup__slider-category">
                    <li>NKT細胞標的治療</li>
                    <li>レーザーケア</li>
                  </ul>
                  <div class="top-pickup__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
                </li>
                <li class="swiper-slide">
                  <div class="top-pickup__slider-img"><img src="./assets/img/top/pickup-slider-03.webp" alt="" width="1200" height="800"></div>
                  <h3 class="top-pickup__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                  <ul class="top-pickup__slider-category">
                    <li>NKT細胞標的治療</li>
                    <li>レーザーケア</li>
                  </ul>
                  <div class="top-pickup__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
                </li>
              </ul>
              <div class="top-pickup__slider-pagination"></div>
            </div>
          </div>
          <!-- / .top-pickup__slider -->

        </div>
      </div>
    </section>
    <!-- / .top-lead -->

    <section class="top-news">
      <div class="top-news__inner">
        <a href="#">
          <h2 class="top-news__title chevron_forward chevron_forward-link">JMHCからのお知らせ</h2>
        </a>
      </div>
      <div class="top-news__slider">
        <ul class="swiper-wrapper">
          <li class="swiper-slide">
            <a href="#">
              <div class="top-news__slider-img">
                <img src="./assets/img/top/news-thumb-01.webp" alt="" width="800" height="512">
              </div>
              <h3 class="top-news__slider-title">JTBとハワイ州観光局 日本支局が医療・ウェルネスにおける相互交流の取り組みについ…MOU締結</h3>
              <div class="top-news__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
            </a>
          </li>
          <li class="swiper-slide">
            <a href="#">
              <div class="top-news__slider-img">
                <img src="./assets/img/top/news-thumb-02.webp" alt="" width="800" height="512">
              </div>
              <h3 class="top-news__slider-title">JTBとハワイ州観光局 日本支局が医療・ウェルネスにおける相互交流の取り組みについ…MOU締結</h3>
              <div class="top-news__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
            </a>
          </li>
          <li class="swiper-slide">
            <a href="#">
              <div class="top-news__slider-img">
                <img src="./assets/img/top/news-thumb-03.webp" alt="" width="800" height="512">
              </div>
              <h3 class="top-news__slider-title">JTBとハワイ州観光局 日本支局が医療・ウェルネスにおける相互交流の取り組みについ…MOU締結</h3>
              <div class="top-news__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
            </a>
          </li>
          <li class="swiper-slide">
            <a href="#">
              <div class="top-news__slider-img">
                <img src="./assets/img/top/news-thumb-04.webp" alt="" width="800" height="512">
              </div>
              <h3 class="top-news__slider-title">JTBとハワイ州観光局 日本支局が医療・ウェルネスにおける相互交流の取り組みについ…MOU締結</h3>
              <div class="top-news__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
            </a>
          </li>
          <li class="swiper-slide">
            <a href="#">
              <div class="top-news__slider-img">
                <img src="./assets/img/top/news-thumb-05.webp" alt="" width="800" height="512">
              </div>
              <h3 class="top-news__slider-title">JTBとハワイ州観光局 日本支局が医療・ウェルネスにおける相互交流の取り組みについ…MOU締結</h3>
              <div class="top-news__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
            </a>
          </li>
          <li class="swiper-slide">
            <a href="#">
              <div class="top-news__slider-img">
                <img src="./assets/img/top/news-thumb-01.webp" alt="" width="800" height="512">
              </div>
              <h3 class="top-news__slider-title">JTBとハワイ州観光局 日本支局が医療・ウェルネスにおける相互交流の取り組みについ…MOU締結</h3>
              <div class="top-news__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
            </a>
          </li>
          <li class="swiper-slide">
            <a href="#">
              <div class="top-news__slider-img">
                <img src="./assets/img/top/news-thumb-02.webp" alt="" width="800" height="512">
              </div>
              <h3 class="top-news__slider-title">JTBとハワイ州観光局 日本支局が医療・ウェルネスにおける相互交流の取り組みについ…MOU締結</h3>
              <div class="top-news__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
            </a>
          </li>
        </ul>
      </div>
      <div class="top-news__inner">
        <div class="top-news__slider-pagination"></div>
      </div>
    </section>
    <!-- / .top-news -->

    <section class="top-medical-program">
      <div class="top-medical-program__inner">
        <a href="#">
          <h2 class="top-medical-program__title chevron_forward chevron_forward-link">推奨医療プログラム</h2>
        </a>

        <div class="top-medical-program__controller" data-simplebar data-simplebar-auto-hide="false">
          <ul class="top-medical-program__controller-list" style="width:100%">
            <li class="top-medical-program__controller-item active">すべてのプログラム</li>
            <li class="top-medical-program__controller-item">健診プログラム</li>
            <li class="top-medical-program__controller-item">治療プログラム</li>
            <li class="top-medical-program__controller-item">美容医療プログラム</li>
          </ul>
        </div>

        <ul class="top-medical-program__list">
          <li class="top-medical-program__item">
            <a href="#">
              <div class="top-mediacal-program__item-img">
                <img src="./assets/img/top/plogram-thumb-01.webp" alt="" width="720" height="540">
              </div>
              <h3 class="top-medical-program__item-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
              <ul class="top-medical-program__item-category">
                <li>東京都</li>
                <li>慶応義塾大学病院</li>
                <li>北里柴三郎</li>
              </ul>
              <div class="top-medical-program__item-date"><time datetime="2025-12-01">2025.12.01</time></div>
            </a>
          </li>
          <li class="top-medical-program__item">
            <a href="#">
              <div class="top-mediacal-program__item-img">
                <img src="./assets/img/top/plogram-thumb-02.webp" alt="" width="720" height="540">
              </div>
              <h3 class="top-medical-program__item-title">PET-CT+ヘリカルCTで胃内視鏡のハイブリッド検査</h3>
              <ul class="top-medical-program__item-category">
                <li>東京都</li>
                <li>慶応義塾大学病院</li>
                <li>北里柴三郎</li>
              </ul>
              <div class="top-medical-program__item-date"><time datetime="2025-12-01">2025.12.01</time></div>
            </a>
          </li>
          <li class="top-medical-program__item">
            <a href="#">
              <div class="top-mediacal-program__item-img">
                <img src="./assets/img/top/plogram-thumb-03.webp" alt="" width="720" height="540">
              </div>
              <h3 class="top-medical-program__item-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
              <ul class="top-medical-program__item-category">
                <li>東京都</li>
                <li>慶応義塾大学病院</li>
                <li>北里柴三郎</li>
              </ul>
              <div class="top-medical-program__item-date"><time datetime="2025-12-01">2025.12.01</time></div>
            </a>
          </li>
          <li class="top-medical-program__item">
            <a href="#">
              <div class="top-mediacal-program__item-img">
                <img src="./assets/img/top/plogram-thumb-04.webp" alt="" width="720" height="540">
              </div>
              <h3 class="top-medical-program__item-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
              <ul class="top-medical-program__item-category">
                <li>東京都</li>
                <li>慶応義塾大学病院</li>
                <li>北里柴三郎</li>
              </ul>
              <div class="top-medical-program__item-date"><time datetime="2025-12-01">2025.12.01</time></div>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <!-- / .top-medical-program -->

    <section class="top-journal">
      <div class="top-journal__inner">
        <a href="#">
          <h2 class="top-journal__title chevron_forward chevron_forward-link">医療ジャーナル</h2>
        </a>
      </div>
      <div class="top-journal__inner">
        <div class="top-journal__slider">
          <ul class="swiper-wrapper">
            <li class="swiper-slide">
              <a href="#">
                <div class="top-journal__slider-img">
                  <img src="./assets/img/top/jurnal-thumb-01.webp" alt="" width="800" height="512">
                </div>
                <h3 class="top-journal__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                <ul class="top-journal__slider-category">
                  <li>NKT細胞標的治療</li>
                  <li>レーザーケア</li>
                </ul>
                <div class="top-journal__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
              </a>
            </li>
            <li class="swiper-slide">
              <a href="#">
                <div class="top-journal__slider-img">
                  <img src="./assets/img/top/jurnal-thumb-02.webp" alt="" width="800" height="512">
                </div>
                <h3 class="top-journal__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                <ul class="top-journal__slider-category">
                  <li>NKT細胞標的治療</li>
                  <li>レーザーケア</li>
                </ul>
                <div class="top-journal__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
              </a>
            </li>
            <li class="swiper-slide">
              <a href="#">
                <div class="top-journal__slider-img">
                  <img src="./assets/img/top/jurnal-thumb-03.webp" alt="" width="800" height="512">
                </div>
                <h3 class="top-journal__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                <ul class="top-journal__slider-category">
                  <li>NKT細胞標的治療</li>
                  <li>レーザーケア</li>
                </ul>
                <div class="top-journal__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
              </a>
            </li>
            <li class="swiper-slide">
              <a href="#">
                <div class="top-journal__slider-img">
                  <img src="./assets/img/top/jurnal-thumb-04.webp" alt="" width="800" height="512">
                </div>
                <h3 class="top-journal__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                <ul class="top-journal__slider-category">
                  <li>NKT細胞標的治療</li>
                  <li>レーザーケア</li>
                </ul>
                <div class="top-journal__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
              </a>
            </li>
            <li class="swiper-slide">
              <a href="#">
                <div class="top-journal__slider-img">
                  <img src="./assets/img/top/jurnal-thumb-01.webp" alt="" width="800" height="512">
                </div>
                <h3 class="top-journal__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                <ul class="top-journal__slider-category">
                  <li>NKT細胞標的治療</li>
                  <li>レーザーケア</li>
                </ul>
                <div class="top-journal__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
              </a>
            </li>
            <li class="swiper-slide">
              <a href="#">
                <div class="top-journal__slider-img">
                  <img src="./assets/img/top/jurnal-thumb-02.webp" alt="" width="800" height="512">
                </div>
                <h3 class="top-journal__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                <ul class="top-journal__slider-category">
                  <li>NKT細胞標的治療</li>
                  <li>レーザーケア</li>
                </ul>
                <div class="top-journal__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
              </a>
            </li>
            <li class="swiper-slide">
              <a href="#">
                <div class="top-journal__slider-img">
                  <img src="./assets/img/top/jurnal-thumb-03.webp" alt="" width="800" height="512">
                </div>
                <h3 class="top-journal__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                <ul class="top-journal__slider-category">
                  <li>NKT細胞標的治療</li>
                  <li>レーザーケア</li>
                </ul>
                <div class="top-journal__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
              </a>
            </li>
            <li class="swiper-slide">
              <a href="#">
                <div class="top-journal__slider-img">
                  <img src="./assets/img/top/jurnal-thumb-04.webp" alt="" width="800" height="512">
                </div>
                <h3 class="top-journal__slider-title">虎ノ門・麻布台プロジェクト2023年秋開業最新医療機器を導入した高精度の人間ドック</h3>
                <ul class="top-journal__slider-category">
                  <li>NKT細胞標的治療</li>
                  <li>レーザーケア</li>
                </ul>
                <div class="top-journal__slider-date"><time datetime="2025-12-01">2025.12.01</time></div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="top-journal__inner">
        <div class="top-journal__slider-pagination"></div>
      </div>
    </section>
    <!-- / .top-journal -->

    <section class="top-journal__doctor">
      <div class="top-journal__inner">
        <a href="#">
          <h2 class="top-journal__title chevron_forward chevron_forward-link">医療機関登録推薦ドクターの<br class="sp-xsl">ご紹介</h2>
        </a>
        <div class="top-journal__doctor-list-wrapper" data-simplebar data-simplebar-auto-hide="false">
          <ul class="top-journal__doctor-list">
            <li class="top-journal__doctor-list-item">
              <div class="top-journal__doctor-list-img"><img src="./assets/img/top/doctor-01.webp" alt="慶応義塾大学病院 北里柴三郎" width="400" height="400" loading="lazy"></div>
              <h3 class="top-journal__doctor-list-title">
                <span class="top-journal__doctor-list-hospital">慶応義塾大学病院</span>
                北里柴三郎
              </h3>
            </li>
            <li class="top-journal__doctor-list-item">
              <div class="top-journal__doctor-list-img"><img src="./assets/img/top/doctor-02.webp" alt="慶応義塾大学病院 北里柴三郎" width="400" height="400" loading="lazy"></div>
              <h3 class="top-journal__doctor-list-title">
                <span class="top-journal__doctor-list-hospital">慶応義塾大学病院</span>
                北里柴三郎
              </h3>
            </li>
            <li class="top-journal__doctor-list-item">
              <div class="top-journal__doctor-list-img"><img src="./assets/img/top/doctor-03.webp" alt="慶応義塾大学病院 北里柴三郎" width="400" height="400" loading="lazy"></div>
              <h3 class="top-journal__doctor-list-title">
                <span class="top-journal__doctor-list-hospital">慶応義塾大学病院</span>
                北里柴三郎
              </h3>
            </li>
            <li class="top-journal__doctor-list-item">
              <div class="top-journal__doctor-list-img"><img src="./assets/img/top/doctor-04.webp" alt="慶応義塾大学病院 北里柴三郎" width="400" height="400" loading="lazy"></div>
              <h3 class="top-journal__doctor-list-title">
                <span class="top-journal__doctor-list-hospital">慶応義塾大学病院</span>
                北里柴三郎
              </h3>
            </li>
            <li class="top-journal__doctor-list-item">
              <div class="top-journal__doctor-list-img"><img src="./assets/img/top/doctor-05.webp" alt="慶応義塾大学病院 北里柴三郎" width="400" height="400" loading="lazy"></div>
              <h3 class="top-journal__doctor-list-title">
                <span class="top-journal__doctor-list-hospital">慶応義塾大学病院</span>
                北里柴三郎
              </h3>
            </li>
            <li class="top-journal__doctor-list-item">
              <div class="top-journal__doctor-list-img"><img src="./assets/img/top/doctor-06.webp" alt="慶応義塾大学病院 北里柴三郎" width="400" height="400" loading="lazy"></div>
              <h3 class="top-journal__doctor-list-title">
                <span class="top-journal__doctor-list-hospital">慶応義塾大学病院</span>
                北里柴三郎
              </h3>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- / .top-journal__doctor -->

    <article class="top-banner">
      <div class="top-banner__inner">
        <div class="top-banner__wrapper">
          <div class="top-banner__item top-banner__item--faq chevron_forward">
            <a href="#">
              <p class="top-banner__lead">お困りですか？疑問をすばやく解決</p>
              <h2 class="top-banner__title">よくある質問</h2>
            </a>
          </div>
          <div class="top-banner__item top-banner__item--foreign-patients chevron_forward">
            <a href="#">
              <p class="top-banner__lead">日本の医療を、安心してあなたに</p>
              <h2 class="top-banner__title">外国人受療者様へ</h2>
            </a>
          </div>
          <div class="top-banner__item top-banner__item--flow chevron_forward">
            <a href="#">
              <p class="top-banner__lead">初めての方もご安心を</p>
              <h2 class="top-banner__title">受診希望の流れ</h2>
            </a>
          </div>
        </div>
      </div>
    </article>
    <!-- ./ top-banner -->

    <article class="top-banner__link">
      <div class="top-banner__inner">
        <a href="#" class="top-banner__link--for-medical">
          <h2 class="top-banner__link-title chevron_forward chevron_forward-link">医療機関の方へ</h2>
        </a>
      </div>
    </article>
    <!-- ./ top-banner -->

  </main>

  <?php include_once('parts/footer.php'); ?>
  <!-- /.footer -->


</body>

</html>