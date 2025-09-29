<?php

add_filter('show_admin_bar', '__return_false');

//アイキャッチ
add_theme_support('post-thumbnails');

//archiveの一覧を3件ずつに設定
function set_posts_per_page($query)
{
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }

    if (is_post_type_archive('event') || is_tax('event_category') || is_tax('event_tag')) {
        $query->set('posts_per_page', 9);
        return;
    }
    if (is_archive()) {
        $query->set('posts_per_page', 8);
        return;
    }
}
add_action('pre_get_posts', 'set_posts_per_page');

//イベント情報のカスタム投稿作成
function create_post_type()
{
    register_post_type(
        'event', // 投稿タイプ名の定義
        array(
            'labels' => array(
                'name' => __('イベント情報'), // 管理画面上の表示名
                'singular_name' => __('event') // 管理画面上の表示名
            ),
            'public' => true, // 投稿タイプをpublicにするかどうか
            'has_archive' => true, // アーカイブページを有効にするかどうか
            'menu_position' => 5, // 管理画面上のメニューの位置
            'menu_icon' => 'dashicons-calendar', // 管理画面上のメニューのアイコン
            'supports' => array('title', 'editor', 'thumbnail'), // 投稿タイプでサポートする機能
            'rewrite' => array('slug' => 'event'), // パーマリンクのスラッグを指定
        )
    );
    //categoryのタクソノミーを追加
    register_taxonomy(
        'event_category', // タクソノミー名の定義
        'event', // 投稿タイプ名の定義
        array(
            'hierarchical' => true, // 階層構造を持つかどうか
            'labels' => array(
                'name' => 'イベントカテゴリー', // 管理画面上の表示名
                'singular_name' => 'イベントカテゴリー', // 管理画面上の表示名
                'search_items' => 'イベントカテゴリーを検索', // 管理画面上の表示名
                'all_items' => 'すべてのイベントカテゴリー', // 管理画面上の表示名
                'parent_item' => '親イベントカテゴリー', // 管理画面上の表示名
                'parent_item_colon' => '親イベントカテゴリー:', // 管理画面上の表示名
                'edit_item' => 'イベントカテゴリーを編集', // 管理画面上の表示名
                'update_item' => 'イベントカテゴリーを更新', // 管理画面上の表示名
                'add_new_item' => '新規イベントカテゴリーを追加', // 管理画面上の表示名
                'new_item_name' => '新規イベントカテゴリー名', // 管理画面上の表示名
                'menu_name' => 'イベントカテゴリー', // 管理画面上の表示名
            ),
            'show_admin_column' => true, // 管理画面の投稿一覧にタクソノミーを表示するかどうか
            'rewrite' => array('slug' => 'event_category'), // パーマリンクのスラッグを指定
        )
    );
    register_taxonomy(
        'event_tag', // タクソノミー名の定義
        'event', // 投稿タイプ名の定義
        array(
            'hierarchical' => true, // 階層構造を持つかどうか
            'labels' => array(
                'name' => 'イベント期間', // 管理画面上の表示名
                'singular_name' => 'イベント期間', // 管理画面上の表示名
                'search_items' => 'イベント期間', // 管理画面上の表示名
                'all_items' => 'イベント期間', // 管理画面上の表示名
                'parent_item' => '親イベント期間', // 管理画面上の表示名
                'parent_item_colon' => '親イベント期間:', // 管理画面上の表示名
                'edit_item' => 'イベント期間を編集', // 管理画面上の表示名
                'update_item' => 'イベント期間を更新', // 管理画面上の表示名
                'add_new_item' => '新規イベント期間を追加', // 管理画面上の表示名
                'new_item_name' => '新規イベント期間名', // 管理画面上の表示名
                'menu_name' => 'イベント期間', // 管理画面上の表示名
            ),
            'show_admin_column' => true, // 管理画面の投稿一覧にタクソノミーを表示するかどうか
            'rewrite' => array('slug' => 'event_tag'), // パーマリンクのスラッグを指定
        )
    );
}
add_action('init', 'create_post_type');

//イベントスケジュールのカスタム投稿作成
function create_post_type_event_schedule()
{
    register_post_type(
        'schedule', // 投稿タイプ名の定義
        array(
            'labels' => array(
                'name' => __('イベントスケジュール'), // 管理画面上の表示名
                'singular_name' => __('schedule') // 管理画面上の表示名
            ),
            'public' => true, // 投稿タイプをpublicにするかどうか
            'has_archive' => true, // アーカイブページを有効にするかどうか
            'menu_position' => 5, // 管理画面上のメニューの位置
            'menu_icon' => 'dashicons-calendar-alt', // 管理画面上のメニューのアイコン
            'supports' => array('title', 'thumbnail'), // 投稿タイプでサポートする機能
            'rewrite' => array('slug' => 'schedule'), // パーマリンクのスラッグを指定
        )
    );
}
add_action('init', 'create_post_type_event_schedule');



