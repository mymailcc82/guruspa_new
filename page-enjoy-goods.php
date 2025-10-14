<?php
/*
Template Name: enjoy-goods
*/
?>
<?php get_header(); ?>
<main class="page-main enjoy goods">
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
                    <a itemprop="item" href="<?php echo home_url(); ?>/enjoy/">
                        <span itemprop="name">館内の楽しみ方</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name">アメニティ・グッズ</span>
                    <meta itemprop="position" content="3" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width">
            <div class="enjoy-wrap">
                <div class="enjoy-wrap-txt">
                    <div class="com-title com-title--goods com-title-hidden">
                        <p>アメニティ・グッズ</p>
                        <h2 class="">
                            <span class="title">A</span><span class="title">M</span><span class="title">E</span><span class="title">N</span><span class="title">I</span><span class="title">T</span><span class="title">Y</span><span class="title">&</span><br><span class="title">G</span><span class="title">O</span><span class="title">O</span><span class="title">D</span><span class="title">S</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                        </h2>
                    </div>

                    <h2>“ととのい”をお持ち帰り。<br>お土産にもおすすめ</h2>
                    <p>
                        心と身体を整えたその余韻を、おうちでも。当館では、こだわりのアメニティや人気のオリジナルグッズを各種ご用意しています。館内での快適なご利用はもちろん、大切な方への手土産やご自身へのごほうびにもぜひ。
                    </p>
                </div>
                <div class="enjoy-wrap-img">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec01-img-01_v2.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec01-img-02_v2.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="page-btn">
                <ul>
                    <li>
                        <a href="#sec02">備え付けアメニティ(無料)<i></i></a>
                    </li>
                    <li>
                        <a href="#sec03">レンタルアイテム(有料)<i></i></a>
                    </li>
                    <li>
                        <a href="#sec04">グルスパオリジナルグッズ<i></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="sec02" id="sec02">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon page-title-center--has-icon--font-30 page-title-center--has-icon--font-mobile-20 mb-20 page-title-center--has-icon--nowrap">
                <h2><i></i>備え付けアメニティ(無料)</h2>
            </div>
            <p class="sec02-desc">
                ご滞在中に自由にお使いいただけるアメニティは、使い心地や香りにこだわって厳選。<br>
                心地よいバスタイムをサポートします。
            </p>
            <div class="sec02-title">
                <dl>
                    <dt>設置場所</dt>
                    <dd>
                        脱衣所、洗面台、浴室内など
                    </dd>
                </dl>
            </div>
            <div class="sec02-wrap">
                <div class="sec02-wrap-col">
                    <div class="sec02-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec02-icon-01.svg" alt="">
                    </div>
                    <p>シャンプー・コンディショナー・ボディソープ</p>
                </div>
                <div class="sec02-wrap-col">
                    <div class="sec02-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec02-icon-03.svg" alt="">
                    </div>
                    <p>化粧水・<br>乳液（女性のみ）</p>
                </div>
                <div class="sec02-wrap-col">
                    <div class="sec02-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec02-icon-06.svg" alt="">
                    </div>
                    <p>綿棒</p>
                </div>
                <div class="sec02-wrap-col">
                    <div class="sec02-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec02-icon-05.svg" alt="">
                    </div>
                    <p>ドライヤー<br>（女性はすべてRefa）</p>
                </div>

                <div class="sec02-wrap-col">
                    <div class="sec02-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec02-icon-07.svg" alt="">
                    </div>
                    <p>Refaシャワーヘッド<br>（男女浴場カラン一部）</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec03" id="sec03">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon page-title-center--has-icon--font-30 page-title-center--has-icon--font-mobile-20 mb-20 page-title-center--has-icon--nowrap">
                <h2 class="letter-spacing-0-mobile"><i></i>レンタルアイテム（有料）</h2>
            </div>
            <p class="sec03-desc">
                身軽にご来館いただけるよう、各種レンタルサービスもご用意しております。<br>
                ※レンタルご希望のお客様は、入館時に受付または従業員までお申し付けください。
            </p>
            <div class="sec03-wrap">
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec03-icon-01_v2.svg" alt="">
                    </div>
                    <p><strong>レンタルタオルセット<br class="hidden-mobile">（フェイスタオル・バスタオル）</strong><span>受付でお申し込みください</span>300円</p>
                </div>
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec03-icon-02_v2.svg" alt="">
                    </div>
                    <p><strong>オリジナルフェイスタオル</strong><span>脱衣所自販機にて販売</span>150円</p>
                </div>
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec03-icon-03_v2.svg" alt="">
                    </div>
                    <p><strong>簡易下着・<br>身だしなみ用品など</strong><span>脱衣所自販機にて販売</span></p>
                </div>

            </div>
        </div>
    </section>
    <section class="sec04">
        <div class="page-deco-bg">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-red-top-sp.webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-red-top.webp" alt="">
            </picture>
        </div>
        <div class="page-deco-container page-deco-container--red" id="sec04">
            <div class="content-width-sm">
                <div class="page-title-center--has-icon page-title-center--has-icon--font-30 page-title-center--has-icon--font-mobile-20 mb-20 page-title-center--has-icon--nowrap">
                    <h2><i></i>グルスパオリジナルグッズ</h2>
                </div>
                <p class="sec04-desc">
                    お気に入りを“ととのい記念”に。<br>
                    オリジナルグッズをはじめ、サウナー心をくすぐるアイテムを館内で販売中です。
                </p>
                <?php
                // クエリの設定
                $goods_category = isset($_GET['goods_category']) ? sanitize_text_field($_GET['goods_category']) : ''; // URLパラメータからカテゴリを取得
                $goods_status = isset($_GET['goods_status']) ? sanitize_text_field($_GET['goods_status']) : ''; // URLパラメータからステータスを取得
                ?>
                <div class="sec04-list">
                    <dl>
                        <dt>商品カテゴリ</dt>
                        <dd>
                            <ul>
                                <li><a href="<?php echo home_url(); ?>/enjoy/goods/?goods_category=original&goods_status=<?php echo $goods_status; ?>#sec04" class="color-green">オリジナルグッズ</a></li>
                                <li><a href="<?php echo home_url(); ?>/enjoy/goods/?goods_category=hat&goods_status=<?php echo $goods_status; ?>#sec04" class="color-blue">サウナハット</a></li>
                                <li><a href="<?php echo home_url(); ?>/enjoy/goods/?goods_category=aparel&goods_status=<?php echo $goods_status; ?>#sec04" class="color-red">アパレル</a></li>
                                <li><a href="<?php echo home_url(); ?>/enjoy/goods/?goods_category=cosme&goods_status=<?php echo $goods_status; ?>#sec04" class="color-yellow">コスメ</a></li>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt>販売状況</dt>
                        <dd>
                            <ul>
                                <li><a href="<?php echo home_url(); ?>/enjoy/goods/?goods_category=<?php echo $goods_category; ?>&goods_status=normal#sec04" class="color-white">販売中</a></li>
                                <li><a href="<?php echo home_url(); ?>/enjoy/goods/?goods_category=<?php echo $goods_category; ?>&goods_status=wait#sec04" class="color-black">入荷待ち</a></li>
                                <li><a href="<?php echo home_url(); ?>/enjoy/goods/?goods_category=<?php echo $goods_category; ?>&goods_status=finish#sec04" class="color-black">販売終了</a></li>
                            </ul>
                        </dd>
                    </dl>
                </div>
                <div class="sec04-wrap">
                    <?php

                    $tax_query = array();
                    if (!empty($goods_category)) {
                        $tax_query[] = array(
                            'taxonomy' => 'goods_category',
                            'field'    => 'slug',
                            'terms'    => $goods_category,
                        );
                    }
                    if (!empty($goods_status)) {
                        $tax_query[] = array(
                            'taxonomy' => 'goods_status',
                            'field'    => 'slug',
                            'terms'    => $goods_status,
                        );
                    }
                    $args = array(
                        'post_type' => 'goods', // カスタム投稿タイプ名
                        'posts_per_page' => -1, // 取得する投稿数（-1で全件取得）
                        'tax_query' => $tax_query,
                    );
                    ?>
                    <?php $the_query = new WP_Query($args); ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <?php
                            $price = get_field('price'); // カスタムフィールド「price」の値を取得
                            $desc = get_field('desc'); // カスタムフィールド「desc」の値を取得
                            $goods_cat = get_the_terms($post->ID, 'goods_category'); // タクソノミー「goods_category」の値を取得
                            $goods_st = get_the_terms($post->ID, 'goods_status'); // タ

                            ?>

                            <?php
                            if ($goods_st && $goods_st[0]->slug === 'finish' || $goods_st[0]->slug === 'wait') {
                                $class_col = 'col-finish';
                            } else {
                                $class_col = '';
                            }
                            ?>
                            <div class="sec04-wrap-col <?php echo $class_col; ?>">
                                <a href="javascript:void(0);" class="goods-btn" data-id="goods_<?php echo $post->ID; ?>">
                                    <?php if ($class_col) {
                                        $class_col = 'sec04-wrap-col-img--finish';
                                    } else {
                                        $class_col = '';
                                    }
                                    ?>

                                    <div class="sec04-wrap-col-img <?php echo $class_col; ?>">
                                        <?php if (has_post_thumbnail()): ?>
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-default.webp" alt="デフォルト画像">
                                        <?php endif; ?>
                                        <?php if ($class_col): ?>
                                            <div class="sec04-wrap-col-img-span">
                                                SOLD OUT
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="sec04-wrap-col-cat">
                                        <ul>
                                            <li><span class="color-<?php echo $goods_cat[0]->slug; ?>"><?php echo $goods_cat[0]->name; ?></span></li>
                                            <li><span class="color-<?php echo $goods_st[0]->slug; ?>"><?php echo $goods_st[0]->name; ?></span></li>
                                        </ul>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                    <p class="sec04-price"><strong><?php echo $price; ?></strong>円<small>（税込）</small></p>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p class="text-base">該当する商品が見つかりませんでした。</p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>

                <div class="sec04-info">
                    <div class="sec04-info-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec04-info_v3.jpg" alt="">
                        <div class="sec04-info-img-01">
                            <span class="pulse-btn no-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec01-main-icon_v2.png" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="sec04-info-txt">
                        <dl>
                            <dt>販売場所</dt>
                            <dd>1F 待合ホール スイートラボ前</dd>
                        </dl>
                        <?php /*
                        <dl>
                            <dt>販売時間</dt>
                            <dd>10:00〜22:00</dd>
                        </dl>
                        */ ?>
                        <p>
                            ※ネットショップは行っておりません。お買い求めの際は店頭にお越しください。
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="page-bg-deco-bg-bottom-red"></div>

    </section>
    <?php get_template_part('inc/inc-aside'); ?>




