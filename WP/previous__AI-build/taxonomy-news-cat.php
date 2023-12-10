<?php
/*Template Name: News Page*/
get_header();
// $cat=get_categories(array('taxonomy'=>'news-cat'));
// echo"<pre>";
?>
<section class="banner">
    <img class="banner__image" src="<?php echo get_template_directory_uri(); ?>/img/news-page/news-banner.png" alt />
    <h1 class="banner__text wow animate__animated animate__fadeInDown">お知らせ</h1>
</section>
<main>
    <section class="news">
        <!-- category container -->
        <div class="news__categories">
            <a href="<?php echo get_home_url()?>/news" class="news__category" >新着</a>
            <?php
            $curTerm = $wp_query->queried_object;
            $cat_all = get_terms("news-cat", "fields=all&get=all&order=desc");
            foreach ($cat_all as $value):
                ?>
                <a href="<?php echo get_term_link($value->term_id)?>" class="news__category <?php echo (($value->name == $curTerm->name)) ? "is-active" : ""; ?>">
                    <?php echo $value->name ?>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- news container -->
        <div class="news__container js-news-container">  
            <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>

                <a class="news__item js-news-item" href="<?php the_permalink(); ?>">
                    <?php
                    $cats = get_the_terms(get_the_ID(), 'news-cat');
                    if (!empty($cats)) :
                        foreach ($cats as $cat) :
                            ?>
                            <span class="news__item-category">
                                <?php echo $cat->name ?>
                            </span>
                        <?php endforeach ?>
                    <?php endif ?>

                    <div class="news__item-image">
                        <img src="<?php the_field('cover_image'); ?>" />
                    </div>

                    <span class="news__item-date">
                        <?php echo date_i18n(get_the_date('Y年m月d日')); ?>
                    </span>

                    <div class="news__item-headline">
                        <?php the_excerpt(); ?>
                    </div>
                </a>
                
            <?php endwhile; ?>
            <?php
            else :
            echo "<p>" . __( '投稿はありません。' ) . "</p>";
            ?>
            <?php endif; ?>
        </div>
        
        <!-- pagination -->
        <?php wp_pagenavi()?>

        <div class="news__inquiry">
            <h3 class="news__heading wow animate__animated animate__fadeInDown">お問い合わせ</h3>
            <h4 class="news__inquiry-subheading wow animate__animated animate__fadeInDown animate__slow">無料相談お受けします。お気軽にお問い合わせ下さい！</h4>
            <div class="news__inquiry-box">
                <div class="news__inquiry-phone">
                    <img class="news__inquiry-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone-icon.svg" alt />
                    <span class="news__inquiry-text">電話でのお問い合わせ</span>
                    <a class="news__inquiry-phone-number" href="tel:03-3896-1711">
                        <span>TEL.</span>03-3896-1711
                        <span>(代)</span>
                    </a>
                    <div class="news__inquiry-phone-hours">受付時間／9:00〜18:00（月〜金）</div>
                </div>
                <div class="news__inquiry-email">
                    <img class="news__inquiry-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/list-icon.svg" alt />
                    <span class="news__inquiry-text">電話でのお問い合わせ</span>
                    <button class="news__inquiry-email-btn">
                        <span>お問い合わせフォーム</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="news__sites">
            <h3 class="news__heading wow animate__animated animate__fadeInDown">関連サイト</h3>
            <div class="news__sites-container">
                <a href="#">
                    <img class="news__sites-item" src="<?php echo get_template_directory_uri(); ?>/img/logos/NYG-logo.png" alt />
                </a>
                <a href="#">
                    <img class="news__sites-item" src="<?php echo get_template_directory_uri(); ?>/img/logos/FC-logo.png" alt />
                </a>
                <a href="#">
                    <img class="news__sites-item" src="<?php echo get_template_directory_uri(); ?>/img/logos/RWTA-logo.png" alt />
                </a>
                <a href="#">
                    <img class="news__sites-item" src="<?php echo get_template_directory_uri(); ?>/img/logos/NTT-Smile-logo.png" alt />
                </a>
                <a href="#">
                    <img class="news__sites-item" src="<?php echo get_template_directory_uri(); ?>/img/logos/Fun-to-share-logo.png" alt />
                </a>
            </div>
        </div>
    </section>
</main><?php get_footer(); ?>
