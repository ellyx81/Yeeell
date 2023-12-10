    <?php if(is_front_page()):?>
        <?php include 'includes/footer-top.php';?>
        <div class="modal js-modal">
            <div class="modal__box">
                <div class="modal__video-wrapper">
                    <iframe class="modal__iframe js-iframe" src title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <?php else: ?>
            <?php include 'includes/footer-lower.php';?>
    <?php endif ?>
    <script src="https://cdn.jsdelivr.net/npm/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist./js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script>new WOW().init();</script>
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/js/common/index.js"></script>
    <?php if(is_front_page()):?>
        <script src="<?php echo get_bloginfo( 'template_directory' );?>/js/top/index.js"></script>
        <?php else: ?>
            <script src="<?php echo get_bloginfo( 'template_directory' );?>/js/lower/index.js"></script>
    <?php endif ?>
    <?php wp_footer(); ?>
</body>
</html>