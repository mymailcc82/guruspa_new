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

//毎日スケジュールの画像を取得
$select_date = '';
if (isset($_GET['date'])) {
    $select_date = $_GET['date'];
    $year = date('Y', strtotime($select_date));
    $month = date('m', strtotime($select_date));
    $day = date('d', strtotime($select_date));
    $w = date('w', strtotime($select_date));
} else {
    $select_date = date('Y-m-d');
    //現在の年取得
    $year = date('Y');
    //現在の月取得
    $month = date('m');
    //現在の日取得
    $day = date('d');
    //曜日取得

    $w = date('w');
}

?>
<?php get_header(); ?>
<main class="page-main event schedule today">
    <div class="page-main-left-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page/page-img-left.webp" alt="">
    </div>
    <div class="page-main-right-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page/page-img-right.webp" alt="">
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
            <div class="com-title com-title--today center com-title-hidden">
                <p>本日のイベント</p>
                <h2 class="">
                    <span class="title">T</span><span class="title">O</span><span class="title">D</span><span class="title">A</span><span class="title">Y</span><span class="title">'</span><span class="title">S</span> <span class="title">E</span><span class="title">V</span><span class="title">E</span><span class="title">N</span><span class="title">T</span>
                    <span class="title title-item-sprout">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                    </span>
                    <span class="title title-item-sun">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.webp" alt="">
                    </span>
                </h2>
            </div>
        </div>
    </section>
    <section class="sec00">
        <div class="sec00-container">
            <div class="sec00-loading">
                <span>Loading...</span>
                <div class="loader">
                    <div class="dot"></div>
                </div>
            </div>
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

        <div class="content-width content-width--mobile-full">
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
                    <div class="swiper swiper-event">
                        <div class="swiper-wrapper">

                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <?php
                                    $event_category = get_the_terms(get_the_ID(), 'event_category');
                                    $event_start_date = get_field('event_start_date'); // 開始日
                                    $is_hot = get_field('hot'); // HOT! フラグ
                                    ?>
                                    <div class="swiper-slide">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if ($is_hot) : ?>
                                                <span class="hot"><?php echo $is_hot; ?></span>
                                            <?php endif; ?>
                                            <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                            <?php get_template_part('inc/inc-event-img'); ?>
                                            <?php get_template_part('inc/inc-event-text'); ?>
                                        </a>
                                    </div>
                                <?php endwhile; ?>

                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p class="text-base center">イベントが見つかりませんでした。</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </section>
    <div class="relative">
        <div class="page-deco-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-yellow-top.webp" alt="">
        </div>
        <div class="page-deco-container page-deco-container--yellow">
            <section class="sec01">
                <div class="content-width">
                    <div class="page-title-center--has-icon page-title--has-icon--mobile-20">
                        <h2><i></i>毎日スケジュール</h2>
                    </div>
                    <?php
                    function getMonthAndDay($select_date, $n = 0)
                    {
                        //$targetDate = date('Y-m-d', strtotime("+$n days", strtotime($select_date)));
                        $targetDate = strtotime("$select_date +$n days");
                        $month = (int)date('m', $targetDate); // 月を取得
                        $day = (int)date('d', $targetDate);   // 日を取得
                        $year = (int)date('Y', $targetDate);  // 年も取得（オプション）

                        return [
                            'year' => $year,
                            'month' => $month,
                            'day' => $day
                        ];
                    }
                    // 例: 今日から10日後の月と日を取得/
                    for ($i = 0; $i < 8; $i++) {
                        $result_day_arr[] = getMonthAndDay($select_date, $i);
                    }
                    ?>
                    <div class="sec01-swiper swiper sec01-swiper-02">
                        <div class="swiper-wrapper">
                            <?php foreach ($result_day_arr as $result_day): ?>
                                <?php $type_day = get_field('type_day', $mont_data_origin[$result_day['month']]); ?>
                                <?php if ($type_day): ?>
                                    <?php foreach ($type_day as $type): ?>
                                        <?php if ($type['day'] == $result_day['day']): ?>
                                            <?php if ($type['img']): ?>
                                                <div class="swiper-slide">
                                                    <a href="javascript:void(0);" data-img="<?php echo $type['img']; ?>" class="popup-link">
                                                        <img src="<?php echo $type['img']; ?>" alt="">
                                                        <?php
                                                        /*
                                                    <p><?php echo $result_day['month']; ?><?php echo $type['day']; ?></p>
                                                    */
                                                        ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-prev swiper-button-prev-02"></div>
                        <div class="swiper-button-next swiper-button-next-02"></div>
                        <div class="swiper-pagination swiper-pagination-02"></div>
                    </div>
                    <div class="sec01-btn">
                        <div class="com-btn-border-black hidden-mobile">
                            <a href="<?php echo home_url(); ?>/enjoy/sweating/">発汗エリア(有料エリア)について<i></i></a>
                        </div>
                        <div class="com-btn-mobile com-btn-mobile--small hidden-sm">
                            <a href="<?php echo home_url(); ?>/enjoy/sweating/">発汗エリア(有料エリア)について<i></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <?php /*
            <section class="sec01">
                <div class="content-width">
                    <div class="page-title-center--has-icon page-title--has-icon--mobile-20">
                        <h2><i></i>月間スケジュール</h2>
                    </div>
                    <div class="sec01-swiper swiper sec01-swiper-01">
                        <div class="swiper-wrapper">
                            <?php foreach ($mont_data as $key => $value) : ?>
                                <div class="swiper-slide">
                                    <?php //$valueのpost_idから画像URLを取得
                                    $image_url = get_the_post_thumbnail_url($value, 'full');
                                    ?>
                                    <?php if ($image_url): ?>
                                        <?php $image_url = get_template_directory_uri() . '/assets/img/com/comming-soon.webp'; ?>
                                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($key); ?>月のイベントスケジュール">
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/comming-soon.webp" alt="<?php echo esc_attr($key); ?>月のイベントスケジュール">
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-prev swiper-button-prev-01"></div>
                        <div class="swiper-button-next swiper-button-next-01"></div>
                        <div class="swiper-pagination swiper-pagination-01"></div>
                    </div>
                    <div class="sec01-btn">
                        <div class="com-btn-border-black hidden-mobile">
                            <a href="<?php echo home_url(); ?>/enjoy/sweating/">発汗エリア(有料エリア)について<i></i></a>
                        </div>
                        <div class="com-btn-mobile com-btn-mobile--small hidden-sm">
                            <a href="<?php echo home_url(); ?>/enjoy/sweating/">発汗エリア(有料エリア)について<i></i></a>
                        </div>
                    </div>
                </div>
            </section>
            */ ?>
            <section class="sec02">
                <div class="content-width">
                    <div class="page-title--has-icon page-title--has-icon--mobile-20">
                        <h2><i></i>その他イベント案内</h2>
                    </div>
                    <div class="sec06-bottom">
                        <div class="sec06-bottom-col">
                            <div class="sec-01-col-under">
                                <a href="<?php echo home_url(); ?>/event/">
                                    <div class="sec-01-col-under-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/page-bnr-event-img_v2.webp" alt="">
                                    </div>
                                    <div class="sec-01-col-under-title">
                                        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/page-bnr-event-txt.webp" alt="EVENT SCHEDULE"><i class="icon-btn"></i></h3>
                                        <p>すべてのイベント情報をチェック！</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="sec06-bottom-col sec06-bottom-col--schedule">
                            <div class="sec-01-col-under">
                                <a href="<?php echo home_url(); ?>/schedule/">
                                    <div class="sec-01-col-under-img sec-01-col-under--schedule">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/page-bnr-schedule-img_v3.webp" media="(max-width: 600px)">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/page-bnr-schedule-img_v2.webp" alt="">
                                        </picture>

                                    </div>
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


    <?php get_template_part('inc/inc-aside'); ?>
