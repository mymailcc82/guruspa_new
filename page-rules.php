<?php get_header(); ?>
<main class="page-main else">
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
                    <span itemprop="name">注意事項</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width-lg">
            <div class="com-title center com-title-hidden com-title--else">
                <p>注意事項</p>
                <h1 class="">
                    <span class="title">H</span><span class="title">O</span><span class="title">U</span><span class="title">S</span><span class="title">E</span>　<span class="title">R</span><span class="title">U</span><span class="title">L</span><span class="title">E</span><span class="title">S</span>
                    <span class="title title-item-sprout">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                    </span>
                    <span class="title title-item-sun">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.webp" alt="">
                    </span>
                </h1>
            </div>
            <div class="else-container">
                <dl>
                    <dd class="large">
                        施設ご利用に関する約款
                    </dd>
                </dl>
                <dl>
                    <dt>第1条［本約款の目的等］</dt>
                    <dd>
                        1.本約款は、松阪温泉GURUSPA（以下「当社」）がお客様に入浴施設およびレストラン、駐車場等の付帯施設（以下「施設」）におけるサービスを提供し、お客様が所定の利用料金を当社に支払いサービスを受けることに関して取り決めることを目的とします。<br>
                        2.本約款に定めのない事項については関連法令又は一般に確立された慣習によるものとします。<br>
                        3.当社が別途定める利用規則（駐車場の利用、入場手続き、浴場マナー、ロッカー利用、レストラン利用等に関するお願い・ご案内を含む。以下「約款等」といいます。）も併せて適用されます。
                    </dd>
                </dl>
                <dl>
                    <dt>第2条［約款等の遵守］</dt>
                    <dd>
                        1.お客様は施設利用にあたり、約款等を遵守していただきます。<br>
                        2.お客様は施設利用にあたり、当社スタッフの指示に従っていただきます。<br>
                        3.他のお客様や施設に迷惑をかける等、不適切な行為をしてはなりません。<br>
                        4.約款等違反や故意・過失により当社に損害を与えた場合は賠償していただきます。
                    </dd>
                </dl>
                <dl>
                    <dt>第3条［料金の支払いと施設利用］</dt>
                    <dd>
                        1.お客様はサービス提供に対し、原則として退場時に利用料金をお支払いください。ただし第4条に該当する場合は、入場をお断りまたは退場いただきます。その際の返金は致しかねます。<br>
                        2.利用料金は社会情勢や季節要因等により変更する場合があり、その際は施設掲示やホームページ等で告知します。
                    </dd>
                </dl>
                <dl>
                    <dt>第4条［利用のお断り・取消等と年齢制限］</dt>
                    <dd>
                        1.満員、天災地変、設備故障等により運営が不可能な場合、または以下に該当するお客様は利用をお断りし、承認を取り消します。<br>
                        （1）スタッフ指示や法令・約款等に従わない場合<br>
                        （2）刺青（タトゥーシール含む）、泥酔、伝染病・皮膚病、医師から運動制限のある方<br>
                        （3）暴力団員・反社会的団体関係者<br>
                        （4）暴力的要求や過大な負担を強要する場合<br>
                        （5）暴力・威圧的言動を行った場合<br>
                        （6）泥酔、放歌、歌舞、写真・動画撮影（浴室・脱衣場）など運営支障となる行為<br>
                        （7）ペット、悪臭物、危険物等の持込<br>
                        （8）指定場所以外での喫煙や飲食物持込を注意されてもやめない場合<br>
                        （9）施設・設備の損傷や異物混入行為<br>
                        （10）その他、利用に適さないと当社が判断した場合<br><br>

                        2.年齢等による制限は以下の通りです。<br>
                        （1）小学生以下は保護者同伴必須<br>
                        （2）18歳未満の方は保護者同伴なしの場合、22時まで利用可<br>
                        （3）入退場・入浴・トイレを自力で行えない方は同性付添人が必要<br>
                        （4）身長120cm以上のお子様は混浴禁止（条例に従う）<br><br>
                        3.入館不可の場合は速やかに退場いただきます。
                    </dd>
                </dl>
                <dl>
                    <dt>第5条［当社の責任］</dt>
                    <dd>
                        1.当社の責に帰すべき事由で損害を与えた場合は賠償いたします。<br>
                        2.事故・怪我・盗難等について、当社に故意・過失がない場合は責任を負いません。
                    </dd>
                </dl>
                <dl>
                    <dt>第6条［営業時間］</dt>
                    <dd>
                        1.営業時間は店舗ごとに定めるものとします。<br>
                        2.やむを得ない事情により事前通知なく変更する場合があります。
                    </dd>
                </dl>

                <dl>
                    <dt>第7条［手荷物・携帯品の保管］</dt>
                    <dd>
                        1.忘れ物は以下の通り取り扱います。<br>
                        （1）現金や貴重品は一定期間保管後、警察署へ届けます。<br>
                        （2）その他の保管可能品は一定期間保管後に廃棄します。<br>
                        （3）生もの・汚損物は直ちに廃棄します。
                    </dd>
                </dl>
                <dl>
                    <dt>第8条［お客様間の紛争解決］</dt>
                    <dd>事故や争議は当事者同士で解決していただきます。当社は責任を負いません。</dd>
                </dl>

                <dl>
                    <dt>第9条［約款等の改定］</dt>
                    <dd>改定・追加はホームページや施設掲示等で公表します。</dd>
                </dl>
                <dl>
                    <dt>第10条［プライバシーポリシー］</dt>
                    <dd>
                        1.当社は個人情報を適切に管理し、関連法令を遵守します。<br>
                        2.防犯カメラを設置し、事件・事故がない場合は一定期間保管後に消去します。<br>
                        3.裁判所・警察等の公的機関からの要請に基づき提供する場合があります。
                    </dd>
                </dl>
                <dl>
                    <dt>施行日</dt>
                    <dd>本約款は2025年10月10日より施行します。</dd>
                </dl>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/inc-aside'); ?>
</main>
<?php get_footer(); ?>