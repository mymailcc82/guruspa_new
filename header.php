<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=1.2.6">
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Barlow+Semi+Condensed:wght@400;600;700&family=Urbanist:wght@600&family=Noto+Serif+JP:wght@200..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>
    <?php if (!is_404()): ?>
        <?php wp_head(); ?>
    <?php endif; ?>
</head>

<?php $header_class = 'header header-page'; ?>
<?php $body_class = "body body-header-active"; ?>
<?php if (is_home() || is_front_page()): ?>
    <?php $header_class = 'header'; ?>
    <?php $body_class = 'body'; ?>
<?php endif; ?>

<body <?php body_class($body_class); ?>>


    <header class="<?php echo $header_class; ?>">
        <div class="header-wrap">
            <div class="header-wrap-logo">
                <h1>
                    <a href="<?php echo home_url(); ?>">
                        <div class="header-wrap-logo-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/header-logo_V2.png" alt="">
                        </div>
                    </a>
                </h1>
            </div>
            <div class="header-wrap-list">
                <ul class="header-wrap-list-ul">
                    <li class="header-wrap-list-ul-item"><a href="<?php echo home_url(); ?>/guide/" class="no-link">ご利用案内</a></li>
                    <li class="header-wrap-list-ul-item"><a href="<?php echo home_url(); ?>/enjoy/" class="no-link">館内の楽しみ方</a></li>
                    <li class="header-wrap-list-ul-item"><a href="<?php echo home_url(); ?>/first-time/" class="no-link">初めてのお客様へ</a></li>
                    <li class="header-wrap-list-ul-item"><a href="<?php echo home_url(); ?>/event/" class="no-link">イベント情報</a></li>
                    <li class="header-wrap-list-ul-item"><a href="<?php echo home_url(); ?>/archive/" class="no-link">お知らせ</a></li>
                    <li class="header-wrap-list-ul-item"><a href="<?php echo home_url(); ?>/faq/" class="no-link">FAQ</a></li>
                    <li class="header-wrap-list-ul-icon"><a href="https://x.com/GURUSPA_/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-x.png" alt=""></a></li>
                    <li class="header-wrap-list-ul-icon"><a href="https://www.instagram.com/guruspa_/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-insta.png" alt=""></a></li>
                    <?php if (is_page("guide")): ?>
                        <li class="header-wrap-list-ul-btn"><a href="#sec03" class="no-link">営業時間<i></i></a></li>
                    <?php else: ?>
                        <li class="header-wrap-list-ul-btn"><a href="<?php echo home_url(); ?>/guide/#sec03" class="no-link">営業時間<i></i></a></li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
        <img class="header-wrap-bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/header-under-bg_v2.png" alt="">
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
        <div class="header-drawer-container">
            <div class="header-drawer-wrap">
                <div class="com-title-header">
                    <h2 class="">
                        <span class="title title-item-sun">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                        </span>
                        <p>メニュー</p>
                        <span class="title">M</span>
                        <span class="title">E</span>
                        <span class="title">N</span>
                        <span class="title">U</span>
                        <span class="title-item-sprout">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                        </span>
                    </h2>
                </div>

                <div class="header-drawer-wrap-menu">
                    <dl class="header-drawer-wrap-menu-top">
                        <dt>TOP</dt>
                        <dd><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/header-logo.png" alt=""></a></dd>
                    </dl>
                    <dl class="header-drawer-wrap-menu-child menu-child-green">
                        <dt><span class="en-title">GUIDE</span><span class="jp-title">ご利用案内</span></dt>
                        <?php if (is_page("guide")): ?>
                            <dd>
                                <a href="#sec02">料金案内</a>
                                <a href="#sec03">営業時間</a>
                                <a href="#sec04">ご利用案内</a>
                                <a href="#sec05">アクセス</a>
                            </dd>
                        <?php else: ?>
                            <dd>
                                <a href="<?php echo home_url(); ?>/guide/#sec02">料金案内</a>
                                <a href="<?php echo home_url(); ?>/guide/#sec03">営業時間</a>
                                <a href="<?php echo home_url(); ?>/guide/#sec04">ご利用案内</a>
                                <a href="<?php echo home_url(); ?>/guide/#sec05">アクセス</a>
                            </dd>
                        <?php endif; ?>
                    </dl>
                    <dl class="header-drawer-wrap-menu-child menu-child-blue">
                        <dt><span class="en-title">ENJOY</span><span class="jp-title">館内の楽しみ方</span></dt>
                        <dd>
                            <a href="<?php echo home_url(); ?>/enjoy/">館内マップ</a>
                            <a href="<?php echo home_url(); ?>/enjoy/spa/">お風呂</a>
                            <a href="<?php echo home_url(); ?>/enjoy/sauna/">サウナ&水風呂</a>
                            <a href="<?php echo home_url(); ?>/enjoy/sweating/">発汗エリア</a>
                            <a href="<?php echo home_url(); ?>/enjoy/food/">ご飲食</a>
                            <a href="<?php echo home_url(); ?>/enjoy/relaxation/">リラクゼーション</a>
                            <a href="<?php echo home_url(); ?>/enjoy/goods/">アメニティ・グッズ</a>
                        </dd>
                    </dl>
                    <dl class="header-drawer-wrap-menu-child menu-child-red">
                        <dt><span class="en-title">FIRST-TIME</span><span class="jp-title">初めてのお客様へ</span></dt>
                        <?php if (is_page("first-time")): ?>
                            <dd>
                                <a href="#sec02">グルスパの魅力</a>
                                <a href="#sec03">入館の流れ</a>
                                <a href="#sec04">施設案内</a>
                            </dd>
                        <?php else: ?>
                            <dd>
                                <a href="<?php echo home_url(); ?>/first-time/#sec02">グルスパの魅力</a>
                                <a href="<?php echo home_url(); ?>/first-time/#sec03">入館の流れ</a>
                                <a href="<?php echo home_url(); ?>/first-time/#sec04">施設案内</a>
                            </dd>
                        <?php endif; ?>
                    </dl>
                    <dl class="header-drawer-wrap-menu-child menu-child-yellow">
                        <dt><span class="en-title">EVENT</span><span class="jp-title">イベント情報</span></dt>
                        <dd>
                            <a href="<?php echo home_url(); ?>/today/">本日のイベント</a>
                            <a href="<?php echo home_url(); ?>/schedule/">イベントスケジュール</a>
                        </dd>
                    </dl>
                    <dl class="header-drawer-wrap-menu-child menu-child-bed">
                        <dt><span class="en-title">CONTACT</span><span class="jp-title">お問い合わせ</span></dt>
                        <dd>
                            <a href="<?php echo home_url(); ?>/contact/">個人のお客様</a>
                            <a href="<?php echo home_url(); ?>/contact-corporate/">取材依頼・法人の方</a>
                        </dd>
                    </dl>
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