</main>
<div class="popup" id="modal">
    <div class="popup-bg"></div>
    <div class="popup-img" id="popup-img"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    //.popup-linkがクリックされた時の処理
    $('.popup-link').on('click', function() {
        //data-imgの値を取得
        var img = $(this).data('img');
        //取得したimgを.popup-imgの背景画像に設定
        $('#popup-img').css('background-image', 'url(' + img + ')');
        //.popupを表示
        $('#modal').fadeIn();
    });

    //.popup-bgがクリックでmodalを閉じる
    $('.popup-bg').on('click', function() {
        $('#modal').fadeOut();
    });
</script>
<script>
    //swiper
    // next ボタンをカスタムで処理
    document.querySelector('.swiper-button-next-00').addEventListener('click', function(e) {
        e.preventDefault();
        // realIndex は 0..(N-1) の実インデックス
        swiper_00.slideToLoop(swiper_00.realIndex + 6, 500); // 500ms アニメーション
    });

    // prev ボタン（戻る場合）
    document.querySelector('.swiper-button-prev-00').addEventListener('click', function(e) {
        e.preventDefault();
        swiper_00.slideToLoop(swiper_00.realIndex - 6, 500);
    });

    const swiper_00 = new Swiper('.sec00-swiper', {
        // Optional parameters
        loop: true,
        slidesPerView: "auto",
        spaceBetween: 0,
        threshold: 6, // 最低ドラッグ量(px)
        preventClicks: false, // native click を抑制しない
        preventClicksPropagation: false,
        touchStartPreventDefault: false,
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

                        var listItem = '<div class="swiper swiper-event">';
                        listItem += '<div class="swiper-wrapper">';

                        if (response.post_data.length > 0) {
                            response.post_data.forEach(function(post) {
                                console.log(post);
                                listItem += '<div class="swiper-slide">' +
                                    '<a href="' + post.link + '">' +
                                    (post.is_hot ? '<span class="hot">' + post.is_hot + '</span>' : '') +
                                    '<span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>' +
                                    '<div class="img img-info">' +
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
                                    '</div>';
                            });
                            listItem += '</div></div>'; // swiper-wrapperとswiper-event_2の閉じタグ
                            postList.append(listItem);
                        } else {
                            postList.append('<p class="text-base center">イベントが見つかりませんでした。</p>');
                        }

                        //600以上の時はloopしない
                        var loop_flg = true;
                        var centeredSlides_flg = true;
                        if (window.innerWidth > 600) {
                            loop_flg = false;
                            centeredSlides_flg = false;
                        }

                        if (!loop_flg) {
                            const swiper = new Swiper('.swiper-event', {
                                slidesPerView: 'auto', // 幅固定 or auto
                                spaceBetween: 30, // スライド間の余白
                                centeredSlides: false, // 常に中央スライドをセンターに
                                loop: loop_flg, // 無限ループ
                                threshold: 6, // 最低ドラッグ量(px)
                                preventClicks: false, // native click を抑制しない
                                preventClicksPropagation: false,
                                touchStartPreventDefault: false,

                                autoplay: {
                                    delay: 3000, // 3秒ごとに切り替え
                                    disableOnInteraction: false, // 操作後も自動再生を継続
                                },

                                lazy: {
                                    loadPrevNext: true,
                                    loadOnTransitionStart: true,
                                },
                                pagination: {
                                    el: '.swiper-pagination-00',
                                    clickable: true,
                                },
                                breakpoints: {
                                    320: {
                                        //spaceBetween: 12,
                                        //slidesPerView: 1.1
                                    },
                                    768: {
                                        //spaceBetween: 16,
                                        //slidesPerView: 2.2
                                        spaceBetween: 15, // スライド間の余白
                                    },
                                }
                            });
                        }
                    }
                });
            }
        }
        //initの時に実行
        // 現在の active スライド要素
    });



    //swiper
    const swiper_01 = new Swiper('.sec01-swiper-01', {
        // Optional parameters
        loop: true,
        slidesPerView: 1,
        spaceBetween: 80,
        centeredSlides: true,
        pagination: {
            el: '.swiper-pagination-01',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next-01',
            prevEl: '.swiper-button-prev-01',
        },

    });
    const swiper_02 = new Swiper('.sec01-swiper-02', {
        // Optional parameters
        loop: true,
        slidesPerView: 1,
        spaceBetween: 80,
        centeredSlides: true,
        pagination: {
            el: '.swiper-pagination-02',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next-02',
            prevEl: '.swiper-button-prev-02',
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
                //loadingを非表示
                $('.sec00-loading').fadeOut();
            }
        });
    });
