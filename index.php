<?php get_header(); ?>
<style>
    /*
    .icon {
        width: 160px;
        height: 160px;
        display: block;
    }

    .clip-rect {
        transform-box: fill-box;
        transform-origin: 50% 100%;
    }
        */
</style>
<div class="page-loading">
    <div class="page-loading-wrap-container">
        <div class="loader">
            <img class="flame-base" src="<?php echo get_template_directory_uri(); ?>/assets/img/mv/loader-base.webp" alt="GURUSPA">
            <img class="flame-color" src="<?php echo get_template_directory_uri(); ?>/assets/img/mv/loader-color.webp" alt="GURUSPA">
            <div class="loader-percent">
                <p><span id="count">0</span>%</p>
            </div>
        </div>
    </div>
</div>
<main class="top">
    <div class="top-bg">
        <div class="top-visual">
            <div class="top-visual-wrap">
                <span class="bg-item-01"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/bg-item-01_v2.png" alt=""></span>
                <span class="bg-item-02"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/bg-item-02_v2.png" alt=""></span>
                <span class="icon-01 icon-01_ani"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01.png" alt=""></span>
                <div class="top-visual-mv">
                    <div class="top-visual-mv-container">
                        <?php get_template_part('inc/svg-wave'); ?>
                        <div class="wave_nami">
                        </div>
                        <div class="wave_nami_v2">
                        </div>
                        <div class="wave_nami_v3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-wave_v3.webp" alt="">
                        </div>
                        <div class="swiper top-visual-slide">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <picture class="">
                                        <source media="(min-width:601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-main_v2.webp">
                                        <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-main_sp.webp">
                                        <img class="top-visual-mv-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-main_v2.webp" alt="GURUSPA">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture class="">
                                        <source media="(min-width:601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-3.webp">
                                        <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-3_sp.webp">
                                        <img class="top-visual-mv-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-3.webp" alt="GURUSPA">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture class="">
                                        <source media="(min-width:601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-4.webp">
                                        <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-4_sp.webp">
                                        <img class="top-visual-mv-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-4.webp" alt="GURUSPA">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture class="">
                                        <source media="(min-width:601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-5.webp">
                                        <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-5_sp.webp">
                                        <img class="top-visual-mv-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-5.webp" alt="GURUSPA">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture class="">
                                        <source media="(min-width:601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-6.webp">
                                        <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-6_sp.webp">
                                        <img class="top-visual-mv-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-6.webp" alt="GURUSPA">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture class="">
                                        <source media="(min-width:601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-7.webp">
                                        <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-7_sp.webp">
                                        <img class="top-visual-mv-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-7.webp" alt="GURUSPA">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture class="">
                                        <source media="(min-width:601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-8.webp">
                                        <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-8_sp.webp">
                                        <img class="top-visual-mv-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-8.webp" alt="GURUSPA">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture class="">
                                        <source media="(min-width:601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-9.webp">
                                        <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-9_sp.webp">
                                        <img class="top-visual-mv-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-9.webp" alt="GURUSPA">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-visual-title">
                        <?php get_template_part('inc/svg-logo'); ?>
                        <h2>心と身体がととのう、<span>ウェルビーイング</span>の楽園。</h2>
                        <?php get_template_part('inc/inc-top-news'); ?>
                    </div>
                </div>
            </div>
        </div>
        <section class="sec01">
            <div class="sec01-wrap">
                <div class="content-width-small">
                    <div class="com-title center com-title-hidden">
                        <p>イベント情報</p>
                        <h2>
                            <span class="title">E</span><span class="title">V</span><span class="title">E</span><span class="title">N</span><span class="title">T</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                            <span class="title title-item-sun">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                            </span>
                        </h2>
                        <a href="<?php echo home_url(); ?>/event/">一覧を見る<i></i></a>
                    </div>
                </div>
                <div class="sec01-col">
                    <ul class="sec01-col-select tab">
                        <li class="active"><a href="javascript:void(0)" data-id="#area01">すべて</a></li>
                        <li><a href="javascript:void(0)" data-id="#area02">期間限定<br class="hidden-sm">イベント</a></li>
                        <li><a href="javascript:void(0)" data-id="#area03">定例<br class="hidden-sm">イベント</a></li>
                        <div class="slide-bg"></div>
                    </ul>
                    <div id="area01" class="area is-active">
                        <div class="swiper swiper-event sec01-col-main">
                            <div class="swiper-wrapper">
                                <?php
                                $args = array(
                                    'post_type' => 'event', // カスタム投稿タイプ名
                                    'posts_per_page' => 3, // 表示する記事数
                                    'orderby' => 'date', // 日付でソート
                                    'order' => 'DESC', // 降順
                                );
                                ?>
                                <?php
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                        $event_category = get_the_terms(get_the_ID(), 'event_category');
                                        $event_start_date = get_field('event_start_date'); // 開始日
                                        $is_hot = get_field('hot'); // HOT! フラグ
                                        // カテゴリーに応じたデフォルト画像を設定
                                        $category_slug = $event_category[0]->slug;
                                        $category_slug_parent = '';
                                        if ($event_category[0]->parent) {
                                            $parent_term = get_term($event_category[0]->parent, 'event_category');
                                            if ($parent_term && !is_wp_error($parent_term)) {
                                                $category_slug_parent_id = $parent_term->term_id;
                                                $category_slug_parent = $parent_term->slug;
                                            }
                                        }
                                ?>
                                        <div class="swiper-slide">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if ($is_hot) : ?>
                                                    <span class="hot"><?php echo $is_hot; ?></span>
                                                <?php endif; ?>
                                                <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                                <?php get_template_part('inc/inc-event-img'); ?>
                                                <?php get_template_part('inc/inc-event-text'); ?>
                                            </a>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo '<p class="text-base">イベントが見つかりませんでした。</p>';
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>

                    <div id="area02" class="area">
                        <div class="swiper swiper-event_2 sec01-col-main">
                            <div class="swiper-wrapper">
                                <?php
                                $args = array(
                                    'post_type' => 'event', // カスタム投稿タイプ名
                                    'posts_per_page' => 3, // 表示する記事数
                                    'orderby' => 'date', // 日付でソート
                                    'order' => 'DESC', // 降順
                                    //event_tagがlumitedのものを取得
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'event_tag',
                                            'field'    => 'slug',
                                            'terms'    => 'limit',
                                        ),
                                    ),
                                );
                                ?>
                                <?php
                                $the_query = new WP_Query($args);
                                ?>
                                <?php if ($the_query->have_posts()) : ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <?php
                                        $event_category = get_the_terms(get_the_ID(), 'event_category');
                                        $event_start_date = get_field('event_start_date'); // 開始日
                                        $is_hot = get_field('hot'); // HOT! フラグ
                                        ?>

                                        <div class="swiper-slide">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if ($is_hot) : ?>
                                                    <span class="hot"><?php echo $is_hot; ?></span>
                                                <?php endif; ?>
                                                <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                                <?php get_template_part('inc/inc-event-img'); ?>
                                                <?php get_template_part('inc/inc-event-text'); ?>
                                            </a>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                    <?php echo '<p class="text-base">イベントが見つかりませんでした。</p>'; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div id="area03" class="area">
                        <div class="swiper swiper-event_3 sec01-col-main">
                            <div class="swiper-wrapper">
                                <?php
                                $args = array(
                                    'post_type' => 'event', // カスタム投稿タイプ名
                                    'posts_per_page' => 3, // 表示する記事数
                                    'orderby' => 'date', // 日付でソート
                                    'order' => 'DESC', // 降順
                                    //event_tagがlumitedのものを取得
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'event_tag',
                                            'field'    => 'slug',
                                            'terms'    => 'per_event',
                                        ),
                                    ),
                                );
                                ?>
                                <?php
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                        $event_category = get_the_terms(get_the_ID(), 'event_category');
                                        $event_start_date = get_field('event_start_date'); // 開始日
                                        $is_hot = get_field('hot'); // HOT! フラグ
                                ?>
                                        <div class="swiper-slide">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if ($is_hot) : ?>
                                                    <span class="hot"><?php echo $is_hot; ?></span>
                                                <?php endif; ?>
                                                <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                                <?php get_template_part('inc/inc-event-img'); ?>
                                                <?php get_template_part('inc/inc-event-text'); ?>
                                            </a>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo '<p class="text-base">イベントが見つかりませんでした。</p>';
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="com-btn-sp"><a href="<?php echo home_url(); ?>/event/">一覧を見る<i class="black"></i></a></div>
                <?php get_template_part('inc/inc-bnr-full'); ?>
            </div>
        </section>

        <section class="sec02">
            <div class="sec02-bg-top">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec02-bg-top_v3.png" alt="">
                <span class="bg-item-06"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/bg-item-06_v2.png" alt=""></span>
                <span class="bg-item-05"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/bg-item-05_v4.png" alt=""></span>
            </div>
            <div class="sec02-bg">
                <div class="sec02-wrap">
                    <div class="com-title com-title-left com-title-white com-title-hidden">
                        <p class="color-white">お知らせ</p>
                        <h2 class="color-white">
                            <span class="title">N</span><span class="title">E</span><span class="title">W</span><span class="title">S</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-white.png" alt="">
                            </span>
                            <span class="title title-item-sun">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                            </span>
                        </h2>
                        <a href="<?php echo home_url(); ?>/archive/">一覧を見る<i></i></a>
                    </div>
                    <div class="com-btn-sp"><a href="<?php echo home_url(); ?>/category/news/">お知らせ一覧を見る<i class="green"></i></a></div>
                    <div class="content-width">
                        <div class="sec02-list">
                            <div class="sec02-list-wrap sec02-list-wrap-left">
                                <h3>NEWS<a href="<?php echo home_url(); ?>/category/news/">一覧を見る<i></i></a></h3>
                                <?php
                                $args = array(
                                    'post_type' => 'post', // 投稿タイプ
                                    'posts_per_page' => 3, // 表示件数
                                    'orderby' => 'date', // 日付でソート
                                    'order' => 'DESC', // 降順
                                    'category_name' => 'news', // 特定のカテゴリーを指定する場合
                                );
                                ?>
                                <ul>
                                    <?php
                                    $the_query = new WP_Query($args);
                                    if ($the_query->have_posts()) :
                                        while ($the_query->have_posts()) : $the_query->the_post();
                                    ?>
                                            <?php $cats = get_the_category(); ?>
                                            <li><a href="<?php the_permalink(); ?>">
                                                    <div class="sec02-list-img">
                                                        <?php if (has_post_thumbnail()) : ?>
                                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                        <?php else : ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/dummy-small_v2.jpg" alt="<?php the_title(); ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="sec02-list-txt">
                                                        <span class="category"><?php echo $cats[0]->name; ?></span>
                                                        <time><?php the_time('Y.m.d'); ?></time>
                                                        <h4><?php the_title(); ?></h4>
                                                    </div>
                                                </a></li>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    else :
                                        echo '<p class="text-base color-white">ニュースが見つかりませんでした。</p>';
                                    endif;
                                    ?>
                                </ul>
                                <div class="com-btn-sp"><a href="<?php echo home_url(); ?>/category/news/">NEWS一覧を見る<i class="green"></i></a></div>
                            </div>
                            <div class="sec02-list-wrap sec02-list-wrap-right">
                                <h3>MEDIA<a href="<?php echo home_url(); ?>/category/media/">一覧を見る<i></i></a></h3>
                                <?php
                                $args = array(
                                    'post_type'      => 'post',
                                    'posts_per_page' => 3,
                                    'orderby'        => 'date',
                                    'order'          => 'DESC',
                                    'category_name'  => 'media',  // ←この書き方に戻す
                                    'ignore_sticky_posts' => true, // 念のため追加
                                    'no_found_rows'  => true      // ページングをしない場合軽量化
                                );
                                $the_query = new WP_Query($args);
                                ?>
                                <ul>
                                    <?php
                                    $the_query = new WP_Query($args);
                                    if ($the_query->have_posts()) :
                                        while ($the_query->have_posts()) : $the_query->the_post();
                                    ?>
                                            <?php $cats = get_the_category(); ?>
                                            <li><a href="<?php the_permalink(); ?>">
                                                    <div class="sec02-list-img">
                                                        <?php if (has_post_thumbnail()) : ?>
                                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                        <?php else : ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/dummy-small_v2.jpg" alt="<?php the_title(); ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="sec02-list-txt">
                                                        <span class="category"><?php echo $cats[0]->name; ?></span>
                                                        <time><?php the_time('Y.m.d'); ?></time>
                                                        <h4><?php the_title(); ?></h4>
                                                    </div>
                                                </a></li>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    else :
                                        echo '<p class="color-white text-base">ニュースが見つかりませんでした。</p>';
                                    endif;
                                    ?>
                                </ul>
                                <div class="com-btn-sp"><a href="<?php echo home_url(); ?>/category/media/">MEDIA一覧を見る<i class="green"></i></a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="sec02-bg-under">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec02-bg-under_v3.png" alt="">
                <span class="bg-item-04"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/bg-item-04_v2.png" alt=""></span>
            </div>
        </section>

        <section class="sec03">
            <div class="sec03-col">
                <div class="sec03-col-txt">
                    <div class="com-title com-title-big com-title-concept">
                        <p class="">コンセプト</p>
                        <h2 class="">
                            <p class="com-title-p-hidden">
                                <span class="title">C</span><span class="title">O</span><span class="title">N</span><span class="title">C</span><span class="title">E</span><span class="title">P</span><span class="title">T</span>
                            </p>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                            <span class="title title-item-sun-big">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01-big_v2.png" alt="">
                            </span>
                        </h2>
                    </div>

                    <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/title-well-being.svg" alt="Well-beiing">な時間を、<br>すべての人に。</h3>

                    <p>
                        松坂温泉グルスパは<br>
                        「ウェルビーイング＝心身ともに満たさ<br class="hidden-sm">れた状態」をテーマにした<br class="hidden-sm">スパリゾートです。<br><br>

                        この地の恵みを活かした天然温泉・<br class="hidden-sm">岩盤浴・食・休息。<br><br>

                        すべての体験が、あなたの心と体を<br class="hidden-sm">解き放つ<br class="hidden-mobile">
                        “ととのい”に<br class="hidden-sm">つながります。
                    </p>
                </div>
                <div class="sec03-col-item">

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>


                    <svg version="1.1" id="レイヤー_1"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 369.5 369.5">
                        <style type="text/css">
                            .st100 {
                                fill: none;
                            }

                            .st200 {
                                fill: none;
                                display: none;
                            }
                        </style>

                        <g id="path_108236">
                            <path class="st100" d="M184.8,0c102,0,184.8,82.7,184.8,184.8s-82.7,184.8-184.8,184.8S0,286.8,0,184.8S82.7,0,184.8,0z" />
                            <path class="st200" d="M184.8,14C90.6,14,14,90.6,14,184.8s76.6,170.8,170.8,170.8s170.8-76.6,170.8-170.8S278.9,14,184.8,14
      M184.8,0c102,0,184.8,82.7,184.8,184.8s-82.7,184.8-184.8,184.8S0,286.8,0,184.8S82.7,0,184.8,0z" />
                        </g>
                    </svg>

                    <script>
                        gsap.registerPlugin(ScrollTrigger);

                        window.addEventListener('DOMContentLoaded', () => {
                            const path = document.querySelector('path.st100');
                            if (!path) return;

                            // パス長を取得
                            const length = path.getTotalLength();

                            // stroke 属性など設定
                            path.setAttribute('stroke', '#3C3636');
                            path.setAttribute('stroke-width', 14);
                            path.setAttribute('stroke-linecap', 'round');
                            path.setAttribute('fill', 'none');

                            // 初期状態（パスを非表示）
                            path.style.strokeDasharray = length;
                            path.style.strokeDashoffset = length;

                            // ScrollTrigger で発火させる
                            ScrollTrigger.create({
                                trigger: '.sec03-col-item',
                                start: 'top 80%',
                                toggleActions: 'play none none none',
                                once: true,
                                onEnter: () => {
                                    gsap.to(path, {
                                        strokeDashoffset: 0,
                                        duration: 2.6,
                                        ease: "power1.inOut"
                                    });
                                }
                            });
                        });
                    </script>


                    <div class="sec03-col-item-child sec03-col-item-child-1">
                        <img class="sec03-col-item-child-1-wrap hidden-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec03-col-item-child-1.webp" alt="">
                        <img class="sec03-col-item-child-1-wrap hidden-sm" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec03-col-item-child-1_sp.webp" alt="">
                    </div>
                    <div class="sec03-col-item-child sec03-col-item-child-2">
                        <img class="sec03-col-item-child-2-wrap hidden-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec03-col-item-child-2.webp" alt="">
                        <img class="sec03-col-item-child-2-wrap hidden-sm" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec03-col-item-child-2_sp.webp" alt="">
                    </div>
                    <div class="sec03-col-item-child sec03-col-item-child-3">
                        <img class="sec03-col-item-child-3-wrap hidden-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec03-col-item-child-3.webp" alt="">
                        <img class="sec03-col-item-child-3-wrap hidden-sm" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec03-col-item-child-3_sp.webp" alt="">
                    </div>
                    <div class="sec03-col-item-child sec03-col-item-child-4">
                        <img class="sec03-col-item-child-4-wrap" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec03-col-item-child-4.webp" alt="">
                    </div>
                </div>
            </div>

            <div class="content-width">
                <div class="sec03-col-under">
                    <div class="sec03-col-under-wrap">
                        <div class="sec03-col-under-title">
                            <h3>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/title-about-guruspa_v2.webp" alt="ABOUT GURUSPA">
                            </h3>
                            <p>グルスパについて</p>
                        </div>

                        <div class="sec03-col-under-btn">
                            <div class="com-btn sec03-col-under-btn-1"><a href="<?php echo home_url(); ?>/first-time/">初めてのお客様へ<span class="icon-btn--1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-btn--1.png" alt=""></span><i></i></a></div>
                            <div class="com-btn sec03-col-under-btn-2"><a href="<?php echo home_url(); ?>/guide/">ご利用案内<span class="icon-btn--2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-btn--2.png" alt=""></span></span><i></i></a></div>
                        </div>
                    </div>

                    <div class="loop-slider">
                        <div class="loop-track" id="sliderTrack">
                            <?php for ($i = 0; $i < 2; $i++) : // 2セット 
                            ?>
                                <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-slider-01_v2.webp" alt=""></div>
                                <div class="loop-item loop-item-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-slider-02_v2.webp" alt=""></div>
                                <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-slider-03_v2.webp" alt=""></div>
                                <div class="loop-item loop-item-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-slider-04_v2.webp" alt=""></div>
                                <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-slider-05_v2.webp" alt=""></div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec04">
            <div class="sec04-bg-top">
                <picture class="">
                    <source media="(min-width:601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec04-bg-top_v2.png">
                    <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec04-bg-top_sp.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec04-bg-top_v2.png" alt="">
                </picture>
            </div>
            <div class="sec04-bg">
                <div class="shizuku-group group-a">
                    <span class="shizuku shizuku-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-1-1.png" alt=""></span>
                    <span class="shizuku shizuku-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-1-2.png" alt=""></span>
                    <span class="shizuku shizuku-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-1-3.png" alt=""></span>
                </div>
                <div class="shizuku-group group-b">
                    <span class="shizuku shizuku-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-2-1.png" alt=""></span>
                    <span class="shizuku shizuku-5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-2-2.png" alt=""></span>
                </div>

                <span class="ring-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec04-item-ring.webp" alt=""></span>
                <span class="ring-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec04-item-ring.webp" alt=""></span>
                <div class="content-width-small">
                    <div class="sec04-wrap">
                        <div class="com-title center com-title-white com-title-hidden">
                            <p>サービス内容</p>
                            <h2 class="">
                                <span class="title">S</span><span class="title">E</span><span class="title">R</span><span class="title">V</span><span class="title">I</span><span class="title">C</span><span class="title">E</span>
                                <span class="title title-item-sprout">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-white.png" alt="">
                                </span>
                                <span class="title title-item-sun">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                                </span>
                            </h2>
                        </div>
                        <div class="sec04-wrap-txt">
                            <p>
                                当館では温泉・サウナ・岩盤浴・お食事・リラクゼーションなど、多彩なサービスをご用意。<br>心と身体を解きほぐし、特別なくつろぎの時間をお届けします。
                            </p>
                            <a href="<?php echo home_url(); ?>/enjoy/">館内の楽しみ方<i></i></a>
                        </div>
                        <div class="sec04-wrap">
                            <div class="sec04-wrap-col sec04-wrap-right">
                                <div class="sec04-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-03_v2.webp" alt="">
                                </div>
                                <div class="sec04-wrap-col-txt">
                                    <h3>お風呂</h3>
                                    <p>
                                        地下1,300ｍから汲み上げた天然温泉を使用。<br>
                                        泉質はメタけい酸を豊富に含み、肌の新陳代謝を促し、セラミドを整える“美肌の湯”として知られています。大きな露天風呂をはじめ、様々な種類のお風呂をご用意しておりますので、四季の風を感じながら至福のひとときをお過ごしください。
                                    </p>
                                    <a href="<?php echo home_url(); ?>/enjoy/spa/">くわしく見る<i></i></a>
                                </div>
                            </div>
                            <div class="sec04-wrap-col sec04-wrap-left">
                                <div class="sec04-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-04_v2.webp" alt="">
                                </div>
                                <div class="sec04-wrap-col-txt">
                                    <h3>サウナ＆水風呂</h3>
                                    <p>
                                        当館では、発汗・癒し・爽快感を存分に味わえるサウナの後には、7℃の極冷水風呂・16℃の水風呂・29℃のぬる湯と、好みに合わせて選べる3種類の水風呂もご用意。一気にクールダウンしたい方も、ゆっくり“ととのい”たい方も、自分だけのスタイルで楽しめます。<br>
                                        ここでしか体験できないサウナ時間で、ぜひ“最高のととのい”を見つけてください。
                                    </p>
                                    <a href="<?php echo home_url(); ?>/enjoy/sauna/">くわしく見る<i></i></a>
                                </div>
                            </div>
                            <div class="sec04-wrap-col sec04-wrap-right">
                                <div class="sec04-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-05_v2.webp" alt="">
                                </div>
                                <div class="sec04-wrap-col-txt">
                                    <h3>発汗エリア<br class="hidden-sm">(有料岩盤浴エリア)</h3>
                                    <p>
                                        岩盤浴・アトラクションサウナ・マンガ・リクライニング・中温ホール・テラスなどが揃った特別エリア。<br>
                                        時間を忘れてゆったり過ごしたい方にぴったりの癒し空間です。<br>
                                        館内とはひと味違う、深いリラックスをお楽しみください。
                                    </p>
                                    <a href="<?php echo home_url(); ?>/enjoy/sweating/">くわしく見る<i></i></a>
                                </div>
                            </div>
                            <div class="sec04-wrap-col sec04-wrap-left">
                                <div class="sec04-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-06_v2.webp" alt="">
                                </div>
                                <div class="sec04-wrap-col-txt">
                                    <h3>ご飲食</h3>
                                    <p>
                                        館内の飲食エリアでは、和食や洋食、クラフトビール、スイーツまで幅広いお客様にご満足いただけるメニューをご用意。<br>
                                        「キッチントキワ」では三重県産食材を使った料理やサ飯を、くつろぎ空間で。「スイートラボ」では珍しいスイーツやSNS映えするデザートを楽しめます。
                                    </p>
                                    <a href="<?php echo home_url(); ?>/enjoy/food/">くわしく見る<i></i></a>
                                </div>
                            </div>
                            <div class="sec04-wrap-col sec04-wrap-right">
                                <div class="sec04-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-07_v2.webp" alt="">
                                </div>
                                <div class="sec04-wrap-col-txt">
                                    <h3>リラクゼーション</h3>
                                    <p>
                                        ボディケア・あかすり・フットマッサージなど、豊富な施術をご用意。<br>
                                        日々の疲れを芯から癒したい方におすすめです。<br>
                                        予約制でスムーズにご案内でき、定期的にリラクイベントも開催中。贅沢なひとときをお過ごしください。
                                    </p>
                                    <a href="<?php echo home_url(); ?>/enjoy/relaxation/">くわしく見る<i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec04-bg-under">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec04-bg-under_v2.png" alt="">
                <span class="bg-item-07"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/bg-item-07_v2.png" alt=""></span>
            </div>
        </section>

        <section class="sec05">
            <div class="sec05-wrap">
                <div class="content-width">
                    <div class="com-title center com-title-hidden">
                        <p>料金表</p>
                        <h2 class="">
                            <span class="title">M</span><span class="title">E</span><span class="title">N</span><span class="title">U</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                            <span class="title title-item-sun">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                            </span>
                        </h2>
                    </div>
                    <div class="sec05-wrap-table">
                        <h3>通常入泉</h3>
                        <table class="price-table">
                            <thead>
                                <tr>
                                    <th class="col-left"></th>
                                    <th class="col-center">平日</th>
                                    <th class="col-right">土日祝日</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        一般<br><span class="note">※中学生以上</span>
                                    </td>
                                    <td><strong>980</strong><small>円</small></td>
                                    <td><strong>1,180</strong><small>円</small></td>
                                </tr>
                                <tr>
                                    <td>
                                        会員
                                    </td>
                                    <td><strong>930</strong><small>円</small></td>
                                    <td><strong>1,130</strong><small>円</small></td>
                                </tr>
                                <tr>
                                    <td>
                                        子供<br><span class="note">※小学生以下</span>
                                    </td>
                                    <td><strong>400</strong><small>円</small></td>
                                    <td><strong>500</strong><small>円</small></td>
                                </tr>
                                <tr>
                                    <td>
                                        幼児<br><span class="note">※3歳以下</span>
                                    </td>
                                    <td colspan="2"><strong>無料</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="sec05-wrap-txt">
                        <p>
                            ※小学生以下は保護者同伴必須<br>
                            ※18歳未満の方は保護者同伴なしの場合、22時まで利用可<br>
                            ※入退場・入浴・トイレを自力で行えない方は同性付添人が必要<br>
                            ※身長120cm以上のお子様は混浴禁止（条例に従う）
                        </p>
                    </div>
                    <div class="sec05-wrap-under-item">
                        <h3>発汗エリア(有料岩盤浴)</h3>
                        <table class="price-table">
                            <thead>
                                <tr>
                                    <th class="col-left"></th>
                                    <th class="col-center">平日</th>
                                    <th class="col-right">土日祝日</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        一般<br><span class="note">※中学生以上</span>
                                    </td>
                                    <td><strong>860</strong><small>円</small></td>
                                    <td><strong>960</strong><small>円</small></td>
                                </tr>
                                <tr>
                                    <td>
                                        会員
                                    </td>
                                    <td><strong>810</strong><small>円</small></td>
                                    <td><strong>910</strong><small>円</small></td>
                                </tr>
                                <tr>
                                    <td>
                                        子供<br><span class="note">※小学生以下</span>
                                    </td>
                                    <td><strong>300</strong><small>円</small></td>
                                    <td><strong>400</strong><small>円</small></td>
                                </tr>
                                <tr>
                                    <td>
                                        幼児<br><span class="note">※3歳以下</span>
                                    </td>
                                    <td colspan="2"><strong>無料</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="sec05-wrap-txt">
                        <p>
                            ※ 発汗エリアセットには専用ウェア・タオルが含まれます。<br>
                            ※ 小学生未満のお子様はご利用できません。
                        </p>
                    </div>
                    <div class="sec05-wrap-under-link">
                        <a href="<?php echo home_url(); ?>/guide/">くわしく見る<i></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec06">
            <div class="sec06-bg-top">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec06-bg-top_v4.png" alt="">
            </div>
            <div class="sec06-bg">
                <div class="content-width">
                    <div class="com-title center com-title-hidden">
                        <p>アクセス</p>
                        <h2 class="">
                            <span class="title">A</span><span class="title">C</span><span class="title">C</span><span class="title">E</span><span class="title">S</span><span class="title">S</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                            <span class="title title-item-sun">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01-white.png" alt="">
                            </span>
                        </h2>
                    </div>

                    <ul class="sec06-map">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/map-1.webp" alt="guruspa"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/map-2_v4.webp" alt="guruspa"></li>
                    </ul>
                    <div class="sec06-wrap-under-link">
                        <a href="<?php echo home_url(); ?>/guide/#sec05">くわしく見る<i></i></a>
                    </div>
                </div>
            </div>
            <div class="sec06-bg-under">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec06-bg-under_v3.png" alt="">
            </div>
        </section>



        <section class="sec07-com sec07">
            <div class="content-width">
                <div class="sec07-wrap">
                    <div class="sec07-wrap-title">
                        <div class="com-title com-title-faq center com-title-hidden">
                            <p>よくある質問</p>
                            <h2 class="">
                                <span class="title">F</span><span class="title">A</span><span class="title">Q</span>
                                <span class="title title-item-sprout">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                                </span>
                                <span class="title title-item-sun">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                                </span>
                            </h2>
                            <a href="<?php echo home_url(); ?>/faq">一覧を見る<i></i></a>
                        </div>
                    </div>
                    <div class="sec07-wrap-faq accordion">
                        <?php
                        $faq_query = new WP_Query(array(
                            'post_type'      => 'faq',     // 投稿タイプ
                            'posts_per_page' => 5,         // 表示件数
                            'orderby'        => 'date',
                            'order'          => 'DESC'
                        ));
                        if ($faq_query->have_posts()) :
                            while ($faq_query->have_posts()) : $faq_query->the_post();
                        ?>
                                <dl>
                                    <dt><i></i><?php the_title(); ?></dt>
                                    <dd><i></i><?php the_content(); ?></dd>
                                </dl>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            ?>
                            <p>FAQがまだ登録されていません。</p>
                        <?php endif; ?>

                        <div class="com-btn-mobile hidden-sm">
                            <a href="<?php echo home_url(); ?>/faq/">一覧を見る<i></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php get_template_part('./inc/inc-aside'); ?>
    </div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>
