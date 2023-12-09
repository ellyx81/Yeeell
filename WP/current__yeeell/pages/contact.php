<?php
/*Template Name: Contact Page*/
get_header();
?>
<main class="main">
    <section class="main__section contact skew">
      <div class="contact__container skew__remove-skew">
        <h2 class="contact__heading">CONTACT</h2>
        <div class="contact__form-box">
          <h3 class="contact__form-heading">企業様のお問い合わせ</h3>
          <form class="contact__form" action="" name="contact-form"> 
            <?php echo do_shortcode('[mwform_formkey key="17"]'); ?>
            <!-- <div class="contact__input">
              <label class="contact__label">ご用件</label>
              <div class="contact__input-wrap">
                <label class="contact__checklist-wrap"> 
                  <input type="checkbox" name="advertising" value="advertising"><span>クリエイターへの広告出稿について</span>
                </label>
                <label class="contact__checklist-wrap">
                  <input type="checkbox" name="sns" value="sns"><span>SNSプロモーション全般について</span>
                </label>
                <label class="contact__checklist-wrap"> 
                  <input type="checkbox" name="others" value="others"><span>その他</span>
                </label>
              </div>
            </div>
            <div class="contact__input contact__input--not-required">
              <label class="contact__label">会社名</label>
              <div class="contact__input-wrap">
                <input type="text" name="company">
              </div>
            </div>
            <div class="contact__input"> 
              <label class="contact__label">氏名</label>
              <div class="contact__input-wrap">
                <input type="text" name="name">
              </div>
            </div>
            <div class="contact__input"> 
              <label class="contact__label">氏名(ふりがな)</label>
              <div class="contact__input-wrap">
                <input type="text" name="name-f">
              </div>
            </div>
            <div class="contact__input contact__input--not-required">
              <label class="contact__label">電話番号（半角）</label>
              <div class="contact__input-wrap contact__input-wrap--tel">
                <input type="tel" name="tel-1">
                <input type="tel" name="tel-2">
                <input type="tel" name="tel-3">
              </div>
            </div>
            <div class="contact__input"> 
              <label class="contact__label">メールアドレス</label>
              <div class="contact__input-wrap">
                <input type="email" name="email">
              </div>
            </div>
            <div class="contact__input"> 
              <label class="contact__label">確認用メールアドレス</label>
              <div class="contact__input-wrap">
                <input type="email" name="email-confirm">
              </div>
            </div>
            <div class="contact__input">
              <label class="contact__label">お問い合わせ内容</label>
              <div class="contact__input-wrap contact__input-wrap--textarea">
                <textarea name="inquiry" cols="50" rows="8" placeholder="商品やクリエイター名など、お問い合わせについてできるだけ詳しくご記入ください。"></textarea>
              </div>
            </div>
            <div class="contact__input">
              <label class="contact__checklist-wrap"> 
                <input type="checkbox" name="agree" value="agree"><span class="contact__label">個人情報の取り扱いについて同意する</span>
              </label>
            </div>
            <div class="contact__btn-container">
              <button type="button" name="proceed">確認</button>
            </div> -->
          </form>
        </div>
      </div>
    </section>
  </main>
<!-- <main>
    <section class="contact">
        <p class="contact__top-instruction">弊社へのお問い合わせは以下のフォームをご利用ください。</p>
    </section>
</main> -->
<?php get_footer(); ?>