</main>

<div class="goods-fixed">
    <div class="goods-fixed-bg goods-fixed-btn-close">

    </div>
    <div class="goods-fixed-container">
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php
                $price = get_field('price'); // カスタムフィールド「price」の値を取得
                $desc = get_field('desc'); // カスタムフィールド「desc」の値を取得
                $goods_cat = get_the_terms($post->ID, 'goods_category'); // タクソノミー「goods_category」の値を取得
                $goods_st = get_the_terms($post->ID, 'goods_status'); // タ
                $loop_img = get_field('loop_img'); // カスタムフィールド「loop_img」の値を取得

                ?>
                <div class="goods-fixed-container-wrap" id="goods_<?php echo get_the_ID(); ?>">
                    <div class="goods-fixed-container-wrap-close goods-fixed-btn-close">
                        <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close-black.svg" alt="閉じる"></a>
                    </div>
                    <div class="goods-fixed-container-wrap-bg"></div>
                    <div class="goods-fixed-container-wrap-content">
                        <div class="goods-fixed-container-wrap-content-main">
                            <div class="goods-fixed-container-wrap-content-main-img">
                                <div class="goods-swiper swiper">
                                    <div class="swiper-wrapper">

                                        <?php if ($loop_img): ?>
                                            <?php foreach ($loop_img as $img): ?>
                                                <div class="swiper-slide">
                                                    <img src="<?php echo esc_url($img['loop_img_item']); ?>" alt="">
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <div class="swiper-slide">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-default.webp" alt="デフォルト画像">
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="goods-swiper-thum swiper">
                                    <div class="swiper-wrapper">
                                        <?php if ($loop_img): ?>
                                            <?php foreach ($loop_img as $img): ?>
                                                <div class="swiper-slide">
                                                    <img src="<?php echo esc_url($img['loop_img_item']); ?>" alt="">
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <div class="swiper-slide">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-default.webp" alt="デフォルト画像">
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="goods-fixed-container-wrap-content-main-txt">
                                <h3><?php the_title(); ?></h3>
                                <div class="sec04-wrap-col-cat">
                                    <ul>
                                        <li><span class="color-<?php echo $goods_cat[0]->slug; ?>"><?php echo $goods_cat[0]->name; ?></span></li>
                                        <li><span class="color-<?php echo $goods_st[0]->slug; ?>"><?php echo $goods_st[0]->name; ?></span></li>
                                    </ul>
                                </div>
                                <p class="sec04-price"><strong><?php echo $price; ?></strong>円<small>（税込）</small></p>
                                <h4>商品説明</h4>
                                <p class="sec04-desc"><?php echo nl2br($desc); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="sec04-info">
                        <div class="sec04-info-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec04-info_v4.jpg" alt="">
                            <div class="sec04-info-img-01">
                                <span class="pulse-btn no-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec01-main-icon_v2.png" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="sec04-info-txt">
                            <dl>
                                <dt>販売場所</dt>
                                <dd>1F 待合ホール スイートラボ前 </dd>
                            </dl>
                            <?php /*
                            <dl>
                                <dt>販売時間</dt>
                                <dd>10:00〜22:00</dd>
                            </dl>
                            */ ?>
                            <p>
                                ※ネットショップは行っておりません。お買い求めの際は店頭にお越しください。
                            </p>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>


        <?php endif; ?>
    </div>
