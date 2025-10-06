<?php
$args = array(
    'post_type' => 'post', // カスタム投稿タイプ名
    'posts_per_page' => 1, // 表示する記事数
    'orderby' => 'date', // 日付でソート
    'order' => 'DESC', // 降順
    'category_name' => 'important', // 特定のカテゴリーを指定する場合
);
$important_title = get_field('important_title', 111); // 固定ページIDを指定
?>
<?php
$the_query = new WP_Query($args);
if ($the_query->have_posts()) : ?>
    <div class="top-news">
        <ul>
            <li><?php echo $important_title; ?></li>
            <li>
                <?php
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <a href="<?php the_permalink(); ?>">
                        <h3><time><?php the_time('Y.m.d'); ?> 更新</time>
                            <span><?php the_title(); ?></span>
                        </h3>
                        <i></i>
                    </a>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </li>
        </ul>
    </div>
<?php endif; ?>