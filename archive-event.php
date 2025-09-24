<?php get_header(); ?>
<main class="page-main archive event">
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
                <p>イベント情報</p>
                <h2 class="">
                    <span class="title">E</span><span class="title">V</span><span class="title">E</span><span class="title">N</span><span class="title">T</span>
                    <span class="title title-item-sprout">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                    </span>
                    <span class="title title-item-sun">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                    </span>
                </h2>
            </div>
        </div>

        <div class="sec01-col">
            <ul class="sec01-col-select tab">
                <li class="active"><a href="javascript:void(0)" data-id="#area01">すべて</a></li>
                <li><a href="javascript:void(0)" data-id="#area02">期間限定<br class="hidden-sm">イベント</a></li>
                <li><a href="javascript:void(0)" data-id="#area03">定例<br class="hidden-sm">イベント</a></li>
            </ul>
            <div class="select">
                <select name="category" id="category" onchange="location.href=value;">
                    <option value="<?php echo home_url(); ?>/archive-event/" selected>すべて</option>
                    <option value="<?php echo home_url(); ?>/archive-event/category/limited/">期間限定イベント</option>
                    <option value="<?php echo home_url(); ?>/archive-event/category/regular/">定例イベント</option>
                </select>
            </div>
            <div id="area01" class="area is-active">
                <div class="area-container">

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
            </div>


        </div>


    </section>
    <?php get_template_part('inc/inc-bnr-full'); ?>
    <?php get_template_part('inc/inc-contact'); ?>
</main>
<?php get_footer(); ?>