//faqのカスタム投稿作成
function create_post_type_faq()
{
    register_post_type(
        'faq', // 投稿タイプ名の定義
        array(
            'labels' => array(
                'name' => __('FAQ'), // 管理画面上の表示名
                'singular_name' => __('faq') // 管理画面上の表示名
            ),
            'public' => true, // 投稿タイプをpublicにするかどうか
            'has_archive' => true, // アーカイブページを有効にするかどうか
            'menu_position' => 5, // 管理画面上のメニューの位置
            'menu_icon' => 'dashicons-editor-help', // 管理画面上のメニューのアイコン
            'supports' => array('title', 'editor'), // 投稿タイプでサポートする機能
            'rewrite' => array('slug' => 'faq'), // パーマリンクのスラッグを指定
        )
    );
    //categoryのタクソノミーを追加
    register_taxonomy(
        'faq_category', // タクソノミー名の定義
        'faq', // 投稿タイプ名の定義
        array(
            'hierarchical' => true, // 階層構造を持つかどうか
            'labels' => array(
                'name' => 'FAQカテゴリー', // 管理画面上の表示名
                'singular_name' => 'FAQカテゴリー', // 管理画面上の表示名
                'search_items' => 'FAQカテゴリーを検索', // 管理画面上の表示名
                'all_items' => 'すべてのFAQカテゴリー', // 管理画面上の表示名
                'parent_item' => '親FAQカテゴリー', // 管理画面上の表示名
                'parent_item_colon' => '親FAQカテゴリー:', // 管理画面上の表示名
                'edit_item' => 'FAQカテゴリーを編集', // 管理画面上の表示名
                'update_item' => 'FAQカテゴリーを更新', // 管理画面上の表示名
                'add_new_item' => '新規FAQカテゴリーを追加', // 管理画面上の表示名
                'new_item_name' => '新規FAQカテゴリー名', // 管理画面上の表示名
                'menu_name' => 'FAQカテゴリー', // 管理画面上の表示名
            ),
            'show_admin_column' => true, // 管理画面の投稿一覧にタクソノミーを表示するかどうか
            'rewrite' => array('slug' => 'faq_category'), // パーマリンクのスラッグを指定
        )
    );
}
add_action('init', 'create_post_type_faq');





//ページネーション設定
function custom_pagination($the_query, $pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1;

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    if ($pages == '') {
        $pages = $the_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo "<div class='pagination'>";

        // Display "First" button
        if ($paged > 1) {
            echo "<a href='" . get_pagenum_link(1) . "' class='first'><i class='fa-solid fa-angles-left'></i></a>";
        }


        // Display "Previous" button
        if ($paged > 1) {
            echo "<a href='" . get_pagenum_link($paged - 1) . "' class='previous'><i class='fa-solid fa-angle-left'></i></a>";
        } else {
        }


        // Determine the range of page numbers to display
        $start = max(1, $paged - $range);
        $end = min($pages, $paged + $range);

        // Ensure at least 5 page numbers are displayed
        if ($end - $start < 3) {
            if ($start == 1) {
                $end = min(4, $pages);
            } elseif ($end == $pages) {
                $start = max(1, $pages - 2);
            }
        }

        // Display page numbers
        for ($i = $start; $i <= $end; $i++) {
            echo ($paged == $i) ? "<span class='current'>" . $i . "</span>" : "<a href='" . get_pagenum_link($i) . "' class='inactive' >" . $i . "</a>";
        }

        // Display "Next" button
        if ($paged < $pages) {
            echo "<a href='" . get_pagenum_link($paged + 1) . "' class='next'><i class='fa-solid fa-angle-right'></i></a>";
        } else {
        }


        // Display "Last" button
        if ($paged < $pages)
            echo "<a href='" . get_pagenum_link($pages) . "' class='last'><i class='fa-solid fa-angles-right'></i></a>";

        echo "</div>\n";
    }
}



/**
 * 今日から指定した月数先までの日配列を作る
 *
 * @param int $months  何ヶ月先まで（デフォルト 1）
 * @param string $tz   タイムゾーン（デフォルト 'Asia/Tokyo'）
 * @return array       ['YYYY-MM-DD' => ['m'=>月, 'd'=>日, 'week' => 'sat.'], ...]
 */
