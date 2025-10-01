<?php
$mont_data_origin = array(
    '1' => 161,
    '2' => 163,
    '3' => 165,
    '4' => 167,
    '5' => 169,
    '6' => 171,
    '7' => 173,
    '8' => 175,
    '9' => 177,
    '10' => 179,
    '11' => 181,
    '12' => 183,
);
//現在の月を取得
$current_month = date('n');

$mont_data = [];
for ($i = 0; $i < 12; $i++) {
    // 計算は 1..12 の範囲に戻す
    $m = ($current_month + $i - 1) % 12 + 1;
    $key = (string) $m; // 元の配列のキーが文字列なので文字列に変換
    if (isset($mont_data_origin[$key])) {
        $mont_data[$key] = $mont_data_origin[$key];
    }
}


//今月の月と日にちを今日を初めに、昨日を終わりに配列にする
$days = days_from_today_for_months();


?>
<?php get_header(); ?>
<main class="page-main event schedule today">
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
                    <span itemprop="name">本日のイベント</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec">
        <div class="content-width">
            <div class="com-title center com-title-hidden">
                <p>本日のイベント</p>
                <h2 class="">
                    <span class="title">T</span><span class="title">O</span><span class="title">D</span><span class="title">A</span><span class="title">Y</span><span class="title">'</span><span class="title">S</span> <span class="title">E</span><span class="title">V</span><span class="title">E</span><span class="title">N</span><span class="title">T</span>
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
    <section class="sec00">
        <div class="sec00-container">
            <div class="sec00-swiper swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($days as $day): ?>
                        <div class="swiper-slide" data-current-day="<?php echo $day["y"]; ?>-<?php echo $day["m"]; ?>-<?php echo $day["d"]; ?>">
                            <div class="swiper-slide-text">
                                <div class="swiper-slide-text-container swiper-<?php echo $day["week_class"]; ?>">
                                    <?php echo $day["m"]; ?>/<strong><?php echo $day["d"]; ?></strong><br>
                                    <span><?php echo $day["week"]; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="swiper-button-prev swiper-button-prev-00"></div>
            <div class="swiper-button-next swiper-button-next-00"></div>
            <p class="sec00-attention"><i></i>:イベント開催日</p>
        </div>

        <div class="content-width">
            <div class="page-title--has-icon page-title--has-icon--mobile-20">
                <h2><i></i>本日のイベント</h2>
            </div>
            <?php
            // 例: "2025-09-28:00:00:00"
            $now_day = date('Y-m-d 00:00:00');

            $args = array(
                'post_type' => 'event', // 投稿タイプを指定
                'posts_per_page' => 3, // 表示する投稿数を指定
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
            );
            ?>
            <?php $the_query = new WP_Query($args); ?>
            <div class="sec01-col-main">
                <ul id="post_list">
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
                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-default.jpg'; // デフォルト画像

                                                if ($category_slug === 'information') {
                                                    $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-red.jpg';
                                                } elseif ($category_slug === 'event') {
                                                    $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-green.jpg';
                                                } elseif ($category_slug === 'food') {
                                                    $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-yellow.jpg';
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
                                            if ($category_slug === 'information') {
                                                $cats_class = 'category-red';
                                            } elseif ($category_slug === 'event') {
                                                $cats_class = 'category-green';
                                            } elseif ($category_slug === 'food') {
                                                $cats_class = 'category-yellow';
                                            }
                                            ?>
                                            <div class="text-info-cat">
                                                <span class="category <?php echo esc_attr($cats_class); ?>"><?php echo esc_html($event_category[0]->name); ?></span>
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
                        <p>投稿が見つかりませんでした。</p>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>
    <div class="relative">
        <div class="page-deco-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-yellow-top.png" alt="">
        </div>
        <div class="page-deco-container page-deco-container--yellow">
            <section class="sec01">
                <div class="content-width">
                    <div class="page-title-center--has-icon page-title--has-icon--mobile-20">
                        <h2><i></i>月間スケジュール</h2>
                    </div>
                    <div class="sec01-swiper swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($mont_data as $key => $value) : ?>
                                <div class="swiper-slide">
                                    <?php //$valueのpost_idから画像URLを取得
                                    $image_url = get_the_post_thumbnail_url($value, 'full');
                                    ?>
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($key); ?>月のイベントスケジュール">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-prev swiper-button-prev-01"></div>
                        <div class="swiper-button-next swiper-button-next-01"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="sec01-btn">
                        <div class="com-btn-border-black">
                            <a href="<?php echo home_url(); ?>/enjoy/sweating/">発汗エリア(有料エリア)について<i></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sec02">

                <div class="content-width">
                    <div class="page-title--has-icon page-title--has-icon--mobile-20">
                        <h2><i></i>その他イベント案内</h2>
                    </div>
                    <div class="sec06-bottom">
                        <div class="sec06-bottom-col">
                            <div class="sec-01-col-under">
                                <a href="<?php echo home_url(); ?>/event/">
                                    <div class="sec-01-col-under-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/page-bnr-today-img.jpg" alt=""></div>
                                    <div class="sec-01-col-under-title">
                                        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/page-bnr-today-txt.png" alt="EVENT SCHEDULE"><i class="icon-btn"></i></h3>
                                        <p>本日開催しているイベントをチェック！</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="sec06-bottom-col">
                            <div class="sec-01-col-under">
                                <a href="<?php echo home_url(); ?>/schedule/">
                                    <div class="sec-01-col-under-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/page-bnr-event-img.jpg" alt=""></div>
                                    <div class="sec-01-col-under-title">
                                        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/title-event-schedule_v2.png" alt="EVENT SCHEDULE"><i class="icon-btn"></i></h3>
                                        <p>イベントはこちらをチェック！</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <div class="page-bg-deco-bg-bottom-yellow"></div>
    </div>


    <?php get_template_part('inc/inc-contact'); ?>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    //swiper
    const swiper_00 = new Swiper('.sec00-swiper', {
        // Optional parameters
        loop: true,
        slidesPerView: "auto",
        spaceBetween: 0,
        //centeredSlides: true,
        // Navigation arrows


        navigation: {
            nextEl: '.swiper-button-next-00',
            prevEl: '.swiper-button-prev-00',
        },
        on: {
            slideChangeTransitionEnd: function() {
                // 現在の activeになっているdata-current-dayを取得
                var currentDay = this.slides[this.activeIndex].getAttribute('data-current-day');
                //./ajax/get_event_flg.phpにcurrentDayを渡して、イベントがあるかどうかを取得

                $.ajax({
                    url: '<?php echo get_template_directory_uri(); ?>/ajax/get_event_post.php',
                    type: 'GET',
                    data: {
                        today: currentDay
                    },
                    dataType: 'json',
                    //swiper-slideのdata-current-dayと
                    success: function(response) {
                        console.log(response);
                        // post_listの中身をresponse.post_dataで置き換え
                        var postList = $('#post_list');
                        postList.empty(); // 既存の内容をクリア
                        if (response.post_data.length > 0) {
                            response.post_data.forEach(function(post) {
                                console.log(post);
                                var listItem = '<li>' +
                                    '<a href="' + post.link + '">' +
                                    (post.is_hot ? '<span class="hot">' + post.is_hot + '</span>' : '') +
                                    '<span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>' +
                                    '<div class="img img-event">' +
                                    '<img src="' + post.thumbnail + '" alt="' + post.title + '">' +
                                    '</div>' +
                                    '<div class="text">' +
                                    '<div class="text-info">' +
                                    '<div class="text-info-cat">' +
                                    '<span class="category ' + post.category_class + '">' + post.category_name + '</span>' +
                                    '</div>' +
                                    '<div class="text-info-term">' +
                                    '<span class="term">' + post.event_start_date + '</span>' +
                                    '</div>' +
                                    '</div>' +
                                    '<h3>' + post.title + '</h3>' +
                                    '</div>' +
                                    '</a>' +
                                    '</li>';
                                postList.append(listItem);
                            });
                        } else {
                            postList.append('<p class="text-base center">イベントが見つかりませんでした。</p>');
                        }
                    }
                });
            }

        }
        //initの時に実行
        // 現在の active スライド要素
    });

    // Swiper の click イベントを使う方法（推奨）
    swiper_00.on('click', function(swiper, e) {
        // クリックされた DOM ノードから .swiper-slide を探す
        const slideEl = e.target.closest('.swiper-slide');
        if (!slideEl) return;

        // 重複スライドでも正しいインデックスが取れる data 属性
        const realIndexAttr = slideEl.getAttribute('data-swiper-slide-index');
        if (realIndexAttr != null) {
            const realIndex = Number(realIndexAttr);
            // ループを考慮してそのスライドへ移動（active になる）
            swiper.slideToLoop(realIndex, 300); // 300ms のアニメーション
            return;
        }

        // 保険：clickedIndex が使える場合
        if (typeof swiper.clickedIndex === 'number' && swiper.clickedIndex >= 0) {
            swiper.slideToLoop(swiper.clickedIndex, 300);
        }
    });

    //swiper
    const swiper_01 = new Swiper('.sec01-swiper', {
        // Optional parameters
        loop: true,
        slidesPerView: 1,
        spaceBetween: 80,
        centeredSlides: true,


        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next-01',
            prevEl: '.swiper-button-prev-01',
        },

    });

    //読み込み完了後実行
    $(window).on('load', function() {
        $.ajax({
            url: '<?php echo get_template_directory_uri(); ?>/ajax/get_event_flg.php',
            type: 'GET',
            data: {
                //today: currentDay
            },
            dataType: 'json',
            //swiper-slideのdata-current-dayと
            success: function(response) {
                //console.log(response);
                //response.days_flgをループして、data-current-dayと一致する場合、
                //そのswiper-slideにclass active-eventを追加
                $('.sec00-swiper .swiper-slide').each(function() {
                    var currentDay = $(this).data('current-day');
                    if (response.days_flg[currentDay] === '1') {
                        $(this).addClass('active-event');
                    }
                });
            }
        });
    });
</script>
<?php get_footer(); ?>