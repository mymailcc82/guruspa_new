<?php

add_filter('show_admin_bar', '__return_false');

//アイキャッチ
add_theme_support('post-thumbnails');


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
}
add_action('init', 'create_post_type');


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
