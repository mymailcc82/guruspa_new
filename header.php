<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M5XPTVP5');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=1.4.9">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Barlow+Semi+Condensed:wght@400;600;700&family=Urbanist:wght@600&family=Noto+Serif+JP:wght@200..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <?php if (!is_404()): ?>
        <?php wp_head(); ?>
    <?php endif; ?>
    <style>
        #cookie-notice * {
            font-size: 14px;
        }

        #cn-notice-text {
            color: #fff;
        }
    </style>
</head>

<?php $header_class = 'header header-page'; ?>
<?php $body_class = "body body-header-active"; ?>
<?php if (is_home() || is_front_page()): ?>
    <?php $header_class = 'header'; ?>
    <?php $body_class = 'body'; ?>
<?php endif; ?>

<body <?php body_class($body_class); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5XPTVP5"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="<?php echo $header_class; ?>">
        <div class="header-wrap">
            <div class="header-wrap-logo">
                <h1>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/logo.svg" alt="GURUSPA">
                    </a>
                </h1>
            </div>
            <div class="header-wrap-list">
                <ul class="header-wrap-list-ul">
                    <li class="header-wrap-list-ul-item"><a href="<?php echo home_url(); ?>/guide/">ご利用案内</a></li>
                    <li class="header-wrap-list-ul-item"><a href="<?php echo home_url(); ?>/enjoy/">館内の楽しみ方</a></li>
                    <li class="header-wrap-list-ul-item"><a href="<?php echo home_url(); ?>/first-time/">初めてのお客様へ</a></li>
                    <li class="header-wrap-list-ul-item"><a href="<?php echo home_url(); ?>/event/">イベント情報</a></li>
                    <li class="header-wrap-list-ul-item"><a href="<?php echo home_url(); ?>/archive/">お知らせ</a></li>
                    <li class="header-wrap-list-ul-item"><a href="<?php echo home_url(); ?>/faq/">FAQ</a></li>
                </ul>
                <div class="header-wrap-list-btn">
                    <a class="header-wrap-list-ul-icon" href="https://x.com/GURUSPA_/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-x.png" alt=""></a>
                    <a class="header-wrap-list-ul-icon" href="https://www.instagram.com/guruspa_/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-insta.png" alt=""></a>
                    <?php if (is_page("guide")): ?>
                        <a href="#sec03" class="header-wrap-list-ul-btn">営業時間<i></i></a>
                    <?php else: ?>
                        <a href="<?php echo home_url(); ?>/guide/#sec03" class="header-wrap-list-ul-btn">営業時間<i></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="header-wrap-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/header-under-bg_v2.png" alt="">
        </div>
    </header>
    <div class="header-fixed">
        <div class="header-fixed-menu">
            <a href="javascript:void(0);" class="header-btn">
                <span></span>
                <p>CLOSE</p>
            </a>
        </div>
    </div>

    <div class="header-drawer" data-lenis-prevent>
        <div class="header-drawer-bg"></div>
        <div class="header-drawer-container">
            <div class="header-drawer-wrap">
                <div class="com-title-header">
                    <h2 class="">
                        <span class="title title-item-sun">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.webp" alt="">
                        </span>
                        <p>メニュー</p>
                        <span class="title">M</span><span class="title">E</span><span class="title">N</span><span class="title">U</span>
                        <span class="title-item-sprout">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                        </span>
                    </h2>
                </div>

                <div class="header-drawer-wrap-menu">
                    <ul class="header-drawer-wrap-menu-top header-drawer-wrap-menu-child-center">
                        <li>TOP</li>
                        <li><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/header-logo_v3.png" alt=""></a></li>
                    </ul>
                    <ul class="header-drawer-wrap-menu-child header-drawer-wrap-menu-child-center menu-child-green">
                        <li>GUIDE</li>
                        <li><a class="jp-title" href="<?php echo home_url(); ?>/guide/">ご利用案内</a></li>
                        <?php if (is_page("guide")): ?>
                            <li>
                                <a href="#sec02">料金案内</a>
                                <a href="#sec03">営業時間</a>
                                <a href="#sec04">ご利用案内</a>
                                <a href="#sec05">アクセス</a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?php echo home_url(); ?>/guide/#sec02">料金案内</a>
                                <a href="<?php echo home_url(); ?>/guide/#sec03">営業時間</a>
                                <a href="<?php echo home_url(); ?>/guide/#sec04">ご利用案内</a>
                                <a href="<?php echo home_url(); ?>/guide/#sec05">アクセス</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <ul class="header-drawer-wrap-menu-child menu-child-red">
                        <li>ENJOY</li>
                        <li><a class="jp-title" href="<?php echo home_url(); ?>/enjoy/">館内の楽しみ方</a></li>
                        <li>
                            <a href="<?php echo home_url(); ?>/enjoy/">館内マップ</a>
                            <a href="<?php echo home_url(); ?>/enjoy/spa/">お風呂</a>
                            <a href="<?php echo home_url(); ?>/enjoy/sauna/">サウナ&水風呂</a>
                            <a href="<?php echo home_url(); ?>/enjoy/sweating/">発汗エリア</a>
                            <a href="<?php echo home_url(); ?>/enjoy/food/">ご飲食</a>
                            <a href="<?php echo home_url(); ?>/enjoy/relaxation/">リラクゼーション</a>
                            <a href="<?php echo home_url(); ?>/enjoy/goods/">アメニティ・グッズ</a>
                        </li>
                    </ul>
                    <ul class="header-drawer-wrap-menu-child header-drawer-wrap-menu-child-center menu-child-blue">
                        <li>FIRST-TIME</li>
                        <li><a class="jp-title" href="<?php echo home_url(); ?>/first-time/">初めてのお客様へ</a></li>
                        <?php if (is_page("first-time")): ?>
                            <li>
                                <a href="#sec02">グルスパの魅力</a>
                                <a href="#sec03">入館の流れ</a>
                                <a href="#sec04">施設案内</a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?php echo home_url(); ?>/first-time/#sec02">グルスパの魅力</a>
                                <a href="<?php echo home_url(); ?>/first-time/#sec03">入館の流れ</a>
                                <a href="<?php echo home_url(); ?>/first-time/#sec04">施設案内</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <ul class="header-drawer-wrap-menu-child header-drawer-wrap-menu-child-center menu-child-yellow">
                        <li>EVENT</li>
                        <li><a class="jp-title" href="<?php echo home_url(); ?>/event/">イベント情報</a></li>
                        <li>
                            <a href="<?php echo home_url(); ?>/today/">本日のイベント</a>
                            <a href="<?php echo home_url(); ?>/schedule/">イベントスケジュール</a>
                        </li>
                    </ul>
                    <ul class="header-drawer-wrap-menu-child header-drawer-wrap-menu-child-center menu-child-bed">
                        <li>CONTACT</li>
                        <li><a class="jp-title" href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
                        <li>
                            <a href="<?php echo home_url(); ?>/contact/">個人のお客様</a>
                            <a href="<?php echo home_url(); ?>/contact-corporate/">取材依頼・法人の方</a>
                        </li>
                    </ul>
                    <ul class="header-drawer-wrap-menu-child-under">
                        <li></li>
                        <li><a href="<?php echo home_url(); ?>/archive/">お知らせ<i></i></a></li>
                        <li><a href="<?php echo home_url(); ?>/faq/">FAQ<i></i></a></li>
                        <li><a href="<?php echo home_url(); ?>/rules/">注意事項<i></i></a></li>
                        <li><a href="<?php echo home_url(); ?>/recruit_top/">採用情報<i></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>