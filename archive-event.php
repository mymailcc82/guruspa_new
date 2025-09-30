<?php
// クエリパラメータからタームスラッグを取得
if (isset($_GET['event_category'])) {
    $event_category = sanitize_text_field($_GET['event_category']);
} else {
    $event_category = '';
}
if (isset($_GET['event_tag'])) {
    $event_tag = sanitize_text_field($_GET['event_tag']);
} else {
    $event_tag = '';
}
?>
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
            <?php /*
            <ul class="sec01-col-select">
                <?php if ($event_tag === ''): ?>
                    <li class="active"><a href="<?php echo home_url(); ?>/event/">すべて</a></li>
                <?php else: ?>
                    <li><a href="<?php echo home_url(); ?>/event/">すべて</a></li>
                <?php endif; ?>
                <?php if ($event_tag === 'limit'): ?>
                    <li class="active"><a href="<?php echo home_url(); ?>/event/?event_tag=new&event_category=<?php echo $event_category; ?>" data-id="#area01">新着<br class="hidden-sm">イベント</a></li>
                <?php else: ?>
                    <li><a href="<?php echo home_url(); ?>/event/?event_tag=limit&event_category=<?php echo $event_category; ?>" data-id="#area02">期間限定<br class="hidden-sm">イベント</a></li>
                <?php endif; ?>
                <?php if ($event_tag === 'per_event'): ?>
                    <li class="active"><a href="<?php echo home_url(); ?>/event/?event_tag=per_event&event_category=<?php echo $event_category; ?>" data-id="#area03">定例<br class="hidden-sm">イベント</a></li>
                <?php else: ?>
                    <li><a href="<?php echo home_url(); ?>/event/?event_tag=per_event&event_category=<?php echo $event_category; ?>" data-id="#area03">定例<br class="hidden-sm">イベント</a></li>
                <?php endif; ?>
            </ul>
            */ ?>
            <ul class="sec01-col-select tab">
                <li class="active"><a href="javascript:void(0)" data-id="#area01">すべて</a></li>
                <li><a href="javascript:void(0)" data-id="#area02">期間限定<br class="hidden-sm">イベント</a></li>
                <li><a href="javascript:void(0)" data-id="#area03">定例<br class="hidden-sm">イベント</a></li>
            </ul>
            <div class="content-width">
                <div class="select">
                    <select name="category" id="category" onchange="location.href=value;">
                        <?php
                        //event_categoryをtermを取得して、optionでselectedを設定
                        $terms = get_terms(array(
                            'taxonomy' => 'event_category',
                            'hide_empty' => false,
                        ));
                        ?>
                        <!--すべて -->
                        <option value="<?php echo home_url(); ?>/event/?category_tag=<?php echo $event_tag; ?>">すべて</option>

                        <?php foreach ($terms as $term) : ?>
                            <?php
                            if ($term->slug == "akasuri" || $term->slug == "sweet" || $term->slug == "tokiwa") {
                                continue;
                            }
                            ?>
                            <option value="<?php echo home_url(); ?>/event/?event_category=<?php echo $term->slug; ?><?php if ($event_tag) {
                                                                                                                            echo '&event_tag=' . $event_tag;
                                                                                                                        } ?>" <?php if ($event_category === $term->slug) {
                                                                                                                                    echo 'selected';
                                                                                                                                } ?>><?php echo $term->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div id="area01" class="area is-active">
                <div class="area-container">
                    <div class="content-width">
                        <?php
                        //$event_categoryがあるなら、そのタームに基づいてクエリを設定
                        $tax_query = array();
                        if ($event_category) {
                            $tax_query = array(
                                array(
                                    'taxonomy' => 'event_category',
                                    'field'    => 'slug',
                                    'terms'    => $event_category,
                                ),
                            );
                        }
                        if ($event_tag) {
                            $tax_query[] = array(
                                'taxonomy' => 'event_tag',
                                'field'    => 'slug',
                                'terms'    => $event_tag,
                            );
                        }
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'paged' => $paged,
                            'post_type' => 'event', // 投稿タイプを指定
                            'posts_per_page' => 9, // 表示する投稿数を指定
                            //'category_name' => 'news', // カテゴリースラッグを指定
                            //taxonomyでevent_tagを指定し、fieldでslugを指定、termsで$event_tagを指定
                            'tax_query' => $tax_query,
                        );
                        ?>
                        <?php $the_query = new WP_Query($args); ?>
                        <div class="sec01-col-main">
                            <ul>
                                <?php if ($the_query->have_posts()) : ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <?php
                                        $event_category = get_the_terms(get_the_ID(), 'event_category');
                                        $event_start_date = get_field('event_start_date'); // 開始日
                                        $is_hot = get_field('hot'); // HOT! フラグ
                                        ?>
                                        <li>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if ($is_hot) : ?>
                                                    <span class="hot"><?php echo $is_hot; ?></span>
                                                <?php endif; ?>
                                                <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                                <div class="img img-event">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                    <?php else : ?>
                                                        <?php if ($event_category && !is_wp_error($event_category)) : ?>
                                                            <?php
                                                            // カテゴリーに応じたデフォルト画像を設定
                                                            $category_slug = $event_category[0]->slug;
                                                            $category_slug_parent = '';
                                                            //$event_category[0]の親カテゴリーを取得
                                                            //var_dump($event_category[0]);
                                                            if ($event_category[0]->parent) {
                                                                $parent_term = get_term($event_category[0]->parent, 'event_category');
                                                                if ($parent_term && !is_wp_error($parent_term)) {
                                                                    $category_slug_parent_id = $parent_term->term_id;
                                                                }
                                                            }
                                                            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-default.jpg'; // デフォルト画像

                                                            if ($category_slug === 'information' || $category_slug_parent === 'information') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-red.jpg';
                                                            } elseif ($category_slug === 'event' || $category_slug_parent === 'event') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-green.jpg';
                                                            } elseif ($category_slug === 'food' || $category_slug_parent === 'food') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-yellow.jpg';
                                                            } elseif ($category_slug === 'relax' || $category_slug_parent === 'relax') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-blue.jpg';
                                                            } elseif ($category_slug === 'tokiwa') {
                                                            }
                                                            ?>
                                                            <img src="<?php echo esc_url($default_image_url); ?>" alt="<?php the_title(); ?>">
                                                        <?php else : ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-default.jpg" alt="<?php the_title(); ?>">
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="text">
                                                    <div class="text-info">
                                                        <?php
                                                        if ($category_slug === 'information' || $category_slug_parent === 'information') {
                                                            $cats_class = 'category-red';
                                                        } elseif ($category_slug === 'event' || $category_slug_parent === 'event') {
                                                            $cats_class = 'category-green';
                                                        } elseif ($category_slug === 'food' || $category_slug_parent === 'food') {
                                                            $cats_class = 'category-yellow';
                                                        } elseif ($category_slug === 'relaxation' || $category_slug_parent === 'relaxation') {
                                                            $cats_class = 'category-blue';
                                                        }
                                                        ?>
                                                        <div class="text-info-cat">
                                                            <span class="category <?php echo esc_attr($cats_class); ?> cat-<?php echo esc_attr($category_slug); ?>"><?php echo esc_html($event_category[0]->name); ?></span>
                                                        </div>
                                                        <div class="text-info-term">
                                                            <span class="term"><?php echo $event_start_date; ?></span>
                                                        </div>

                                                    </div>
                                                    <h3><?php the_title(); ?></h3>
                                                </div>
                                            </a>
                                        </li>

                                    <?php endwhile; ?>

                                    <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                    <p class="text-base">投稿が見つかりませんでした。</p>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="content-width">
                        <?php custom_pagination($the_query); ?>
                    </div>
                </div>
            </div>


        </div>


    </section>
    <?php get_template_part('inc/inc-bnr-full'); ?>
    <?php get_template_part('inc/inc-contact'); ?>
</main>
<?php get_footer(); ?>