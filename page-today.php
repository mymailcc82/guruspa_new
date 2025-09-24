<?php get_header(); ?>
<main class="page-main event schedule today">
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
                    <span itemprop="name">本日のイベント</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>

    </div>
    <section class="sec">
        <div class="content-width">
            <div class="com-title center com-title-hidden">
                <p>本日のイベント</p>
                <h2 class="">
                    <span class="title">T</span><span class="title">O</span><span class="title">D</span><span class="title">A</span><span class="title">Y</span><span class="title">'</span><span class="title">S</span> <span class="title">E</span><span class="title">V</span><span class="title">E</span><span class="title">N</span><span class="title">T</span>
                    <span class="title title-item-sprout">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                    </span>
                    <span class="title title-item-sun">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                    </span>
                </h2>
            </div>
        </div>
    </section>
    <section class="sec00">
        <div class="sec00-container">
            <div class="sec00-swiper swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-slide-text">
                            <div class="swiper-slide-text-container">
                                8/<strong>4</strong><br>
                                <span>mon.</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-text">
                            <div class="swiper-slide-text-container">
                                8/<strong>4</strong><br>
                                <span>mon.</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-text">
                            <div class="swiper-slide-text-container">
                                8/<strong>4</strong><br>
                                <span>mon.</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-text">
                            <div class="swiper-slide-text-container">
                                8/<strong>4</strong><br>
                                <span>mon.</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-text">
                            <div class="swiper-slide-text-container">
                                8/<strong>4</strong><br>
                                <span>mon.</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-text">
                            <div class="swiper-slide-text-container">
                                8/<strong>4</strong><br>
                                <span>mon.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev swiper-button-prev-00"></div>
            <div class="swiper-button-next swiper-button-next-00"></div>
            <p class="sec00-attention"><i></i>:イベント開催日</p>
        </div>

        <div class="content-width">
            <div class="page-title--has-icon">
                <h2><i></i>本日のイベント</h2>
            </div>
            <?php
            $args = array(
                'post_type' => 'event', // 投稿タイプを指定
                'posts_per_page' => 3, // 表示する投稿数を指定
                //'category_name' => 'news', // カテゴリースラッグを指定
            );
            ?>
            <?php $the_query = new WP_Query($args); ?>
            <div class="sec01-col-main">
                <ul>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                    <div class="img img-event">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-green.jpg" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="text">
                                        <span class="category category-green">
                                            <?php
                                            $categories = get_the_category();
                                            if (! empty($categories)) {
                                                echo esc_html($categories[0]->name);
                                            }
                                            ?>
                                        </span>
                                        <span class="term"><?php echo get_the_date('Y.m.d'); ?></span>
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p>投稿が見つかりませんでした。</p>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="sec01">
        <div class="content-width">
            <div class="page-title-center--has-icon">
                <h2><i></i>月間スケジュール</h2>
            </div>
            <div class="sec01-swiper swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test/test-sche.jpg" alt="1月のイベントスケジュール">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test/test-sche.jpg" alt="1月のイベントスケジュール">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test/test-sche.jpg" alt="1月のイベントスケジュール">
                    </div>
                </div>
                <div class="swiper-button-prev swiper-button-prev-01"></div>
                <div class="swiper-button-next swiper-button-next-01"></div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="sec01-btn">
                <div class="com-btn-border-black">
                    <a href="<?php echo home_url(); ?>/event/">発汗エリア(有料エリア)について<i></i></a>
                </div>
            </div>

        </div>
    </section>
    <section class="sec02">
        <div class="content-width">
            <div class="page-title--has-icon">
                <h2><i></i>その他イベント案内</h2>
            </div>
            <div class="sec02-wrap">
                <div class="sec02-wrap-col">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/bnr-02.jpg" alt="イベント案内1">
                    </a>
                </div>
                <div class="sec02-wrap-col">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/bnr-01.jpg" alt="イベント案内1">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/inc-contact'); ?>
</main>

<script>
    //swiper
    const swiper_00 = new Swiper('.sec00-swiper', {
        // Optional parameters
        loop: true,
        slidesPerView: "auto",
        spaceBetween: 3.5,
        centeredSlides: true,
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next-00',
            prevEl: '.swiper-button-prev-00',
        },
    });

    //swiper
    const swiper_01 = new Swiper('.sec01-swiper', {
        // Optional parameters
        loop: true,
        slidesPerView: 1,
        spaceBetween: 80,
        centeredSlides: true,


        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next-01',
            prevEl: '.swiper-button-prev-01',
        },

    });
</script>
<?php get_footer(); ?>