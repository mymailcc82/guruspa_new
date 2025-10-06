<?php
/*
Template Name: enjoy-food
*/
?>
<?php get_header(); ?>
<main class="page-main enjoy food">
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
                    <span itemprop="name">ご飲食</span>
                    <meta itemprop="position" content="3" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width">
            <div class="enjoy-wrap">
                <div class="enjoy-wrap-txt">
                    <div class="com-title com-title--food com-title-hidden">
                        <p>ご飲食</p>
                        <h2 class="">
                            <span class="title">F</span><span class="title">O</span><span class="title">O</span><span class="title">D</span><span class="title">&</span><span class="title">D</span><span class="title">R</span><span class="title">I</span><span class="title">N</span><span class="title">K</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                        </h2>
                    </div>

                    <h2>心と身体を満たす、ごほうび時間</h2>
                    <p>
                        湯あがりのひとときに、からだが喜ぶごはんを。<br>
                        定番のサウナ飯からスイーツ・ドリンクまで、思い思いにくつろげる食の空間をご用意しています。
                    </p>
                </div>
                <div class="enjoy-wrap-img">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec01-img-01_v2.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec01-img-02_v2.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="page-toggle page-toggle--yellow">
        <div class="sec01-col">
            <ul class="sec01-col-select tab">
                <li class="active"><a href="javascript:void(0)" data-id="#area01">キッチントキワ</a></li>
                <li><a href="javascript:void(0)" data-id="#area02">Sweet Labo</a></li>
            </ul>

            <div class="area01 area is-active" id="area01">
                <div class="sec02-icon-01">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-01.png" alt="">
                </div>
                <div class="page-deco-bg">
                    <picture>
                        <source media="(max-width: 601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-yellow-top-sp.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-yellow-top.png" alt="">
                    </picture>
                </div>
                <div class="page-deco-container page-deco-container--yellow">
                    <div class="relative">

                        <div class="sec02-icon-02">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-02.png" alt="">
                        </div>
                        <div class="sec02-icon-03">
                            <picture>
                                <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-03_sp.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-03.svg" alt="">
                            </picture>
                        </div>
                        <div class="sec02-icon-04">
                            <picture>
                                <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-04_sp.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-04.svg" alt="">
                            </picture>
                        </div>

                        <section class="sec02">


                            <div class="content-width-sm fadeup">
                                <h2>
                                    <img class="logo-01" src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-logo.png" alt="キッチントキワ">
                                    <span>キッチントキワ</span>
                                </h2>
                                <p class="sec02-desc">
                                    和洋さまざまなサウナ飯や定食を、<br class="hidden-sm">フードコート形式でご提供します。<br>
                                    おしゃれなソファーやランダムに配置されたチェアが、ゆったりとくつろげる空間を演出。<br>
                                    店名には「お客様の時間が和みますように」<br class="hidden-sm">という想いが込められています。
                                </p>

                                <div class="page-btn">
                                    <ul>
                                        <li>
                                            <a href="#sec03">味へのこだわり<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec04">さまざまな席タイプ<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec05">メニュー<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec06">ご利用方法<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec07">店舗情報<i></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </section>
                        <section class="sec03" id="sec03">
                            <div class="content-width-sm content-width--mobile-full fadeup">
                                <div class="sec03-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec03-img-01_v2.jpg" alt="">
                                </div>
                                <div class="page-title-center--has-icon">
                                    <h2><i></i>味へのこだわり</h2>
                                </div>
                                <p class="sec03-desc">
                                    三重県産の食材を使用した料理や、姉妹店「サウナイーグル」で人気の“サ飯”もご用意。定番のラーメンや定食はもちろん、サウナ後にぴったりの軽食やスイーツも取り揃えています。
                                </p>
                            </div>
                        </section>
                        <section class="sec04" id="sec04">
                            <div class="content-width-sm fadeup">
                                <div class="page-title-center--has-icon page-title-center--has-icon--nowrap">
                                    <h2><i></i>さまざまな席タイプ</h2>
                                </div>
                                <p class="sec04-desc">
                                    おひとりでも気軽に利用できるカウンター席、仲間とゆっくり過ごせるテーブル席、ファミリーやグループでくつろげる座敷席など、多彩なスタイルでお楽しみいただけます。
                                </p>
                                <div class="sec04-wrap fadeup">
                                    <div class="sec04-wrap-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-09.svg" alt="">
                                    </div>
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec04-img-02_v3.jpg" alt="">
                                        </div>
                                        <p>テーブル席</p>
                                    </div>
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec04-img-01_v3.jpg" alt="">
                                        </div>
                                        <p>カウンター席</p>
                                    </div>
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec04-img-03_v2.jpg" alt="">
                                        </div>
                                        <p>特別ご予約席</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <section class="sec05" id="sec05">
                        <div class="relative">

                            <div class="sec02-icon-03 hidden-mobile">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-05.svg" alt="">
                            </div>
                            <div class="sec02-icon-04 hidden-mobile">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-06.svg" alt="">
                            </div>
                            <div class="content-width-sm">
                                <div class="page-title-center--has-icon">
                                    <h2><i></i>メニュー</h2>
                                </div>
                                <div class="sec05-title">
                                    <dl>
                                        <dt>グランドメニュー</dt>
                                        <dd>季節を問わず楽しめる定番料理はこちら</dd>
                                    </dl>
                                </div>
                                <div class="sec05-pdf">
                                    <?php
                                    //ショートコード
                                    echo do_shortcode('[dflip id="241"][/dflip]');
                                    ?>
                                </div>
                                <div class="sec05-title">
                                    <dl>
                                        <dt>フェアメニュー</dt>
                                        <dd>現在行われている期間限定のフードをご紹介</dd>
                                    </dl>
                                </div>
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
                                                'relation' => 'OR',
                                                array(
                                                    'taxonomy' => 'event_category',
                                                    'field'    => 'slug',
                                                    'terms'    => 'tokiwa', // ここに取得したいカテゴリーのスラッグを指定
                                                ),
                                                //foodも表示
                                                array(
                                                    'taxonomy' => 'event_category',
                                                    'field'    => 'slug',
                                                    'terms'    => 'food', // ここに取得したいカテゴリーのスラッグを指定
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
                                                        <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                                        <div class="img img-info">
                                                            <?php if (has_post_thumbnail()) : ?>
                                                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                            <?php else : ?>
                                                                <?php if ($event_category && !is_wp_error($event_category)) : ?>
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
                                                                    $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-default.jpg'; // デフォルト画像

                                                                    if ($category_slug === 'information' || $category_slug_parent === 'information') {
                                                                        $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-red.jpg';
                                                                    } elseif ($category_slug === 'event' || $category_slug_parent === 'event') {
                                                                        $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-green.jpg';
                                                                    } elseif ($category_slug === 'food' || $category_slug_parent === 'food') {
                                                                        $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-yellow.jpg';
                                                                    } elseif ($category_slug === 'relax' || $category_slug_parent === 'relax') {
                                                                        $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-blue.jpg';
                                                                    } elseif ($category_slug === 'tokiwa') {
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
                                                                if ($category_slug === 'information' || $category_slug_parent === 'information') {
                                                                    $cats_class = 'category-red';
                                                                } elseif ($category_slug === 'event' || $category_slug_parent === 'event') {
                                                                    $cats_class = 'category-green';
                                                                } elseif ($category_slug === 'food' || $category_slug_parent === 'food') {
                                                                    $cats_class = 'category-yellow';
                                                                } elseif ($category_slug === 'relaxation' || $category_slug_parent === 'relaxation') {
                                                                    $cats_class = 'category-blue';
                                                                }
                                                                ?>
                                                                <div class="text-info-cat">
                                                                    <span class="category <?php echo esc_attr($cats_class); ?> cat-<?php echo esc_attr($event_category[0]->slug); ?>"><?php echo esc_html($event_category[0]->name); ?></span>
                                                                </div>
                                                                <div class="text-info-term">
                                                                    <span class="term"><?php echo $event_start_date; ?></span>
                                                                </div>
                                                            </div>
                                                            <h3><?php the_title(); ?></h3>
                                                        </div>
                                                    </a>
                                                </div>
                                        <?php
                                            endwhile;
                                            wp_reset_postdata();
                                        else :
                                            echo '<p class="text-base text-center w-full">イベントが見つかりませんでした。</p>';
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>




                    <section class="sec06" id="sec06">
                        <div class="content-width-sm">
                            <div class="sec06-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-10.svg" alt="">
                            </div>
                            <div class="page-title-center--has-icon">
                                <h2><i></i>ご利用方法</h2>
                            </div>
                            <div class="sec03-wrap fadeup-timelug">
                                <div class="sec03-wrap-col fadeup-item">
                                    <div class="sec03-wrap-col-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec06-img-01_v2.jpg" alt="">
                                    </div>
                                    <p>
                                        食券発券機にてご注文ください。
                                    </p>
                                </div>
                                <div class="sec03-wrap-col fadeup-item">
                                    <div class="sec03-wrap-col-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec06-img-02_v2.jpg" alt="">
                                    </div>
                                    <p>
                                        発行された食券を食券受取カウンターにお渡しください。呼び出しベルをお渡ししますので、お席にてお待ちください。
                                    </p>
                                </div>
                                <div class="sec03-wrap-col fadeup-item">
                                    <div class="sec03-wrap-col-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec06-img-03_v2.jpg" alt="">
                                    </div>
                                    <p>
                                        呼び出しベルが鳴りましたら食べ物お渡しカウンターへベルをお持ちください。
                                    </p>
                                </div>
                                <div class="sec03-wrap-col fadeup-item">
                                    <div class="sec03-wrap-col-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec06-img-04_v2.jpg" alt="">
                                    </div>
                                    <p>
                                        お食事が終わりましたら食器等を返却口までお返しください。<br>
                                        お食事をされないお客様のご利用はご遠慮ください。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="sec07" id="sec07">
                        <div class="content-width-sm fadeup">
                            <div class="page-title-center--has-icon">
                                <h2><i></i>店舗情報</h2>
                            </div>
                            <div class="sec07-wrap">
                                <div class="sec07-wrap-left">
                                    <h3>キッチントキワ</h3>
                                    <div class="sec07-dl">
                                        <dl>
                                            <dt>営業時間</dt>
                                            <dd>
                                                10:00〜23:00（ラストオーダー 22:30）<br>
                                                ※営業時間は変更となる場合がございます。
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>席数・予約について</dt>
                                            <dd>
                                                カウンター、座敷、テーブル、個室を完備。<br>
                                                ご予約は不要でご利用いただけます。<br>
                                                （団体利用をご希望の場合は別途ご相談ください）
                                            </dd>
                                        </dl>
                                    </div>

                                </div>
                                <div class="sec07-wrap-right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec07-img-01_v2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="page-bg-deco-bg-bottom-yellow"></div>
            </div>
            <div class="area02 area" id="area02">
                <div class="sec02-icon-01">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-01.png" alt="">
                </div>
                <div class="page-deco-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-yellow-top.png" alt="">
                </div>
                <div class="page-deco-container page-deco-container--yellow">
                    <div class="relative">
                        <div class="sec02-icon-02">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-02.png" alt="">
                        </div>
                        <div class="sec02-icon-03">
                            <picture>
                                <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-03_sp.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-03.svg" alt="">
                            </picture>
                        </div>
                        <div class="sec02-icon-04">
                            <picture>
                                <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-04_sp.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-04.svg" alt="">
                            </picture>
                        </div>
                        <section class="sec02">
                            <div class="content-width-sm fadeup">
                                <h2>
                                    <img class="logo-02" src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-logo-02.svg" alt="キッチントキワ">
                                    <span>スイートラボ</span>
                                </h2>
                                <p class="sec02-desc">
                                    湯あがりにぴったりな、<br class="hidden-sm">甘いご褒美と爽やかな一杯を。<br>
                                    湯あがりの体に嬉しいフレッシュスムージーやクラフトビールを揃えたドリンクカウンター。<br>
                                    ジュースバーのように気軽に立ち寄れる空間で、さっぱりとした一杯から大人のご褒美ドリンクまで<br class="hidden-mobile">幅広く楽しめます。
                                </p>

                                <div class="page-btn">
                                    <ul>
                                        <li>
                                            <a href="#sec08">甘味処としてのこだわり<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec09">ラボ空間の楽しみ方<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec10">メニュー<i></i></a>
                                        </li>
                                        <li>
                                            <a href="#sec11">店舗情報<i></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <section class="sec03" id="sec08">
                            <div class="content-width-sm content-width--mobile-full fadeup">
                                <div class="sec03-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec08-img-01_v2.jpg" alt="">
                                </div>
                                <div class="page-title-center--has-icon">
                                    <h2><i></i>甘味処としてのこだわり</h2>
                                </div>
                                <p class="sec03-desc">
                                    見た目も楽しいスイーツや、ちょっと珍しいオリジナルデザートもラインナップ。<br>
                                    SNS映えするカラフルなスイーツから、ほっと一息つける和スイーツまで、思わず写真を撮りたくなるメニューが揃います。
                                </p>
                            </div>
                        </section>
                    </div>
                    <section class="sec04" id="sec09">
                        <div class="content-width-sm">
                            <div class="page-title-center--has-icon">
                                <h2><i></i>ラボ空間の楽しみ方</h2>
                            </div>
                            <p class="sec04-desc">
                                「SWEET LABO」という名前には、<span>新しい味や楽しみを発見できる場所</span>という想いが込められています。<br>
                                湯あがりのリフレッシュに、食後のデザートに、ぜひ立ち寄ってみてください。
                            </p>
                        </div>
                        <div class="content-width-sm content-width--mobile-full">
                            <div class="sec04-wrap-swiper">
                                <div class="sec04-swiper-wrapper">
                                    <div class="sec04-wrap-swiper-slide">
                                        <div class="sec04-wrap-swiper-slide-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-01_v2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="sec04-wrap-swiper-slide">
                                        <div class="sec04-wrap-swiper-slide-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-02_v2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="sec04-wrap-swiper-slide">
                                        <div class="sec04-wrap-swiper-slide-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-03_v2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="sec04-wrap-swiper-slide">
                                        <div class="sec04-wrap-swiper-slide-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-04_v2.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="sec04-wrap-swiper-slide">
                                        <div class="sec04-wrap-swiper-slide-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-01_v2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="sec04-wrap-swiper-slide">
                                        <div class="sec04-wrap-swiper-slide-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-02_v2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="sec04-wrap-swiper-slide">
                                        <div class="sec04-wrap-swiper-slide-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-03_v2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="sec04-wrap-swiper-slide">
                                        <div class="sec04-wrap-swiper-slide-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-04_v2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </section>
                    <div class="relative">
                        <div class="sec02-icon-03">
                            <picture>
                                <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-03_sp.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-03.svg" alt="">
                            </picture>
                        </div>
                        <div class="sec02-icon-04">
                            <picture>
                                <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-04_sp.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-icon-04.svg" alt="">
                            </picture>
                        </div>
                        <section class="sec05" id="sec10">
                            <div class="content-width-sm">
                                <div class="page-title-center--has-icon">
                                    <h2><i></i>メニュー</h2>
                                </div>
                                <div class="sec05-title">
                                    <dl>
                                        <dt>グランドメニュー</dt>
                                        <dd>季節を問わず楽しめる定番料理はこちら</dd>
                                    </dl>
                                </div>
                                <div class="sec05-pdf">
                                    <?php
                                    //ショートコード
                                    echo do_shortcode('[dflip id="246"][/dflip]');
                                    ?>
                                </div>
                                <div class="sec05-title">
                                    <dl>
                                        <dt>フェアメニュー</dt>
                                        <dd>現在行われている期間限定のフードをご紹介</dd>
                                    </dl>
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
                                                //event_categoryが'event'のものを取得
                                                'tax_query' => array(
                                                    'relation' => 'OR',
                                                    array(
                                                        'taxonomy' => 'event_category',
                                                        'field'    => 'slug',
                                                        'terms'    => 'sweet', // ここに取得したいカテゴリーのスラッグを指定
                                                    ),
                                                    //foodも表示
                                                    array(
                                                        'taxonomy' => 'event_category',
                                                        'field'    => 'slug',
                                                        'terms'    => 'food', // ここに取得したいカテゴリーのスラッグを指定
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
                                                            <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                                            <div class="img img-info">
                                                                <?php if (has_post_thumbnail()) : ?>
                                                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                                <?php else : ?>
                                                                    <?php if ($event_category && !is_wp_error($event_category)) : ?>
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
                                                                        $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-default.jpg'; // デフォルト画像

                                                                        if ($category_slug === 'information' || $category_slug_parent === 'information') {
                                                                            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-red.jpg';
                                                                        } elseif ($category_slug === 'event' || $category_slug_parent === 'event') {
                                                                            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-green.jpg';
                                                                        } elseif ($category_slug === 'food' || $category_slug_parent === 'food') {
                                                                            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-yellow.jpg';
                                                                        } elseif ($category_slug === 'relax' || $category_slug_parent === 'relax') {
                                                                            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-blue.jpg';
                                                                        } elseif ($category_slug === 'tokiwa') {
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
                                                                    if ($category_slug === 'information' || $category_slug_parent === 'information') {
                                                                        $cats_class = 'category-red';
                                                                    } elseif ($category_slug === 'event' || $category_slug_parent === 'event') {
                                                                        $cats_class = 'category-green';
                                                                    } elseif ($category_slug === 'food' || $category_slug_parent === 'food') {
                                                                        $cats_class = 'category-yellow';
                                                                    } elseif ($category_slug === 'relax' || $category_slug_parent === 'relax') {
                                                                        $cats_class = 'category-blue';
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
                                                    </div>
                                            <?php
                                                endwhile;
                                                wp_reset_postdata();
                                            else :
                                                echo '<p class="text-base text-center w-full">イベントが見つかりませんでした。</p>';
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>

                    <section class="sec07" id="sec11">
                        <div class="content-width-sm">
                            <div class="page-title-center--has-icon">
                                <h2><i></i>店舗情報</h2>
                            </div>
                            <div class="sec07-wrap">
                                <div class="sec07-wrap-left">
                                    <h3>SweetLabo</h3>
                                    <div class="sec07-dl">
                                        <dl>
                                            <dt>営業時間</dt>
                                            <dd>
                                                10:00〜23:00（ラストオーダー 22:30）<br>
                                                ※営業時間は変更となる場合がございます。
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>注文方法</dt>
                                            <dd>
                                                カウンターよりご注文ください。
                                            </dd>
                                        </dl>
                                    </div>

                                </div>
                                <div class="sec07-wrap-right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec11-img-01_v2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="page-bg-deco-bg-bottom-yellow"></div>
            </div>
        </div>
    </div>
    <?php get_template_part('inc/inc-aside'); ?>


</main>






<?php get_footer(); ?>