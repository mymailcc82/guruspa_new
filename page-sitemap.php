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
            <div class="com-title center com-title-hidden">
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
                        <li><a href="">料金案内</a></li>
                        <li><a href="">営業時間</a></li>
                        <li><a href="">利用案内</a></li>
                        <li><a href="">アクセス</a></li>
                    </ul>
                </div>
                <div class="sec01-wrap-col">
                    <h2>
                        <a href="<?php echo home_url(); ?>/guide/">館内の楽しみ方<i></i></a>
                    </h2>
                    <ul>
                        <li><a href="">館内マップ</a></li>
                        <li><a href="">お風呂</a></li>
                        <li><a href="">サウナ&水風呂</a></li>
                        <li><a href="">発汗エリア</a></li>
                        <li><a href="">ご飲食</a></li>
                        <li><a href="">リラクゼーション</a></li>
                        <li><a href="">アメニティ・グッズ</a></li>
                    </ul>
                </div>
                <div class="sec01-wrap-col">
                    <h2>
                        <a href="<?php echo home_url(); ?>/guide/">初めてのお客様へ<i></i></a>
                    </h2>
                    <ul>
                        <li><a href="">グルスパの魅力</a></li>
                        <li><a href="">入館の流れ</a></li>
                        <li><a href="">利用案内</a></li>
                        <li><a href="">施設案内</a></li>
                    </ul>
                </div>

                <div class="sec01-wrap-col">
                    <h2>
                        <a href="<?php echo home_url(); ?>/guide/">イベント情報<i></i></a>
                    </h2>
                    <ul>
                        <li><a href="">当日のイベント</a></li>
                        <li><a href="">イベントスケジュール</a></li>
                    </ul>
                </div>

                <div class="sec01-wrap-col">
                    <h2>
                        <a href="<?php echo home_url(); ?>/guide/">お問い合わせ<i></i></a>
                    </h2>
                    <ul>
                        <li><a href="">個人のお客様</a></li>
                        <li><a href="">取材依頼・法人の方</a></li>
                    </ul>
                </div>
                <div class="sec01-wrap-col">
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/guide/">お知らせ<i></i></a>
                    </h2>
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/guide/">FAQ<i></i></a>
                    </h2>
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/guide/">注意事項<i></i></a>
                    </h2>
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/guide/">採用情報<i></i></a>
                    </h2>
                </div>
                <div class="sec01-wrap-col">
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/guide/">プライバシーポリシー<i></i></a>
                    </h2>
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/guide/">利用規約<i></i></a>
                    </h2>
                    <h2 class="no-border">
                        <a href="<?php echo home_url(); ?>/guide/">Cookieについて<i></i></a>
                    </h2>
                </div>

            </div>
        </div>
    </section>


    <?php get_template_part('inc/inc-contact'); ?>
</main>
<?php get_footer(); ?>