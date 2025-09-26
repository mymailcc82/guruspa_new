<?php
/*
Template Name: enjoy-goods
*/
?>
<?php get_header(); ?>
<main class="page-main enjoy goods">
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
                    <span itemprop="name">アメニティ・グッズ</span>
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
                        <p>アメニティ・グッズ</p>
                        <h2 class="">
                            <span class="title">A</span><span class="title">M</span><span class="title">E</span><span class="title">N</span><span class="title">I</span><span class="title">T</span><span class="title">Y</span><span class="title">&</span><br><span class="title">G</span><span class="title">O</span><span class="title">O</span><span class="title">D</span><span class="title">S</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                        </h2>
                    </div>

                    <h2>“ととのい”をお持ち帰り。<br>お土産にもおすすめ</h2>
                    <p>
                        心と身体を整えたその余韻を、おうちでも。当館では、こだわりのアメニティや人気のオリジナルグッズを各種ご用意しています。館内での快適なご利用はもちろん、大切な方への手土産やご自身へのごほうびにもぜひ。
                    </p>
                </div>
                <div class="enjoy-wrap-img">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec01-img-01.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec01-img-02.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="page-btn">
                <ul>
                    <li>
                        <a href="#sec02">備え付けアメニティ(無料)<i></i></a>
                    </li>
                    <li>
                        <a href="#sec03">レンタルアイテム(有料)<i></i></a>
                    </li>
                    <li>
                        <a href="#sec04">グルスパオリジナルグッズ<i></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="sec02" id="sec02">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon">
                <h2><i></i>備え付けアメニティ(無料)</h2>
            </div>
            <p class="sec02-desc">
                ご滞在中に自由にお使いいただけるアメニティは、使い心地や香りにこだわって厳選。<br>
                心地よいバスタイムをサポートします。
            </p>
            <div class="sec02-title">
                <dl>
                    <dt>設置場所</dt>
                    <dd>
                        脱衣所、洗面台、浴室内など
                    </dd>
                </dl>
            </div>
            <div class="sec02-wrap">
                <div class="sec02-wrap-col">
                    <div class="sec02-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec02-icon-01.svg" alt="">
                    </div>
                    <p>シャンプー・<br>コンディショナー</p>
                </div>
                <div class="sec02-wrap-col">
                    <div class="sec02-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec02-icon-02.svg" alt="">
                    </div>
                    <p>ボディソープ・<br>フェイスソープ</p>
                </div>
                <div class="sec02-wrap-col">
                    <div class="sec02-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec02-icon-03.svg" alt="">
                    </div>
                    <p>化粧水・乳液・<br>クレンジング</p>
                </div>
                <div class="sec02-wrap-col">
                    <div class="sec02-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec02-icon-04.svg" alt="">
                    </div>
                    <p>綿棒・コットン・<br>ヘアブラシ</p>
                </div>

                <div class="sec02-wrap-col">
                    <div class="sec02-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec02-icon-05.svg" alt="">
                    </div>
                    <p>ドライヤー</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec03" id="sec03">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon">
                <h2 class="letter-spacing-0-mobile"><i></i>レンタルアイテム（有料）</h2>
            </div>
            <p class="sec03-desc">
                身軽にご来館いただけるよう、各種レンタルサービスもご用意しております。<br>
                ※レンタルご希望のお客様は、入館時に受付または従業員までお申し付けください。
            </p>
            <div class="sec03-wrap">
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec03-icon-01.svg" alt="">
                    </div>
                    <p>フェイスタオル<br>(レンタル・販売)</p>
                </div>
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec03-icon-02.svg" alt="">
                    </div>
                    <p>バスタオル<br>(レンタル・販売)</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec04" id="sec04">
        <div class="page-deco-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-red-top.png" alt="">
        </div>
        <div class="page-deco-container page-deco-container--red">
            <div class="content-width-sm">
                <div class="page-title-center--has-icon">
                    <h2><i></i>グルスパオリジナルグッズ</h2>
                </div>
                <p class="sec04-desc">
                    お気に入りを“ととのい記念”に。<br>
                    オリジナルグッズをはじめ、サウナー心をくすぐるアイテムを館内で販売中です。
                </p>
                <div class="sec04-list">
                    <dl>
                        <dt>商品カテゴリ</dt>
                        <dd>
                            <ul>
                                <li><a href="" class="color-green">オリジナルグッズ</a></li>
                                <li><a href="" class="color-blue">サウナハット</a></li>
                                <li><a href="" class="color-red">アパレル</a></li>
                                <li><a href="" class="color-yellow">コスメ</a></li>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt>販売状況</dt>
                        <dd>
                            <ul>
                                <li><a href="">販売中</a></li>
                                <li><a href="">入荷待ち</a></li>
                                <li><a href="">販売終了</a></li>
                            </ul>
                        </dd>
                    </dl>
                </div>
                <div class="sec04-wrap">
                    <div class="sec04-wrap-col">
                        <div class="sec04-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec04-img-01.jpg" alt="">
                        </div>
                        <div class="sec04-wrap-col-cat">
                            <ul>
                                <li><a href="" class="color-green">オリジナルグッズ</a></li>
                                <li><a href="" class="color-white">販売中</a></li>
                            </ul>
                        </div>
                        <h3>グッズのタイトルが入ります。<br>グッズのタイトルが入ります。</h3>
                        <p class="sec04-price"><strong>2,500</strong>円<small>（税込）</small></p>
                    </div>
                    <div class="sec04-wrap-col">
                        <div class="sec04-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec04-img-01.jpg" alt="">
                        </div>
                        <div class="sec04-wrap-col-cat">
                            <ul>
                                <li><a href="" class="color-green">オリジナルグッズ</a></li>
                                <li><a href="" class="color-white">販売中</a></li>
                            </ul>
                        </div>
                        <h3>グッズのタイトルが入ります。<br>グッズのタイトルが入ります。</h3>
                        <p class="sec04-price"><strong>2,500</strong>円<small>（税込）</small></p>
                    </div>
                    <div class="sec04-wrap-col">
                        <div class="sec04-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec04-img-01.jpg" alt="">
                        </div>
                        <div class="sec04-wrap-col-cat">
                            <ul>
                                <li><a href="" class="color-green">オリジナルグッズ</a></li>
                                <li><a href="" class="color-white">販売中</a></li>
                            </ul>
                        </div>
                        <h3>グッズのタイトルが入ります。<br>グッズのタイトルが入ります。</h3>
                        <p class="sec04-price"><strong>2,500</strong>円<small>（税込）</small></p>
                    </div>
                    <div class="sec04-wrap-col">
                        <div class="sec04-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec04-img-01.jpg" alt="">
                        </div>
                        <div class="sec04-wrap-col-cat">
                            <ul>
                                <li><a href="" class="color-green">オリジナルグッズ</a></li>
                                <li><a href="" class="color-white">販売中</a></li>
                            </ul>
                        </div>
                        <h3>グッズのタイトルが入ります。<br>グッズのタイトルが入ります。</h3>
                        <p class="sec04-price"><strong>2,500</strong>円<small>（税込）</small></p>
                    </div>
                </div>

                <div class="sec04-info">
                    <div class="sec04-info-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goods/sec04-info.jpg" alt="">
                    </div>
                    <div class="sec04-info-txt">
                        <dl>
                            <dt>販売場所</dt>
                            <dd>○階 ○○○○○</dd>
                        </dl>
                        <dl>
                            <dt>販売時間</dt>
                            <dd>10:00〜22:00</dd>
                        </dl>
                        <p>
                            ※ネットショップは行っておりません。お買い求めの際は店頭にお越しください。
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="page-bg-deco-bg-bottom-red"></div>

    </section>
    <?php get_template_part('inc/inc-contact'); ?>


</main>





<?php get_footer(); ?>