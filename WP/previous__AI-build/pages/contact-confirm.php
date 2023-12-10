<?php
/*Template Name: Contact Confimation Page*/
get_header();
?>
<section class="banner">
    <img class="banner__image" src="<?php echo get_template_directory_uri(); ?>/img/contact-page/contact-banner.png" alt />
    <h1 class="banner__text wow animate__animated animate__fadeInDown">お問い合わせ</h1>
</section>
<main>
    <section class="contact">
        <p class="contact__top-instruction contact__top-instruction--bold">弊社へのお問い合わせは以下のフォームをご利用ください。</p>
        <?php echo do_shortcode('[mwform_formkey key="17"]'); ?>
        <!-- <form class="contact__form" action name="contact-form">
            <p class="contact__top-instruction contact__top-instruction--bold">弊社へのお問い合わせは以下のフォームをご利用ください。</p>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">お名前</label>
                    <div class="contact__input-label-required"></div>
                </div>
                <div class="contact__input-box-wrap">
                    <span>姓</span>
                    <span>名</span>
                </div>
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">お名前（フリガナ）</label>
                    <div class="contact__input-label-required"></div>
                </div>
                <div class="contact__input-box-wrap">
                    <span>セイ</span>
                    <span>メイ</span>
                </div>
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">所在地</label>
                    <div class="contact__input-label-required"></div>
                </div>
                <span>東京都</span>
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">会社名・団体名</label>
                    <div class="contact__input-label-required contact__input-label-required--not-required"></div>
                </div>
                <span>株式会社〇〇</span>
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">部署</label>
                    <div class="contact__input-label-required contact__input-label-required--not-required"></div>
                </div>
                <span>〇〇部</span>
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">役職</label>
                    <div class="contact__input-label-required contact__input-label-required--not-required"></div>
                </div>
                <span>〇長</span>
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">メールアドレス</label>
                    <div class="contact__input-label-required"></div>
                </div>
                <span>example@xxxxxx.cp.jp</span>
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">電話番号</label>
                    <div class="contact__input-label-required"></div>
                </div>
                <span>012-3456-7890</span>
            </div>
            <div class="contact__input contact__input--inquiry">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">お問い合わせ内容</label>
                    <div class="contact__input-label-required"></div>
                </div>
                <p>これはダミー文です。お問い合わせ内容が入ります。これはダミー文です。お問い合わせ内容が入ります。これはダミー文です。お問い合わせ内容が入ります。これはダミー文です。お問い合わせ内容が入ります。これはダミー文です。お問い合わせ内容が入ります。</p>
            </div>
            <div class="contact__btn-wrapper">
                <button class="contact__btn contact__btn--white" type="button" name="back">戻る</button>
                <button class="contact__btn" type="submit" name="submit">送信する</button>
            </div>
        </form> -->
    </section>
</main><?php get_footer(); ?>
