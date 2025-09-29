<?php get_header(); ?>
<main class="main else page-main">
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
                    <span itemprop="name">NOT FOUND</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <div class="notfound">
        <div class="content-width content-width--mobile-full">
            <div class="com-bnr">
                <div class="sec02-icon-04">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-04.png" alt="">
                </div>
                <div class="sec02-icon-05">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-05.png" alt="">
                </div>
                <div class="sec02-icon-06">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-06.svg" alt="">
                </div>

                <div class="sec02-about-bg">
                    <div class="sec02-icon-01">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-01.png" alt="">
                    </div>
                    <div class="sec02-icon-02">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-02-sp.png" media="(max-width: 601px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page/page-icon-else-02.png" alt="">
                        </picture>

                    </div>
                    <div class="sec02-icon-03">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-03.png" alt="">
                    </div>
                </div>
                <div class="sec02-about-txt">
                    <h2>NOT FOUND...</h2>
                    <h3>リクエストいただいたページが存在しません。</h3>
                    <p>
                        リクエストいただいたページは見つかりませんでした。<br>
                        URLが間違っているか、<br class="hidden-mobile">すでに削除されたページの可能性がございます。
                    </p>
                    <div class="com-btn-arrow-left com-btn-arrow-left--text-left hidden-mobile">
                        <a href="<?php echo home_url(); ?>/"><i></i>TOPへ戻る</a>
                    </div>
                    <div class="com-btn-mobile-reverse hidden-sm">
                        <a href="<?php echo home_url(); ?>/"><i></i>TOPへ戻る</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php get_template_part('inc/inc-contact'); ?>
</main>

<?php get_footer(); ?>