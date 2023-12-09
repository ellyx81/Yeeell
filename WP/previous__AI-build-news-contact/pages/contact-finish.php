<?php
/*Template Name: Contact Finish Page*/
get_header();
?>
<section class="banner">
    <img class="banner__image" src="<?php echo get_template_directory_uri(); ?>/img/contact-page/contact-banner.png" alt />
    <h1 class="banner__text wow animate__animated animate__fadeInDown">お問い合わせ</h1>
</section>
<main>
    <section class="contact">
        <?php echo do_shortcode('[mwform_formkey key="17"]'); ?>
        <!-- <div class="contact__form">
            <p class="contact__top-instruction contact__top-instruction--bold">弊社へのお問い合わせは以下のフォームをご利用ください。</p>
            <p>
                この度は、お問い合わせいただきましてありがとうございます。
                <br />お問い合わせを受け付けました。
                <br />改めて、担当よりご連絡をさせていただきます。
                <br />今しばらくお待ちくださいますようお願い申し上げます。
            </p>
            <a class="contact__btn" href="#">トップへ戻る</a>
        </div> -->
    </section>
</main><?php get_footer(); ?>
