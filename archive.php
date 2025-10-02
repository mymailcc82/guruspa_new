<?php
//現在のカテゴリを取得
$category = get_queried_object();
$category_id = $category->term_id;
$category_name = $category->name;
$category_slug = $category->slug;
?>
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
                    <span itemprop="name">お知らせ</span>
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
        </div>
        <div class="sec01-col">
            <ul class="sec01-col-select tab">
                <li class="active"><a href="javascript:void(0)" data-id="#area01">すべて</a></li>
                <li><a href="javascript:void(0)" data-id="#area02">期間限定<br class="hidden-sm">イベント</a></li>
                <li><a href="javascript:void(0)" data-id="#area03">定例<br class="hidden-sm">イベント</a></li>
            </ul>

            <div id="area01" class="area is-active">
                <div class="swiper-event sec01-col-main">
                    <div class="content-width">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'paged' => $paged,
                            'post_type' => 'post', // 投稿タイプを指定
                            'posts_per_page' => 8, // 表示する投稿数を指定

                            'category_name' => $category_slug, // カテゴリースラッグを指定
                        );
                        ?>
                        <?php $the_query = new WP_Query($args); ?>
                        <div class="archive-wrap">
                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <div class="archive-wrap-col">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="archive-wrap-col-img">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail('medium'); // サムネイルを表示 
                                                    ?>
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/dummy-small.jpg" alt="デフォルト画像">
                                                <?php endif; ?>
                                            </div>
                                            <div class="archive-wrap-col-txt">
                                                <div class="archive-wrap-col-txt-info">
                                                    <?php
                                                    $categories = get_the_category();
                                                    if (! empty($categories)) {
                                                        echo '<span class="category">' . esc_html($categories[0]->name) . '</span>';
                                                    }
                                                    ?>
                                                    <time><?php echo get_the_date('Y.m.d'); ?></time>
                                                </div>
                                                <h4><?php the_title(); ?></h4>
                                            </div>
                                            <i></i>
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p>投稿が見つかりませんでした。</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="content-width">
                    <?php custom_pagination($the_query); ?>
                </div>
            </div>
        </div>


    </section>
    <?php get_template_part('inc/inc-aside'); ?>
</main>
<?php get_footer(); ?>