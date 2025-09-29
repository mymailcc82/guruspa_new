<?php get_header(); ?>
<main class="page-main contact">
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
                    <span itemprop="name">お問い合わせ(個人のお客様向け)</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>

    <section class="sec">
        <div class="content-width">
            <div class="com-title center com-title-hidden">
                <p>お問い合わせ(個人のお客様向け)</p>
                <h2 class="">
                    <span class="title">C</span><span class="title">O</span><span class="title">N</span><span class="title">T</span><span class="title">A</span><span class="title">C</span><span class="title">T</span>
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
                    以下のフォームの必要項目をご入力頂き、送信ボタンをクリックして下さい。<br>
                    確認でき次第担当からご連絡させていただきます。<br>
                    必須項目は必ずご入力いただきますようお願いいたします。
                </p>
            </div>
            <div class="contact-attention">
                <p>
                    <span>取材依頼</span>や<span>法人の方</span>のお問い合わせは<a href="<?php echo home_url(); ?>/contact-corporate/">こちら</a>からお願いいたします。
                </p>
            </div>
        </div>
    </section>
    <section class="contact-sec">
        <div class="content-width">
            <div class="contact-mokuji">
                <ul>
                    <li class="active">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-contact-active.png" alt="">
                        <p>情報入力</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-contact-normal.png" alt="">
                        <p>内容確認</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-contact-normal.png" alt="">
                        <p>送信完了</p>
                    </li>
                </ul>
            </div>
            <div class="contact-container">
                <div class="contact-wrap-right">
                    <?php //ショートコード[contact-form-7 id="9d7709b" title="お問い合わせ"]
                    //echo do_shortcode('[contact-form-7 id="9" title="お問い合わせ"]');
                    echo do_shortcode('[mwform_formkey key="94"]'); ?>

                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/inc-contact'); ?>
</main>
<?php get_footer(); ?>