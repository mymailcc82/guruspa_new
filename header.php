<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=1.2.3">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@4.1.1/dist/css/yakuhanjp.css">
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&family=Barlow+Semi+Condensed:wght@400;600;700&family=Urbanist:wght@600&family=Noto+Serif+JP:wght@200..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/header-logo.png" alt="">
                        </div>
                    </a>
                </h1>
            </div>
            <div class="header-wrap-list">
                <ul class="header-wrap-list-ul">
                    <li class="header-wrap-list-ul-item"><a href="javascript:void(0)" class="no-link">ご利用案内</a></li>
                    <li class="header-wrap-list-ul-item"><a href="javascript:void(0)" class="no-link">館内の楽しみ方</a></li>
                    <li class="header-wrap-list-ul-item"><a href="javascript:void(0)" class="no-link">初めてのお客様へ</a></li>
                    <li class="header-wrap-list-ul-item"><a href="javascript:void(0)" class="no-link">イベント情報</a></li>
                    <li class="header-wrap-list-ul-item"><a href="javascript:void(0)" class="no-link">お知らせ</a></li>
                    <li class="header-wrap-list-ul-item"><a href="javascript:void(0)" class="no-link">FAQ</a></li>
                    <li class="header-wrap-list-ul-icon"><a href="javascript:void(0)" class="no-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-insta.png" alt=""></a></li>
                    <li class="header-wrap-list-ul-btn"><a href="javascript:void(0)" class="no-link">営業時間<i></i></a></li>
                </ul>
            </div>
        </div>
        <div class="header-wrap-bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/header-under-bg.png" alt=""></div>
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
                <div class="header-drawer-wrap-table">
                    <table class="business-hours">
                        <thead>
                            <tr>
                                <th></th>
                                <th>月〜木</th>
                                <th>金</th>
                                <th>土</th>
                                <th>日</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>営業時間</td>
                                <td>10:00〜24:00</td>
                                <td>10:00〜翌1:00</td>
                                <td>7:00〜翌1:00</td>
                                <td>7:00〜24:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="header-drawer-wrap-txt">
                    <p>
                        ※当館は年中無休で営業しております。<br>
                        ※設備点検などに伴う臨時休館がある場合は、事前にお知らせページにてご案内いたします。
                    </p>
                </div>

                <div class="header-drawer-wrap-menu">
                    <dl class="header-drawer-wrap-menu-top">
                        <dt>TOP</dt>
                        <dd><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/header-logo.png" alt=""></a></dd>
                    </dl>
                    <dl class="header-drawer-wrap-menu-child">
                        <dt><span class="en-title">GUIDE</span><span class="jp-title">ご利用案内</span></dt>
                        <dd>
                            <a href="">料金案内</a>
                            <a href="">営業時間</a>
                            <a href="">利用案内</a>
                            <a href="">アクセス</a>
                        </dd>
                    </dl>
                    <dl class="header-drawer-wrap-menu-child menu-child-blue">
                        <dt><span class="en-title">ENJOY</span><span class="jp-title">館内の楽しみ方</span></dt>
                        <dd>
                            <a href="">館内マップ</a>
                            <a href="">お風呂</a>
                            <a href="">サウナ</a>
                            <a href="">発汗エリア</a>
                            <a href="">ご飲食</a>
                            <a href="">リラクゼーション</a>
                        </dd>
                    </dl>
                    <dl class="header-drawer-wrap-menu-child menu-child-green">
                        <dt><span class="en-title">FIRST-TIME</span><span class="jp-title">初めてのお客様へ</span></dt>
                        <dd>
                            <a href="">グルスパの魅力</a>
                            <a href="">入館の流れ</a>
                            <a href="">施設案内</a>
                        </dd>
                    </dl>
                    <dl class="header-drawer-wrap-menu-child menu-child-yellow">
                        <dt><span class="en-title">EVENT</span><span class="jp-title">イベント情報</span></dt>
                        <dd>
                            <a href="">当日のイベント</a>
                            <a href="">イベントスケジュール</a>
                        </dd>
                    </dl>
                    <dl class="header-drawer-wrap-menu-child menu-child-bed">
                        <dt><span class="en-title">CONTACT</span><span class="jp-title">お問い合わせ</span></dt>
                        <dd>
                            <a href="">個人のお客様</a>
                            <a href="">取材依頼・法人の方</a>
                        </dd>
                    </dl>
                    <ul class="header-drawer-wrap-menu-child-under">
                        <li></li>
                        <li><a href="">お知らせ</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">注意事項</a></li>
                        <li><a href="">採用情報</a></li>
                        <li><a href="">アメニティ</a></li>
                        <li><a href="">グッズ</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>