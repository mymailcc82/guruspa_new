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
    $post_data_row["thumbnail"] = get_the_post_thumbnail_url($post_id, 'full');
    $post_data_row["event_start_date"] = get_field('event_start_date', false, false);
    $post_data_row["event_all_day_flg"] = get_field('event_all_day_flg');

    //event_categoryのタームを取得
    $category_event = get_the_terms($post_id, 'event_category');
    $category_name = $category_event[0]->name;
    $post_data_row["category_name"] = $category_name;
    if ($category_event && !is_wp_error($category_event)) {
        $post_data_row["event_category"] = $category_event[0]->name;
        $category_slug = $category_event[0]->slug;
    } else {
        $post_data_row["event_category"] = '';
        $category_slug = '';
    }

    if ($category_slug === 'information') {
        $cats_class = 'category-red';
    } elseif ($category_slug === 'event') {
        $cats_class = 'category-green';
    } elseif ($category_slug === 'food') {
        $cats_class = 'category-yellow';
    }
    $post_data_row["category_class"] = $cats_class;


    if ($post_data_row["thumbnail"] == '') {
        $post_data_row["thumbnail"] = get_template_directory_uri() . '/assets/img/archive/archive-default.jpg';
        if ($category_slug === 'information') {
            $post_data_row["thumbnail"] = get_template_directory_uri() . '/assets/img/archive/archive-red.jpg';
        } elseif ($category_slug === 'event') {
            $post_data_row["thumbnail"] = get_template_directory_uri() . '/assets/img/archive/archive-green.jpg';
        } elseif ($category_slug === 'food') {
            $post_data_row["thumbnail"] = get_template_directory_uri() . '/assets/img/archive/archive-yellow.jpg';
        }
    }
    $post_data[] = $post_data_row;
}


// クエリリセット
wp_reset_postdata();


// JSON 出力（必要なら詳細な投稿情報を追加）
echo json_encode([
    'post_data' => $post_data,
], JSON_UNESCAPED_UNICODE);
