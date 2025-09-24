<?php
/*
Template Name: enjoy-food
*/
?>
<?php get_header(); ?>
<main class="page-main enjoy food">
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
                    <div class="com-title com-title--small com-title-hidden">
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
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec01-img-01.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec01-img-02.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="page-toggle page-toggle--yellow">
        <div class="sec01-col">
            <ul class="sec01-col-select tab">
                <li class="active"><a href="javascript:void(0)" data-id="#area01">キッチントキワ</a></li>
                <li><a href="javascript:void(0)" data-id="#area02">Sweet Lab</a></li>
            </ul>

            <div class="area01 area is-active" id="area01">
                <section class="sec02">
                    <div class="content-width-sm">
                        <h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-logo.png" alt="キッチントキワ">
                            <span>キッチントキワ</span>
                        </h2>
                        <p class="sec02-desc">
                            和洋さまざまなサウナ飯や定食を、フードコート形式でご提供します。<br>
                            おしゃれなソファーやランダムに配置されたチェアが、ゆったりとくつろげる空間を演出。<br>
                            店名には「お客様の時間が和みますように」という想いが込められています。
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
                    <div class="content-width-sm">
                        <div class="sec03-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec03-img-01.jpg" alt="">
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
                    <div class="content-width-sm">
                        <div class="page-title-center--has-icon">
                            <h2><i></i>さまざまな席タイプ</h2>
                        </div>
                        <p class="sec04-desc">
                            おひとりでも気軽に利用できるカウンター席、仲間とゆっくり過ごせるテーブル席、ファミリーやグループでくつろげる座敷席など、多彩なスタイルでお楽しみいただけます。
                        </p>
                        <div class="sec04-wrap">
                            <div class="sec04-wrap-col">
                                <div class="sec04-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec04-img-01.jpg" alt="">
                                </div>
                                <p>カウンター席</p>
                            </div>
                            <div class="sec04-wrap-col">
                                <div class="sec04-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec04-img-02.jpg" alt="">
                                </div>
                                <p>テーブル席</p>
                            </div>
                            <div class="sec04-wrap-col">
                                <div class="sec04-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec04-img-03.jpg" alt="">
                                </div>
                                <p>座敷席</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="sec05" id="sec05">
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

                        </div>
                        <div class="sec05-title">
                            <dl>
                                <dt>フェアメニュー</dt>
                                <dd>現在行われている期間限定のフードをご紹介</dd>
                            </dl>
                        </div>
                        <div class="sec05-event">
                            <div class="sec01-col-main">
                                <ul>
                                    <li><a href="">
                                            <span class="hot">HOT!</span>
                                            <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                            <div class="img img-event">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-green.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <span class="category category-green">ご案内</span>
                                                <span class="term">XX.XX.XX〜</span>
                                                <h3>イベントタイトルが入ります</h3>
                                            </div>
                                        </a></li>
                                    <li><a href="">
                                            <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                            <div class="img img-event">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-green.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <span class="category category-green">イベント</span>
                                                <span class="term">XX.XX.XX〜</span>
                                                <h3>イベントタイトルが入ります</h3>
                                            </div>
                                        </a></li>
                                    <li><a href="">
                                            <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                            <div class="img img-event">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-green.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <span class="category category-green">フード/キッチントキワ</span>
                                                <span class="term">XX.XX.XX〜</span>
                                                <h3>イベントタイトルが入ります</h3>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="sec06" id="sec06">
                    <div class="content-width-sm">
                        <div class="page-title-center--has-icon">
                            <h2><i></i>ご利用方法</h2>
                        </div>
                        <div class="sec03-wrap">
                            <div class="sec03-wrap-col">
                                <div class="sec03-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec06-img-01.jpg" alt="">
                                </div>
                                <p>
                                    食券発券機にてご注文ください。
                                </p>
                            </div>
                            <div class="sec03-wrap-col">
                                <div class="sec03-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec06-img-01.jpg" alt="">
                                </div>
                                <p>
                                    発行された食券を食券受取カウンターにお渡しください。呼び出しベルをお渡ししますので、お席にてお待ちください。
                                </p>
                            </div>
                            <div class="sec03-wrap-col">
                                <div class="sec03-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec06-img-01.jpg" alt="">
                                </div>
                                <p>
                                    呼び出しベルが鳴りましたら食べ物お渡しカウンターへベルをお持ちください。
                                </p>
                            </div>
                            <div class="sec03-wrap-col">
                                <div class="sec03-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec06-img-01.jpg" alt="">
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
                    <div class="content-width-sm">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec07-img-01.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="area02 area" id="area02">
                <section class="sec02">
                    <div class="content-width-sm">
                        <h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec02-logo.png" alt="キッチントキワ">
                            <span>スイートラボ</span>
                        </h2>
                        <p class="sec02-desc">
                            湯あがりにぴったりな、甘いご褒美と爽やかな一杯を。<br>
                            湯あがりの体に嬉しいフレッシュスムージーやクラフトビールを揃えたドリンクカウンター。<br>
                            ジュースバーのように気軽に立ち寄れる空間で、さっぱりとした一杯から大人のご褒美ドリンクまで<br>
                            幅広く楽しめます。
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
                    <div class="content-width-sm">
                        <div class="sec03-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec08-img-01.jpg" alt="">
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
                <section class="sec04" id="sec09">
                    <div class="content-width-sm">
                        <div class="page-title-center--has-icon">
                            <h2><i></i>ラボ空間の楽しみ方</h2>
                        </div>
                        <p class="sec04-desc">
                            「SWEET LABO」という名前には、<span>新しい味や楽しみを発見できる場所</span>という想いが込められています。<br>
                            湯あがりのリフレッシュに、食後のデザートに、ぜひ立ち寄ってみてください。
                        </p>
                        <div class="sec04-wrap-swiper">
                            <div class="sec04-swiper-wrapper">
                                <div class="sec04-wrap-swiper-slide">
                                    <div class="sec04-wrap-swiper-slide-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-01.jpg" alt="">
                                    </div>
                                </div>
                                <div class="sec04-wrap-swiper-slide">
                                    <div class="sec04-wrap-swiper-slide-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-02.jpg" alt="">
                                    </div>
                                </div>
                                <div class="sec04-wrap-swiper-slide">
                                    <div class="sec04-wrap-swiper-slide-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-03.jpg" alt="">
                                    </div>
                                </div>
                                <div class="sec04-wrap-swiper-slide">
                                    <div class="sec04-wrap-swiper-slide-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-04.jpg" alt="">
                                    </div>
                                </div>

                                <div class="sec04-wrap-swiper-slide">
                                    <div class="sec04-wrap-swiper-slide-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-01.jpg" alt="">
                                    </div>
                                </div>
                                <div class="sec04-wrap-swiper-slide">
                                    <div class="sec04-wrap-swiper-slide-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-02.jpg" alt="">
                                    </div>
                                </div>
                                <div class="sec04-wrap-swiper-slide">
                                    <div class="sec04-wrap-swiper-slide-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-03.jpg" alt="">
                                    </div>
                                </div>
                                <div class="sec04-wrap-swiper-slide">
                                    <div class="sec04-wrap-swiper-slide-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec09-img-04.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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

                        </div>
                        <div class="sec05-title">
                            <dl>
                                <dt>フェアメニュー</dt>
                                <dd>現在行われている期間限定のフードをご紹介</dd>
                            </dl>
                        </div>
                        <div class="sec05-event">
                            <div class="sec01-col-main">
                                <ul>
                                    <li><a href="">
                                            <span class="hot">HOT!</span>
                                            <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                            <div class="img img-event">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-green.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <span class="category category-green">ご案内</span>
                                                <span class="term">XX.XX.XX〜</span>
                                                <h3>イベントタイトルが入ります</h3>
                                            </div>
                                        </a></li>
                                    <li><a href="">
                                            <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                            <div class="img img-event">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-green.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <span class="category category-green">イベント</span>
                                                <span class="term">XX.XX.XX〜</span>
                                                <h3>イベントタイトルが入ります</h3>
                                            </div>
                                        </a></li>
                                    <li><a href="">
                                            <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                            <div class="img img-event">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-green.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <span class="category category-green">フード/キッチントキワ</span>
                                                <span class="term">XX.XX.XX〜</span>
                                                <h3>イベントタイトルが入ります</h3>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food/sec11-img-01.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php get_template_part('inc/inc-contact'); ?>


</main>






<?php get_footer(); ?>