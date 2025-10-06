<?php
/*
Template Name: enjoy
*/
?>
<?php get_header(); ?>
<main class="page-main enjoy">
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
                    <span itemprop="name">館内の楽しみ方</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width-sm">
            <div class="com-title center com-title-hidden">
                <p>館内の楽しみ方</p>
                <h2 class="">
                    <span class="title">E</span><span class="title">N</span><span class="title">J</span><span class="title">O</span><span class="title">Y</span>
                    <span class="title title-item-sprout">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                    </span>
                    <span class="title title-item-sun">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                    </span>
                </h2>
            </div>
            <div class="page-desc">
                <p>
                    グルスパでの1日は、<br class="hidden-sm">過ごし方も楽しみ方も自由自在。<br>
                    館内に揃った多彩な施設をチェックして、思い思いのリラックスタイムをお楽しみください。
                </p>
            </div>
        </div>

        <div class="page-toggle">
            <div class="sec01-col">
                <ul class="sec01-col-select tab">
                    <li class="active"><a href="javascript:void(0)" data-id="#area01">1F</a></li>
                    <li><a href="javascript:void(0)" data-id="#area02">2F</a></li>
                </ul>
                <div id="area01" class="area is-active">
                    <div class="content-width-sm">
                        <div class="sec01-col-main">
                            <div class="sec01-col-main-bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-img-01_v2.jpg" alt="">
                            </div>
                            <div class="sec01-col-main-01-01">
                                <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-03">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-01.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-01-01">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-01-01.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-01-02">
                                <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-04">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-02.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-01-02">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-01-02.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-01-03">
                                <a href="javascript:void(0)" class="pulse-btn popup-btn" data-id="enjoy-06">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-01-03">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-01-03.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-01-04">
                                <a href="javascript:void(0)" class="pulse-btn popup-btn" data-id="enjoy-05">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-01-04">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-01-04.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-01-05">
                                <a href="javascript:void(0)" class="pulse-btn popup-btn" data-id="enjoy-06">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon-white.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-01-05">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-01-05.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-01-06">
                                <a href="javascript:void(0)" class="pulse-btn popup-btn" data-id="enjoy-08">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon-white.png" alt="">

                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-01-06">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-01-06.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-01-07">
                                <a href="<?php echo home_url(); ?>/enjoy/sweating/#area-guide-01" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon-white.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-01-07">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-01-07.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-01-08">
                                <a href="<?php echo home_url(); ?>/enjoy/sweating/#area-guide-02" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon-white.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-01-08">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-01-08.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-01-09">
                                <a href="<?php echo home_url(); ?>/enjoy/sweating/#area-guide-03" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon-white.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-01-09">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-01-09.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-01-10">
                                <a href="<?php echo home_url(); ?>/enjoy/sweating/#area-guide-04" class="pulse-btn">
                                    <img class="pulse-btn--small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon-white.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-01-10">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-01-10.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-01-11">
                                <a href="<?php echo home_url(); ?>/enjoy/sweating/#area-guide-05" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon-white.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-01-11">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-01-11.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-01-12">
                                <a href="javascript:void(0)" class="pulse-btn popup-btn" data-id="enjoy-07">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon-white.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-01-12">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-01-12.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="sec01-col-sp">
                            <ul>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-01">
                                            お風呂<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-02">
                                            サウナ・水風呂<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-03">
                                            発汗エリア（有料岩盤浴エリア）<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-04">
                                            ご飲食<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-05">
                                            リラクゼーション<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-06">
                                            アメニティ・グッズ<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-07">
                                            待合ホール<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-08">
                                            ゲームコーナー<i></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="area02" class="area">
                    <div class="content-width-sm">
                        <div class="sec01-col-main">
                            <div class="sec01-col-main-bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-img-02.jpg" alt="">
                            </div>
                            <div class="sec01-col-main-02-01">
                                <a href="<?php echo home_url(); ?>/enjoy/sauna/#hot" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-02-01">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-02-01.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-02-02">
                                <a href="<?php echo home_url(); ?>/enjoy/sauna/#salt" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-02-02">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-02-02.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-02-03">
                                <a href="<?php echo home_url(); ?>/enjoy/spa/#else-01" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-02-03">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-02-03.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-02-04">
                                <a href="<?php echo home_url(); ?>/enjoy/spa/#else-03" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-02-04">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-02-04.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-02-05">
                                <a href="<?php echo home_url(); ?>/enjoy/spa/#natural" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-02-05">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-02-05.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-02-06">
                                <a href="<?php echo home_url(); ?>/enjoy/relaxation/?type=akasuri" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-02-06">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-02-06.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-02-07">
                                <a href="<?php echo home_url(); ?>/enjoy/spa/#else-04" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-02-07">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-02-07.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-02-08">
                                <a href="<?php echo home_url(); ?>/enjoy/spa/#else-04" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-02-08">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-02-08.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-02-09">
                                <a href="<?php echo home_url(); ?>/enjoy/spa/#tansan" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-02-09">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-02-09.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-02-10">
                                <a href="<?php echo home_url(); ?>/enjoy/spa/#else-01" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-02-10">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-02-10.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-02-11">
                                <a href="<?php echo home_url(); ?>/enjoy/spa/#bihou" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-02-11">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-02-11.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-02-12">
                                <a href="<?php echo home_url(); ?>/enjoy/spa/#bihou" class="pulse-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-02-12">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-02-12.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="sec01-col-main-02-13">
                                <a href="javascript:void(0)" class="popup-btn pulse-btn" data-id="enjoy-01">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/sec01-main-icon.png" alt="">
                                    <div class="sec01-col-main-hover-txt sec01-col-main-hover-txt-02-13">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/hover-text-02-13.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="sec01-col-sp">
                            <ul>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="<?php echo home_url(); ?>/enjoy/spa/#sec04">
                                            炭酸風呂<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="<?php echo home_url(); ?>/enjoy/spa/#else-01">
                                            極冷水風呂(7℃)<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="<?php echo home_url(); ?>/enjoy/spa/#else-02">
                                            水風呂(17℃)<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="<?php echo home_url(); ?>/enjoy/spa/#else-03">
                                            電気風呂<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="<?php echo home_url(); ?>/enjoy/spa/#else-04">
                                            ジェットバス<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="<?php echo home_url(); ?>/enjoy/spa/#else-05">
                                            スーパージェットバス<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="<?php echo home_url(); ?>/enjoy/spa/#sec05">
                                            天然温泉<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="<?php echo home_url(); ?>/enjoy/spa/#bihou">
                                            美泡壺風呂<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="<?php echo home_url(); ?>/enjoy/sauna/#hot">
                                            高温サウナ<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="<?php echo home_url(); ?>/enjoy/sauna/#salt">
                                            塩サウナ<i></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-mobile com-btn-mobile--full">
                                        <a href="<?php echo home_url(); ?>/enjoy/relaxation/?type=akasuri">
                                            アカスリ<i></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/inc-bnr'); ?>
    <?php get_template_part('inc/inc-aside'); ?>

    <div class="enjoy-fixed">
        <div class="enjoy-fixed-bg enjoy-fixed-btn-close"></div>
        <div class="enjoy-fixed-container">
            <div class="enjoy-fixed-container-wrap" id="enjoy-01">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">

                    <a href="javascript:void(0)">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close-sp.svg" media="(max-width: 601px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる">
                        </picture>
                    </a>
                </div>
                <div class="enjoy-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-bg-blue.jpg" alt="">
                </div>

                <div class="enjoy-fixed-container-wrap-content">
                    <div class="enjoy-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-01.jpg" alt="">
                        <div class="enjoy-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-left.png" alt="">
                        </div>
                        <div class="enjoy-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-right.png" alt="">
                        </div>
                    </div>
                    <div class="enjoy-fixed-container-wrap-content-txt">
                        <h3>お風呂</h3>
                        <p>
                            地下1,300ｍから汲み上げた天然温泉を使用。<br>
                            泉質はメタけい酸を豊富に含み、肌の新陳代謝を促し、セラミドを整える“美肌の湯”として知られています。<br>
                            大きな露天風呂をはじめ、様々な種類のお風呂をご用意しておりますので、四季の風を感じながら至福のひとときをお過ごしください。
                        </p>
                        <div class="com-btn-border-white com-btn-border--210">
                            <a href="<?php echo home_url(); ?>/enjoy/spa/">くわしく見る<i></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="enjoy-fixed-container-wrap" id="enjoy-02">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">
                    <a href="javascript:void(0)">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close-sp.svg" media="(max-width: 601px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる">
                        </picture>
                    </a>
                </div>
                <div class="enjoy-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-bg-yellow.jpg" alt="">
                </div>
                <div class="enjoy-fixed-container-wrap-content">
                    <div class="enjoy-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-02.jpg" alt="">
                        <div class="enjoy-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-left.png" alt="">
                        </div>
                        <div class="enjoy-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-right.png" alt="">
                        </div>
                    </div>
                    <div class="enjoy-fixed-container-wrap-content-txt color--black">
                        <h3>サウナ・水風呂</h3>
                        <p>
                            当館では、発汗・癒し・爽快感を存分に味わえるサウナの後には、7℃の極冷水風呂・16℃の水風呂・29℃のぬる湯と、好みに合わせて選べる3種類の水風呂もご用意。<br>
                            一気にクールダウンしたい方も、ゆっくり“ととのい”たい方も、自分だけのスタイルで楽しめます。<br>
                            ここでしか体験できないサウナ時間で、ぜひ“最高のととのい”を見つけてください。
                        </p>
                        <div class="com-btn-border-black com-btn-border--210">
                            <a href="<?php echo home_url(); ?>/enjoy/sauna/">くわしく見る<i></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="enjoy-fixed-container-wrap" id="enjoy-03">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">
                    <a href="javascript:void(0)">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close-sp.svg" media="(max-width: 601px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる">
                        </picture>
                    </a>
                </div>
                <div class="enjoy-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-bg-red.jpg" alt="">
                </div>
                <div class="enjoy-fixed-container-wrap-content">
                    <div class="enjoy-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-03_v2.jpg" alt="">
                        <div class="enjoy-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-left-red.png" alt="">
                        </div>
                        <div class="enjoy-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-right-red.png" alt="">
                        </div>
                    </div>
                    <div class="enjoy-fixed-container-wrap-content-txt">
                        <h3>発汗エリア（有料岩盤浴エリア）</h3>
                        <p>
                            岩盤浴・アトラクションサウナ・マンガ・リクライニング・テラスなどが揃った特別エリア。<br>
                            時間を忘れてゆったり過ごしたい方にぴったりの癒し空間です。<br>
                            館内とはひと味違う、深いリラックスをお楽しみください。
                        </p>
                        <div class="com-btn-border-white com-btn-border--210 hidden-mobile">
                            <a href="<?php echo home_url(); ?>/enjoy/sweating/">くわしく見る<i></i></a>
                        </div>
                        <div class="com-btn-mobile hidden-sm">
                            <div class="com-btn-mobile com-btn-mobile--full">
                                <a href="<?php echo home_url(); ?>/enjoy/sweating/">
                                    くわしく見る<i></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="enjoy-fixed-container-wrap" id="enjoy-04">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">
                    <a href="javascript:void(0)">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close-sp.svg" media="(max-width: 601px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる">
                        </picture>
                    </a>
                </div>
                <div class="enjoy-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-bg-yellow.jpg" alt="">
                </div>
                <div class="enjoy-fixed-container-wrap-content">
                    <div class="enjoy-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-04_v2.jpg" alt="">
                        <div class="enjoy-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-left.png" alt="">
                        </div>
                        <div class="enjoy-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-right.png" alt="">
                        </div>
                    </div>
                    <div class="enjoy-fixed-container-wrap-content-txt color--black">
                        <h3>ご飲食</h3>
                        <p>
                            館内の飲食エリアでは、和食・洋食やクラフトビール、スイーツまで幅広くご用意。「キッチントキワ」では三重県産食材を使った料理やサ飯を、くつろぎ空間で。「スイートラボ」では珍しいスイーツやSNS映えするデザートを楽しめます。<br>
                            館内着のまま気軽にご利用ください。
                        </p>
                        <div class="com-btn-border-black com-btn-border--210 hidden-mobile">
                            <a href="<?php echo home_url(); ?>/enjoy/food/">くわしく見る<i></i></a>
                        </div>
                        <div class="com-btn-mobile hidden-sm">
                            <div class="com-btn-mobile com-btn-mobile--full">
                                <a href="<?php echo home_url(); ?>/enjoy/food/">
                                    くわしく見る<i></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="enjoy-fixed-container-wrap" id="enjoy-05">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">
                    <a href="javascript:void(0)">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close-sp.svg" media="(max-width: 601px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる">
                        </picture>
                    </a>
                </div>
                <div class="enjoy-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-bg-blue.jpg" alt="">
                </div>
                <div class="enjoy-fixed-container-wrap-content">
                    <div class="enjoy-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-05_v2.jpg" alt="">
                        <div class="enjoy-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-left-blue.png" alt="">
                        </div>
                        <div class="enjoy-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-right-blue.png" alt="">
                        </div>
                    </div>
                    <div class="enjoy-fixed-container-wrap-content-txt">
                        <h3>リラクゼーション</h3>
                        <p>
                            ボディケア・あかすり・フットマッサージなど、豊富な施術をご用意。日々の疲れを芯から癒したい方におすすめです。<br>
                            予約制でスムーズにご案内でき、定期的にリラクイベントも開催中。贅沢なひとときをお過ごしください。
                        </p>
                        <div class="com-btn-border-white com-btn-border--210 hidden-mobile">
                            <a href="<?php echo home_url(); ?>/enjoy/relaxation/">くわしく見る<i></i></a>
                        </div>
                        <div class="com-btn-mobile hidden-sm">
                            <div class="com-btn-mobile com-btn-mobile--full">
                                <a href="<?php echo home_url(); ?>/enjoy/relaxation/">
                                    くわしく見る<i></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="enjoy-fixed-container-wrap" id="enjoy-06">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">
                    <a href="javascript:void(0)">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close-sp.svg" media="(max-width: 601px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる">
                        </picture>
                    </a>
                </div>
                <div class="enjoy-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-bg-red.jpg" alt="">
                </div>
                <div class="enjoy-fixed-container-wrap-content">
                    <div class="enjoy-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-06.jpg" alt="">
                        <div class="enjoy-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-left-red.png" alt="">
                        </div>
                        <div class="enjoy-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-right-red.png" alt="">
                        </div>
                    </div>
                    <div class="enjoy-fixed-container-wrap-content-txt">
                        <h3>アメニティ・グッズ</h3>
                        <p>
                            シャンプーやボディソープのアメニティはもちろん無料。タオルもご希望のお客様はレンタルまたは購入が可能なので、手ぶらでも安心してお越しいただけます。<br>
                            オリジナルグッズも取り揃えており、お土産や記念品としてもおすすめです。
                        </p>
                        <div class="com-btn-border-white com-btn-border--210 hidden-mobile">
                            <a href="<?php echo home_url(); ?>/enjoy/goods/">くわしく見る<i></i></a>
                        </div>
                        <div class="com-btn-mobile hidden-sm">
                            <div class="com-btn-mobile com-btn-mobile--full">
                                <a href="<?php echo home_url(); ?>/enjoy/goods/">
                                    くわしく見る<i></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="enjoy-fixed-container-wrap" id="enjoy-07">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">
                    <a href="javascript:void(0)">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close-sp.svg" media="(max-width: 601px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる">
                        </picture>
                    </a>
                </div>
                <div class="enjoy-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-bg-green.jpg" alt="">
                </div>
                <div class="enjoy-fixed-container-wrap-content">
                    <div class="enjoy-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-07_v2.jpg" alt="">
                        <div class="enjoy-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-left-green.png" alt="">
                        </div>
                        <div class="enjoy-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-right-green.png" alt="">
                        </div>
                    </div>
                    <div class="enjoy-fixed-container-wrap-content-txt">
                        <h3>待合ホール</h3>
                        <p>
                            寝転んでくつろげるスペースや椅子、自動販売機、ドリンクカウンター「スイートラボ」などを備えた、ゆったりと過ごせるホールです。<br>
                            ご入浴前後の休憩や、待ち合わせにもぴったりの空間となっております。
                        </p>
                    </div>
                </div>
            </div>

            <div class="enjoy-fixed-container-wrap" id="enjoy-08">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">
                    <a href="javascript:void(0)">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close-sp.svg" media="(max-width: 601px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる">
                        </picture>
                    </a>
                </div>
                <div class="enjoy-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-bg-green.jpg" alt="">
                </div>
                <div class="enjoy-fixed-container-wrap-content">
                    <div class="enjoy-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-08_v2.jpg" alt="">
                        <div class="enjoy-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-left-green.png" alt="">
                        </div>
                        <div class="enjoy-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-right-green.png" alt="">
                        </div>
                    </div>
                    <div class="enjoy-fixed-container-wrap-content-txt">
                        <h3>ゲームコーナー</h3>
                        <p>
                            お子さまから大人まで楽しめる、ゲームコーナーも完備。<br>
                            お風呂上がりのちょっとしたリフレッシュや、待ち時間にもおすすめです。
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>





<?php get_footer(); ?>