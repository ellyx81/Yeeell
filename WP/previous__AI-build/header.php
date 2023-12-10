<!doctype html>
<html class="js-html" lang="ja">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=11" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <title></title>
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="//db.onlinewebfonts.com/c/1fed4454352f201d52b65ca5480afb2d?family=Playlist" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /><?php wp_head(); ?>
</head>
<body>
    <?php if(is_front_page()):?>
        <?php include 'includes/header-top.php';?>
        <?php else: ?>
            <?php include 'includes/header-lower.php';?>
    <?php endif?>