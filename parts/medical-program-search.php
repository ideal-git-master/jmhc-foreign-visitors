<section class="medical-program-search" id="medical-program-search">
  <div class="medical-program-search__inner">
    <div class="medical-program-search__wrapper">

      <h2 class="medical-program-search__title">医療プログラム検索</h2>

      <div class="medical-program-search__content">
        <form class="medical-program-search__form" action="#" method="get">

          <ul class="medical-program-search__form-item--radio-group">
            <li class="medical-program-search__form-item--radio"><label>医療機関名で探す
                <input type="radio" name="item1" value="medical-institution" class="medical-program-search__input--radio"></label></li>
            <li class="medical-program-search__form-item--radio"><label>医師を探す
                <input type="radio" name="item1" value="doctor" class="medical-program-search__input--radio" checked></label></li>
            <li class="medical-program-search__form-item--radio"><label>診療検診で探す
                <input type="radio" name="item1" value="medical-examination" class="medical-program-search__input--radio"></label></li>
          </ul>
          <!-- input radio -->

          <dl class="medical-program-search__form-item--text">
            <dt>医師名</dt>
            <dd>
              <input class="medical-program-search__input--text" type="text" name="doctor-name" placeholder="医師名を入力してください">
            </dd>
          </dl>
          <!-- input text -->

          <dl class="medical-program-search__form-item--checkbox-group">
            <dt>専門領域</dt>
            <dd>
              <label>
                <input class="medical-program-search__input--checkbox" type="checkbox" name="expertise" value="整形外科" checked>整形外科
              </label>
              <label>
                <input class="medical-program-search__input--checkbox" type="checkbox" name="expertise" value="形成外科">形成外科
              </label>
              <label>
                <input class="medical-program-search__input--checkbox" type="checkbox" name="expertise" value="その他診療科">その他診療科
              </label>
              <label>
                <input class="medical-program-search__input--checkbox" type="checkbox" name="expertise" value="検診">検診
              </label>
              <label>
                <input class="medical-program-search__input--checkbox" type="checkbox" name="expertise" value="専門治療">専門治療
              </label>
              <label>
                <input class="medical-program-search__input--checkbox" type="checkbox" name="expertise" value="内科">内科
              </label>
              <label>
                <input class="medical-program-search__input--checkbox" type="checkbox" name="expertise" value="歯科">歯科
              </label>
              <label>
                <input class="medical-program-search__input--checkbox" type="checkbox" name="expertise" value="外科">外科
              </label>
              <label>
                <input class="medical-program-search__input--checkbox" type="checkbox" name="expertise" value="小児科">小児科
              </label>
              <label>
                <input class="medical-program-search__input--checkbox" type="checkbox" name="expertise" value="婦人科">婦人科
              </label>
            </dd>
          </dl>
          <!-- input checkbox -->

          <dl class="medical-program-search__submit">
            <button type="submit" class="medical-program-search__button">上記の条件で検索する</button>
          </dl>
          <!-- submit button -->

        </form>
        <!-- / .medical-program-search__form -->

        <?php include_once('parts/ai-link-banner.php'); ?>
        <!-- / .ai-link-banner -->
      </div>
    </div>
  </div>
</section>