</script>
<script>
    //600以上の時はloopしない
    var loop_flg = true;
    var centeredSlides_flg = true;
    if (window.innerWidth > 600) {
        loop_flg = false;
        centeredSlides_flg = false;
    }

    const swiper = new Swiper('.swiper-event', {
        slidesPerView: 'auto', // 幅固定 or auto
        spaceBetween: 30, // スライド間の余白
        centeredSlides: centeredSlides_flg, // 常に中央スライドをセンターに
        loop: false, // 無限ループ

        autoplay: {
            delay: 3000, // 3秒ごとに切り替え
            disableOnInteraction: false, // 操作後も自動再生を継続
        },

        lazy: {
            loadPrevNext: true,
            loadOnTransitionStart: true,
        },
        breakpoints: {
            320: {
                //spaceBetween: 12,
                //slidesPerView: 1.1
            },
            768: {
                //spaceBetween: 16,
                //slidesPerView: 2.2
                spaceBetween: 15, // スライド間の余白
            },
        }
    });
    // イベントハンドラ（tap を優先、click を保険で両方監視）
    function goToSlideFromElem(slideEl, swiper) {
        if (!slideEl) return;
        const realIndexAttr = slideEl.getAttribute('data-swiper-slide-index');
        if (realIndexAttr != null) {
            swiper.slideToLoop(Number(realIndexAttr), 300);
            return;
        }
        if (typeof swiper.clickedIndex === 'number' && swiper.clickedIndex >= 0) {
            swiper.slideToLoop(swiper.clickedIndex, 300);
        }
    }
    // Swiper の click イベントを使う方法（推奨）
    swiper_00.on('tap click', function(swiper, e) {
        // デバッグ（発火しない時は console を見てください）
        // console.log('swiper event', e.type, 'clickedIndex', swiper.clickedIndex, 'clickedSlide', swiper.clickedSlide, 'target', e.target);

        // まず Swiper が保持する clickedSlide を優先
        const slideEl = swiper.clickedSlide || e.target.closest('.swiper-slide');
        goToSlideFromElem(slideEl, swiper);
    });
</script>
<?php get_footer(); ?>