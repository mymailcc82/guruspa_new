<?php
/*
Template Name: enjoy-hakkan
*/
?>
<?php get_header(); ?>
<main class="page-main enjoy hakkan">
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
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name">発汗エリア（有料岩盤浴エリア）</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width">
            <div class="enjoy-wrap">
                <div class="enjoy-wrap-txt">
                    <div class="com-title com-title--small com-title-hidden">
                        <p>発汗エリア（有料岩盤浴エリア）</p>
                        <h2 class="">
                            <span class="title">S</span><span class="title">W</span><span class="title">E</span><span class="title">A</span><span class="title">T</span><span class="title">I</span><span class="title">N</span><span class="title">G</span><span class="title">A</span><span class="title">R</span><span class="title">E</span><span class="title">A</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                        </h2>
                    </div>

                    <h2>じっくり、ゆっくり。<br>心も身体も整う、温熱体験の楽園へ。</h2>
                    <p>
                        火照りと冷たさ、静けさと心地よさ。<br class="hidden-sm">ここは五感すべてで“ととのう”場所。<br>
                        館内は男女共用の有料エリアとなっており、岩塩やトルマリンなどの天然鉱石で体の内側から温まり、ゆったり過ごせる“ととのいの聖域”。<br><br class="hidden-sm">
                        個性豊かな岩盤浴ルームや迫力のアトラクションサウナ、そして仕上げのクールルームやテラスまで。<br>
                        まるで“サウナリゾート”にいるような感覚で、日常を忘れ、自分と向き合う特別な時間をお楽しみください。
                    </p>
                </div>
                <div class="enjoy-wrap-img enjoy-wrap-img--sweating">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/hakkan-img-01.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/hakkan-img-02.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/hakkan-img-03.jpg" alt=""></li>
                    </ul>
                </div>
            </div>

            <div class="page-btn">
                <ul>
                    <li>
                        <a href="#sec02">館内図<i></i></a>
                    </li>
                    <li>
                        <a href="#sec03">特徴・魅力<i></i></a>
                    </li>
                    <li>
                        <a href="#sec04">エリアガイド<i></i></a>
                    </li>
                    <li>
                        <a href="#sec05">ザ・リゾートヴィラ<i></i></a>
                    </li>
                    <li>
                        <a href="#sec07">よくある質問<i></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="sec02" id="sec02">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon">
                <h2><i></i>館内図</h2>
            </div>
            <div class="sec02-wrap">
                <div class="sec02-wrap-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/hakkan-logo.png" alt="">
                </div>
                <div class="sec02-wrap-right">
                    <p>
                        専用ウェアをご着用のうえご利用ください。<br>
                        ※岩盤浴、大型サウナ「賛照堂」含め、館内は男女共用の有料エリアです。
                    </p>
                </div>
            </div>
            <div class="sec02-area">
                <div class="sec02-area-bg">
                    <picture>
                        <source media="(max-width: 601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/hakkan-area-sp.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/hakkan-area.jpg" alt="">
                    </picture>
                </div>
                <div class="sec02-area-01">
                    <a href="#area-guide-01">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/hakkan-icon-01.png" alt="">
                    </a>
                </div>
                <div class="sec02-area-02">
                    <a href="#area-guide-02">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/hakkan-icon-02.png" alt="">
                    </a>
                </div>
                <div class="sec02-area-03">
                    <a href="#area-guide-03">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/hakkan-icon-03.png" alt="">
                    </a>
                </div>
                <div class="sec02-area-04">
                    <a href="#area-guide-04">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/hakkan-icon-04.png" alt="">
                    </a>
                </div>
                <div class="sec02-area-05">
                    <a href="#area-guide-05">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/hakkan-icon-05.png" alt="">
                    </a>
                </div>
            </div>
            <div class="sec01-col-sp">
                <ul>
                    <li>
                        <div class="com-btn-mobile com-btn-mobile--full">
                            <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-03">
                                賛照堂<i></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="com-btn-mobile com-btn-mobile--full">
                            <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-03">
                                岩盤房<i></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="com-btn-mobile com-btn-mobile--full">
                            <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-03">
                                岩塩房<i></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="com-btn-mobile com-btn-mobile--full">
                            <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-03">
                                清涼房<i></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="com-btn-mobile com-btn-mobile--full">
                            <a href="javascript:void(0)" class="popup-btn" data-id="enjoy-03">
                                ザ・リゾートヴィラ<i></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="sec03" id="sec03">
        <div class="sec02-icon-01">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec02-icon-01.png" alt="">
        </div>
        <div class="sec02-icon-02">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec02-icon-02.png" alt="">
        </div>
        <div class="sec02-icon-03">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec02-icon-03.svg" alt="">
        </div>
        <div class="sec02-icon-04">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec02-icon-04.svg" alt="">
        </div>

        <div class="page-deco-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-red-top.png" alt="">
        </div>
        <div class="page-deco-container page-deco-container--red">
            <div class="content-width-sm">
                <div class="page-title-center--has-icon">
                    <h2><i></i>特徴・魅力</h2>
                </div>
                <div class="sec03-wrap">
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec03-img-01.jpg" alt="">
                        </div>
                        <div class="sec03-wrap-col-right">
                            <h3>多彩な岩盤浴と薬石の癒し</h3>
                            <p>
                                遠赤外線とマイナスイオンを放つ天然鉱石を贅沢に使用した岩盤浴。<br>
                                トルマリンやゲルマニウム、岩塩などの薬石が体の内側からじんわり温め、新陳代謝を促進します。<br>
                                デトックスや美肌効果、冷えやむくみの改善など、心身をリフレッシュへ導きます。
                            </p>
                        </div>
                    </div>
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec03-img-02.jpg" alt="">
                        </div>
                        <div class="sec03-wrap-col-right">
                            <h3>エンターテイメント型アトラクションサウナ</h3>
                            <p>
                                最大40名収容の大型サウナ「賛照堂」では、音・光・映像・熱波が融合した迫力のロウリュを体感。<br>
                                ただ汗をかくだけではなく、観て・聴いて・感じて楽しむ新感覚の“エンターテイメントサウナ”で、仲間と盛り上がれる特別な時間をお過ごしいただけます。
                            </p>
                        </div>
                    </div>
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec03-img-03.jpg" alt="">
                        </div>
                        <div class="sec03-wrap-col-right">
                            <h3>“ととのい”を完成させるクールダウン空間</h3>
                            <p>
                                火照った体を一気にクールダウンできる「清涼房」や、リゾート気分でくつろげる「リクライニングエリア」を完備。<br>
                                温と冷を繰り返すことで自律神経が整い、心身がリセット。静けさの中で、自分と深く向き合える極上のリラックスタイムが待っています。
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="page-bg-deco-bg-bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-red-bottom.png" alt="">
        </div>
    </section>
    <section class="sec04" id="sec04">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon">
                <h2><i></i>エリアガイド</h2>
            </div>
        </div>
        <div class="sec04-container">
            <div class="sec04-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-01.jpg" alt="">
            </div>
            <div class="sec04-wrap" id="area-guide-01">
                <h3>
                    <img class="logo-01" src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-logo-01.jpg" alt="">
                </h3>
                <h4>音と光が織りなす、灼熱のエンターテイメントサウナ</h4>
                <p>
                    約40名を収容できる大型チムジルバン空間。ここでは、ただ汗をかくだけではなく「<span>観る・聴く・感じる</span>」をテーマにした全身で楽しむサウナ体験をお届けします。
                </p>
            </div>
            <div class="content-width-sm">
                <div class="sec04-center">
                    <h3>特徴・魅力</h3>
                    <div class="sec04-center-wrap">
                        <div class="sec04-center-wrap-col">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-02.jpg" alt="">
                            <h4>エンターテイメントロウリュ</h4>
                            <p>
                                音・光・映像・熱波が融合する、迫力満点のアトラクションロウリュを開催。
                            </p>
                        </div>
                        <div class="sec04-center-wrap-col">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-03.jpg" alt="">
                            <h4>大人数で楽しめる空間</h4>
                            <p>
                                約40名が同時に体験できる広さで、仲間と一緒に盛り上がれる特別な時間を。
                            </p>
                        </div>
                        <div class="sec04-center-wrap-col">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-04.jpg" alt="">
                            <h4>オリジナルコンテンツ演出</h4>
                            <p>
                                サウナイーグルのDNAを引き継いだ、ここだけのオリジナルプログラムをご用意。
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="sec04-container">
            <div class="sec04-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-05.jpg" alt="">
            </div>
            <div class="sec04-wrap" id="area-guide-02">
                <h3>
                    <img class="logo-02" src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-logo-02.svg" alt="">
                </h3>
                <p>
                    岩盤房は、遠赤外線の温熱効果によって皮脂腺から汗をかくことができます。皮脂腺から汗をかくことで、新陳代謝が活性化し、体内の毒素や老廃物を排出。美容やダイエット、冷え、むくみなど様々な悩みに効果があります。<br>
                    サウナでかく汗は、汗腺から出るため、また違った効果を感じることができます。
                </p>
            </div>
            <div class="content-width-sm">
                <div class="sec04-center">
                    <h3>岩盤房の入り方</h3>
                </div>
            </div>
            <div class="content-width content-width--middle-full">
                <div class="sec03-scroll">
                    <div class="sec03-wrap fadeup">
                        <div class="sec03-wrap-col">
                            <div class="sec03-wrap-col-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test/test-01.jpg" alt="">
                                <div class="sec03-wrap-col-img-span">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-06.svg" alt="">
                                </div>
                            </div>
                            <p>
                                専用の岩盤浴着を着て岩盤浴へ。
                            </p>
                        </div>
                        <div class="sec03-wrap-col">
                            <div class="sec03-wrap-col-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test/test-01.jpg" alt="">
                                <div class="sec03-wrap-col-img-span">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-07.svg" alt="">
                                </div>
                            </div>
                            <p>
                                岩盤房・岩塩房を選び入室。
                            </p>
                        </div>
                        <div class="sec03-wrap-col">
                            <div class="sec03-wrap-col-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test/test-01.jpg" alt="">
                                <div class="sec03-wrap-col-img-span">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-08.svg" alt="">
                                </div>
                            </div>
                            <p>
                                大判タオルを敷き10～15分うつ伏せ・仰向けになって寝転ぶ。
                            </p>
                        </div>
                        <div class="sec03-wrap-col">
                            <div class="sec03-wrap-col-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test/test-01.jpg" alt="">
                                <div class="sec03-wrap-col-img-span">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-09.svg" alt="">
                                </div>
                            </div>
                            <p>
                                岩盤房・岩塩房から出て水分補給をする。
                            </p>
                        </div>
                        <div class="sec03-wrap-col">
                            <div class="sec03-wrap-col-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test/test-01.jpg" alt="">
                                <div class="sec03-wrap-col-img-span">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-10.svg" alt="">
                                </div>
                            </div>
                            <p>
                                2～4を2～3回繰り返す。
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-width-sm">
                <div class="sec04-center">
                    <h3>薬石紹介</h3>
                    <div class="sec04-center-col-4-1">
                        <div class="sec04-center-col-4-1-item">
                            <a href="javascript:void(0);" class="stone-btn" data-id="stone-01">
                                <div class="sec04-center-col-4-1-item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-11.jpg" alt="">
                                </div>
                                <div class="sec04-center-col-4-1-item-btn">
                                    <span>
                                        トルマリン石<i></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="sec04-center-col-4-1-item">
                            <a href="javascript:void(0);" class="stone-btn" data-id="stone-02">
                                <div class="sec04-center-col-4-1-item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-11.jpg" alt="">
                                </div>
                                <div class="sec04-center-col-4-1-item-btn">
                                    <span>
                                        ブラックゲルマ<i></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="sec04-center-col-4-1-item">
                            <a href="javascript:void(0);" class="stone-btn" data-id="stone-03">
                                <div class="sec04-center-col-4-1-item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-11.jpg" alt="">
                                </div>
                                <div class="sec04-center-col-4-1-item-btn">
                                    <span>
                                        イエロオニキス<i></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="sec04-center-col-4-1-item">
                            <a href="javascript:void(0);" class="stone-btn" data-id="stone-04">
                                <div class="sec04-center-col-4-1-item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-11.jpg" alt="">
                                </div>
                                <div class="sec04-center-col-4-1-item-btn">
                                    <span>
                                        木紋石<i></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="sec04-center-col-4-1-item">
                            <a href="javascript:void(0);" class="stone-btn" data-id="stone-05">
                                <div class="sec04-center-col-4-1-item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-11.jpg" alt="">
                                </div>
                                <div class="sec04-center-col-4-1-item-btn">
                                    <span>
                                        薬宝緑玉石<br>（甲翠）<i></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="sec04-center-col-4-1-item">
                            <a href="javascript:void(0);" class="stone-btn" data-id="stone-06">
                                <div class="sec04-center-col-4-1-item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-11.jpg" alt="">
                                </div>
                                <div class="sec04-center-col-4-1-item-btn">
                                    <span>
                                        麦飯石(紅)<i></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="sec04-center-col-4-1-item">
                            <a href="javascript:void(0);" class="stone-btn" data-id="stone-07">
                                <div class="sec04-center-col-4-1-item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-11.jpg" alt="">
                                </div>
                                <div class="sec04-center-col-4-1-item-btn">
                                    <span>
                                        麦飯石(白)<i></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="sec04-center-col-4-1-item">
                            <a href="javascript:void(0);" class="stone-btn" data-id="stone-08">
                                <div class="sec04-center-col-4-1-item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-11.jpg" alt="">
                                </div>
                                <div class="sec04-center-col-4-1-item-btn">
                                    <span>
                                        鳳緑石<i></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-width-sm">
                <div class="sec04-bottom">
                    <h3>薬石岩盤浴ご利用時のご案内</h3>
                    <p>
                        当館ではお客様に気持ちよくご利用いただくため、<br class="hidden-mobile">下記の事項をお守りくださいますようお願い申し上げます。
                    </p>
                    <div class="sec04-bottom-wrap">
                        <ul>
                            <li>手荷物・タオル等による場所取りはご遠慮ください（スタッフにより撤去させていただきます）</li>
                            <li>大声・騒音などを出さないでください。</li>
                            <li>脱水症状を防ぐため、適度な水分補給をお願いいたします。</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="sec04-container">
            <div class="sec04-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-12.jpg" alt="">
            </div>
            <div class="sec04-wrap" id="area-guide-03">
                <h3>
                    <img class="logo-03" src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-logo-03.svg" alt="">
                </h3>
                <p>
                    長い年月をかけて結晶化した岩塩を使用。鉄分やカリウムなど、豊富なミネラルを含んだ空間で心身を癒やします。
                </p>
            </div>
            <div class="content-width-sm">
                <div class="sec04-center">
                    <h3>効能</h3>
                    <div class="sec04-wrap-red">
                        <div class="sec04-wrap-red-col">
                            <h4>美肌効果</h4>
                            <p>
                                ミネラル成分が肌に浸透し、新陳代謝を促進。<br>
                                うるおいとハリを与える“美肌の湯治”に。
                            </p>
                        </div>
                        <div class="sec04-wrap-red-col">
                            <h4>リラックス効果</h4>
                            <p>
                                岩塩から発せられる遠赤外線が体をじんわり温め、心身を深くリラックスさせます。
                            </p>
                        </div>
                        <div class="sec04-wrap-red-col">
                            <h4>デトックス効果</h4>
                            <p>
                                発汗を促し、老廃物や余分な水分を排出。むくみ改善や体内リセットに効果的です。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sec04-container">
            <div class="sec04-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-13.jpg" alt="">
            </div>
            <div class="sec04-wrap" id="area-guide-04">
                <h3>
                    <img class="logo-04" src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-logo-04.svg" alt="">
                </h3>
                <p>
                    火照った体を一気にクールダウンできる冷涼空間。発汗後の熱を引かせ、自律神経を整えることで、より深い“ととのい”を体感できます。音や光を控えた静寂な設計で、集中してリセットできる特別なひとときを。
                </p>
            </div>
            <div class="content-width-sm">
                <div class="sec04-center">
                    <h3>効能</h3>
                    <div class="sec04-wrap-red">
                        <div class="sec04-wrap-red-col">
                            <h4>クールダウン効果</h4>
                            <p>
                                発汗後に体温を一気に下げることで、体をリセット。<br>
                                余韻を楽しみつつ爽快感を味わえます。
                            </p>
                        </div>
                        <div class="sec04-wrap-red-col">
                            <h4>交互浴による整い</h4>
                            <p>
                                温と冷を繰り返すことで自律神経が整い、深いリラックスと集中状態に導かれます。
                            </p>
                        </div>
                        <div class="sec04-wrap-red-col">
                            <h4>静寂空間で感覚リセット</h4>
                            <p>
                                音も光も抑えた空間で、五感を休めながら瞑想のように自分と向き合える時間を提供します。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sec04-container">
            <div class="sec04-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-14.jpg" alt="">
            </div>
            <div class="sec04-wrap">
                <h3>中温ホール</h3>
                <h4>じっくり汗をかく、自由な温活空間</h4>
                <p>
                    40～45℃の中温だからこそ、無理なくじわじわ発汗できる長時間滞在向け空間。<br>
                    寝転びながら本を読む、ストレッチをする、深呼吸する…心地よい自分だけの過ごし方が見つかります。
                </p>
            </div>
            <div class="content-width-sm">
                <div class="sec04-center">
                    <h3>特徴・魅力</h3>
                    <div class="sec04-center-wrap">
                        <div class="sec04-center-wrap-col">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-15.jpg" alt="">
                            <p>
                                半個室設計の蜂の巣状くつろぎスペース
                            </p>
                        </div>
                        <div class="sec04-center-wrap-col">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-16.jpg" alt="">
                            <p>
                                飲み物の持ち込みOK＆冷蔵庫完備
                            </p>
                        </div>
                        <div class="sec04-center-wrap-col">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec04-img-17.jpg" alt="">
                            <p>
                                書籍・スマホもOK（静音モード推奨です。）
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="sec05" id="sec05">
        <div class="page-deco-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-red-top.png" alt="">
        </div>
        <div class="page-deco-container page-deco-container--red" id="area-guide-05">
            <div class="content-width-sm">
                <h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-logo.svg" alt="">
                </h2>
                <h3>ととのい後の余韻を味わう、<br class="hidden-sm">静かな脱力空間</h3>
                <p>
                    サウナや岩盤浴でたっぷり汗をかいた後は、心も身体も“ふわっ”と軽くなる瞬間。<br>
                    その余韻を存分に味わえるよう、リゾート気分でゆったり過ごせる特別な空間をご用意しました。<br>
                    静かに本を読むのも、仲間と語らうのも、自分のペースでリラックスできるエリアです。<br>
                    ※ザ・リゾートヴィラは男女共用の有料エリアです。
                </p>
            </div>
            <div class="sec05-yoko">
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-01.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-02.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-03.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-04.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-05.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-05.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-01.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-02.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-03.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-04.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-05.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-05.png" alt="">
                    </li>
                </ul>
            </div>
            <div class="content-width-sm">
                <h4>施設紹介</h4>
                <div class="sec05-bottom">
                    <div class="sec05-bottom-col">
                        <div class="sec05-bottom-col-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-06.jpg" alt="">
                        </div>
                        <div class="sec05-bottom-col-right">
                            <h5>漫画コーナー</h5>
                            <p>
                                約15,000冊の漫画・雑誌をラインナップ。<br>
                                サウナや岩盤浴でととのった後、好きな作品に没頭する贅沢な時間をお楽しみいただけます。
                            </p>
                        </div>
                    </div>
                    <div class="sec05-bottom-col">
                        <div class="sec05-bottom-col-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-07.jpg" alt="">
                        </div>
                        <div class="sec05-bottom-col-right">
                            <h5>テレビ付きリクライニングシート</h5>
                            <p>
                                個別モニターを備えたリクライニングシートで、映画やテレビを見ながらご休憩いただけます。<br>
                                全身をゆったり預けられるので、仮眠や長時間のくつろぎにも最適です。
                            </p>
                        </div>
                    </div>
                    <div class="sec05-bottom-col">
                        <div class="sec05-bottom-col-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-08.jpg" alt="">
                        </div>
                        <div class="sec05-bottom-col-right">
                            <h5>コワーキングスペース</h5>
                            <p>
                                電源やWi-Fiを完備したコワーキングスペース。<br>
                                「ととのい」と「仕事時間」を両立できる、ちょっと贅沢なワークスタイルを実現します。
                            </p>
                        </div>
                    </div>
                    <div class="sec05-bottom-col">
                        <div class="sec05-bottom-col-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-09.jpg" alt="">
                        </div>
                        <div class="sec05-bottom-col-right">
                            <h5>カウチベッド</h5>
                            <p>
                                体を伸ばしてゴロゴロできるカウチベッドをご用意。<br>
                                まるでリゾートホテルにいるかのような、ゆったりとしたリラックスタイムをどうぞ。
                            </p>
                        </div>
                    </div>
                    <div class="sec05-bottom-col">
                        <div class="sec05-bottom-col-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/sec05-img-10.jpg" alt="">
                        </div>
                        <div class="sec05-bottom-col-right">
                            <h5>屋外テラス</h5>
                            <p>
                                風を感じながら深呼吸できる開放的な空間。<br>
                                人工芝が敷かれた芝生エリアでは裸足でリラックスしたり、ヨガやストレッチにもご利用いただけます。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-bg-deco-bg-bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-red-bottom.png" alt="">
        </div>
    </section>

    <section class="sec07-com" id="sec07">
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


    <div class="stone-fixed">
        <div class="stone-fixed-bg stone-fixed-btn-close"></div>
        <div class="stone-fixed-container">
            <div class="stone-fixed-container-wrap" id="stone-01">
                <div class="stone-fixed-container-wrap-close stone-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる"></a>
                </div>
                <div class="stone-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg.jpg" alt="">
                </div>
                <div class="stone-fixed-container-wrap-content">
                    <div class="stone-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-02.jpg" alt="">
                        <div class="stone-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-left.svg" alt="">
                        </div>
                        <div class="stone-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-right.svg" alt="">
                        </div>
                    </div>
                    <div class="stone-fixed-container-wrap-content-txt">
                        <h3>トルマリン石</h3>
                        <p>
                            地球上にはたくさんの鉱物が存在しますが、その中で唯一自ら電気を帯びる鉱石として「電気石」と呼ばれています。<br>
                            「電気石」であるがゆえに永久に放つマイナスイオンは人間の躯を精神的、肉体的にリラックスさせ、リフレッシュ効果、体質改善、免疫力向上、疲労回復などの効果を及ぼすと言われています。
                        </p>
                    </div>
                </div>
            </div>
            <div class="stone-fixed-container-wrap" id="stone-02">
                <div class="stone-fixed-container-wrap-close stone-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる"></a>
                </div>
                <div class="stone-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg.jpg" alt="">
                </div>
                <div class="stone-fixed-container-wrap-content">
                    <div class="stone-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-02.jpg" alt="">
                        <div class="stone-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-left.svg" alt="">
                        </div>
                        <div class="stone-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-right.svg" alt="">
                        </div>
                    </div>
                    <div class="stone-fixed-container-wrap-content-txt">
                        <h3>ブラックゲルマ</h3>
                        <p>
                            地球上にはたくさんの鉱物が存在しますが、その中で唯一自ら電気を帯びる鉱石として「電気石」と呼ばれています。<br>
                            「電気石」であるがゆえに永久に放つマイナスイオンは人間の躯を精神的、肉体的にリラックスさせ、リフレッシュ効果、体質改善、免疫力向上、疲労回復などの効果を及ぼすと言われています。
                        </p>
                    </div>
                </div>
            </div>
            <div class="stone-fixed-container-wrap" id="stone-03">
                <div class="stone-fixed-container-wrap-close stone-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる"></a>
                </div>
                <div class="stone-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg.jpg" alt="">
                </div>
                <div class="stone-fixed-container-wrap-content">
                    <div class="stone-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-02.jpg" alt="">
                        <div class="stone-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-left.svg" alt="">
                        </div>
                        <div class="stone-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-right.svg" alt="">
                        </div>
                    </div>
                    <div class="stone-fixed-container-wrap-content-txt">
                        <h3>イエロオニキス</h3>
                        <p>
                            地球上にはたくさんの鉱物が存在しますが、その中で唯一自ら電気を帯びる鉱石として「電気石」と呼ばれています。<br>
                            「電気石」であるがゆえに永久に放つマイナスイオンは人間の躯を精神的、肉体的にリラックスさせ、リフレッシュ効果、体質改善、免疫力向上、疲労回復などの効果を及ぼすと言われています。
                        </p>
                    </div>
                </div>
            </div>
            <div class="stone-fixed-container-wrap" id="stone-04">
                <div class="stone-fixed-container-wrap-close stone-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる"></a>
                </div>
                <div class="stone-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg.jpg" alt="">
                </div>
                <div class="stone-fixed-container-wrap-content">
                    <div class="stone-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-02.jpg" alt="">
                        <div class="stone-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-left.svg" alt="">
                        </div>
                        <div class="stone-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-right.svg" alt="">
                        </div>
                    </div>
                    <div class="stone-fixed-container-wrap-content-txt">
                        <h3>木紋石</h3>
                        <p>
                            地球上にはたくさんの鉱物が存在しますが、その中で唯一自ら電気を帯びる鉱石として「電気石」と呼ばれています。<br>
                            「電気石」であるがゆえに永久に放つマイナスイオンは人間の躯を精神的、肉体的にリラックスさせ、リフレッシュ効果、体質改善、免疫力向上、疲労回復などの効果を及ぼすと言われています。
                        </p>
                    </div>
                </div>
            </div>
            <div class="stone-fixed-container-wrap" id="stone-05">
                <div class="stone-fixed-container-wrap-close stone-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる"></a>
                </div>
                <div class="stone-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg.jpg" alt="">
                </div>
                <div class="stone-fixed-container-wrap-content">
                    <div class="stone-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-02.jpg" alt="">
                        <div class="stone-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-left.svg" alt="">
                        </div>
                        <div class="stone-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-right.svg" alt="">
                        </div>
                    </div>
                    <div class="stone-fixed-container-wrap-content-txt">
                        <h3>薬宝緑玉石（甲翠）</h3>
                        <p>
                            地球上にはたくさんの鉱物が存在しますが、その中で唯一自ら電気を帯びる鉱石として「電気石」と呼ばれています。<br>
                            「電気石」であるがゆえに永久に放つマイナスイオンは人間の躯を精神的、肉体的にリラックスさせ、リフレッシュ効果、体質改善、免疫力向上、疲労回復などの効果を及ぼすと言われています。
                        </p>
                    </div>
                </div>
            </div>
            <div class="stone-fixed-container-wrap" id="stone-06">
                <div class="stone-fixed-container-wrap-close stone-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる"></a>
                </div>
                <div class="stone-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg.jpg" alt="">
                </div>
                <div class="stone-fixed-container-wrap-content">
                    <div class="stone-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-02.jpg" alt="">
                        <div class="stone-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-left.svg" alt="">
                        </div>
                        <div class="stone-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-right.svg" alt="">
                        </div>
                    </div>
                    <div class="stone-fixed-container-wrap-content-txt">
                        <h3>麦飯石(紅)</h3>
                        <p>
                            地球上にはたくさんの鉱物が存在しますが、その中で唯一自ら電気を帯びる鉱石として「電気石」と呼ばれています。<br>
                            「電気石」であるがゆえに永久に放つマイナスイオンは人間の躯を精神的、肉体的にリラックスさせ、リフレッシュ効果、体質改善、免疫力向上、疲労回復などの効果を及ぼすと言われています。
                        </p>
                    </div>
                </div>
            </div>
            <div class="stone-fixed-container-wrap" id="stone-07">
                <div class="stone-fixed-container-wrap-close stone-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる"></a>
                </div>
                <div class="stone-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg.jpg" alt="">
                </div>
                <div class="stone-fixed-container-wrap-content">
                    <div class="stone-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-02.jpg" alt="">
                        <div class="stone-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-left.svg" alt="">
                        </div>
                        <div class="stone-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-right.svg" alt="">
                        </div>
                    </div>
                    <div class="stone-fixed-container-wrap-content-txt">
                        <h3>麦飯石(白)</h3>
                        <p>
                            地球上にはたくさんの鉱物が存在しますが、その中で唯一自ら電気を帯びる鉱石として「電気石」と呼ばれています。<br>
                            「電気石」であるがゆえに永久に放つマイナスイオンは人間の躯を精神的、肉体的にリラックスさせ、リフレッシュ効果、体質改善、免疫力向上、疲労回復などの効果を及ぼすと言われています。
                        </p>
                    </div>
                </div>
            </div>
            <div class="stone-fixed-container-wrap" id="stone-08">
                <div class="stone-fixed-container-wrap-close stone-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる"></a>
                </div>
                <div class="stone-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg.jpg" alt="">
                </div>
                <div class="stone-fixed-container-wrap-content">
                    <div class="stone-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-02.jpg" alt="">
                        <div class="stone-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-left.svg" alt="">
                        </div>
                        <div class="stone-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hakkan/stone-bg-right.svg" alt="">
                        </div>
                    </div>
                    <div class="stone-fixed-container-wrap-content-txt">
                        <h3>鳳緑石</h3>
                        <p>
                            地球上にはたくさんの鉱物が存在しますが、その中で唯一自ら電気を帯びる鉱石として「電気石」と呼ばれています。<br>
                            「電気石」であるがゆえに永久に放つマイナスイオンは人間の躯を精神的、肉体的にリラックスさせ、リフレッシュ効果、体質改善、免疫力向上、疲労回復などの効果を及ぼすと言われています。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="enjoy-fixed">
        <div class="enjoy-fixed-bg enjoy-fixed-btn-close"></div>
        <div class="enjoy-fixed-container">
            <div class="enjoy-fixed-container-wrap" id="enjoy-01">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる"></a>
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
                            <a href="">くわしく見る<i></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="enjoy-fixed-container-wrap" id="enjoy-02">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close-black.svg" alt="閉じる"></a>
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
                            <a href="">くわしく見る<i class="icon-opacity"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="enjoy-fixed-container-wrap" id="enjoy-03">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる"></a>
                </div>
                <div class="enjoy-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-bg-red.jpg" alt="">
                </div>
                <div class="enjoy-fixed-container-wrap-content">
                    <div class="enjoy-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-03.jpg" alt="">
                        <div class="enjoy-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-left.png" alt="">
                        </div>
                        <div class="enjoy-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-right.png" alt="">
                        </div>
                    </div>
                    <div class="enjoy-fixed-container-wrap-content-txt">
                        <h3>発汗エリア（有料岩盤浴エリア）</h3>
                        <p>
                            岩盤浴・アトラクションサウナ・マンガ・リクライニング・テラスなどが揃った特別エリア。<br>
                            時間を忘れてゆったり過ごしたい方にぴったりの癒し空間です。<br>
                            館内とはひと味違う、深いリラックスをお楽しみください。
                        </p>
                        <div class="com-btn-border-white com-btn-border--210">
                            <a href="">くわしく見る<i></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="enjoy-fixed-container-wrap" id="enjoy-04">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close-black.svg" alt="閉じる"></a>
                </div>
                <div class="enjoy-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-bg-yellow.jpg" alt="">
                </div>
                <div class="enjoy-fixed-container-wrap-content">
                    <div class="enjoy-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-04.jpg" alt="">
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
                        <div class="com-btn-border-black com-btn-border--210">
                            <a href="">くわしく見る<i class="icon-opacity"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="enjoy-fixed-container-wrap" id="enjoy-05">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる"></a>
                </div>
                <div class="enjoy-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-bg-blue.jpg" alt="">
                </div>
                <div class="enjoy-fixed-container-wrap-content">
                    <div class="enjoy-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-05.jpg" alt="">
                        <div class="enjoy-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-left.png" alt="">
                        </div>
                        <div class="enjoy-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-right.png" alt="">
                        </div>
                    </div>
                    <div class="enjoy-fixed-container-wrap-content-txt">
                        <h3>リラクゼーション</h3>
                        <p>
                            ボディケア・あかすり・フットマッサージなど、豊富な施術をご用意。日々の疲れを芯から癒したい方におすすめです。<br>
                            予約制でスムーズにご案内でき、定期的にリラクイベントも開催中。贅沢なひとときをお過ごしください。
                        </p>
                        <div class="com-btn-border-white com-btn-border--210">
                            <a href="">くわしく見る<i></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="enjoy-fixed-container-wrap" id="enjoy-06">
                <div class="enjoy-fixed-container-wrap-close enjoy-fixed-btn-close">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-close.svg" alt="閉じる"></a>
                </div>
                <div class="enjoy-fixed-container-wrap-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-bg-red.jpg" alt="">
                </div>
                <div class="enjoy-fixed-container-wrap-content">
                    <div class="enjoy-fixed-container-wrap-content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-img-06.jpg" alt="">
                        <div class="enjoy-fixed-container-wrap-content-img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-left.png" alt="">
                        </div>
                        <div class="enjoy-fixed-container-wrap-content-img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enjoy/popup-icon-right.png" alt="">
                        </div>
                    </div>
                    <div class="enjoy-fixed-container-wrap-content-txt">
                        <h3>アメニティ・グッズ</h3>
                        <p>
                            シャンプーやボディソープのアメニティはもちろん無料。タオルもご希望のお客様はレンタルまたは購入が可能なので、手ぶらでも安心してお越しいただけます。<br>
                            オリジナルグッズも取り揃えており、お土産や記念品としてもおすすめです。
                        </p>
                        <div class="com-btn-border-white com-btn-border--210">
                            <a href="">くわしく見る<i></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>







<?php get_footer(); ?>