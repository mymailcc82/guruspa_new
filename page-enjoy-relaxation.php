<?php
/*
Template Name: enjoy-relaxation
*/
?>
<?php get_header(); ?>
<main class="page-main enjoy relax">
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
                    <div class="com-title com-title--small com-title-hidden">
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
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec01-img-01.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec01-img-02.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="page-toggle">
        <div class="sec01-col">
            <ul class="sec01-col-select tab">
                <li class="active"><a href="javascript:void(0)" data-id="#area01">リラクゼーション</a></li>
                <li><a href="javascript:void(0)" data-id="#area02">アカスリ</a></li>
            </ul>

            <div class="area01 area is-active" id="area01">
                <div class="page-deco-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-blue-top_v2.png" alt="">
                </div>
                <div class="page-deco-container page-deco-container--blue">
                    <div class="relative">
                        <div class="sec02-icon-01">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-01.png" alt="">
                        </div>
                        <div class="sec02-icon-02">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-02.png" alt="">
                        </div>
                        <div class="sec02-icon-03">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-03.svg" alt="">
                        </div>
                        <div class="sec02-icon-04">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-04.svg" alt="">
                        </div>
                        <section class="sec02">
                            <div class="content-width-sm">
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
                            <div class="sec03-event">
                                <div class="content-width-sm">
                                    <div class="page-title-center--has-icon">
                                        <h2><i></i>イベント情報</h2>
                                    </div>
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
                        <section class="sec04" id="sec04">
                            <div class="content-width-sm">
                                <div class="page-title-center--has-icon">
                                    <h2><i></i>特徴・魅力</h2>
                                </div>
                                <div class="sec04-wrap">
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec04-img-01.jpg" alt="">
                                        </div>
                                        <h3>経験豊富な施術者が在籍</h3>
                                        <p>
                                            確かな技術と知識を持つスタッフが、お客様の身体に合わせた最適なケアを行います。
                                        </p>
                                    </div>
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec04-img-02.jpg" alt="">
                                        </div>
                                        <h3>豊富な施術メニュー</h3>
                                        <p>
                                            もみほぐし、アロマトリートメント、タイ式、フェイシャルなど多彩なコースをご用意。
                                        </p>
                                    </div>
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec04-img-03.jpg" alt="">
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
                        <div class="content-width-sm">
                            <div class="page-title-center--has-icon">
                                <h2><i></i>メニュー</h2>
                            </div>
                            <p class="sec05-desc">
                                各コースの詳細・料金の目安をご紹介します。
                            </p>
                        </div>
                        <div class="content-width-sm content-width--mobile-full">
                            <div class="sec05-wrap">
                                <div class="sec05-wrap-col">
                                    <div class="sec05-wrap-col-left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec05-img-01.jpg" alt="">
                                    </div>
                                    <div class="sec05-wrap-col-right">
                                        <h3>もみほぐし</h3>
                                        <p>
                                            凝り固まった筋肉をじっくりとほぐし、全身の巡りを促進します。
                                        </p>
                                        <div class="sec05-table">
                                            <table>
                                                <tr>
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
                                    </div>
                                </div>

                                <div class="sec05-wrap-col">
                                    <div class="sec05-wrap-col-left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec05-img-02.jpg" alt="">
                                    </div>
                                    <div class="sec05-wrap-col-right">
                                        <h3>アロマトリートメント</h3>
                                        <p>
                                            植物由来のアロマオイルを使用し、心地よい香りとタッチで深い癒しへ。
                                        </p>
                                        <div class="sec05-table">
                                            <table>
                                                <tr>
                                                    <th>60分</th>
                                                    <td><strong>7,000</strong>円<small>(税込)</small></td>
                                                </tr>
                                                <tr>
                                                    <th>90分</th>
                                                    <td><strong>9,000</strong>円<small>(税込)</small></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="sec05-wrap-col">
                                    <div class="sec05-wrap-col-left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec05-img-03.jpg" alt="">
                                    </div>
                                    <div class="sec05-wrap-col-right">
                                        <h3>フェイシャル・ヘッドスパ</h3>
                                        <p>
                                            顔まわりのむくみや疲れをすっきり解消。デスクワークの方にもおすすめです。
                                        </p>
                                        <div class="sec05-table">
                                            <table>
                                                <tr>
                                                    <th>フェイシャル<br><span>(45分)</span></th>
                                                    <td><strong>4,500</strong>円<small>(税込)</small></td>
                                                </tr>
                                                <tr>
                                                    <th>ヘッドスパ<br><span>(30分)</span></th>
                                                    <td><strong>3,800</strong>円<small>(税込)</small></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <section class="sec06" id="sec06">
                        <div class="content-width-sm">
                            <div class="page-title-center--has-icon">
                                <h2><i></i>予約方法</h2>
                            </div>
                            <div class="sec06-wrap">
                                <div class="sec06-wrap-left">
                                    <p>
                                        ご予約は館内の専用カウンターまたはタブレット端末から。<br>
                                        空き状況を確認しながら、お好みの時間帯・コースをお選びいただけます。
                                    </p>
                                    <div class="sec06-dl">
                                        <dl>
                                            <dt>予約受付場所</dt>
                                            <dd>○階 リラクゼーション受付</dd>
                                        </dl>
                                        <dl>
                                            <dt>受付時間</dt>
                                            <dd>10:00〜22:00（最終受付 21:30）</dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="sec06-wrap-right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec06-img-01.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
                <div class="page-deco-bg-bottom">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-blue-bottom.png" alt="">
                </div>



            </div>

            <div class="area02 area" id="area02">
                <div class="page-deco-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-blue-top_v2.png" alt="">
                </div>
                <div class="page-deco-container page-deco-container--blue">
                    <div class="relative">
                        <div class="sec02-icon-01">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-01.png" alt="">
                        </div>
                        <div class="sec02-icon-02">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-02.png" alt="">
                        </div>
                        <div class="sec02-icon-03">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-03.svg" alt="">
                        </div>
                        <div class="sec02-icon-04">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-icon-04.svg" alt="">
                        </div>

                        <section class="sec02">
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
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <section class="sec03" id="sec08">
                            <div class="sec03-event">
                                <div class="content-width-sm">
                                    <div class="page-title-center--has-icon">
                                        <h2><i></i>イベント情報</h2>
                                    </div>
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
                        <section class="sec04" id="sec09">
                            <div class="content-width-sm">
                                <div class="page-title-center--has-icon">
                                    <h2><i></i>特徴・魅力</h2>
                                </div>
                                <div class="sec04-wrap">
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec09-img-01.jpg" alt="">
                                        </div>
                                        <h3>経験豊富な施術者が在籍</h3>
                                        <p>
                                            確かな技術と知識を持つスタッフが、お客様の身体に合わせた最適なケアを行います。
                                        </p>
                                    </div>
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec09-img-02.jpg" alt="">
                                        </div>
                                        <h3>豊富な施術メニュー</h3>
                                        <p>
                                            もみほぐし、アロマトリートメント、タイ式、フェイシャルなど多彩なコースをご用意。
                                        </p>
                                    </div>
                                    <div class="sec04-wrap-col">
                                        <div class="sec04-wrap-col-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec09-img-03.jpg" alt="">
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
                    <section class="sec05" id="sec10">
                        <div class="content-width-sm">
                            <div class="page-title-center--has-icon">
                                <h2><i></i>メニュー</h2>
                            </div>
                            <p class="sec05-desc">
                                各コースの詳細・料金の目安をご紹介します。
                            </p>
                            <div class="sec05-wrap">
                                <div class="sec05-wrap-col-full">
                                    <div class="sec05-table">
                                        <table>
                                            <tr>
                                                <th>ベーシックコース<br>（約30分）</th>
                                                <td>
                                                    <strong>4,200</strong>円<small>(税込)</small><br>
                                                    <p>(アカスリ＋ボディソープ洗浄＋<br class="hidden-sm">軽いオイルマッサージ)</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="sec05-table">
                                        <table>
                                            <tr>
                                                <th>スペシャルコース<br>（約50分）</th>
                                                <td>
                                                    <strong>6,800</strong>円<small>(税込)</small><br>
                                                    <p>(アカスリ＋オイルトリートメント＋<br class="hidden-sm">フェイスケア)</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <section class="sec06" id="sec11">
                        <div class="content-width-sm">
                            <div class="page-title-center--has-icon">
                                <h2><i></i>予約方法</h2>
                            </div>
                            <div class="sec06-wrap">
                                <div class="sec06-wrap-left">
                                    <p>
                                        館内専用端末またはアカスリ受付にてご予約ください。<br>
                                        入浴後に施術を受けることをおすすめしています。
                                    </p>
                                    <div class="sec06-dl">
                                        <dl>
                                            <dt>予約受付場所</dt>
                                            <dd>○階 リラクゼーション受付</dd>
                                        </dl>
                                        <dl>
                                            <dt>受付時間</dt>
                                            <dd>10:00〜22:00（最終受付 21:30）</dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="sec06-wrap-right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/relax/sec06-img-01.jpg" alt="">
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
        <div class="content-width">
            <div class="sec07-wrap">
                <div class="sec07-wrap-title">
                    <div class="page-title--has-icon">
                        <h2><i></i>よくある質問</h2>
                    </div>
                    <div class="sec07-btn hidden-mobile">
                        <a href="<?php echo home_url(); ?>/faq/">一覧を見る<i></i></a>
                    </div>
                </div>
                <div class="sec07-wrap-faq accordion">
                    <dl>
                        <dt><i></i>岩盤浴ウェアやタオルは自分で持っていく必要がありますか？</dt>
                        <dd></dd>
                    </dl>
                    <dl>
                        <dt><i></i>天然温泉は源泉かけ流しですか？</dt>
                        <dd></dd>
                    </dl>
                    <dl>
                        <dt><i></i>混雑する時間帯はいつですか？</dt>
                        <dd></dd>
                    </dl>
                    <dl>
                        <dt><i></i>発汗エリアは誰でも利用できますか？</dt>
                        <dd></dd>
                    </dl>
                    <dl>
                        <dt><i></i>駐車場はありますか？</dt>
                        <dd></dd>
                    </dl>

                    <div class="com-btn-mobile hidden-sm">
                        <a href="<?php echo home_url(); ?>/faq/">一覧を見る<i></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <?php get_template_part('inc/inc-contact'); ?>


</main>





<?php get_footer(); ?>