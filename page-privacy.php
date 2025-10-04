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
                    <span itemprop="name">プライバシーポリシー</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width-lg">
            <div class="com-title center com-title--else com-title-hidden">
                <p>プライバシーポリシー</p>
                <h1 class="">
                    <span class="title">P</span><span class="title">R</span><span class="title">I</span><span class="title">V</span><span class="title">A</span><span class="title">C</span><span class="title">Y</span>　<span class="title">P</span><span class="title">O</span><span class="title">L</span><span class="title">I</span><span class="title">C</span><span class="title">Y</span>
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
                    <dd>
                        GURUSPA（以下「当社」といいます）は、お客様の個人情報を適切に保護・管理することが重要な社会的責任であると認識し、以下の方針に基づき個人情報の保護に努めます。
                    </dd>
                </dl>
                <dl>
                    <dt>第1条（個人情報の取得）</dt>
                    <dd>当社は、適正かつ公正な手段により、業務遂行上必要な範囲で個人情報を取得します。</dd>
                </dl>
                <dl>
                    <dt>第2条（個人情報の利用目的）</dt>
                    <dd>
                        当社が取得した個人情報は、以下の目的の範囲内で利用します。<br><br>
                        1.お問い合わせへの対応<br>
                        2.商品・サービスの提供およびご案内<br>
                        3.契約の履行、契約前交渉等に関する対応<br>
                        4.採用活動に関するご連絡・資料送付<br>
                        5.店内業務における管理・記録<br>
                        6.その他、上記に付随する業務の遂行<br><br>
                        利用目的を変更する場合は、相当の関連性を有すると合理的に認められる範囲を超えるときは、あらかじめご本人の同意を得るものとします。
                    </dd>
                </dl>
                <dl>
                    <dt>第3条（個人情報の第三者提供）</dt>
                    <dd>当社は、法令に基づく場合を除き、あらかじめご本人の同意を得ることなく、個人情報を第三者に提供しません。</dd>
                </dl>
                <dl>
                    <dt>第4条（個人情報の安全管理措置）</dt>
                    <dd>当社は、個人情報の漏えい、滅失、き損等を防止し、適切な安全管理措置を講じるものとし、必要に応じてその内容を見直します。</dd>
                </dl>
                <dl>
                    <dt>第5条（個人情報の委託先管理）</dt>
                    <dd>
                        当社は、業務の全部または一部を外部に委託する場合、個人情報を適切に取り扱うと認められる委託先を選定し、契約により必要な事項を定め、適切な監督を行います。
                    </dd>
                </dl>
                <dl>
                    <dt>第6条（個人情報の開示・訂正・利用停止等）</dt>
                    <dd>
                        ご本人から、当社が保有するご自身の個人情報の開示、訂正、追加、削除、利用停止、第三者提供の停止等を求められた場合には、法令に基づき、適切かつ速やかに対応いたします。
                    </dd>
                </dl>
                <dl>
                    <dt>第7条（法令・規範の遵守および見直し）</dt>
                    <dd>当社は、個人情報の保護に関する法令及びその他の規範を遵守し、本方針の内容を継続的に見直し、必要に応じてその改善を行います。</dd>
                </dl>
                <dl>
                    <dt>第8条（お問い合わせ窓口）</dt>
                    <dd>
                        個人情報の取扱いに関するご相談・苦情・開示請求等のお問い合わせは、以下の窓口までご連絡ください。<br><br>
                        【個人情報に関するお問い合わせ窓口】<br>
                        株式会社GROWTH<br>
                        〒472-0024　愛知県知立市宝町塩掻58<br>
                        TEL：<a href="tel:0566-82-2734">0566-82-2734</a><br>
                        URL：<a href="https://royal-gr.jp/contact/" target="_blank" rel="noopener noreferrer">https://royal-gr.jp/contact/</a><br>

                    </dd>
                </dl>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/inc-aside'); ?>
</main>
<?php get_footer(); ?>