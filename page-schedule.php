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
            <div class="page-title-center--has-icon">
                <h2><i></i>月間スケジュール</h2>
            </div>
            <div class="sec01-swiper swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test/test-sche.jpg" alt="1月のイベントスケジュール">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test/test-sche.jpg" alt="1月のイベントスケジュール">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test/test-sche.jpg" alt="1月のイベントスケジュール">
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
    </section>
    <section class="sec02">
        <div class="content-width">
            <div class="page-title--has-icon">
                <h2><i></i>その他イベント案内</h2>
            </div>
            <div class="sec02-wrap">
                <div class="sec02-wrap-col">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/bnr-02.jpg" alt="イベント案内1">
                    </a>
                </div>
                <div class="sec02-wrap-col">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/bnr-01.jpg" alt="イベント案内1">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/inc-contact'); ?>
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