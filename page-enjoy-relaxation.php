<?php
/*
Template Name: enjoy-relaxation
*/

$type = isset($_GET['type']) ? $_GET['type'] : 'relaxation';
?>
<?php get_header(); ?>
<main class="page-main enjoy relax">
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
                    <span itemprop="name">リラクゼーション</span>
                    <meta itemprop="position" content="3" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width">
            <div class="enjoy-wrap">
                <div class="enjoy-wrap-txt">
                    <div class="com-title com-title--relax com-title-hidden">
                        <p>リラクゼーション</p>
                        <h2 class="">
                            <span class="title">R</span><span class="title">E</span><span class="title">L</span><span class="title">A</span><span class="title">X</span><span class="title">A</span><span class="title">T</span><span class="title">I</span><span class="title">O</span><span class="title">N</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                        </h2>
                    </div>

                    <h2>深く癒やされる、<br>プロの手による“整い”</h2>
                    <p>
                        日々の疲れをリセットする、贅沢な時間。<br>
                        経験豊富なセラピストによる施術で、<br>
                        心身ともに整うひとときをご提供します。<br>
                        ゆったりとした空間で、自分を労わる特別なリラクゼーション体験を。
                    </p>
                </div>
                <div class="enjoy-wrap-img">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec01-img-01_v2.webp" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec01-img-02_v2.webp" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="page-toggle">
        <div class="sec01-col">
            <?php
            if ($type === 'relaxation') {
                $relax_active = 'active';
                $akasuri_active = '';
                $active_ul = 'active-area01';
            } elseif ($type === 'akasuri') {
                $relax_active = '';
                $akasuri_active = 'active';
                $active_ul = 'active-area02';
            } else {
                $relax_active = 'active';
                $akasuri_active = '';
                $active_ul = 'active-area01';
            }
            ?>
            <ul class="sec01-col-select tab mb-0 mb-30-mobile <?php echo $active_ul; ?>">

                <li class="<?php echo $relax_active; ?>"><a href="<?php echo home_url(); ?>/enjoy/relaxation/?type=relaxation" data-id="#area01">リラクゼーション</a></li>
                <li class="<?php echo $akasuri_active; ?>"><a href="<?php echo home_url(); ?>/enjoy/relaxation/?type=akasuri" data-id="#area02">アカスリ</a></li>
            </ul>



            <div class="area01 area is-<?php echo $relax_active; ?>" id="area01">
                <div class="sec02-icon-01">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-01.png" alt="">
                </div>
                <div class="page-deco-bg">
                    <picture>
                        <source media="(max-width: 601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-blue-top-sp_v2.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-blue-top_v2.png" alt="">
                    </picture>

                </div>
                <div class="page-deco-container page-deco-container--blue-relax">
                    <div class="relative">
                        <div class="sec02-icon-02">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-02.png" alt="">
                        </div>
                        <div class="sec02-icon-03">
                            <picture>
                                <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-03_sp.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-03.svg" alt="">
                            </picture>
                        </div>
                        <div class="sec02-icon-04">
                            <picture>
                                <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-04_sp.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-04.svg" alt="">
                            </picture>
                        </div>
                        <section class="sec02">
                            <div class="content-width-sm">
                                <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/spareraku_logo.png" alt=""></h2>
                                <p>
                                    館内にはリラクゼーションブランド<br class="hidden-sm">「Spa Re.Ra.Ku」がございます。<br>
                                    “ハンドコミュニケーション”を通じて、<br class="hidden-sm">心と身体の癒しはもちろん、<br class="hidden-sm">美容・ダイエット・パフォーマンスアップなど、<br class="hidden-sm">お客様一人ひとりのお悩みに寄り添います。
                                </p>
                            </div>
                            <div class="content-width-sm">
                                <div class="page-btn">
                                    <ul>
                                        <li>
                                            <a href="#sec03">イベント情報<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec04">特徴・魅力<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec05">メニュー<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec06">予約方法<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec07">よくある質問<i></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <section class="sec03" id="sec03">
                            <div class="sec03-event">
                                <div class="content-width-sm">
                                    <div class="page-title-center--has-icon page-title-center--has-icon--font-30">
                                        <h2><i></i>イベント情報</h2>
                                    </div>
                                </div>
                                <div class="content-width-small content-width--mobile-full fadeup">
                                    <div class="area-event">
                                        <div class="swiper swiper-event sec01-col-main">
                                            <div class="swiper-wrapper">
                                                <?php
                                                $args = array(
                                                    'post_type' => 'event', // カスタム投稿タイプ名
                                                    'posts_per_page' => 3, // 表示する記事数
                                                    'orderby' => 'date', // 日付でソート
                                                    'order' => 'DESC', // 降順
                                                    //event_categoryが'event'のものを取得
                                                    'tax_query' => array(
                                                        array(
                                                            'taxonomy' => 'event_category',
                                                            'field'    => 'slug',
                                                            'terms'    => 'relax', // ここに取得したいカテゴリーのスラッグを指定
                                                        ),
                                                    ),
                                                );
                                                ?>
                                                <?php
                                                $the_query = new WP_Query($args);
                                                if ($the_query->have_posts()) :
                                                    while ($the_query->have_posts()) : $the_query->the_post();
                                                        $event_category = get_the_terms(get_the_ID(), 'event_category');
                                                        $event_start_date = get_field('event_start_date'); // 開始日
                                                        $is_hot = get_field('hot'); // HOT! フラグ
                                                ?>

                                                        <div class="swiper-slide">
                                                            <a href="<?php the_permalink(); ?>">
                                                                <?php if ($is_hot) : ?>
                                                                    <span class="hot"><?php echo $is_hot; ?></span>
                                                                <?php endif; ?>
                                                                <?php
                                                                // カテゴリーに応じたデフォルト画像を設定
                                                                $category_slug = $event_category[0]->slug;
                                                                $category_slug_parent = '';
                                                                //$event_category[0]の親カテゴリーを取得
                                                                if ($event_category[0]->parent) {
                                                                    $parent_term = get_term($event_category[0]->parent, 'event_category');
                                                                    if ($parent_term && !is_wp_error($parent_term)) {
                                                                        $category_slug_parent_id = $parent_term->term_id;
                                                                        $category_slug_parent = $parent_term->slug;
                                                                    }
                                                                }
                                                                ?>
                                                                <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                                                <?php get_template_part('inc/inc-event-img'); ?>
                                                                <?php get_template_part('inc/inc-event-text'); ?>
                                                            </a>
                                                        </div>
                                                <?php
                                                    endwhile;
                                                    wp_reset_postdata();
                                                else :
                                                    echo '<p class="text-base">現在掲載されているイベントがありません。</p>';
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                        <section class="sec04" id="sec04">
                            <div class="content-width-sm">
                                <div class="page-title-center--has-icon page-title-center--has-icon--font-30">
                                    <h2><i></i>特徴・魅力</h2>
                                </div>

                                <div class="sec04-wrap fadeup">
                                    <div class="sec04-wrap-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec02-icon-05.svg" alt="">
                                    </div>
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec04-img-01_v2.webp" alt="">
                                        </div>
                                        <h3>経験豊富な施術者が在籍</h3>
                                        <p>
                                            確かな技術と知識を持つスタッフが、お客様の身体に合わせた最適なケアを行います。
                                        </p>
                                    </div>
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec04-img-02_v2.webp" alt="">
                                        </div>
                                        <h3>豊富な施術メニュー</h3>
                                        <p>
                                            もみほぐし、アロマトリートメント、タイ式、フェイシャルなど多彩なコースをご用意。
                                        </p>
                                    </div>
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec04-img-03_v2.webp" alt="">
                                        </div>
                                        <h3>男女ともに利用可能</h3>
                                        <p>
                                            性別問わずリラックスできる、プライバシーに配慮した空間です。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <section class="sec05" id="sec05">
                        <div class="content-width-sm fadeup">
                            <div class="sec05-wrap-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec02-icon-06.svg" alt="">
                            </div>
                            <div class="page-title-center--has-icon page-title-center--has-icon--font-30 mb-20">
                                <h2><i></i>メニュー</h2>
                            </div>
                            <p class="sec05-desc">
                                各コースの詳細・料金の目安をご紹介します。
                            </p>
                        </div>

                        <div class="content-width-small">
                            <div class="sec05-wrap">
                                <div class="sec05-wrap-col accordion">
                                    <dl class="sec05-wrap-col-dl">
                                        <dt class="sec05-wrap-col-dt">
                                            <i></i>
                                            <div class="sec05-wrap-col-left">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec05-img-01_v3.webp" alt="">
                                            </div>
                                            <div class="sec05-wrap-col-right">
                                                <h3>ボディケア部門</h3>
                                                <p>
                                                    お疲れの箇所を中心に全身をほぐしていきます。<br>
                                                    凝り固まった筋肉をじっくりとほぐし、全身の巡りを促進します。
                                                </p>
                                            </div>
                                        </dt>
                                        <dd class="sec05-wrap-col-dd">
                                            <div class="sec05-wrap-col-right hidden-sm">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec05-img-01_v3.webp" alt="">
                                                <p>
                                                    お疲れの箇所を中心に全身をほぐしていきます。凝り固まった筋肉をじっくりとほぐし、全身の巡りを促進します。
                                                </p>
                                            </div>
                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">ボディケア</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="3" class="main-th hidden-mobile">ボディケア</th>
                                                        <th>30分</th>
                                                        <td><strong>3,300</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th>60分</th>
                                                        <td><strong>6,000</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th>90分</th>
                                                        <td><strong>8,500</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">フットケア</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="3" class="main-th hidden-mobile">フットケア</th>
                                                        <th>30分</th>
                                                        <td><strong>3,300</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th>60分</th>
                                                        <td><strong>6,000</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th>90分</th>
                                                        <td><strong>8,500</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">超絶睡眠ヘッドスパ</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="hidden-mobile main-th">超絶睡眠ヘッドスパ</th>
                                                        <th>30分</th>
                                                        <td><strong>3,300</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th>60分</th>
                                                        <td><strong>6,000</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <h3>オプション</h3>
                                            <div class="sec01-center-wrap">
                                                <div class="sec01-center-wrap-col">
                                                    <dl>
                                                        <dt>延長10分</dt>
                                                        <dd>
                                                            <p>
                                                                1,100<span>円</span><small>(税込)</small>
                                                            </p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="sec01-center-wrap-col">
                                                    <dl>
                                                        <dt>指名料</dt>
                                                        <dd>
                                                            <p>
                                                                220<span>円</span><small>(税込)</small>
                                                            </p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="sec05-wrap-col accordion">
                                    <dl class="sec05-wrap-col-dl">
                                        <dt class="sec05-wrap-col-dt">
                                            <i></i>
                                            <div class="sec05-wrap-col-left">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec05-img-02_v3.webp" alt="">
                                            </div>
                                            <div class="sec05-wrap-col-right">
                                                <h3>エステ部門</h3>
                                                <p>
                                                    気になる部分をスッキリ整えながら、むくみや冷えの改善にも効果が期待できます。<br>
                                                    入浴後の温まった身体に心地よく働きかけ、リフレッシュした軽やかさを実感いただけます。
                                                </p>
                                            </div>
                                        </dt>
                                        <dd class="sec05-wrap-col-dd">
                                            <div class="sec05-wrap-col-right hidden-sm">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec05-img-02_v3.webp" alt="">
                                                <p>
                                                    気になる部分をスッキリ整えながら、むくみや冷えの改善にも効果が期待できます。<br>
                                                    入浴後の温まった身体に心地よく働きかけ、リフレッシュした軽やかさを実感いただけます。
                                                </p>
                                            </div>

                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">アロマリンパ</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="3" class="main-th hidden-mobile">アロマリンパ</th>
                                                        <th>60分</th>
                                                        <td><strong>7,100</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th>90分</th>
                                                        <td><strong>10,100</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">筋膜アロマ</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="3" class="main-th hidden-mobile">筋膜アロマ</th>
                                                        <th>60分</th>
                                                        <td><strong>8,600</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th>90分</th>
                                                        <td><strong>12,400</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">脂肪溶解キャビテーション</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="hidden-mobile main-th">脂肪溶解<br>キャビテーション</th>
                                                        <th rowspan="2">30分</th>
                                                        <td rowspan="2"><strong>5,700</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">小顔美肌フェイシャル</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="main-th hidden-mobile">小顔美肌<br>フェイシャル</th>
                                                        <th rowspan="2">60分</th>
                                                        <td rowspan="2"><strong>10,700</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">ディープリラックス</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="main-th hidden-mobile">ディープ<br>リラックス</th>
                                                        <th rowspan="2">100分</th>
                                                        <td rowspan="2"><strong>11,900</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">ホットリラックス</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="main-th hidden-mobile">ホットリラックス</th>
                                                        <th rowspan="2">100分</th>
                                                        <td rowspan="2"><strong>12,900</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">肩甲骨リンパストレッチ</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="main-th hidden-mobile">肩甲骨<br>リンパストレッチ</th>
                                                        <th rowspan="2">100分</th>
                                                        <td rowspan="2"><strong>12,200</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">脂肪セルライトクラッシュ</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="main-th hidden-mobile">脂肪セルライト<br>クラッシュ</th>
                                                        <th rowspan="2">100分</th>
                                                        <td rowspan="2"><strong>12,700</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">フェイシャル&フルボディ</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="main-th hidden-mobile">フェイシャル&<br>フルボディ</th>
                                                        <th rowspan="2">100分</th>
                                                        <td rowspan="2"><strong>16,100</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <h3>オプション</h3>
                                            <div class="sec01-center-wrap sec01-center-wrap--3-1 sec01-center-wrap--heigh-2">
                                                <div class="sec01-center-wrap-col">
                                                    <dl>
                                                        <dt>アロマ<br>延長10分</dt>
                                                        <dd>
                                                            <p>
                                                                1,400<span>円</span><small>(税込)</small>
                                                            </p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="sec01-center-wrap-col">
                                                    <dl>
                                                        <dt>キャビテーション<br>延長30分</dt>
                                                        <dd>
                                                            <p>
                                                                6,000<span>円</span><small>(税込)</small>
                                                            </p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="sec01-center-wrap-col">
                                                    <dl>
                                                        <dt>指名料</dt>
                                                        <dd>
                                                            <p>
                                                                220<span>円</span><small>(税込)</small>
                                                            </p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="sec06" id="sec06">
                        <div class="content-width-sm fadeup">
                            <div class="page-title-center--has-icon page-title-center--has-icon--font-30">
                                <h2><i></i>予約方法</h2>
                            </div>
                            <div class="sec06-wrap">
                                <div class="sec06-wrap-left">
                                    <p>
                                        ご予約はWEBまたは館内の専用カウンター、タブレット端末から。<br>
                                        空き状況を確認しながら、お好みの時間帯・コースをお選びいただけます。
                                    </p>
                                    <div class="sec06-dl">
                                        <dl>
                                            <dt>予約方法</dt>
                                            <dd>
                                                1階 リラクゼーション受付<br>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>受付時間</dt>
                                            <dd>11:00～23:00（最終受付22:30）</dd>
                                        </dl>
                                    </div>
                                    <div class="com-btn-border-black com-btn-border--left">
                                        <a href="https://reraku.jp/studio/gruspa" target="_blank" rel="noopener noreferrer">ネット予約はこちら<i class="icon-blue"></i></a>
                                    </div>
                                </div>
                                <div class="sec06-wrap-right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec06-img-01_v2.webp" alt="">
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
                <div class="page-deco-bg-bottom">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-blue-bottom.png" alt="">
                </div>
            </div>
            <div class="area02 area is-<?php echo $akasuri_active; ?>" id="area02">
                <div class="page-deco-bg">
                    <picture>
                        <source media="(max-width: 601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-blue-top-sp_v2.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-blue-top_v2.png" alt="">
                    </picture>
                </div>
                <div class="sec02-icon-01">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-01.png" alt="">
                </div>
                <div class="page-deco-container page-deco-container--blue-relax">
                    <div class="relative">
                        <div class="sec02-icon-02">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-02.png" alt="">
                        </div>
                        <div class="sec02-icon-03">
                            <picture>
                                <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-03_sp.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-03.svg" alt="">
                            </picture>
                        </div>
                        <div class="sec02-icon-04">
                            <picture>
                                <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-04_sp.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-04.svg" alt="">
                            </picture>
                        </div>

                        <section class="sec02">
                            <div class="content-width-sm">
                                <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/spareraku_logo.png" alt=""></h2>
                                <p>
                                    館内にはリラクゼーションブランド<br class="hidden-sm">「Spa Re.Ra.Ku」がございます。<br>
                                    “ハンドコミュニケーション”を通じて、<br class="hidden-sm">心と身体の癒しはもちろん、<br class="hidden-sm">美容・ダイエット・パフォーマンスアップなど、<br class="hidden-sm">お客様一人ひとりのお悩みに寄り添います。
                                </p>
                            </div>
                            <div class="content-width-sm">
                                <div class="page-btn">
                                    <ul>
                                        <li>
                                            <a href="#sec08">イベント情報<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec09">特徴・魅力<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec10">メニュー<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec11">予約方法<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec07">よくある質問<i></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <section class="sec03" id="sec08">
                            <div class="sec03-event">
                                <div class="content-width-sm">
                                    <div class="page-title-center--has-icon page-title-center--has-icon--font-30">
                                        <h2><i></i>イベント情報</h2>
                                    </div>
                                </div>
                                <div class="content-width-small content-width--mobile-full">
                                    <div class="area-event">
                                        <div class="swiper swiper-event sec01-col-main">
                                            <div class="swiper-wrapper">
                                                <?php
                                                $args = array(
                                                    'post_type' => 'event', // カスタム投稿タイプ名
                                                    'posts_per_page' => 3, // 表示する記事数
                                                    'orderby' => 'date', // 日付でソート
                                                    'order' => 'DESC', // 降順
                                                    //event_categoryが'relax'と'akasuri'のものを取得
                                                    'tax_query' => array(
                                                        array(
                                                            'taxonomy' => 'event_category',
                                                            'field'    => 'slug',
                                                            'terms'    => array('relax', 'akasuri'), // ここに取得したいカテゴリーのスラッグを指定
                                                        ),

                                                    ),
                                                );
                                                ?>
                                                <?php
                                                $the_query = new WP_Query($args);
                                                if ($the_query->have_posts()) :
                                                    while ($the_query->have_posts()) : $the_query->the_post();
                                                        $event_category = get_the_terms(get_the_ID(), 'event_category');
                                                        $event_start_date = get_field('event_start_date'); // 開始日
                                                        $is_hot = get_field('hot'); // HOT! フラグ
                                                ?>

                                                        <div class="swiper-slide">
                                                            <a href="<?php the_permalink(); ?>">
                                                                <?php if ($is_hot) : ?>
                                                                    <span class="hot"><?php echo $is_hot; ?></span>
                                                                <?php endif; ?>
                                                                <?php
                                                                // カテゴリーに応じたデフォルト画像を設定
                                                                $category_slug = $event_category[0]->slug;
                                                                $category_slug_parent = '';
                                                                //$event_category[0]の親カテゴリーを取得
                                                                if ($event_category[0]->parent) {
                                                                    $parent_term = get_term($event_category[0]->parent, 'event_category');
                                                                    if ($parent_term && !is_wp_error($parent_term)) {
                                                                        $category_slug_parent_id = $parent_term->term_id;
                                                                        $category_slug_parent = $parent_term->slug;
                                                                    }
                                                                }
                                                                ?>
                                                                <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                                                <?php get_template_part('inc/inc-event-img'); ?>
                                                                <?php get_template_part('inc/inc-event-text'); ?>
                                                            </a>
                                                        </div>
                                                <?php
                                                    endwhile;
                                                    wp_reset_postdata();
                                                else :
                                                    echo '<p class="text-base">現在掲載されているイベントがありません。</p>';
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                        <section class="sec04" id="sec09">
                            <div class="content-width-sm">
                                <div class="page-title-center--has-icon page-title-center--has-icon--font-30">
                                    <h2><i></i>特徴・魅力</h2>
                                </div>
                                <div class="sec04-wrap">
                                    <div class="sec04-wrap-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec02-icon-05.svg" alt="">
                                    </div>
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec09-img-01_v2.webp" alt="">
                                        </div>
                                        <h3>本場仕込みのアカスリ技術</h3>
                                        <p>
                                            技術を磨いた専門施術者による、本格的なケア。
                                        </p>
                                    </div>
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec09-img-02_v2.webp" alt="">
                                        </div>
                                        <h3>肌質・目的に合わせた<br class="hidden-mobile">メニュー構成</h3>
                                        <p>
                                            角質除去に加え、オイルマッサージやフェイシャル付きのセットもご用意。
                                        </p>
                                    </div>
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec09-img-03_v2.webp" alt="">
                                        </div>
                                        <h3>男女利用可能（専用スペース完備）</h3>
                                        <p>
                                            性別問わずリラックスできる、プライバシーに配慮した空間です。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <section class="sec05" id="sec10">
                        <div class="content-width-sm">
                            <div class="sec05-wrap-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec02-icon-06.svg" alt="">
                            </div>
                            <div class="page-title-center--has-icon page-title-center--has-icon--font-30">
                                <h2><i></i>メニュー</h2>
                            </div>
                            <p class="sec05-desc">
                                各コースの詳細・料金の目安をご紹介します。
                            </p>
                        </div>

                        <div class="content-width-small">
                            <div class="sec05-wrap">
                                <div class="sec05-wrap-col accordion">
                                    <dl class="sec05-wrap-col-dl">
                                        <dt class="sec05-wrap-col-dt">
                                            <i></i>
                                            <div class="sec05-wrap-col-left">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec05-img-03_v3.webp" alt="">
                                            </div>
                                            <div class="sec05-wrap-col-right">
                                                <h3>アカスリ部門</h3>
                                                <p>
                                                    お身体にたまった古い角質を取り除くことで、皮膚の生まれ変わりを促進する効果が期待できます。<br>
                                                    お肌をサッパリ、プルプルにしたい方におすすめです。
                                                </p>
                                            </div>
                                        </dt>
                                        <dd class="sec05-wrap-col-dd">
                                            <div class="sec05-wrap-col-right hidden-sm">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec05-img-03_v3.webp" alt="">
                                                <p>
                                                    お身体にたまった古い角質を取り除くことで、皮膚の生まれ変わりを促進する効果が期待できます。<br>
                                                    お肌をサッパリ、プルプルにしたい方におすすめです。
                                                </p>
                                            </div>
                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">アカスリ</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="3" class="main-th hidden-mobile">アカスリ</th>
                                                        <th>30分</th>
                                                        <td><strong>4,200</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th>60分</th>
                                                        <td><strong>5,300</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">セットコース</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="4" class="main-th hidden-mobile">セットコース</th>
                                                        <th>60分</th>
                                                        <td><strong>9,200</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th>80分</th>
                                                        <td><strong>12,000</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th>100分</th>
                                                        <td><strong>14,800</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th>120分</th>
                                                        <td><strong>17,500</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="sec05-table">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" class="hidden-sm main-th">韓流リンパエステ</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="3" class="main-th hidden-mobile">韓流リンパエステ</th>
                                                        <th>30分</th>
                                                        <td><strong>4,600</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th>40分</th>
                                                        <td><strong>5,900</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th>60分</th>
                                                        <td><strong>8,700</strong>円<small>(税込)</small></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <h3>オプション</h3>
                                            <div class="sec01-center-wrap sec01-center-wrap--3-1">
                                                <div class="sec01-center-wrap-col">
                                                    <dl>
                                                        <dt>かかと角質ケア10分</dt>
                                                        <dd>
                                                            <p>
                                                                1,400<span>円</span><small>(税込)</small>
                                                            </p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="sec01-center-wrap-col">
                                                    <dl>
                                                        <dt>延長10分</dt>
                                                        <dd>
                                                            <p>
                                                                1,400<span>円</span><small>(税込)</small>
                                                            </p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="sec01-center-wrap-col">
                                                    <dl>
                                                        <dt>指名料</dt>
                                                        <dd>
                                                            <p>
                                                                300<span>円</span><small>(税込)</small>
                                                            </p>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="sec06" id="sec11">
                        <div class="content-width-sm">
                            <div class="page-title-center--has-icon page-title-center--has-icon--font-30">
                                <h2><i></i>予約方法</h2>
                            </div>
                            <div class="sec06-wrap">
                                <div class="sec06-wrap-left">
                                    <p>
                                        ご予約はWEBまたは館内専用端末、アカスリ受付にてご予約ください。<br>
                                        入浴後に施術を受けることをおすすめしています。
                                    </p>
                                    <div class="sec06-dl">
                                        <dl>
                                            <dt>予約方法</dt>
                                            <dd>1階 リラクゼーション受付</dd>
                                        </dl>
                                        <dl>
                                            <dt>受付時間</dt>
                                            <dd>11:00～23:00（最終受付22:30）</dd>
                                        </dl>
                                    </div>
                                    <div class="com-btn-border-black com-btn-border--left">
                                        <a href="https://reraku.jp/studio/gruspa" target="_blank" rel="noopener noreferrer">ネット予約はこちら<i class="icon-blue"></i></a>
                                    </div>
                                </div>
                                <div class="sec06-wrap-right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec06-img-01_v2.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="page-deco-bg-bottom">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-blue-bottom.png" alt="">
                </div>


            </div>
        </div>
    </div>

    <section class="sec07-com">
        <div class="content-width" id="sec07">
            <div class="sec07-wrap">
                <div class="sec07-wrap-title">
                    <div class="page-title--has-icon">
                        <h2><i></i>よくある質問</h2>
                    </div>
                    <div class="sec07-btn hidden-mobile">
                        <a href="<?php echo home_url(); ?>/faq/#sec06">一覧を見る<i></i></a>
                    </div>
                </div>
                <div class="sec07-wrap-faq accordion">
                    <?php
                    $args = array(
                        'post_type' => 'faq', // カスタム投稿タイプ名
                        'posts_per_page' => 3, // 表示する記事数
                        'orderby' => 'date', // 日付で並び替え
                        'order' => 'DESC', // 降順
                        //faq_categoryのonsenを表示
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'faq_category',
                                'field'    => 'slug',
                                'terms'    => 'relax',
                            ),
                        ),
                    );
                    ?>
                    <?php
                    $faq_query = new WP_Query($args);
                    if ($faq_query->have_posts()) :
                        while ($faq_query->have_posts()) : $faq_query->the_post();
                    ?>
                            <dl>
                                <dt><i></i><?php the_title(); ?></dt>
                                <dd><i></i><?php the_content(); ?></dd>
                            </dl>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>まだ記事がありません。</p>';
                    endif;
                    ?>

                    <div class="com-btn-mobile hidden-sm">
                        <a href="<?php echo home_url(); ?>/faq/">一覧を見る<i></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <?php get_template_part('inc/inc-aside'); ?>


</main>





<?php get_footer(); ?>