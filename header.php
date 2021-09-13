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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" media="print" onload="this.media='all'">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <script type="text/javascript" src="//webfonts.sakura.ne.jp/js/sakurav3.js"></script>

    <script>
        (function(d) {
            var config = {
                    kitId: 'izp5nsb',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>

</head>

<body <?php body_class(); ?>>

    <main>
        <div class="page__header">
            <div class="page__top isHome">
                <ul class="slide">
                    <li class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/1.png" />
                    </li>
                    <li class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/2.jpeg" />
                    </li>
                    <li class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/3.JPG" />
                    </li>
                    <li class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/4.JPG" />
                    </li>
                </ul>

                <ul class="slide-sp">
                    <li class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/1_sp.jpeg" />
                    </li>
                    <li class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/2_sp.jpeg" />
                    </li>
                    <li class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/3_sp.jpeg" />
                    </li>
                    <li class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/4_sp.jpg" />
                    </li>
                </ul>

                <div class="page__top--logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.png" alt="">
                </div>
                <div class="l-wrap">
                    <div class="left_scrl">
                        <p class="scroll">SCROLL</p>
                        <div class="tm-scroll">
                            <span></span>
                        </div>
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