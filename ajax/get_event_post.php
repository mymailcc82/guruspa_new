<?php
// wp 関数が使えるようにする（path は環境に合わせて）
require_once('../../../../wp-load.php');

// JSON ヘッダ
header('Content-Type: application/json; charset=utf-8');


$now_day = $_GET['today']; // 例: "2025-09-28 00:00:00"
$post_data = [];

$args = [
    'post_type' => 'event',
    'posts_per_page' => -1,
    'meta_query' => [
        'relation' => 'OR',

        // グループA: sys_start_day <= $today AND sys_finish_day >= $today
        [
            'relation' => 'AND',
            [
                'key'     => 'sys_start_day',
                'value'   => $now_day,
                'compare' => '<=',
                'type'    => 'DATE',
            ],
            [
                'key'     => 'sys_finish_day',
                'value'   => $now_day,
                'compare' => '>=',
                'type'    => 'DATE',
            ],
        ],

        // グループB: event_loop_*_day が $today と一致する（meta_key にワイルドカードを使う）
        [
            'key' => 'event_loop_$_day', // 例：'prices'
            'value' => $now_day,
            'compare' => '=', // データベースでどのように比較するか（詳細は後述）
        ]
    ],
];

// クエリ実行
$the_query = new WP_Query($args);

if (! $the_query->have_posts()) {
    // 投稿が見つからない場合は空の配列を返す
    echo json_encode([
        'post_data' => [],
    ], JSON_UNESCAPED_UNICODE);
    exit;
}
while ($the_query->have_posts()) {
    $the_query->the_post();
    $post_id = get_the_ID();
    $post_data_row["id"] = get_the_ID();
    $post_data_row["title"] = get_the_title();
    $post_data_row["link"] = get_permalink();
    $post_data_row["is_hot"] = get_field("hot");
    $post_data_row["event_start_date"] = get_field('event_start_date', false, false);
    $taxonomy_event_category = get_the_terms($post_id, 'event_category');
    $category_slug = $taxonomy_event_category[0]->slug;
    $category_slug_parent = '';
    //$event_category[0]の親カテゴリーを取得
    //var_dump($event_category[0]);
    if ($taxonomy_event_category[0]->parent) {
        $parent_term = get_term($taxonomy_event_category[0]->parent, 'event_category');
        if ($parent_term && !is_wp_error($parent_term)) {
            $category_slug_parent_id = $parent_term->term_id;
            $category_slug_parent = $parent_term->slug;
        }
    }
    if (has_post_thumbnail()) {
        $post_data_row["thumbnail"] = get_the_post_thumbnail_url($post_id, 'full');
        $post_data_row["thumbnail_sp"] = get_the_post_thumbnail_url($post_id, 'medium');
    } else {
        $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-default.webp'; // デフォルト画像
        $default_image_url_sp = get_template_directory_uri() . '/assets/img/archive/archive-default_sp.webp'; // デフォルト画像

        if ($category_slug === 'information' || $category_slug_parent === 'information') {
            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-red.webp';
            $default_image_url_sp = get_template_directory_uri() . '/assets/img/archive/archive-red_sp.webp';
        } elseif ($category_slug === 'event' || $category_slug_parent === 'event') {
            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-green.webp';
            $default_image_url_sp = get_template_directory_uri() . '/assets/img/archive/archive-green_sp.webp';
        } elseif ($category_slug === 'food' || $category_slug_parent === 'food') {
            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-yellow.webp';
            $default_image_url_sp = get_template_directory_uri() . '/assets/img/archive/archive-yellow_sp.webp';
        } elseif ($category_slug === 'relax' || $category_slug_parent === 'relax') {
            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-blue.webp';
            $default_image_url_sp = get_template_directory_uri() . '/assets/img/archive/archive-blue_sp.webp';
        } elseif ($category_slug === 'tokiwa') {
        }
        $post_data_row["thumbnail"] = $default_image_url;
        $post_data_row["thumbnail_sp"] = $default_image_url_sp;
    }

    $cats_class = '';
    if ($category_slug === 'information' || $category_slug_parent === 'information') {
        $cats_class = 'category-red';
    } elseif ($category_slug === 'event' || $category_slug_parent === 'event') {
        $cats_class = 'category-green';
    } elseif ($category_slug === 'food' || $category_slug_parent === 'food') {
        $cats_class = 'category-yellow';
    } elseif ($category_slug === 'relax' || $category_slug_parent === 'relax') {
        $cats_class = 'category-blue';
    }
    $post_data_row["category_class"] = $cats_class;


    $categories = get_the_terms($post_id, 'event_category');
    if (! empty($categories) && ! is_wp_error($categories)) {
        $post_data_row["category_name"] = $categories[0]->name;
        $post_data_row["category_slug"] = $categories[0]->slug;
    } else {
        $post_data_row["category_name"] = '';
        $post_data_row["category_slug"] = '';
    }
    $post_data_row["start_day"] = get_post_meta($post_id, 'sys_start_day', true);
    $post_data_row["finish_day"] = get_post_meta($post_id, 'sys_finish_day', true);
    $post_data[] = $post_data_row;
}


// クエリリセット
wp_reset_postdata();


// JSON 出力（必要なら詳細な投稿情報を追加）
echo json_encode([
    'post_data' => $post_data,
], JSON_UNESCAPED_UNICODE);
