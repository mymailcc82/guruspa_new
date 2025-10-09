<?php get_header(); ?>
<main class="page-main guide">
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
                    <span itemprop="name">ご利用案内</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width">
            <div class="com-title center com-title-hidden">
                <p>ご利用案内</p>
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
                    松阪温泉 GURUSPA の営業時間、料金、ご利用にあたっての注意点をご案内いたします。<br>
                    はじめてご来館の方も、リピーターの方も、安心してお楽しみいただけるようご確認ください。
                </p>
            </div>

            <div class="page-btn">
                <ul>
                    <li>
                        <a href="#sec02">料金案内<i></i></a>
                    </li>
                    <li>
                        <a href="#sec03">営業時間<i></i></a>
                    </li>
                    <li>
                        <a href="#sec04">ご利用案内<i></i></a>
                    </li>
                    <li>
                        <a href="#sec05">アクセス<i></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="sec02">
        <div class="content-width" id="sec02">
            <div class="page-title--has-icon">
                <h2><i></i>料金案内</h2><span>※料金は全て税込です。</span>
            </div>

            <div class="sec02-container">
                <h3>通常入泉</h3>
                <div class="sec02-table sec02-table--normal">
                    <table>
                        <tr>
                            <th></th>
                            <th>平日</th>
                            <th>土日祝日</th>
                        </tr>
                        <tr>
                            <td>
                                一般<br><span>※中学生以上</span>
                            </td>
                            <td>
                                <strong>980</strong>円
                            </td>
                            <td>
                                <strong>1,180</strong>円
                            </td>
                        </tr>
                        <tr>
                            <td>
                                会員
                            </td>
                            <td>
                                <strong>930</strong>円
                            </td>
                            <td>
                                <strong>1,130</strong>円
                            </td>
                        </tr>
                        <tr>
                            <td>
                                子供<br><span>※小学生以下</span>
                            </td>
                            <td>
                                <strong>400</strong>円
                            </td>
                            <td>
                                <strong>500</strong>円
                            </td>
                        </tr>
                        <tr>
                            <td>
                                幼児<br><span>※3歳以下</span>
                            </td>
                            <td colspan="2">
                                <strong>無料</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                タオルセット レンタル<br><span>※バスタオル・フェイスタオル</span>
                            </td>
                            <td colspan="2">
                                <strong>300円</strong>
                            </td>
                        </tr>
                    </table>
                </div>
                <p>
                    ※小学生以下は保護者同伴必須<br>
                    ※18歳未満の方は保護者同伴なしの場合、22時まで利用可<br>
                    ※入退場・入浴・トイレを自力で行えない方は同性付添人が必要<br>
                    ※身長120cm以上のお子様は混浴禁止（条例に従う）
                </p>
            </div>

            <div class="sec01-center mb-60">
                <div class="sec01-center-wrap">
                    <div class="sec01-center-wrap-col">
                        <dl>
                            <dt>会員入会金</dt>
                            <dd>
                                <p>
                                    200<span>円</span>
                                </p>
                            </dd>
                        </dl>
                    </div>
                    <div class="sec01-center-wrap-col">
                        <dl>
                            <dt>会員平日入泉回数券<br class="hidden-middle">(11枚)</dt>
                            <dd>
                                <p>
                                    8,800<span>円</span><br>
                                    <small>※1枚あたり800円</small>
                                </p>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>

            <div class="sec02-container">
                <h3 class="red">発汗エリア(有料岩盤浴)</h3>
                <div class="sec02-table sec02-table--red">
                    <table>
                        <tr>
                            <th></th>
                            <th>平日</th>
                            <th>土日祝日</th>
                        </tr>
                        <tr>
                            <td>
                                一般<br><span>※中学生以上</span>
                            </td>
                            <td>
                                <strong>860</strong>円
                            </td>
                            <td>
                                <strong>960</strong>円
                            </td>
                        </tr>
                        <tr>
                            <td>
                                会員
                            </td>
                            <td>
                                <strong>810</strong>円
                            </td>
                            <td>
                                <strong>910</strong>円
                            </td>
                        </tr>
                        <tr>
                            <td>
                                子供<br><span>※小学生以下</span>
                            </td>
                            <td>
                                <strong>300</strong>円
                            </td>
                            <td>
                                <strong>400</strong>円
                            </td>
                        </tr>
                        <tr>
                            <td>
                                幼児<br><span>※小学生未満</span>
                            </td>
                            <td colspan="2">
                                小学生未満 ご利用できません
                                                           </td>
                        </tr>
                    </table>
                </div>
                <p>
                    ※発汗エリア料金には専用ウェア・岩盤浴用大判タオルが含まれます。<br>
                    ※小学生未満のお子様はご利用できません。
                </p>
            </div>




            <?php /*
            <div class="sec02-container">
                <h3>朝風呂</h3>
                <div class="sec02-table sec02-table--col-2">
                    <table>
                        <tr>
                            <th></th>
                            <th>土日祝日</th>
                        </tr>
                        <tr>
                            <td>
								一般<br><span>※中学生以上</span>
                            </td>
                            <td>
                                <strong>980</strong>円
                            </td>
                        </tr>
                        <tr>
                            <td>
                                会員
                            </td>
                            <td>
                                <strong>930</strong>円
                            </td>
                        </tr>
                        <tr>
                            <td>
                                子供<br><span>※小学生以下</span>
                            </td>
                            <td>
                                <strong>400</strong>円
                            </td>
                        </tr>
                        <tr>
                            <td>
                                幼児<br><span>※3歳以下</span>
                            </td>
                            <td colspan="2">
                                <strong>無料</strong>
                            </td>
                        </tr>
                    </table>
                </div>
                <p>
                    ※朝風呂は土日祝日のみの営業となります
                </p>
            </div>
            */ ?>



            <div class="sec01-bottom" id="sec03">
                <div class="page-title--has-icon page-title--has-icon--mobile-left">
                    <h2><i></i>営業時間(年中無休)</h2>
                </div>
                <div class="sec01-bottom-table hidden-middle">
                    <table>
                        <tr>
                            <th>通常入泉</th>
                            <th>発汗エリア（有料岩盤浴）</th>
                            <th>ご飲食</th>
                        </tr>

                        <tr>
                            <td>10:00～24:00</td>
                            <td>10:00～23:15</td>
                            <td>11:00〜23:00</td>
                        </tr>
                        <?php /*
                        <tr>
                            <td>朝風呂</td>
                            <td>
                                <span class="none"></span>
                            </td>
                            <td><span class="none"></span></td>
                            <td>7:00〜10:00</td>
                            <td>7:00〜10:00</td>
                            <td>7:00〜10:00</td>
                            <td><span class="none"></span></td>
                        </tr>
                        */ ?>

                    </table>
                </div>

                <div class="sec01-bottom-table-mobile hidden-md">
                    <div class="sec01-bottom-table-sp">
                        <dl>
                            <dt>通常入泉</dt>
                            <dd>10:00〜24:00</dd>
                        </dl>
                        <dl>
                            <dt>発汗エリア(有料岩盤浴)</dt>
                            <dd>10:00〜23:15</dd>
                        </dl>
                        <dl>
                            <dt>ご飲食</dt>
                            <dd>11:00〜24:00</dd>
                        </dl>

                    </div>

                </div>


                <?php /*
                <div class="sec01-bottom-table-mobile hidden-md accordion">
                <div class="sec01-bottom-table-sp_v2">
                <dl>
                        <dt>月〜木</dt>
                        <dd>
                            <table>
                                <tr>
                                    <th>通常入泉</th>
                                    <td>10:00〜24:00</td>
                                </tr>
                                <tr>
                                    <th>発汗エリア<br><small>(有料岩盤浴)</small></th>
                                    <td>10:00〜23:15</td>
                                </tr>
                                <tr>
                                    <th>朝風呂</th>
                                    <td>
                                        <div class="none"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>ご飲食</th>
                                    <td>11:00〜23:00</td>
                                </tr>
                            </table>
                        </dd>
                    </dl>
                    <dl>
                        <dt>金</dt>
                        <dd>
                            <table>
                                <tr>
                                    <th>通常入泉</th>
                                    <td>10:00〜24:00</td>
                                </tr>
                                <tr>
                                    <th>発汗エリア<br><small>(有料岩盤浴)</small></th>
                                    <td>10:00〜23:15</td>
                                </tr>
                                <tr>
                                    <th>朝風呂</th>
                                    <td>
                                        <div class="none"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>ご飲食</th>
                                    <td>11:00〜23:00</td>
                                </tr>
                            </table>
                        </dd>
                    </dl>
                    <dl>
                        <dt>土</dt>
                        <dd>
                            <table>
                                <tr>
                                    <th>通常入泉</th>
                                    <td>10:00〜24:00</td>
                                </tr>
                                <tr>
                                    <th>発汗エリア<br><small>(有料岩盤浴)</small></th>
                                    <td>10:00〜23:15</td>
                                </tr>
                                <tr>
                                    <th>朝風呂</th>
                                    <td>
                                        <div class="none"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>ご飲食</th>
                                    <td>11:00〜23:00</td>
                                </tr>
                            </table>
                        </dd>
                    </dl>
                    <dl>
                        <dt>日</dt>
                        <dd>
                            <table>
                                <tr>
                                    <th>通常入泉</th>
                                    <td>10:00〜24:00</td>
                                </tr>
                                <tr>
                                    <th>発汗エリア<br><small>(有料岩盤浴)</small></th>
                                    <td>10:00〜23:15</td>
                                </tr>
                                <tr>
                                    <th>朝風呂</th>
                                    <td>
                                        <div class="none"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>ご飲食</th>
                                    <td>11:00〜23:00</td>
                                </tr>
                            </table>
                        </dd>
                    </dl>
                    <dl>
                        <dt>祝日</dt>
                        <dd>
                            <table>
                                <tr>
                                    <th>通常入泉</th>
                                    <td>10:00〜24:00</td>
                                </tr>
                                <tr>
                                    <th>発汗エリア<br><small>(有料岩盤浴)</small></th>
                                    <td>10:00〜23:15</td>
                                </tr>
                                <tr>
                                    <th>朝風呂</th>
                                    <td>
                                        <div class="none"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>ご飲食</th>
                                    <td>11:00〜23:00</td>
                                </tr>
                            </table>
                        </dd>
                    </dl>
                    <dl>
                        <dt>祝日前</dt>
                        <dd>
                            <table>
                                <tr>
                                    <th>通常入泉</th>
                                    <td>10:00〜24:00</td>
                                </tr>
                                <tr>
                                    <th>発汗エリア<br><small>(有料岩盤浴)</small></th>
                                    <td>10:00〜23:15</td>
                                </tr>
                                <tr>
                                    <th>朝風呂</th>
                                    <td>
                                        <div class="none"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>ご飲食</th>
                                    <td>11:00〜23:00</td>
                                </tr>
                            </table>
                        </dd>
                    </dl>
                </div>

                    
                </div>
                */ ?>
                <p class="sec01-bottom-attention">
                    ※当館は年中無休で営業しております。<br>
                    ※設備点検などに伴う臨時休館がある場合は、事前にお知らせページにてご案内いたします。
                </p>
            </div>

            <div class="com-btn-border-black hidden-mobile com-btn-border-black--233">
                <a href="<?php echo home_url(); ?>/enjoy/">館内の楽しみ方<i></i></a>
            </div>
            <div class="com-btn-mobile hidden-sm">
                <a href="<?php echo home_url(); ?>/enjoy/">館内の楽しみ方<i></i></a>
            </div>
        </div>
    </section>
    <section class="sec03" id="sec04">
        <div class="page-deco-bg">
            <picture>
                <source media="(max-width: 601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-green-top-sp_v3.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-green-top-v3.png" alt="">
            </picture>

        </div>
        <div class="page-deco-container page-deco-container--green">
            <div class="content-width-sm">
                <div class="page-title--has-icon">
                    <h2><i></i>ご利用案内</h2>
                </div>
                <div class="sec03-main">
                    <div class="sec03-container">
                        <div class="sec03-wrap">
                            <div class="sec03-wrap-col">
                                <div class="sec03-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/sec03-img-01_v2.webp" alt="">
                                </div>
                                <p>
                                    入館時は券売機にて受付をお願いいたします。
                                </p>
                            </div>
                            <div class="sec03-wrap-col">
                                <div class="sec03-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/sec03-img-02_v2.webp" alt="">
                                </div>
                                <p>
                                    発汗エリア（岩盤浴）は<span>別料金・専用ウェア着用必須です。</span>
                                </p>
                            </div>
                        </div>
                        <div class="com-btn-border-black hidden-mobile">
                            <a href="<?php echo home_url(); ?>/first-time/">初めてのお客様へ<i class="icon-green"></i></a>
                        </div>
                        <div class="com-btn-mobile hidden-sm">
                            <a href="<?php echo home_url(); ?>/first-time/">初めてのお客様へ<i class="icon-green"></i></a>
                        </div>
                    </div>
                    <div class="sec03-container">
                        <div class="page-title--has-icon page-title--has-icon--mobile-20">
                            <h2><i></i>ご利用いただけない方</h2>
                        </div>
                        <div class="sec03-col">
                            <div class="sec03-col-img">
                                <picture>
                                    <source media="(max-width: 601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/sec03-img-03-sp.webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/sec03-img-03.webp" alt="">
                                </picture>
                            </div>
                            <div class="sec03-col-txt">
                                <ul>
                                    <li>刺青・タトゥー（シール含む）のある方</li>
                                    <li>泥酔状態の方、伝染病・皮膚病等の疾患をお持ちの方</li>
                                    <li>暴力団関係者や反社会的勢力に属する方</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sec03-container">
                        <div class="page-title--has-icon page-title--has-icon--mobile-20">
                            <h2><i></i>年齢制限・お子様のご利用</h2>
                        </div>
                        <div class="sec03-col">
                            <div class="sec03-col-img">
                                <picture>
                                    <source media="(max-width: 601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/sec03-img-04-sp.webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/sec03-img-04.webp" alt="">
                                </picture>
                            </div>
                            <div class="sec03-col-txt">
                                <ul>
                                    <li>小学生以下のお子様は必ず保護者の同伴が必要です。</li>
                                    <li>中学生以下のお客様は<span>21:00までのご利用</span>となります。</li>
                                    <li>身長120cm以上のお子様は混浴禁止（条例に準じます）。</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sec03-container">
                        <div class="page-title--has-icon page-title--has-icon--mobile-20">
                            <h2><i></i>館内マナー・禁止事項</h2>
                        </div>
                        <div class="sec03-col">
                            <div class="sec03-col-img">
                                <picture>
                                    <source media="(max-width: 601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/sec03-img-05-sp.webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/sec03-img-05.webp" alt="">
                                </picture>
                            </div>
                            <div class="sec03-col-txt">
                                <ul>
                                    <li>指定場所以外での喫煙は禁止です。</li>
                                    <li>飲食物の持ち込みはご遠慮ください。</li>
                                    <li>浴室・脱衣場での<span>写真撮影・動画撮影は禁止</span>です。</li>
                                    <li>大声・暴力行為・威圧的な言動など、他のお客様の迷惑となる行為はご遠慮ください。当店が悪質と判断した場合はその場で警察に通報させていただきます。</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sec03-container">
                        <div class="page-title--has-icon page-title--has-icon--mobile-20">
                            <h2><i></i>安全・荷物について</h2>
                        </div>
                        <div class="sec03-col">
                            <div class="sec03-col-img">
                                <picture>
                                    <source media="(max-width: 601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/sec03-img-06-sp.webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/sec03-img-06.webp" alt="">
                                </picture>
                            </div>
                            <div class="sec03-col-txt">
                                <ul>
                                    <li>館内での怪我・盗難・紛失について、当店に過失がない場合は責任を負いかねます。</li>
                                    <li>忘れ物は一定期間保管後、貴重品は警察へ届け、それ以外は廃棄いたします。</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sec03-container">
                        <div class="page-title--has-icon page-title--has-icon--mobile-20">
                            <h2><i></i>その他</h2>
                        </div>
                        <div class="sec03-col">
                            <div class="sec03-col-img">
                                <picture>
                                    <source media="(max-width: 601px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/sec03-img-07-sp.webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/sec03-img-07.webp" alt="">
                                </picture>
                            </div>
                            <div class="sec03-col-txt">
                                <ul>
                                    <li>設備点検等により臨時休館となる場合があります。その際は「お知らせ」にてご案内します。</li>
                                    <li>やむを得ない事情により営業時間を変更する場合があります。</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="com-btn-border-black hidden-mobile">
                    <a href="<?php echo home_url(); ?>/faq/">よくある質問はこちら<i class="icon-green"></i></a>
                </div>
                <div class="com-btn-mobile hidden-sm">
                    <a href="<?php echo home_url(); ?>/faq/">よくある質問はこちら<i class="icon-green"></i></a>
                </div>
            </div>
        </div>
        <div class="page-deco-bg-bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-green-bottom.png" alt="">
        </div>
    </section>
    <section class="sec04" id="sec05">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon">
                <h2><i></i>アクセス</h2>
            </div>
            <div class="sec04-desc">
                <h3>伊勢志摩観光のついでに立ち寄れる！</h3>
                <p>
                    伊勢神宮・鳥羽水族館・志摩スペイン村など、人気観光地からの立ち寄りに最適な場所に位置しています！<br>
                    名古屋・大阪方面の帰路に便利な「松阪IC」や、国道23号もすぐ近くでお車でのアクセスが抜群です。
                </p>
            </div>
        </div>

        <div class="spotMapInner">
            <div class="spotMapBox">
                <div class="spotMapBoxCanvas" id="map_canvas"></div>
            </div>
            <div class="spotMapListWrap" data-simplebar data-simplebar-auto-hide="false">
                <ul class="spotMapList" id="mapList"></ul>
            </div>
        </div>
        <div class="content-width">
            <div class="sec04-bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/sec05-img-01_v3.webp" alt="">
            </div>
        </div>
    </section>


    <?php get_template_part('inc/inc-bnr'); ?>
    <?php get_template_part('inc/inc-aside'); ?>
</main>
<?php get_footer(); ?>