<style>
    /* 基本設定 */
    .top_logo_img svg {
        overflow: visible;
    }

    /* 下端基準で縦スケールする .st4（重要） */
    .top_logo_img svg .st4 {
        transform-box: fill-box;
        -webkit-transform-box: fill-box;
        transform-origin: 50% 0%;
        -webkit-transform-origin: 50% 0%;
        will-change: transform, opacity;
    }

    /* path の横スライド用に transform-box を念のため設定 */
    .top_logo_img svg path,
    .top_logo_img svg .st5 {
        transform-box: fill-box;
        -webkit-transform-box: fill-box;
        will-change: transform, opacity;
    }



    /* reduced motion 対応のためのCSS（任意） */
    @media (prefers-reduced-motion: reduce) {
        .top_logo_img svg * {
            transition: none !important;
            animation: none !important;
        }
    }
</style>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/top.js"></script>
<script>
    //TOPのスライド
    const swipervisual = new Swiper('.top-visual-slide', {
        slidesPerView: 1, // 1枚ずつ表示
        effect: 'fade', // ← フェードに変更
        speed: 2000, // フェードの切り替わり速度(ms)
        fadeEffect: {
            crossFade: true, // クロスフェードさせる
        },
        loop: true, // 無限ループ
        autoplay: {
            delay: 5000, // 3秒ごとに切り替え
            disableOnInteraction: false, // ユーザー操作後も再生を継続
        },
        lazy: {
            loadPrevNext: true,
            loadOnTransitionStart: true,
        },

    });
</script>
<?php get_footer(); ?>