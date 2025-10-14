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
                    <span itemprop="name">Cookieについて</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width-lg">
            <div class="com-title center com-title-hidden com-title--else">
                <p>Cookieについて</p>
                <h1 class="">
                    <span class="title">C</span><span class="title">O</span><span class="title">O</span><span class="title">K</span><span class="title">I</span><span class="title">E</span>　<span class="title">P</span><span class="title">O</span><span class="title">L</span><span class="title">I</span><span class="title">C</span><span class="title">Y</span>
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
                    <dd>
                        松阪温泉GURUSPA（以下「当社」）は、当社の採用サイト（以下「当サイト」）において、ユーザーの利便性向上およびサイトの改善のためにクッキー（Cookie）を使用しています。本ポリシーでは、当サイトにおけるクッキーの利用について説明します。
                    </dd>
                </dl>
                <dl>
                    <dt>第1条（クッキーとは）</dt>
                    <dd>クッキーとは、ウェブサイトを訪問した際にブラウザを通じてお客様のデバイスに保存される小さなテキストファイルです。クッキーにより、ユーザーの過去の行動や設定が記録され、次回訪問時により便利に利用できるようになります。</dd>
                </dl>
                <dl>
                    <dt>第2条（クッキーの利用目的）</dt>
                    <dd>
                        当社は以下の目的でクッキーを利用しています。<br><br>
                        1.ウェブサイトの利用状況の分析（例：アクセス数、閲覧ページ等の集計）<br>
                        2.サイトの利便性向上および機能改善<br>
                        3.サイトの表示内容や広告の最適化（※広告を使用している場合）<br><br>
                        ※当サイトではGoogle Analytics等の解析ツールを使用する場合があります。
                    </dd>
                </dl>
                <dl>
                    <dt>第3条（第三者によるクッキー）</dt>
                    <dd>
                        当サイトでは、Google LLCなど第三者によるクッキーを利用する場合があります。これらのクッキーは、第三者がユーザーの閲覧履歴を収集・分析するために使用されることがあります。<br>
                        Google Analyticsのクッキー使用に関する詳細は、Googleのポリシーをご覧ください。
                    </dd>
                </dl>
                <dl>
                    <dt>第4条（クッキーの管理方法）</dt>
                    <dd>ユーザーは、ブラウザの設定を変更することにより、クッキーの受け取りを拒否することや、既存のクッキーを削除することが可能です。ただし、クッキーを無効化すると、当サイトの一部機能が正しく動作しない場合があります。</dd>
                </dl>
                <dl>
                    <dt>第5条（ポリシーの変更）</dt>
                    <dd>本ポリシーの内容は、必要に応じて予告なく変更されることがあります。変更後は、当サイト上での公表をもって効力を生じるものとします。</dd>
                </dl>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/inc-aside'); ?>
</main>
<?php get_footer(); ?>