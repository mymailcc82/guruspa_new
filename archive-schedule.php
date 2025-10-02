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


?>
<?php get_header(); ?>
<main class="page-main archive schedule">
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
                    <span itemprop="name">イベントスケジュール</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>

    </div>
    <section class="sec">
        <div class="content-width">
            <div class="com-title center com-title-hidden">
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
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
    </section>
    <section class="sec02">
        <div class="content-width">
            <div class="page-title--has-icon page-title--has-icon--mobile-20">
                <h2><i></i>その他イベント案内</h2>
            </div>
            <div class="sec02-wrap">
                <div class="sec02-wrap-col">
                    <a href="<?php echo home_url(); ?>/today/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/bnr-02.jpg" alt="イベント案内1">
                    </a>
                </div>
                <div class="sec02-wrap-col">
                    <a href="<?php echo home_url(); ?>/event/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/bnr-01.jpg" alt="イベント案内1">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/inc-aside'); ?>
</main>

<script>
    //swiper
    const swiper = new Swiper('.sec01-swiper', {
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
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });
</script>
<?php get_footer(); ?>