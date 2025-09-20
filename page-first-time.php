<?php get_header(); ?>
<main class="page-main first">
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
                    <span itemprop="name">ご利用案内</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width">
            <div class="com-title center com-title-hidden">
                <p>初めてのお客様へ</p>
                <h2 class="">
                    <span class="title">G</span><span class="title">U</span><span class="title">I</span><span class="title">D</span><span class="title">E</span>
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
                    日常を離れて、心も体も整う時間を。<br>
                    はじめて訪れる方にも、いつものお客様にもグルスパをもっと楽しんでいただくためのご案内です。
                </p>
            </div>

            <div class="page-btn">
                <ul>
                    <li>
                        <a href="#sec02">グルスパの魅力<i></i></a>
                    </li>
                    <li>
                        <a href="#sec03">入館の流れ<i></i></a>
                    </li>
                    <li>
                        <a href="#sec04">施設案内<i></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="sec02" id="sec02">
        <div class="content-width">
            <div class="sec02-wrap">
                <div class="sec02-wrap-txt">
                    <h2>心と体を満たす、<br>ウェルビーイング空間。</h2>
                    <p>
                        松阪温泉 GURUSPA（グルスパ） は、温泉・露天風呂・岩盤浴・食事処・リクライニングスペースなどを備えた大型スパリゾートです。<br>
                        日常を忘れて気軽に「癒し」と「楽しさ」に浸れる場所。<br>
                        ご家族でも、友人とでも、お一人でも。思い思いの時間を過ごせる空間がここにあります。
                    </p>
                </div>
                <div class="sec02-wrap-img">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-img-01.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-img-02.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-width-sm">
            <div class="sec02-about">
                <div class="sec02-icon-04">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-04.png" alt="">
                </div>
                <div class="sec02-about-bg">
                    <div class="sec02-icon-01">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-01.png" alt="">
                    </div>
                    <div class="sec02-icon-02">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-02.png" alt="">
                    </div>
                    <div class="sec02-icon-03">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-03.png" alt="">
                    </div>
                </div>
                <p>
                    グルスパの名前は、愛知県知立市で多くのお客様に愛され続けている<br>
                    当社の温浴施設一号店、「サウナイーグル」の基盤や理念を受け継ぎ、<br>
                    さらに発展させるという願いを込め<br>
                    「SAUNA EAGLE SPA&RESORT」から名付けられました。<br><br>
                    ロゴにはコンセプトである「ウェルビーイング」を育むための<br>
                    「水・火・光・緑」といった自然のエネルギーを表現。<br><br>
                    松坂という自然豊かな地で心を体を癒し、より良い毎日を<br>
                    皆様に提供できる施設を目指しています。
                </p>
                <div class="sec02-about-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/logo.svg" alt="GURUSPA">
                </div>
            </div>

            <div class="sec02-desc">
                <p>
                    グルスパが目指すのは 「<span>ウェルビーイング（Well-being）</span>」 の提供です。<br>
                    ウェルビーイングとは単なる健康だけでなく、心身ともに満たされた状態を意味する言葉です。
                </p>
            </div>
            <div class="sec02-list">
                <div class="sec02-list-item">
                    <p>
                        忙しい日常に、<br>
                        ほっとする時間を。
                    </p>
                    <div class="sec02-list-item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-list-01.png" alt="">
                    </div>
                </div>
                <div class="sec02-list-item">
                    <p>
                        人とのつながりを<br>
                        感じられる場所に。
                    </p>
                    <div class="sec02-list-item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-list-02.png" alt="">
                    </div>
                </div>
                <div class="sec02-list-item">
                    <p>
                        心ゆくまでリラックスし、満たされる空間を。
                    </p>
                    <div class="sec02-list-item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-list-03.png" alt="">
                    </div>
                </div>
            </div>
            <div class="sec02-desc">
                <p>
                    地域の方も、旅の途中の方も。<br>
                    ここに来ることで “ちょっと心と体が豊かになる”、そんな場所でありたいと考えています。
                </p>
            </div>
            <div class="sec02-bottom">
                <h2>
                    グルスパの<span>ここに注目</span><i></i>
                </h2>
                <div class="sec02-bottom-wrap">
                    <div class="sec02-bottom-wrap-col">
                        <div class="sec02-bottom-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-bottom-01.jpg" alt="">
                            <div class="sec02-bottom-wrap-col-img-num">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-bottom-num-01.svg" alt="01">
                            </div>
                        </div>
                        <div class="sec02-bottom-wrap-col-txt">
                            <h3>天然温泉</h3>
                            <p>
                                地下1,300mから汲み上げた天然温泉を贅沢に使用。<br>
                                泉質はメタけい酸が豊富で、肌の新陳代謝を促しセラミドを整える“美肌の湯”。<br>
                                大きな露天風呂で四季の風を感じながら、心も体もときほぐす至福のひとときを。
                            </p>
                        </div>
                    </div>
                    <div class="sec02-bottom-wrap-col">
                        <div class="sec02-bottom-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-bottom-02.jpg" alt="">
                            <div class="sec02-bottom-wrap-col-img-num">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-bottom-num-02.svg" alt="02">
                            </div>
                        </div>
                        <div class="sec02-bottom-wrap-col-txt">
                            <h3>エンターテインメント×ロウリュ</h3>
                            <p>
                                音・光・蒸気・熱波が織りなす灼熱の<span>アトラクション型ロウリュ</span>は、男女ご一緒に体験可能です。
                                オリジナルコンテンツと組み合わせた迫力の演出で、ここでしか味わえない特別な時間をお届けします。
                                各浴室サウナでは「サウナイーグル流」熱波師によるアウフグースも実施しています。
                            </p>
                        </div>
                    </div>
                    <div class="sec02-bottom-wrap-col">
                        <div class="sec02-bottom-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-bottom-03.jpg" alt="">
                            <div class="sec02-bottom-wrap-col-img-num">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-bottom-num-03.svg" alt="03">
                            </div>
                        </div>
                        <div class="sec02-bottom-wrap-col-txt">
                            <h3>外観・シンボルスポット</h3>
                            <p>
                                夜になると、シンボルである温泉マークがライトアップ。<br>
                                ウォーターライトが幻想的に輝き、色とりどりに変化する姿はSNS映え間違いなし。<br>
                                人気の 温泉マークモニュメント では“人間温泉マーク”を撮影できるフォトスポットもご用意しています。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="com-btn-border-blue">
                    <a href="<?php echo home_url('/facility/'); ?>">施設紹介はこちら<i></i></a>
                </div>
            </div>
        </div>
    </section>
    <section class="sec03" id="sec03">
        <div class="content-width-lg">
            <div class="page-title-center--has-icon">
                <h2><i></i>入館の流れ</h2>
            </div>

            <div class="sec03-wrap">
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec03-img-01.jpg" alt="">
                    </div>
                    <h3>受付・リストバンド<br>登録</h3>
                    <p>
                        受付カウンターにてリストバンドをご登録いただきます。<br>
                        入館後はこちらのリストバンドにてキャッシュレスでお食事やお買い物が可能です。
                    </p>
                    <div class="com-btn-border-black com-btn-border-black--small">
                        <a href="<?php echo home_url('/price/'); ?>">料金案内はこちら<i></i></a>
                    </div>
                </div>
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec03-img-02.jpg" alt="">
                    </div>
                    <h3>館内着・タオル受取（有料）</h3>
                    <p>
                        発汗エリア（岩盤浴）ご利用のお客様は、館内着とレンタルタオルをお渡しします。
                    </p>
                    <div class="com-btn-border-black com-btn-border-black--small">
                        <a href="<?php echo home_url('/price/'); ?>">アメニティ詳細はこちら<i></i></a>
                    </div>
                </div>
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec03-img-03.jpg" alt="">
                    </div>
                    <h3 class="h3-small">温泉・サウナ・岩盤浴・リラクゼーションなどをお楽しみください</h3>
                    <p>
                        様々な温浴設備で癒しのひと時をお過ごしください。<br>
                        発汗エリア、リラクゼーションのご利用は別料金となります。
                    </p>
                    <div class="com-btn-border-black com-btn-border-black--small">
                        <a href="<?php echo home_url('/price/'); ?>">発汗エリアについて<i></i></a>
                    </div>
                </div>
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec03-img-04.jpg" alt="">
                    </div>
                    <h3>お食事処でひと息</h3>
                    <p>
                        キッチントキワやスイートラボにて、お食事やドリンクをお楽しみいただけます。
                    </p>
                    <div class="com-btn-border-black com-btn-border-black--small">
                        <a href="<?php echo home_url('/price/'); ?>">お食事メニューについて<i></i></a>
                    </div>
                </div>
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec03-img-05.jpg" alt="">
                    </div>
                    <h3>ご精算・退館</h3>
                    <p>
                        精算機にてリストバンドに登録されたご利用料金を支払いいただきます。<br>
                        お忘れ物の内容にご注意くださいませ。
                    </p>
                </div>

            </div>

        </div>
    </section>
    <section class="sec04" id="sec04">
        <div class="content-width">
            <div class="page-title-center--has-icon">
                <h2><i></i>施設案内</h2>
            </div>

            <div class="sec04-wrap">
                <div class="sec04-wrap-left">
                    <h3>松阪温泉GURUSPA（グルスパ）</h3>
                    <dl>
                        <dt>基本情報</dt>
                        <dd>
                            〒516-0042<br>
                            三重県松阪市大塚町220−1<br>
                            （イオンタウン松阪船江 別棟）
                        </dd>
                    </dl>
                    <dl>
                        <dt>TEL</dt>
                        <dd>000-000-0000</dd>
                    </dl>
                    <dl>
                        <dt>営業時間</dt>
                        <dd>
                            ご入浴：6:00〜翌2:00（最終受付 1:30）<br>
                            岩盤浴：6:00〜翌1:30（最終受付 0:30）
                        </dd>
                    </dl>
                    <dl>
                        <dt>定休日</dt>
                        <dd>年中無休</dd>
                    </dl>
                    <div class="sec04-wrap-btn">
                        <ul>
                            <li>
                                <div class="com-btn-border-black com-btn-border-black--small">
                                    <a href="">Google Mapで開く<i></i></a>
                                </div>
                            </li>
                            <li>
                                <div class="com-btn-border-black com-btn-border-black--small">
                                    <a href="">ご利用案内はこちら<i></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sec04-wrap-right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.4092150800016!2d136.52354497656518!3d34.59381238893913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60046ba93a44daa5%3A0x5fde559abd009be2!2z5p2-6Ziq5rip5rOJR1VSVVNQQQ!5e0!3m2!1sja!2sjp!4v1758355099681!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <?php get_template_part('inc/inc-bnr'); ?>
    </section>


    <?php get_template_part('inc/inc-contact'); ?>
</main>
<?php get_footer(); ?>