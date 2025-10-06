<?php
// wp 関数が使えるようにする（path は環境に合わせて）
require_once('../../../../wp-load.php');

// JSON ヘッダ
header('Content-Type: application/json; charset=utf-8');

$get_category = isset($_GET['event_tag']) ? $_GET['event_tag'] : ''; // 例: "fixed" or "limited"
if ($get_category === 'all') {
    $get_category = '';
}
$page_ajax = isset($_GET['page_ajax']) ? $_GET['page_ajax'] : '';
$args = [
    'post_type' => 'post',
    'posts_per_page' => 9,
    'paged' => intval($page_ajax),
    'category_name' => $get_category // カテゴリースラッグを指定
];
$the_query = new WP_Query($args);
$post_data = [];
if (! $the_query->have_posts()) {
    // 投稿が見つからない場合は空の配列を返す
    echo json_encode([
        'post_data' => [],
    ], JSON_UNESCAPED_UNICODE);
    exit;
}
//postのトータル数を取得
$post_count = $the_query->found_posts;

while ($the_query->have_posts()) {
    $the_query->the_post();
    $post_id = get_the_ID();
    $post_data_row["id"] = get_the_ID();
    $post_data_row["title"] = get_the_title();
    $post_data_row["link"] = get_permalink();
    //category情報を追加
    $cats = get_the_category();
    if (! empty($cats)) {
        $post_data_row["category_name"] = $cats[0]->name;
        $post_data_row["category_slug"] = $cats[0]->slug;
    } else {
        $post_data_row["category_name"] = '';
        $post_data_row["category_slug"] = '';
    }
    //サムネイル情報を追加
    if (has_post_thumbnail()) {
        $thumbnail_id = get_post_thumbnail_id($post_id);
        $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'medium');
        $post_data_row["thumbnail"] = $thumbnail[0];
    } else {
        $post_data_row["thumbnail"] = get_template_directory_uri() . '/assets/img/archive/archive-default.jpg'; // デフォルト画像
    }
    //日付情報を追加
    $post_data_row["date"] = get_the_date('Y.m.d');

    $post_data[] = $post_data_row;
}
//$post_dataを配列で返す
// クエリリセット
wp_reset_postdata();
// JSON 出力（必要なら詳細な投稿情報を追加）
echo json_encode([
    'post_data' => $post_data,
    'post_count' => $post_count,
    'page_ajax' => intval($page_ajax),
    'event_category' => $event_category,
    'event_tag' => $event_tag


], JSON_UNESCAPED_UNICODE);
exit;
