<?php
get_header();
?>
<main>
    <section class="news-content">
        <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <article class="news-content__article">
                <div class = "news-content__category-wrapper">
                    <?php
                        $cats = get_the_terms(get_the_ID(),'news-cat');
                        if(!empty($cats)):
                        foreach($cats as $cat):
                        ?>
                        <span class="news-content__category"><?php echo $cat->name ?></span>
                        <?php endforeach ?>
                    <?php endif ?>
                        </div>
                <h2 class="news-content__title">
                    <?php the_title();?>
                </h2>
                <span class="news-content__date">
                    <?php echo date_i18n(get_the_date('Y年m月d日')); ?>
                </span>
                <div class="news-content__image-wrapper">
                    <img class="news-content__image" src="<?php echo the_field('cover_image'); ?>"/>
                </div>
                <div class="news-content__paragraph">
                    <?php the_content();?>
                </div>
            </article>
        <?php endwhile; endif;?>
    </section>
</main><?php get_footer(); ?>