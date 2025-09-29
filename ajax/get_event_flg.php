<?php
// wp 関数が使えるようにする（path は環境に合わせて）
require_once('../../../../wp-load.php');

// JSON ヘッダ
header('Content-Type: application/json; charset=utf-8');


$today = date('Y-m-d 00:00:00'); // 例: "2025-09-28 00:00:00"

$days = days_from_today_for_months();
$days_flg = [];
foreach ($days as $day) {
    $now_day = $day['y'] . '-' . $day['m'] . '-' . $day['d'] . ' 00:00:00';
    $now_day_y_m_d = $day['y'] . '-' . $day['m'] . '-' . $day['d'];

    $args = [
        'post_type' => 'event',
        'posts_per_page' => 1,
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

    $days_flg[$now_day_y_m_d] = !empty($the_query->posts) ? '1' : '0';
    // クエリリセット
    wp_reset_postdata();
}









// JSON 出力（必要なら詳細な投稿情報を追加）
echo json_encode([
    'days_flg' => $days_flg,
], JSON_UNESCAPED_UNICODE);
