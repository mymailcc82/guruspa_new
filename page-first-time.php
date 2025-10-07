<?php get_header(); ?>
<main class="page-main first">
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
                    <span itemprop="name">初めてのお客様へ</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width">
            <div class="com-title com-title--first center com-title-hidden">
                <p>初めてのお客様へ</p>
                <h2 class="">
                    <span class="title">F</span><span class="title">I</span><span class="title">R</span><span class="title">S</span><span class="title">T</span><span class="title">-</span><span class="title">T</span><span class="title">I</span><span class="title">M</span><span class="title">E</span>
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

            <div class="page-btn mb-0">
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
        <div class="page-deco-bg">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-blue-top-sp_v2.png?ver=1.0.0" media="(max-width: 601px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-blue-top_v2.png" alt="">
            </picture>

        </div>
        <div class="page-deco-container page-deco-container--blue">
            <div class="content-width">
                <div class="sec02-wrap">
                    <div class="sec02-wrap-txt">
                        <h2>心と体を満たす、<br>ウェルビーイング空間。</h2>
                        <p>
                            松阪温泉 GURUSPA（グルスパ） は、<br class="hidden-sm">温泉・露天風呂・岩盤浴・食事処・<br class="hidden-sm">リクライニングスペースなどを備えた<br class="hidden-sm">大型スパリゾートです。<br><br class="hidden-sm">
                            日常を忘れて気軽に<br class="hidden-sm">「癒し」と「楽しさ」に浸れる場所。<br><br class="hidden-sm">
                            ご家族でも、友人とでも、お一人でも。<br class="hidden-sm">思い思いの時間を過ごせる空間が<br class="hidden-sm">ここにあります。
                        </p>
                    </div>
                    <div class="sec02-wrap-img">
                        <ul>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-img-01_v2.webp" alt="グルスパ"></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-img-02_v2.webp" alt="グルスパ"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content-width-sm content-width--mobile-full">
                <div class="sec02-about">
                    <div class="sec02-icon-04-first">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-04.webp" alt="">
                    </div>
                    <div class="sec02-icon-05">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-05.webp" alt="">
                    </div>
                    <div class="sec02-icon-06">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-06.svg" alt="">
                    </div>

                    <div class="sec02-about-bg">
                        <div class="sec02-icon-01">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-01.webp" alt="">
                        </div>
                        <div class="sec02-icon-02">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-02-sp.webp" media="(max-width: 601px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-02.webp" alt="">
                            </picture>

                        </div>
                        <div class="sec02-icon-03-first">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-icon-03.webp" alt="">
                        </div>
                    </div>
                    <p>
                        グルスパの名前は、愛知県知立市で<br class="hidden-sm">多くのお客様に愛され続けている<br>
                        当社の温浴施設一号店、<br class="hidden-sm">「サウナイーグル」の基盤や理念を受け継ぎ、<br>
                        さらに発展させるという願いを込め<br>
                        <span>「SAUNA EAGLE SPA&RESORT」</span>から<br class="hidden-sm">名付けられました。<br><br>
                        ロゴにはコンセプトである<br class="hidden-sm">「ウェルビーイング」を育むための<br>
                        「水・火・光・緑」といった<br class="hidden-sm">自然のエネルギーを表現。<br><br>
                        松坂という自然豊かな地で<br class="hidden-sm">心を体を癒し、より良い毎日を<br>
                        皆様に提供できる施設を目指しています。
                    </p>
                    <div class="sec02-about-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/logo.svg" alt="GURUSPA">
                    </div>
                </div>
                <div class="sec02-desc sec02-desc--left">
                    <p>
                        グルスパが目指すのは <br class="hidden-sm">「<span>ウェルビーイング（Well-being）</span>」 の提供です。<br><br class="hidden-sm">
                        ウェルビーイングとは単なる健康だけでなく、<br class="hidden-sm">心身ともに満たされた状態を意味する言葉です。
                    </p>
                </div>
                <div class="sec02-list fadeup-timelug">
                    <div class="sec02-list-item fadeup-item">
                        <p>
                            忙しい日常に、<br>
                            ほっとする時間を。
                        </p>
                        <div class="sec02-list-item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-list-01_v2.webp" alt="">
                        </div>
                    </div>
                    <div class="sec02-list-item fadeup-item">
                        <p>
                            人とのつながりを<br>
                            感じられる場所に。
                        </p>
                        <div class="sec02-list-item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-list-02_v2.webp" alt="">
                        </div>
                    </div>
                    <div class="sec02-list-item fadeup-item">
                        <p>
                            心ゆくまでリラックスし、満たされる空間を。
                        </p>
                        <div class="sec02-list-item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-list-03_v2.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="sec02-desc sec02-desc--right">
                    <p>
                        地域の方も、旅の途中の方も。<br>
                        ここに来ることで “ちょっと心と体が豊かになる”、そんな場所でありたいと考えています。
                    </p>
                </div>
                <div class="sec02-bottom">
                    <div class="sec02-bottom-icon-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-bottom-icon-01.webp" alt="">
                    </div>
                    <div class="sec02-bottom-icon-bottom">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-bottom-icon-02.webp" alt="">
                    </div>
                    <h2>
                        グルスパの<span>ここに注目</span><i></i>
                    </h2>
                    <div class="sec02-bottom-wrap">
                        <div class="sec02-bottom-wrap-col fadeup">
                            <div class="sec02-bottom-wrap-col-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-bottom-01_v2.webp" alt="">
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
                        <div class="sec02-bottom-wrap-col fadeup">
                            <div class="sec02-bottom-wrap-col-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-bottom-02_v2.webp" alt="">
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
                        <div class="sec02-bottom-wrap-col fadeup">
                            <div class="sec02-bottom-wrap-col-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec02-bottom-03_v3.webp" alt="">
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
                    <div class="com-btn-border-blue hidden-mobile">
                        <a href="<?php echo home_url('/enjoy/'); ?>">施設紹介はこちら<i></i></a>
                    </div>
                    <div class="com-btn-mobile hidden-sm">
                        <a href="<?php echo home_url('/enjoy/'); ?>">施設紹介はこちら<i class="icon-blue"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-deco-bg-bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-blue-bottom.png" alt="">
        </div>
    </section>
    <section class="sec03" id="sec03">
        <div class="content-width-lg content-width--middle-full">
            <div class="page-title-center--has-icon">
                <h2><i></i>入館の流れ</h2>
            </div>

            <div class="sec03-scroll">
                <div class="sec03-wrap fadeup">
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec03-img-01_v2.webp" alt="">
                        </div>
                        <div class="sec03-wrap-col-txt">
                            <h3>受付・リストバンド<br class="hidden-mobile">登録</h3>
                            <p>
                                受付カウンターにてリストバンドをご登録いただきます。<br>
                                入館後はこちらのリストバンドにてキャッシュレスでお食事やお買い物が可能です。
                            </p>
                            <div class="com-btn-border-black com-btn-border-black--small hidden-mobile">
                                <a href="<?php echo home_url('/guide/#sec02'); ?>">料金案内はこちら<i></i></a>
                            </div>
                            <div class="com-btn-mobile hidden-sm">
                                <a href="<?php echo home_url('/guide/#sec02'); ?>">料金案内はこちら<i class="icon-black"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec03-img-02_v2.webp" alt="">
                        </div>
                        <div class="sec03-wrap-col-txt">
                            <h3>館内着・タオル受取<br class="hidden-mobile">（有料）</h3>
                            <p>
                                発汗エリア（岩盤浴）ご利用のお客様は、館内着とレンタルタオルをお渡しします。
                            </p>

                            <div class="com-btn-border-black com-btn-border-black--small hidden-mobile">
                                <a href="<?php echo home_url('/enjoy/goods/#sec02'); ?>">アメニティ詳細はこちら<i></i></a>
                            </div>
                            <div class="com-btn-mobile hidden-sm">
                                <a href="<?php echo home_url('/enjoy/goods/#sec02'); ?>">アメニティ詳細はこちら<i class="icon-black"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec03-img-03_v2.webp" alt="">
                        </div>
                        <div class="sec03-wrap-col-txt">
                            <h3 class="h3-small">温泉・サウナ・岩盤浴・<br class="hidden-middle">リラクゼーションなどを<br class="hidden-middle">お楽しみください</h3>
                            <p>
                                様々な温浴設備で癒しのひと時をお過ごしください。<br>
                                発汗エリア、リラクゼーションのご利用は別料金となります。
                            </p>
                            <div class="com-btn-border-black com-btn-border-black--small hidden-mobile">
                                <a href="<?php echo home_url('/enjoy/sweating/'); ?>">発汗エリアについて<i></i></a>
                            </div>
                            <div class="com-btn-mobile hidden-sm">
                                <a href="<?php echo home_url('/enjoy/sweating/'); ?>">発汗エリアについて<i class="icon-black"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec03-img-04_v2.webp" alt="">
                        </div>
                        <div class="sec03-wrap-col-txt">
                            <h3>お食事処でひと息</h3>
                            <p>
                                キッチントキワやスイートラボにて、お食事やドリンクをお楽しみいただけます。
                            </p>
                            <div class="com-btn-border-black com-btn-border-black--small hidden-mobile">
                                <a href="<?php echo home_url('/enjoy/food/'); ?>">お食事メニューについて<i></i></a>
                            </div>
                            <div class="com-btn-mobile hidden-sm">
                                <a href="<?php echo home_url('/enjoy/food/'); ?>">お食事メニューについて<i class="icon-black"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/first/sec03-img-05_v2.webp" alt="">
                        </div>
                        <div class="sec03-wrap-col-txt">
                            <h3>ご精算・退館</h3>
                            <p>
                                精算機にてリストバンドに登録されたご利用料金を支払いいただきます。<br>
                                お忘れ物の内容にご注意くださいませ。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec04" id="sec04">
        <div class="page-deco-bg">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-red-top-sp.png" media="(max-width: 601px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-red-top.png" alt="">
            </picture>

        </div>
        <div class="page-deco-container page-deco-container--red">
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
                            <dd>0598-54-2626</dd>
                        </dl>
                        <dl>
                            <dt>営業時間</dt>
                            <dd>
                                月〜木曜日 10:00〜24:00<br>
                                金曜日 10:00〜25:00<br>
                                土曜日 07:00〜25:00<br>
                                日曜日 07:00〜24:00<br>
                                祝日　 07:00〜24:00<br>
                                祝日前 10:00〜25:00<br>
                            </dd>
                        </dl>
                        <dl>
                            <dt>定休日</dt>
                            <dd>年中無休</dd>
                        </dl>
                        <dl>
                            <dt>駐車場</dt>
                            <dd>イオンタウン松阪船江駐車場をご利用ください。</dd>
                        </dl>
                        <div class="sec04-wrap-btn">
                            <ul>
                                <li>
                                    <div class="com-btn-border-black com-btn-border-black--small">
                                        <a href="https://maps.app.goo.gl/Vgrzvju7K94dyGY89" target="_blank" rel="noopener noreferrer">Google Mapで開く<i></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="com-btn-border-black com-btn-border-black--small">
                                        <a href="<?php echo home_url(); ?>/guid/">ご利用案内はこちら<i></i></a>
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
        </div>
        <div class="page-bg-deco-bg-bottom-red"></div>

    </section>


    <?php get_template_part('./inc/inc-aside'); ?>
</main>
<?php get_footer(); ?>