<?php get_header(); ?>
<main class="page-main archive menu">
    <div class="page-main-left-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page/page-img-left.webp" alt="">
    </div>
    <div class="page-main-right-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page/page-img-right.webp" alt="">
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
                    <span itemprop="name">メニュー</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec">
        <div class="content-width">
            <div class="com-title center com-title-hidden">
                <p>メニュー</p>
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
        </div>
    </section>
    <section class="menu-sec">
        <div class="content-width">
            <div class="menu-wrap">
                <div class="menu-wrap-left">
                    <div class="menu-wrap-left-sticky">
                        <h3>カテゴリー</h3>
                        <?php
                        //menu_category タクソノミーのタームを取得
                        $terms = get_terms(array(
                            'taxonomy' => 'menu_category', // タクソノミーのスラッグを指定
                            'hide_empty' => false, // 投稿がないタームも取得
                        ));
                        ?>
                        <?php if (!empty($terms) && !is_wp_error($terms)) : ?>
                            <ul class="menu-category-list">
                                <li class="menu-category-item">
                                    <a class="active" href="<?php echo home_url(); ?>/menu/">すべて</a>
                                </li>
                                <?php foreach ($terms as $term) : ?>
                                    <li class="menu-category-item">
                                        <a href="<?php echo esc_url(get_term_link($term)); ?>">
                                            <?php echo esc_html($term->name); // ターム名を表示 
                                            ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else : ?>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="menu-wrap-right">
                    <?php
                    $args = array(
                        'post_type' => 'menu', // カスタム投稿タイプのスラッグを指定
                        'posts_per_page' => -1, // すべての投稿を取得
                        'orderby' => 'date', // 日付で並び替え
                        'order' => 'DESC', // 降順
                    )
                    ?>
                    <?php $the_query = new WP_Query($args); ?>
                    <?php
                    $total_posts = $the_query->found_posts;
                    ?>
                    <p class="menu-total-posts">すべて（全<?php echo $total_posts; ?>件）</p>
                    <?php if ($the_query->have_posts()) : ?>
                        <div class="menu-list">
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <?php $price = get_field('price'); ?>
                                <div class="menu-list-col">
                                    <a href="javascript:void(0);" class="goods-btn" data-id="goods_<?php echo $post->ID; ?>">
                                        <div class="menu-list-col-img">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium'); // サムネイルを表示 
                                                ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/comming-soon-stone-main.jpg" alt="デフォルト画像">
                                            <?php endif; ?>
                                        </div>
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php echo output_price($price); ?></p>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/inc-aside'); ?>


</main>
<div class="menu">
    <div class="goods-fixed">
        <div class="goods-fixed-bg goods-fixed-btn-close"></div>
        <div class="goods-fixed-container">
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php
                    $price = get_field('price'); // カスタムフィールド「price」の値を取得
                    $allergy = get_field('allergy'); // カスタムフィールド「allergy」の値を取得

                    ?>
                    <div class="goods-fixed-container-wrap" id="goods_<?php echo get_the_ID(); ?>">
                        <div class="goods-fixed-container-wrap-close goods-fixed-btn-close">
                            <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close-black.svg" alt="閉じる"></a>
                        </div>
                        <div class="goods-fixed-container-wrap-bg"></div>
                        <div class="goods-fixed-container-wrap-content">
                            <div class="goods-fixed-container-wrap-content-main">
                                <div class="goods-fixed-container-wrap-content-main-txt">
                                    <div class="goods-fixed-container-wrap-content-main-txt-img">
                                        <?php if (has_post_thumbnail()): ?>
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-default.jpg" alt="デフォルト画像">
                                        <?php endif; ?>
                                    </div>
                                    <div class="goods-fixed-container-wrap-content-main-txt-txt">
                                        <h3><?php the_title(); ?></h3>
                                        <p class="sec04-price"><?php echo output_price($price); ?></p>
                                    </div>
                                    <div class="goods-fixed-container-wrap-content-main-txt-full">
                                        <?php $content = get_the_content(); ?>
                                        <?php if ($content): ?>
                                            <h4>商品説明</h4>
                                            <div class="sec04-desc">
                                                <?php echo nl2br($content); ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($allergy): ?>
                                            <h4>アレルギー説明文</h4>
                                            <div class="sec04-desc">
                                                <?php echo nl2br($allergy); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>