<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php bloginfo('title'); ?></title>

    <?php wp_head(); ?>
    <?php wp_footer(); ?>

    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/release/image/funuyakusatsu-fav.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/release/css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cross-platform-yu-gothic@0.1.1/cross-platform-yu-gothic.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <script type="text/javascript" src="//webfonts.sakura.ne.jp/js/sakurav3.js"></script>
</head>

<body <?php body_class(); ?>>

    <main>
        <div class="page__header">
            <?php
            $post_7 = get_post(7);
            $title = $post_7->the_post_thumbnail;
            $imgurl = null;
            if (has_post_thumbnail($title)) {
                $imgurl = wp_get_attachment_url(get_post_thumbnail_id($title));
            }
            ?>
            <div class="page__top isHome" style="background: url('<?php echo $imgurl; ?>') !important; background-size: cover !important;background-position: center center;background-repeat: no-repeat;">
                <div class="page__top--logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.png" alt="">
                </div>
                <div class="l-wrap">
                    <div class="left_scrl">
                        <p class="scroll">SCROLL</p>
                        <div class="line"></div>
                    </div>
                    <div class="ttl_cont">
                        <div class="ttl_cont__title ten-mincho">
                            暮らしが住まいを創る。
                        </div>
                        <div class="ttl_cont__sub">
                            Life creates a house
                        </div>
                    </div>
                </div>
            </div>
            <header class="nav__header" id="nav-header">
            </header>
        </div>
        <div class="page__content">