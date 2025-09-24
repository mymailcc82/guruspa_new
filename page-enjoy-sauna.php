<?php
/*
Template Name: enjoy-sauna
*/
?>
<?php get_header(); ?>
<main class="page-main enjoy sauna">
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
                    <span itemprop="name">お風呂</span>
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
                        <p>お風呂</p>
                        <h2 class="">
                            <span class="title">S</span><span class="title">A</span><span class="title">U</span><span class="title">N</span><span class="title">A</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                        </h2>
                    </div>

                    <h2>五感を研ぎ澄ます、<br>ととのい体験</h2>
                    <p>
                        じんわりと身体の芯から熱が伝わり、汗とともに心のざわめきが消えていく──。<br>
                        グルスパのサウナは、“ととのう”ための理想的な環境を追求。<br>
                        本格志向のサウナーから初心者の方まで、どなたでも自分に合ったスタイルで楽しめます。熱・水・休憩の循環が、最高のリラックスとリセットをもたらします。
                    </p>
                </div>
                <div class="enjoy-wrap-img">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec01-img-01.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec01-img-02.jpg" alt=""></li>
                    </ul>
                </div>
            </div>

            <div class="page-btn">
                <ul>
                    <li>
                        <a href="#sec02">特徴・魅力<i></i></a>
                    </li>
                    <li>
                        <a href="#sec03">サウナラインナップ<i></i></a>
                    </li>
                    <li>
                        <a href="#sec04">ととのいスペース<i></i></a>
                    </li>
                    <li>
                        <a href="#sec05">サウナイベント情報<i></i></a>
                    </li>
                    <li>
                        <a href="#sec05">イベントスケジュール<i></i></a>
                    </li>
                    <li>
                        <a href="#sec05">注意事項<i></i></a>
                    </li>
                    <li>
                        <a href="#sec05">よくある質問<i></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="sec02">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon">
                <h2><i></i>特徴・魅力</h2>
            </div>
            <div class="sec03-wrap">
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec02-img-01.jpg" alt="">
                    </div>
                    <div class="sec03-wrap-col-right">
                        <h3>オートロウリュ完備</h3>
                        <p>
                            0分・20分・40分ごとに蒸気がサウナ室を包み込み、深い発汗と爽快感を体感できます。
                        </p>
                    </div>
                </div>
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec02-img-02.jpg" alt="">
                    </div>
                    <div class="sec03-wrap-col-right">
                        <h3>熱波師によるアウフグース</h3>
                        <p>
                            定時開催で熱波を浴びる特別体験。週末限定イベントも実施。
                        </p>
                    </div>
                </div>
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec02-img-03.jpg" alt="">
                    </div>
                    <div class="sec03-wrap-col-right">
                        <h3>水風呂バリエーション</h3>
                        <p>
                            7℃の極冷水風呂、16℃の水風呂、29℃のぬる湯と3種類を用意。体調や好みに応じて選べます。
                        </p>
                    </div>
                </div>
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec02-img-04.jpg" alt="">
                    </div>
                    <div class="sec03-wrap-col-right">
                        <h3>初心者も安心</h3>
                        <p>
                            高温サウナ・塩サウナなど、多彩なスタイルで無理なく楽しめます。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="sec04">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon">
                <h2><i></i>サウナラインナップ</h2>
            </div>
        </div>
        <div class="sec04-container">
            <div class="sec04-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec04-bg-01.jpg" alt="">
            </div>
            <div class="sec04-wrap">
                <h3>ドライサウナ（高温サウナ）</h3>
                <p>
                    しっかりと汗をかきたい方におすすめの本格派ドライサウナ。温度は約90〜100℃で、毎時20分おきのオートロウリュ。<br>
                    サウナストーンの遠赤外線効果で、体の芯からじんわり温まり、デトックス効果も抜群。熱波師によるアウフグースも定時開催しております。
                </p>
            </div>
            <div class="content-width-sm">
                <div class="sec04-effect">
                    <dl>
                        <dt>効能</dt>
                        <dd>発汗によるデトックス効果、血行促進・疲労回復、リフレッシュ・ストレス解消</dd>
                    </dl>
                </div>
                <div class="sec04-wrap-yellow-2-1">
                    <div class="sec04-wrap-yellow-2-1-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec04-img-01.jpg" alt="">
                    </div>
                    <div class="sec04-wrap-yellow-2-1-right">
                        <h3>塩サウナ</h3>
                        <p>
                            肌に塩を塗って、マッサージしながら入ることで発汗とともに古い角質を除去。<br>
                            つるすべ肌に導く、美容に嬉しいサウナ体験です。<br>
                            室温は約60〜70℃で、じっくり長く楽しめます。
                        </p>
                        <div class="sec04-wrap-yellow-2-1-right-dl">
                            <dl>
                                <dt>効能</dt>
                                <dd>デトックス・疲労回復、美白・美肌効果、神経痛や腰痛の緩和</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="sec04-center">
                    <h3>塩サウナ入浴方法</h3>
                </div>

                <div class="sec03-wrap">
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec04-img-02.jpg" alt="">
                        </div>
                        <p>
                            5〜10分入って汗を出します。
                        </p>
                    </div>
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec04-img-03.jpg" alt="">
                        </div>
                        <p>
                            塩を大さじ3杯ほど軽く押し付けるようにつけます。
                        </p>
                    </div>
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec04-img-04.jpg" alt="">
                        </div>
                        <p>
                            塩が溶けたら優しくマッサージします。
                        </p>
                    </div>
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec04-img-05.jpg" alt="">
                        </div>
                        <p>
                            シャワーで洗い流し、仕上げに上り湯でコーティング。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="sec05" id="sec05">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon">
                <h2><i></i>ととのいスペース</h2>
            </div>
            <p class="sec05-desc">
                サウナの後は“ととのう”時間。<br>
                グルスパでは、ととのいスペースにも徹底的にこだわっています。
            </p>
            <div class="sec05-wrap">
                <div class="sec05-wrap-col">
                    <div class="sec05-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec05-img-01.jpg" alt="">
                    </div>
                    <div class="sec05-wrap-col-txt">
                        <h3>外気浴エリア</h3>
                        <p>
                            リクライニングチェアやベンチを設置し、自然の風を感じながら深い呼吸を。
                        </p>
                    </div>
                </div>
                <div class="sec05-wrap-col">
                    <div class="sec05-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec05-img-02.jpg" alt="">
                    </div>
                    <div class="sec05-wrap-col-txt">
                        <h3>室内スペース</h3>
                        <p>
                            天候に左右されず、快適にクールダウンできる環境を整備。
                        </p>
                    </div>
                </div>
                <div class="sec05-wrap-col">
                    <div class="sec05-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sauna/sec05-img-03.jpg" alt="">
                    </div>
                    <div class="sec05-wrap-col-txt">
                        <h3>ととのいイス</h3>
                        <p>
                            男女それぞれ約40脚を配置。混雑時も安心してご利用いただけます。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="sec06" id="sec06">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon">
                <h2><i></i>サウナイベント情報</h2>
            </div>

            <div class="sec06-top">
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
        <div class="content-width">

            <div class="page-title-center--has-icon">
                <h2><i></i>イベントスケジュール</h2>
            </div>
            <div class="sec06-desc">
                グルスパでは定期的にロウリュイベントやアウフグース（熱波）サービスを実施中。<br>
                週末限定のスペシャルロウリュや、季節に応じたアロマ水使用など、訪れるたびに新しい楽しみをご用意しています。
            </div>

            <div class="sec06-bottom">
                <div class="sec06-bottom-col">
                    <div class="sec-01-col-under">
                        <a href="">
                            <div class="sec-01-col-under-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-01.jpg" alt=""></div>
                            <div class="sec-01-col-under-title">
                                <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/title-event-schedule_v2.png" alt="EVENT SCHEDULE"><i class="icon-btn"></i></h3>
                                <p>イベントはこちらをチェック！</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="sec06-bottom-col">
                    <div class="sec-01-col-under">
                        <a href="">
                            <div class="sec-01-col-under-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-01.jpg" alt=""></div>
                            <div class="sec-01-col-under-title">
                                <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/title-event-schedule_v2.png" alt="EVENT SCHEDULE"><i class="icon-btn"></i></h3>
                                <p>イベントはこちらをチェック！</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="sec07">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon">
                <h2><i></i>脱衣所・浴室ご利用時のご案内</h2>
            </div>
            <p class="sec07-desc">
                当館ではお客様に気持ちよくご利用いただくため、<br>
                下記の事項をお守りくださいますようお願い申し上げます。
            </p>
            <div class="sec07-wrap">
                <ul>
                    <li>タオルを絞らないでください。</li>
                    <li>新聞、雑誌、飲食物を持ち込まないでください。</li>
                    <li>場所取りはおやめください。</li>
                    <li>混雑する時は譲り合ってご利用ください。 </li>
                    <li>お子様のみのご利用はご遠慮ください。</li>
                    <li>脱水症状を防ぐため、こまめに水分を補給してください。 </li>
                    <li>サウナストーブに水をかけないでください。</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sec07-com">
        <div class="content-width">
            <div class="sec07-wrap">
                <div class="sec07-wrap-title">
                    <div class="page-title--has-icon">
                        <h2><i></i>よくある質問</h2>
                    </div>
                    <div class="sec07-btn">
                        <a href="">一覧を見る<i></i></a>
                    </div>
                </div>
                <div class="sec07-wrap-faq">
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
                </div>
            </div>
        </div>
    </section>


    <?php get_template_part('inc/inc-contact'); ?>


</main>





<?php get_footer(); ?>