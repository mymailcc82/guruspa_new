<?php
//時間を東京に設定
date_default_timezone_set('Asia/Tokyo');

add_filter('show_admin_bar', '__return_false');

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

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
    $now = new DateTime('now', $tzObj);

    // ここで判定：0-3時は「前日扱い」、4時以降は「当日扱い」
    $hour = (int)$now->format('G'); // 0-23
    if ($hour < 4) {
        // 前日を開始日にする（かつ時刻は 00:00:00 に揃える）
        $start = (clone $now)->modify('-1 day')->setTime(0, 0, 0);
    } else {
        // 当日を開始日にする（時刻は 00:00:00）
        $start = (clone $now)->setTime(0, 0, 0);
    }

    // 終端（含む） = 開始日 + $months 月（終端の時刻も 00:00:00）
    $end = (clone $start)->modify("+{$months} month");

    // 1日刻みで回す（終端を含めるため +1 day）
    $interval = new DateInterval('P1D');
    $period = new DatePeriod($start, $interval, (clone $end)->modify('+1 day'));

    $out = [];
    foreach ($period as $dt) {
        $key = $dt->format('Y-m-d'); // 重複を避けるためフル日付をキーに
        $out[$key] = [
            'y'          => (int)$dt->format('Y'),
            'm'          => (int)$dt->format('n'),
            'd'          => (int)$dt->format('j'),
            'week'       => strtolower($dt->format('D')) . '.',    // ex: "sat."
            'week_class' => strtolower($dt->format('D')),         // ex: "sat"
            'time'       => $dt->format('H:i:s'),                // 基本は "00:00:00"
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


add_action('init', 'recruit_custom_post_type');
function recruit_custom_post_type()
{
    // カスタム投稿タイプ「求人情報」を登録
    register_post_type('recruit', [
        'labels' => [
            'name' => '求人情報',
            'singular_name' => '求人情報ページ',
            'add_new' => '新しい求人情報を追加',
            'add_new_item' => '新しい求人情報を追加',
            'edit_item' => '求人情報を編集',
            'new_item' => '新しい求人情報',
            'view_item' => '求人情報を表示',
            'search_items' => '求人情報を検索',
            'not_found' => '求人情報が見つかりません',
            'not_found_in_trash' => 'ゴミ箱に求人情報が見つかりません',
            'all_items' => 'すべての求人情報',
            'archives' => '求人情報のアーカイブ',
            'insert_into_item' => '求人情報に挿入',
            'uploaded_to_this_item' => 'この求人情報にアップロード',
            'filter_items_list' => '求人情報のリストをフィルター',
            'items_list_navigation' => '求人情報のリストナビゲーション',
            'items_list' => '求人情報のリスト',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        //'taxonomies' => ['recruit_type'],
    ]);

    // カスタムタクソノミー「カテゴリー」
    /*
    register_taxonomy('recruit_type', 'recruit', [
        'label' => 'カテゴリー',
        'show_in_rest' => true,
        'hierarchical' => true,
        'public' => true,
        'show_admin_column' => true,
    ]);
    */

    // 勤務地タクソノミー
    register_taxonomy('work_location', 'recruit', [
        'label' => '勤務地',
        'show_in_rest' => true,
        'hierarchical' => true,
        'public' => true,
        'show_admin_column' => true,
    ]);

    // 雇用形態タクソノミー
    register_taxonomy('employment_status', 'recruit', [
        'label' => '雇用形態',
        'show_in_rest' => true,
        'hierarchical' => true,
        'public' => true,
        'show_admin_column' => true,
    ]);

    // 勤務開始タクソノミー
    register_taxonomy('start_work', 'recruit', [
        'label' => '勤務開始',
        'show_in_rest' => true,
        'hierarchical' => true,
        'public' => true,
        'show_admin_column' => true,
    ]);

    // 業務内容タクソノミー
    register_taxonomy('duties', 'recruit', [
        'label' => '業務内容',
        'show_in_rest' => true,
        'hierarchical' => true,
        'public' => true,
        'show_admin_column' => true,
    ]);

    // その他タクソノミー
    register_taxonomy('others', 'recruit', [
        'label' => 'その他',
        'show_in_rest' => true,
        'hierarchical' => true,
        'public' => true,
        'show_admin_column' => true,
    ]);
}






//エントリーの募集職種にカスタム投稿のタイトルを追加
add_filter('mwform_choices_mw-wp-form-531', function ($choices, $atts) {
    // フォーム内の特定のname属性を確認
    if ($atts['name'] === 'occupatation') {
        // recruit投稿タイプの投稿を取得
        $posts = get_posts([
            'post_type' => 'recruit',
            'posts_per_page' => -1, // すべての投稿を取得
            'post_status' => 'publish', // 公開済みのみ
        ]);

        // 投稿タイトルをchoicesに追加
        $choices = [];
        foreach ($posts as $post) {
            $choices[] = $post->post_title;
        }
    }
    return $choices;
}, 10, 2);


function add_yubinbango_class()
{
    echo <<<EOC
<script>
  jQuery('.mw_wp_form form').addClass('h-adr');
</script>
EOC;
}
add_action('wp_print_footer_scripts', 'add_yubinbango_class');



function filter_recruit_posts()
{
    $filter_type = $_POST['filter_type'];
    $post_id = $_POST['post_id'];

    $tax_query = array('relation' => 'OR');
    $taxonomies = ['work_location', 'employment_status', 'start_work', 'duties', 'others'];

    if ($filter_type) {
        $terms = get_the_terms($post_id, $filter_type);
        if ($terms) {
            $term_slugs = wp_list_pluck($terms, 'slug');
            $tax_query[] = [
                'taxonomy' => $filter_type,
                'field'    => 'slug',
                'terms'    => $term_slugs,
            ];
        }
    } else {
        foreach ($taxonomies as $taxonomy) {
            $terms = get_the_terms($post_id, $taxonomy);
            if ($terms) {
                $term_slugs = wp_list_pluck($terms, 'slug');
                $tax_query[] = [
                    'taxonomy' => $taxonomy,
                    'field'    => 'slug',
                    'terms'    => $term_slugs,
                ];
            }
        }
    }

    $args = [
        'post_type'      => 'recruit',
        'posts_per_page' => 10,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'post__not_in'   => [$post_id],
        'tax_query'      => $tax_query,
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
?>
            <div class="recruit_list">
                <a href="<?php the_permalink(); ?>">
                    <div class="recruit_category">
                        <?php
                        foreach ($taxonomies as $taxonomy) {
                            $terms = get_the_terms(get_the_ID(), $taxonomy);
                            if ($terms && !is_wp_error($terms)) :
                                foreach ($terms as $term) :
                        ?>
                                    <span class="recruit_category_wrap"><?php echo esc_html($term->name); ?></span>
                        <?php
                                endforeach;
                            endif;
                        }
                        ?>
                    </div>
                    <h3><?php the_title(); ?></h3>
                    <?php /*
                    <time><?php echo get_the_date('Y.m.d'); ?></time>
					*/ ?>
                </a>
            </div>
<?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>現在、求人情報はありません。</p>';
    endif;

    wp_die();
}

add_action('wp_ajax_filter_recruit_posts', 'filter_recruit_posts');
add_action('wp_ajax_nopriv_filter_recruit_posts', 'filter_recruit_posts');


function add_front_page_admin_menu()
{
    $front_page_id = get_option('page_on_front'); // フロントページのIDを取得
    if ($front_page_id) {
        add_menu_page(
            'フロントページ編集', // メニュー名
            'フロントページ', // サイドメニューに表示される名前
            'edit_pages', // 権限（編集者以上）
            'post.php?post=' . $front_page_id . '&action=edit', // リンク先
            '',
            'dashicons-admin-page', // アイコン（お好みで変更）
            3 // メニューの表示位置（3: 「投稿」の下あたり）
        );
    }
}
add_action('admin_menu', 'add_front_page_admin_menu');

/*
add_filter('mwform_redirect_url_mw-wp-form-52', function ($url, $data) {
    $params = ['occupation', 'type', 'location', 'employment', 'start_work', 'duties', 'others'];
    $query_args = [];

    foreach ($params as $param) {
        if (!empty($_GET[$param])) {
            // 配列の場合はカンマ区切りの文字列に変換
            if (is_array($_GET[$param])) {
                $param_value = implode(',', array_map('sanitize_text_field', $_GET[$param]));
            } else {
                $param_value = sanitize_text_field($_GET[$param]);
            }
            // パラメータを追加
            $query_args[$param] = rawurlencode($param_value);
        }
    }

    // すべてのパラメータを一括で追加
    if (!empty($query_args)) {
        $url = add_query_arg($query_args, $url);
    }

    return $url;
}, 10, 2);

*/
/*
function add_recruit_page_url_to_mail($Mail)
{
    if (!isset($Mail->body)) {
        $Mail->body = ''; // デフォルト値を設定
    }

    // MW WP Form の `$_POST` データを取得
    $form_data = isset($_POST) ? $_POST : [];
    
    if (!empty($form_data['occupatation'])) {
        $occupation_title = sanitize_text_field($form_data['occupatation']);

        // 投稿を取得
        $recruit_post = get_page_by_title($occupation_title, OBJECT, 'recruit');

        if ($recruit_post && isset($recruit_post->ID)) {
            $recruit_url = get_permalink($recruit_post->ID);
            if ($recruit_url) {
                $Mail->body .= "\n\n【関連するページ】\n" . $recruit_url;
            }
        }
    }
    $Mail->subject = "【応募】test";

    return $Mail;
}
add_filter('mwform_admin_mail_mw-wp-form-52', 'add_recruit_page_url_to_mail', 10, 1);
*/

function my_mail($Mail_raw, $values, $Data)
{
    // to, cc, bcc では {キー} は使用できません。
    // $Data->get( 'hoge' ) で送信されたデータが取得できます。
    //$Mail_raw->subject = "受け付けました。"; // 件名を変更
    if (!empty($Data->get('occupatation'))) {
        $occupation_title = sanitize_text_field($Data->get('occupatation'));
        $recruit_post = get_page_by_title($occupation_title, OBJECT, 'recruit');
        if ($recruit_post && isset($recruit_post->ID)) {
            $recruit_url = get_permalink($recruit_post->ID);
            if ($recruit_url) {
                $Mail_raw->body .= "\n\n【関連するページ】\n" . $recruit_url;
            }
        }
    }
    return $Mail_raw;
}
add_filter('mwform_admin_mail_mw-wp-form-531', 'my_mail', 10, 3);


add_filter('mwform_redirect_url_mw-wp-form-531', function ($url, $data) {
    $params_to_copy = ['occupation', 'location', 'employment', 'start_work', 'duties', 'others'];

    foreach ($params_to_copy as $param) {
        if (isset($_GET[$param])) {
            $value = is_array($_GET[$param])
                ? implode(',', array_map('sanitize_text_field', $_GET[$param]))
                : sanitize_text_field($_GET[$param]);

            $encoded_value = rawurlencode($value);

            $url = add_query_arg($param, $encoded_value, $url);
        }
    }

    return $url; // ← htmlspecialchars は不要！
}, 10, 2);


//カスタム投稿menuを追加
function create_post_type_menu()
{
    register_post_type(
        'menu', // 投稿タイプ名の定義
        array(
            'labels' => array(
                'name' => __('メニュー'), // 管理画面上の表示名
                'singular_name' => __('menu') // 管理画面上の表示名
            ),
            'public' => true, // 投稿タイプをpublicにするかどうか
            'has_archive' => true, // アーカイブページを有効にするかどうか
            'menu_position' => 5, // 管理画面上のメニューの位置
            'menu_icon' => 'dashicons-food', // 管理画面上のメニューのアイコン
            'supports' => array('title', 'editor', 'thumbnail'), // 投稿タイプでサポートする機能
            'rewrite' => array('slug' => 'menu'), // パーマリンクのスラッグを指定
        )
    );
    //menu_categoryのタクソノミーを追加
    register_taxonomy(
        'menu_category', // タクソノミー名の定義
        'menu', // 投稿タイプ名の定義
        array(
            'hierarchical' => true, // 階層構造を持つかどうか
            'labels' => array(
                'name' => 'メニューカテゴリー', // 管理画面上の表示名
                'singular_name' => 'メニューカテゴリー', // 管理画面上の表示名
                'search_items' => 'メニューカテゴリーを検索', // 管理画面上の表示名
                'all_items' => 'すべてのメニューカテゴリー', // 管理画面上の表示名
                'parent_item' => '親メニューカテゴリー', // 管理画面上の表示名
                'parent_item_colon' => '親メニューカテゴリー:', // 管理画面上の表示名
                'edit_item' => 'メニューカテゴリーを編集', // 管理画面上の表示名
                'update_item' => 'メニューカテゴリーを更新', // 管理画面上の表示名
                'add_new_item' => '新規メニューカテゴリーを追加', // 管理画面上の表示名
                'new_item_name' => '新規メニューカテゴリー名', // 管理画面上の表示名
                'menu_name' => 'メニューカテゴリー', // 管理画面上の表示名
            ),
            'show_admin_column' => true, // 管理画面の投稿一覧にタクソノミーを表示するかどうか
            'rewrite' => array('slug' => 'menu_category'), // パーマリンクのスラッグを指定
        )
    );
}
add_action('init', 'create_post_type_menu');


//output_price
function output_price($price)
{
    //,や円や¥が入っていても対応
    $price = preg_replace('/[^\d]/', '', $price);
    $price = intval($price);
    if ($price) {
        return '' . number_format($price) . '<em>円</em><span>（税込）</span>';
    }
    return '価格未設定';
}
