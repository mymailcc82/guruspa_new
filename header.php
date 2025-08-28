<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=1.2.1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@4.1.1/dist/css/yakuhanjp.css">
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&family=Barlow+Semi+Condensed:wght@400;600;700&family=Urbanist:wght@600&family=Noto+Serif+JP:wght@200..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>
    <?php if (!is_404()): ?>
        <?php wp_head(); ?>
    <?php endif; ?>
</head>

<body <?php body_class('body'); ?>>
    <header class="header">
        <div class="header-wrap">
            <div class="header-wrap-logo">
                <h1>
                    <a href="<?php echo home_url(); ?>">
                        <div class="header-wrap-logo-img">
                            <div class="header-wrap-logo-img-main">
                                <picture>
                                    <source media="(min-width:601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/com/logo.png">
                                    <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/com/logo.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/logo.png" alt="">
                                </picture>
                            </div>
                        </div>
                    </a>
                </h1>
            </div>
            <div class="header-wrap-list">
                <ul class="header-wrap-list-ul">
                    <li class="header-wrap-list-ul-item"><a href="javascript:void(0)" class="no-link">リンクとは</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="header-fixed">
        <div class="header-fixed-menu">
            <a href="javascript:void(0);" class="header-btn">
                <span></span>
            </a>
        </div>
    </div>

    <div class="header-drawer" data-lenis-prevent>
        <div class="header-drawer-container">
            <div class="content-width">
                <div class="header-drawer-wrap">
                    <div class="footer-wrap-right-nav">
                        <div class="footer-wrap-right-nav-col">
                            <h3><a class="no-link" href="<?php echo home_url(); ?>/service/">私たちについて</a></h3>
                            <div class="ul">
                                <ul>
                                    <li><a class="no-link" href="<?php echo home_url(); ?>/service/#sec01">私たちにについて</a></li>
                                    <li><a class="no-link" href="<?php echo home_url(); ?>/service/#sec02">選ばれる理由</a></li>
                                    <li><a class="no-link" href="<?php echo home_url(); ?>/service/#sec03">代表メッセージ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-wrap-right-nav-col">
                            <h3><a class="no-link" href="<?php echo home_url(); ?>/">リンク</a></h3>
                            <h3><a class="no-link" href="<?php echo home_url(); ?>/">リンク</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>