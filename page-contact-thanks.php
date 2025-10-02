<?php
/*
Template Name: お問い合わせ(個人のお客様向け)完了
*/
?>
<?php get_header(); ?>
<main class="page-main contact">

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
                    <a itemprop="item" href="<?php echo home_url(); ?>/contact-corporate/">
                        <span itemprop="name">お問い合わせ(個人のお客様向け)</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name">サンクスページ</span>
                    <meta itemprop="position" content="3" />
                </li>
            </ol>
        </nav>
    </div>

    <section class="contact-sec">
        <div class="content-width">
            <div class="contact-mokuji step-03">
                <ul class="">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-contact-active.png" alt="">
                        <p>情報入力</p>
                    </li>
                    <li class="active">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-contact-active.png" alt="">
                        <p>内容確認</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-contact-active.png" alt="">
                        <p>送信完了</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-width content-width--mobile-full">
            <div class="com-bnr com-bnr--contact">
                <div class="sec02-icon-04">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-04_v3.png" alt="">
                </div>
                <div class="sec02-icon-05">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-05_v3.png" alt="">
                </div>
                <div class="sec02-icon-06">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-06.svg" alt="">
                </div>

                <div class="sec02-about-bg">
                    <div class="sec02-icon-01">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-01_v2.png" alt="">
                    </div>
                    <div class="sec02-icon-02">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-02-sp.png" media="(max-width: 601px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page/page-icon-else-02.png" alt="">
                        </picture>

                    </div>
                    <div class="sec02-icon-03">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-03.png" alt="">
                    </div>
                </div>
                <div class="sec02-about-txt">
                    <h2>THANK YOU！</h2>
                    <h3>お問い合わせありがとうございました。</h3>
                    <p>
                        担当より3営業日以内にご連絡をさせていただきます。<br>
                        3営業日経っても連絡がない場合は<br>
                        お手数ですが<a href="tel:000-000-0000">000-000-0000</a>までお電話くださいませ。
                    </p>
                    <?php //echo do_shortcode('[mwform_formkey key="94"]'); 
                    ?>
                    <div class="com-btn-arrow-left com-btn-arrow-left--text-left hidden-mobile">
                        <a href="<?php echo home_url(); ?>/"><i></i>TOPへ戻る</a>
                    </div>
                    <div class="com-btn-mobile-reverse hidden-sm">
                        <a href="<?php echo home_url(); ?>/"><i></i>TOPへ戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/inc-contact'); ?>
</main>
<?php get_footer(); ?>