function days_from_today_for_months($months = 1, $tz = 'Asia/Tokyo')
{
    $tzObj = new DateTimeZone($tz);
    $start = new DateTime('now', $tzObj);
    // 終端（含む） = 今日 + $months month
    $end = (clone $start)->modify("+{$months} month");

    $interval = new DateInterval('P1D');
    // DatePeriod の第3引数は排他的なので、終端を含めたければ +1 day する
    $period = new DatePeriod($start, $interval, (clone $end)->modify('+1 day'));

    $out = [];
    foreach ($period as $dt) {
        $key = $dt->format('Y-m-d'); // 重複を避けるためフル日付をキーに
        $out[$key] = [
            'y'   => (int)$dt->format('Y'),
            'm'    => (int)$dt->format('n'),
            'd'    => (int)$dt->format('j'),
            'week' => strtolower($dt->format('D')) . '.', // ex: "sat."
            'week_class' => strtolower($dt->format('D')) // ex: "sat."
        ];
    }

    return $out;
}



function my_author_posts_where($where)
{
    $where = str_replace("meta_key = 'event_loop_$", "meta_key LIKE 'event_loop_%", $where);
    return $where;
}
add_filter('posts_where', 'my_author_posts_where');



//goodsのカスタム投稿作成
function create_post_type_goods()
{
    register_post_type(
        'goods', // 投稿タイプ名の定義
        array(
            'labels' => array(
                'name' => __('商品'), // 管理画面上の表示名
                'singular_name' => __('goods') // 管理画面上の表示名
            ),
            'public' => true, // 投稿タイプをpublicにするかどうか
            'has_archive' => true, // アーカイブページを有効にするかどうか
            'menu_position' => 5, // 管理画面上のメニューの位置
            'menu_icon' => 'dashicons-cart', // 管理画面上のメニューのアイコン
            'supports' => array('title', 'thumbnail'), // 投稿タイプでサポートする機能
            'rewrite' => array('slug' => 'goods'), // パーマリンクのスラッグを指定
        )
    );

    //goods_categoryのタクソノミーを追加
    register_taxonomy(
        'goods_category', // タクソノミー名の定義
        'goods', // 投稿タイプ名の定義
        array(
            'hierarchical' => true, // 階層構造を持つかどうか
            'labels' => array(
                'name' => '商品カテゴリー', // 管理画面上の表示名
                'singular_name' => '商品カテゴリー', // 管理画面上の表示名
                'search_items' => '商品カテゴリーを検索', // 管理画面上の表示名
                'all_items' => 'すべての商品カテゴリー', // 管理画面上の表示名
                'parent_item' => '親商品カテゴリー', // 管理画面上の表示名
                'parent_item_colon' => '親商品カテゴリー:', // 管理画面上の表示名
                'edit_item' => '商品カテゴリーを編集', // 管理画面上の表示名
                'update_item' => '商品カテゴリーを更新', // 管理画面上の表示名
                'add_new_item' => '新規商品カテゴリーを追加', // 管理画面上の表示名
            ),
            'show_admin_column' => true, // 管理画面の投稿一覧にタクソノミーを表示するかどうか
            'rewrite' => array('slug' => 'goods_category'), // パーマリンクのスラッグを指定
        )
    );
    //goods_statusのタクソノミーを追加
    register_taxonomy(
        'goods_status', // タクソノミー名の定義
        'goods', // 投稿タイプ名の定義
        array(
            'hierarchical' => true, // 階層構造を持つかどうか
            'labels' => array(
                'name' => '商品ステータス', // 管理画面上の表示名
                'singular_name' => '商品ステータス', // 管理画面上の表示名
                'search_items' => '商品ステータスを検索', // 管理画面上の表示名
                'all_items' => 'すべての商品ステータス', // 管理画面上の表示名
                'parent_item' => '親商品ステータス', // 管理画面上の表示名
                'parent_item_colon' => '親商品ステータス:', // 管理画面上の表示名
                'edit_item' => '商品ステータスを編集', // 管理画面上の表示名
                'update_item' => '商品ステータスを更新', // 管理画面上の表示名
                'add_new_item' => '新規商品ステータスを追加', // 管理画面上の表示名
            ),
            'show_admin_column' => true, // 管理画面の投稿一覧にタクソノミーを表示するかどうか
            'rewrite' => array('slug' => 'goods_status'), // パーマリンクのスラッグを指定
        )
    );
}
add_action('init', 'create_post_type_goods');
