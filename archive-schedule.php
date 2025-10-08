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
<main class="page-main archive schedule">
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
                    <span itemprop="name">イベントスケジュール</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>

    </div>
    <section class="sec">
        <div class="content-width">
            <div class="com-title com-title--schedule center com-title-hidden">
                <p>イベントスケジュール</p>
                <h2 class="">
                    <span class="title">E</span><span class="title">V</span><span class="title">E</span><span class="title">N</span><span class="title">T</span> <span class="title">S</span><span class="title">C</span><span class="title">H</span><span class="title">E</span><span class="title">D</span><span class="title">U</span><span class="title">L</span><span class="title">E</span>
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
            <div class="sec01-swiper swiper sec01-swiper-01">
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
                <div class="swiper-button-prev swiper-button-prev-01"></div>
                <div class="swiper-button-next swiper-button-next-01"></div>
                <div class="swiper-pagination swiper-pagination-01"></div>
            </div>
    </section>

    <section class="sec01">
        <div class="content-width">
            <div class="page-title-center--has-icon page-title--has-icon--mobile-20">
                <h2><i></i>月間スケジュール</h2>
            </div>
            <div class="sec01-swiper swiper sec01-swiper-02">
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
                <div class="swiper-button-prev swiper-button-prev-02"></div>
                <div class="swiper-button-next swiper-button-next-02"></div>
                <div class="swiper-pagination swiper-pagination-02"></div>
            </div>
    </section>
    <section class="sec02">
        <div class="content-width">
            <div class="page-title--has-icon page-title--has-icon--mobile-20">
                <h2><i></i>その他イベント案内</h2>
            </div>
            <div class="com-bnr-sec06-bottom">
                <div class="sec06-bottom-col sec06-bottom-col--today">
                    <div class="sec-01-col-under">
                        <a href="<?php echo home_url(); ?>/today/">
                            <div class="sec-01-col-under-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/page-bnr-today-img_v2.jpg" alt="">
                            </div>
                            <div class="sec-01-col-under-title">
                                <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/page-bnr-today-txt.png" alt="EVENT SCHEDULE"><i class="icon-btn"></i></h3>
                                <p>本日開催しているイベントをチェック！</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="sec06-bottom-col sec06-bottom-col--event">
                    <div class="sec-01-col-under">
                        <a href="<?php echo home_url(); ?>/event/">
                            <div class="sec-01-col-under-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/page-bnr-event-img_v2.jpg" alt="">
                            </div>
                            <div class="sec-01-col-under-title">
                                <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/page-bnr-event-txt.png" alt="EVENT SCHEDULE"><i class="icon-btn"></i></h3>
                                <p>すべてのイベント情報をチェック！</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/inc-aside'); ?>


</main>
<div class="popup" id="modal">
    <div class="popup-bg"></div>
    <div class="popup-img" id="popup-img"></div>
</div>

<script>
    //swiper
    const swiper = new Swiper('.sec01-swiper-01', {
        // Optional parameters
        loop: true,
        slidesPerView: 1,
        spaceBetween: 80,
        centeredSlides: true,


        // If we need pagination
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


        // If we need pagination
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
</script>

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
<?php get_footer(); ?>