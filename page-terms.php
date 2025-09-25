<?php get_header(); ?>
<main class="page-main else">
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
                    <span itemprop="name">利用規約</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width-lg">
            <div class="com-title center com-title-hidden">
                <p>利用規約</p>
                <h1 class="">
                    <span class="title">T</span><span class="title">E</span><span class="title">R</span><span class="title">M</span><span class="title">S</span>　<span class="title">O</span><span class="title">F</span>　<span class="title">U</span><span class="title">S</span><span class="title">E</span>
                    <span class="title title-item-sprout">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                    </span>
                    <span class="title title-item-sun">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                    </span>
                </h1>
            </div>
            <div class="else-container">
                <dl>
                    <dt>第1条(本約款の適用)</dt>
                    <dd>当施設を利用される方は次条以下の約款に従ってご利用いただきます。</dd>
                </dl>
                <dl>
                    <dt>第2条(利用の拒絶)</dt>
                    <dd>
                        当施設では次に該当する場合及び該当する方は利用をお断りすることがあります。<br>
                        (1)利用者が公の秩序もしくは善良な風俗に反する行為をなすおそれがあると認められるとき。<br>
                        (2) 暴力団及び暴力団員並びに公共の秩序に反するおそれのある者。<br>
                        (3)前 (2)号の事情を知りながら暴力団員を同伴し、又は暴力団員を紹介して施設を利用させた者。<br>
                        (4) 刺青・タトゥー(ペイント・シール等含)のある方、泥酔状態の方、 皮膚疾患の方、 伝染性疾患の方。<br>
                        (5)天災地変・施設の故障・補修等、その他やむを得ない理由があるとき。<br>
                        (6) その他の理由により当施設を利用することが好ましくない事由があるとき。
                    </dd>
                </dl>
                <dl>
                    <dt>第3条(営業時間)</dt>
                    <dd>当施設の営業時間は各施設に掲示したところによります。ただし、状況により変更する場合があります。</dd>
                </dl>
                <dl>
                    <dt>第4条(料金の支払い)</dt>
                    <dd>利用料金の支払いは入館時及び退館時にフロントにてお願いいたします。</dd>
                </dl>
                <dl>
                    <dt>第5条(利用規則の厳守)</dt>
                    <dd>利用者は当施設内に掲示した 「利用規則」に従っていただきます。</dd>
                </dl>
                <dl>
                    <dt>第6条(利用継続の拒絶)</dt>
                    <dd>
                        当施設は次の場合、 利用の継続をお断りすることがあります。<br>
                        (1) 第2条(1)号~ (6) 号で該当することがあったとき。<br>
                        (2)前条の「利用規則」に従われないとき。<br>
                        (3)利用の継続をお断りした際、利用料金の返金はいたしません。<br>
                        <span>また、ご利用ポイントとその他の招待券などの金券の交換・返金・買取についても応じかねます。</span>
                    </dd>
                </dl>
                <dl>
                    <dt>第7条(貴重品)</dt>
                    <dd>貴重品は全てご自身の責任において管理するものとし、 紛失等があった場合当施設は一切責任を負いません。</dd>
                </dl>
                <dl>
                    <dt>第8条(携帯品、自動車)</dt>
                    <dd>携帯品 (施設内の物品含む)や駐車場の自動車等の事故については、一切その責任を負いません。</dd>
                </dl>
                <dl>
                    <dt>第9条(利用中の事故)</dt>
                    <dd>当施設を利用中に生じた事故については一切責任を負いません。</dd>
                </dl>
                <dl>
                    <dt>第10条(損害の賠償)</dt>
                    <dd>利用者の故意または過失により当施設に損害を与えた場合は、その損害額をお支払いいただきます。</dd>
                </dl>
                <dl>
                    <dd>
                        松阪温泉GURUSPA<br>
                        〒515-0813　三重県松阪市大塚町220-1(イオンタウン松阪船江別棟)<br>
                        TEL：<a href="tel:0598542626">0598-54-2626</a><br><br>

                        株式会社GROWTH<br>
                        〒472-0024　愛知県知立市宝町塩掻58<br>
                        TEL：<a href="tel:0566822734">0566-82-2734</a>
                    </dd>
                </dl>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/inc-contact'); ?>
</main>
<?php get_footer(); ?>