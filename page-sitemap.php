<?php get_header(); ?>
<main class="page-main sitemap">
    <div class="page-main-left-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page/page-img-left.png" alt="">
    </div>
    <div class="page-main-right-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page/page-img-right.png" alt="">
    </div>

    <div class="page-breadcrumbs">
        <nav aria-label="パンくずリスト">
            <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo home_url(); ?>">
                        <span itemprop="name">ホーム</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name">サイトマップ</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width">
            <div class="com-title com-title--sitemap center com-title-hidden">
                <p>サイトマップ</p>
                <h1 class="">
                    <span class="title">S</span><span class="title">I</span><span class="title">T</span><span class="title">E</span>　<span class="title">M</span><span class="title">A</span><span class="title">P</span>
                    <span class="title title-item-sprout">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                    </span>
                    <span class="title title-item-sun">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                    </span>
                </h1>
            </div>

            <div class="sec01-wrap">
                <div class="sec01-wrap-col">
                    <h2>
                        <a href="<?php echo home_url(); ?>/guide/">ご利用案内<i></i></a>
                    </h2>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/guide/#sec02">料金案内</a></li>
                        <li><a href="<?php echo home_url(); ?>/guide/#sec03">営業時間</a></li>
                        <li><a href="<?php echo home_url(); ?>/guide/#sec04">ご利用案内</a></li>
                        <li><a href="<?php echo home_url(); ?>/guide/#sec05">アクセス</a></li>
                    </ul>
                </div>
                <div class="sec01-wrap-col">
                    <h2>
                        <a href="<?php echo home_url(); ?>/enjoy/">館内の楽しみ方<i></i></a>
                    </h2>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/enjoy/">館内マップ</a></li>
                        <li><a href="<?php echo home_url(); ?>/enjoy/spa/">お風呂</a></li>
                        <li><a href="<?php echo home_url(); ?>/enjoy/sauna/">サウナ</a></li>
                        <li><a href="<?php echo home_url(); ?>/enjoy/sweating/">発汗エリア</a></li>
                        <li><a href="<?php echo home_url(); ?>/enjoy/food/">ご飲食</a></li>
                        <li><a href="<?php echo home_url(); ?>/enjoy/relaxation/">リラクゼーション</a></li>
                        <li><a href="<?php echo home_url(); ?>/enjoy/goods/">アメニティ・グッズ</a></li>
                    </ul>
                </div>
                <div class="sec01-wrap-col">
                    <h2>
                        <a href="<?php echo home_url(); ?>/first-time/">初めてのお客様へ<i></i></a>
                    </h2>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/first-time/#sec02">グルスパの魅力</a></li>
                        <li><a href="<?php echo home_url(); ?>/first-time/#sec03">入館の流れ</a></li>
                        <li><a href="<?php echo home_url(); ?>/first-time/#sec04">施設案内</a></li>
                    </ul>
                </div>

                <div class="sec01-wrap-col">
                    <h2>
                        <a href="<?php echo home_url(); ?>/event/">イベント情報<i></i></a>
                    </h2>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/today/">本日のイベント</a></li>
                        <li><a href="<?php echo home_url(); ?>/schedule/">イベントスケジュール</a></li>
                    </ul>
                </div>

                <div class="sec01-wrap-col">
                    <h2>
                        <a href="<?php echo home_url(); ?>/contact/">お問い合わせ<i></i></a>
                    </h2>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/contact/">個人のお客様</a></li>
                        <li><a href="<?php echo home_url(); ?>/contact-corporate/">取材依頼・法人の方</a></li>
                    </ul>
                </div>
                <div class="sec01-wrap-col">
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/archive/">お知らせ<i></i></a>
                    </h2>
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/faq/">FAQ<i></i></a>
                    </h2>
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/rules/">注意事項<i></i></a>
                    </h2>
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/recruit/">採用情報<i></i></a>
                    </h2>
                </div>
                <div class="sec01-wrap-col">
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー<i></i></a>
                    </h2>
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/terms/">利用規約<i></i></a>
                    </h2>
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/cookie/">Cookieについて<i></i></a>
                    </h2>
                </div>

            </div>
        </div>
    </section>


    <?php get_template_part('inc/inc-aside'); ?>
</main>
<?php get_footer(); ?>