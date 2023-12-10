<?php
/*Template Name: Contact Finish Page*/
get_header();
?>
<main class="main">
    <section class="main__section contact contact--finish skew">
      <div class="contact__container skew__remove-skew">
        <h2 class="contact__heading">CONTACT</h2>
        <div class="contact__form-box">
          <h3 class="contact__form-heading">企業様のお問い合わせ</h3>
          <form class="contact__form" action="" name="contact-form"> 
            <?php echo do_shortcode('[mwform_formkey key="17"]'); ?>
          </form>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