</div>



<script>
    // DOM 準備後に初期化
    document.addEventListener('DOMContentLoaded', function() {
        // スライド数チェック（セレクタはテンプレートに合わせてあります）
        const mainWrapper = document.querySelector('.goods-swiper .swiper-wrapper');
        const slideCount = mainWrapper ? mainWrapper.children.length : 0;

        // サムネイル側 Swiper（先に作る）
        const thumbSwiper = new Swiper('.goods-swiper-thum', {
            direction: 'horizontal',
            loop: false, // スライドが1枚だけなら loop を無効化
            spaceBetween: 8,
            //slidesPerView: Math.min(6, Math.max(1, slideCount)), // 最大6個表示
            slidesPerView: 5,
            freeMode: true,
            watchSlidesProgress: true,
            watchSlidesVisibility: true,
            slideToClickedSlide: true, // クリックでメインを切替
            breakpoints: {
                480: {
                    slidesPerView: Math.min(4, slideCount)
                },
                768: {
                    slidesPerView: 5
                }
            }
        });

        // メインの Swiper（thumbs オプションで紐付け）
        const mainSwiper = new Swiper('.goods-swiper', {
            loop: slideCount > 1,
            spaceBetween: 10,
            preloadImages: false,
            lazy: {
                loadPrevNext: true
            },
            // 必要ならナビゲーションを追加（テンプレートに next/prev ボタンがあれば有効）
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // ここで thumbSwiper を渡すだけで連動します（Swiper の thumbs 機能を利用）
            thumbs: {
                swiper: thumbSwiper
            },
            // 見た目のエフェクト（お好みで）
            effect: 'slide', // 'fade' にしても良い
            speed: 400
        });

        // スライドが1枚だけのときは、サムネイルのクリック無効化や見た目調整
        if (slideCount <= 1) {
            const thumEl = document.querySelector('.goods-swiper-thum');
            if (thumEl) thumEl.classList.add('goods-thum--single');
        }
    });
</script>


<?php get_footer(); ?>