<?php get_header(); ?>
<main class="page-main archive">
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
                    <span itemprop="name">NEWS</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>

    </div>
    <section class="sec">
        <div class="content-width">
            <div class="com-title center com-title-hidden">
                <p>お知らせ</p>
                <h2 class="">
                    <span class="title">N</span><span class="title">E</span><span class="title">W</span><span class="title">S</span>
                    <span class="title title-item-sprout">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                    </span>
                    <span class="title title-item-sun">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                    </span>
                </h2>
            </div>

            <div class="archive-wrap">
                <div class="archive-wrap-col">
                    <a href="">
                        <div class="archive-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/dummy-small.jpg" alt="">
                        </div>
                        <div class="archive-wrap-col-txt">
                            <div class="archive-wrap-col-txt-info">
                                <span class="category">お知らせ</span>
                                <time>XX.XX.XX</time>
                            </div>
                            <h4>ニュースタイトルが入りますニュースタイトルが入ります</h4>
                        </div>
                        <i></i>
                    </a>
                </div>
                <div class="archive-wrap-col">
                    <a href="">
                        <div class="archive-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/dummy-small.jpg" alt="">
                        </div>
                        <div class="archive-wrap-col-txt">
                            <div class="archive-wrap-col-txt-info">
                                <span class="category">お知らせ</span>
                                <time>XX.XX.XX</time>
                            </div>
                            <h4>ニュースタイトルが入りますニュースタイトルが入ります</h4>
                        </div>
                        <i></i>
                    </a>
                </div>
                <div class="archive-wrap-col">
                    <a href="">
                        <div class="archive-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/dummy-small.jpg" alt="">
                        </div>
                        <div class="archive-wrap-col-txt">
                            <div class="archive-wrap-col-txt-info">
                                <span class="category">お知らせ</span>
                                <time>XX.XX.XX</time>
                            </div>
                            <h4>ニュースタイトルが入りますニュースタイトルが入ります</h4>
                        </div>
                        <i></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/inc-contact'); ?>
</main>
<?php get_footer(); ?>