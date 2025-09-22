<?php
/*
Template Name: enjoy-spa
*/
?>
<?php get_header(); ?>
<main class="page-main enjoy spa">
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
                            <span class="title">S</span><span class="title">P</span><span class="title">A</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                        </h2>
                    </div>

                    <h2>心と体を満たす、<br>ウェルビーイング空間。</h2>
                    <p>
                        日々の忙しさを忘れて、自分をいたわる特別な時間を過ごしませんか？<br>
                        天然温泉のやさしい湯に浸かれば、疲れもストレスも静かに溶けていく。<br>
                        広々とした内風呂と自然を感じる露天風呂で、四季の移ろいとともに、心と身体が深くほどけていく感覚を味わえます。
                    </p>
                </div>
                <div class="enjoy-wrap-img">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec01-img-01.jpg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec01-img-02.jpg" alt=""></li>
                    </ul>
                </div>
            </div>

            <div class="page-btn">
                <ul>
                    <li>
                        <a href="#sec02">特徴・魅力<i></i></a>
                    </li>
                    <li>
                        <a href="#sec03">湯めぐり案内(内風呂)<i></i></a>
                    </li>
                    <li>
                        <a href="#sec04">湯めぐり案内(露天風呂)<i></i></a>
                    </li>
                    <li>
                        <a href="#sec05">脱衣所・浴室ご利用のご案内<i></i></a>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-img-01.jpg" alt="">
                    </div>
                    <div class="sec03-wrap-col-right">
                        <h3>天然温泉100％の恵み</h3>
                        <p>
                            地下1,300mから湧き出た単純温泉を贅沢に使用。<br>
                            保湿成分「メタけい酸」を豊富に含み、美肌の湯としても親しまれています。<br>
                            湯上がり後もぽかぽかと温かさが続き、敏感肌の方やお子様も安心です。
                        </p>
                    </div>
                </div>
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-img-02.jpg" alt="">
                    </div>
                    <div class="sec03-wrap-col-right">
                        <h3>気分に合わせて選べる多彩な湯船</h3>
                        <p>
                            ぬる湯・炭酸泉・極冷水風呂・ジェットバスなど、体調や気分に合わせて選べる浴槽を多数ご用意。<br>
                            サウナ後のクールダウンにも最適な水風呂も完備し、“ととのい”をサポートします。
                        </p>
                    </div>
                </div>
                <div class="sec03-wrap-col">
                    <div class="sec03-wrap-col-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec02-img-03.jpg" alt="">
                    </div>
                    <div class="sec03-wrap-col-right">
                        <h3>露天風呂で自然と調和する癒し</h3>
                        <p>
                            開放感あふれる露天風呂では、空を仰ぎながら風を感じる特別な時間を。<br>
                            季節ごとに変わる“変わり湯”や、一人でゆったり楽しめる壺風呂など、自然と一体化する感覚をお楽しみください。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="sec04">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon">
                <h2><i></i>湯めぐり案内</h2>
            </div>
        </div>
        <div class="sec04-container">
            <div class="sec04-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-bg-01.jpg" alt="">
                <div class="sec04-bg-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-title-01.svg" alt="">
                </div>

            </div>
            <div class="sec04-wrap">
                <h3>炭酸風呂</h3>
                <p>
                    炭酸泉とは、お湯に炭酸ガスが溶け込んだ温泉のことです。<br>
                    入浴すると血管を拡張させて血流を良くする作用があることから、世界各国では古来より「心臓の湯」と呼ばれ、伝統医療としても利用されてきました。<br><br>
                    炭酸ガスは空気中に抜けやすく高温のお湯に溶けにくいため、火山性温泉が多く湯温の高い日本では、非常に希少価値の高い泉質とされています。入浴後しばらくすると、皮膚表面に小さな気泡が付着します。<br>
                    これは炭酸ガスによるもので、天然のマッサージを受けているように全身の血の巡りが良くなり、リンパの流れも促進されてむくみ解消につながります。<br><br>
                    血液循環とともに酸素や栄養も体内に運ばれるため、艶やかな肌が甦り、老廃物や毒素の排出も期待されます。<br>
                    弾ける気泡の刺激を、心ゆくまでお楽しみください。
                </p>
            </div>
            <div class="content-width-sm">
                <div class="sec03-wrap">
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-img-01.jpg" alt="">
                        </div>
                        <p>
                            サウナで毛穴の汚れを落とし、炭酸を吸収しやすい状態にしてから15分以上じっくり浸かるのがおすすめです。
                        </p>
                    </div>
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-img-02.jpg" alt="">
                        </div>
                        <p>
                            炭酸が気化しないように波を立てず、ゆっくりと入りましょう。
                        </p>
                    </div>
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-img-03.jpg" alt="">
                        </div>
                        <p>
                            体についた気泡はわらずに上がるのが効果的です。
                        </p>
                    </div>
                    <div class="sec03-wrap-col">
                        <div class="sec03-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-img-04.jpg" alt="">
                        </div>
                        <p>
                            毎日繰り返すことで、より効果を実感できます。
                        </p>
                    </div>
                </div>
                <div class="sec04-attention">
                    <div class="sec04-attention-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-icon-attention.svg" alt="">
                    </div>
                    <div class="sec04-attention-right">
                        <p>
                            炭酸浴では数分で体を浸けた部分が赤くなることがありますが、それは血流が良くなった証拠です。<br>
                            入浴後には自然に戻りますのでご安心ください。
                        </p>
                    </div>
                </div>
                <div class="sec04-wrap-blue">
                    <div class="sec04-wrap-blue-col">
                        <h3>効能</h3>
                        <p>
                            心臓弁膜症、心筋障害、高血圧症、末梢循環器障害、神経症、リウマチ性疾患、創傷、卵巣機能障害、更年期障害、むくみ解消、便秘解消、冷え性、肩こり、腰痛、疲労回復、体内の毒素排出
                        </p>
                    </div>
                    <div class="sec04-wrap-blue-col">
                        <h3>禁忌</h3>
                        <p>
                            ・高炭酸血症（呼吸不全など換気障害）<br>
                            ・重度の心疾患<br>
                            ・神経衰弱症
                        </p>
                    </div>
                </div>
                <div class="sec04-center">
                    <div class="sec04-center-wrap">
                        <div class="sec04-center-wrap-col">
                            <div class="sec04-center-wrap-col-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-img-05.jpg" alt="">
                                <div class="sec04-center-wrap-col-img-span">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-title-01.svg" alt="">
                                </div>
                            </div>
                            <h4>極冷水風呂(7℃)</h4>
                            <p>サウナ後の究極のクールダウン。刺激的な冷たさが交感神経を一気に活性化し、爽快感抜群の「ととのい」体験を楽しめます。</p>
                            <dl>
                                <dt>効能</dt>
                                <dd>自律神経調整、代謝アップ、瞬時のリフレッシュ</dd>
                            </dl>
                        </div>

                        <div class="sec04-center-wrap-col">
                            <div class="sec04-center-wrap-col-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-img-06.jpg" alt="">
                                <div class="sec04-center-wrap-col-img-span">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-title-01.svg" alt="">
                                </div>

                            </div>
                            <h4>水風呂(17℃)</h4>
                            <p>スタンダードな水風呂は、程よい冷たさで誰もが入りやすい温度。<br>サウナ後の体を優しく引き締め、深いリラックスへ導きます。</p>
                            <dl>
                                <dt>効能</dt>
                                <dd>血流促進、免疫力向上、疲労回復</dd>
                            </dl>
                        </div>

                        <div class="sec04-center-wrap-col">
                            <div class="sec04-center-wrap-col-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-img-07.jpg" alt="">
                                <div class="sec04-center-wrap-col-img-span">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-title-01.svg" alt="">
                                </div>

                            </div>
                            <h4>電気風呂</h4>
                            <p>電極板からの電流により筋肉を刺激し血行を促進します。<br>これにより、肩こり、腰痛、関節痛、筋肉痛の緩和や 冷え性、疲労回復効果が期待できます。</p>
                            <dl>
                                <dt>泉質</dt>
                                <dd>単純温泉</dd>
                                <dt>効能</dt>
                                <dd>血行促進、コリ改善、疲労回復</dd>
                            </dl>
                        </div>

                        <div class="sec04-center-wrap-col">
                            <div class="sec04-center-wrap-col-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-img-08.jpg" alt="">
                                <div class="sec04-center-wrap-col-img-span">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-title-01.svg" alt="">
                                </div>

                            </div>
                            <h4>ジェットバス</h4>
                            <p>
                                肩・腰・脚を水流と気泡によって刺激し、温熱効果と相まって血行促進や筋肉痛の緩和が期待できます。
                            </p>
                            <dl>
                                <dt>効能</dt>
                                <dd>血行促進、筋肉疲労回復、ストレス軽減</dd>
                            </dl>
                        </div>
                        <div class="sec04-center-wrap-col">
                            <div class="sec04-center-wrap-col-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-img-09.jpg" alt="">
                                <div class="sec04-center-wrap-col-img-span">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-title-01.svg" alt="">
                                </div>

                            </div>
                            <h4>スーパージェットバス</h4>
                            <p>強力な水圧が脂肪部分まで刺激して、温熱効果と相まって血行促進や筋肉通の緩和、ダイエット効果が期待できます。</p>
                            <dl>
                                <dt>効能</dt>
                                <dd>血流促進、疲労回復、爽快リフレッシュ</dd>
                            </dl>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="sec04-container">
            <div class="sec04-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-bg-02.jpg" alt="">
                <div class="sec04-bg-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-title-02.svg" alt="">
                </div>

            </div>
            <div class="sec04-wrap">
                <h3>天然温泉</h3>
                <p>
                    当店の天然温泉は、保湿成分の1つであるメタけい酸が多く含まれているため、 肌の新陳代謝を促し、美肌効果が期待できる美肌の湯と呼ばれています。<br>
                    また、湯冷めがしにくく、肌への刺激が少ないことも特徴であり、敏感肌の人や高齢者、子どもまで安心してご入浴いただけます。
                </p>
            </div>
            <div class="content-width-sm">

                <div class="sec04-wrap-blue">
                    <div class="sec04-wrap-blue-col">
                        <h3>効能</h3>
                        <p>
                            神経痛、筋肉痛、関節痛、五十肩、運動麻痺、関節のこわばり うちみ、くじき、慢性消化器通、痔、冷え性、病後回復期、疲労回復 健康増進
                        </p>
                    </div>
                    <div class="sec04-wrap-blue-col">
                        <h3>禁忌</h3>
                        <p>
                            ・病気の活動期（特に熱のあるとき）<br>
                            ・活動性の結核<br>
                            ・進行した悪性腫瘍、または高度の貧血など身体衰弱の著しい場合<br>
                            ・少し動くと息苦しくなるような重い心臓・肺の病気<br>
                            ・むくみのある重い腎臓の病気<br>
                            ・消化管出血、目に見える出血があるとき<br>
                            ・慢性の病気の急性増悪期
                        </p>
                    </div>
                </div>

                <div class="sec04-wrap-blue-2-1">
                    <div class="sec04-wrap-blue-2-1-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-img-10.jpg" alt="">
                        <div class="sec04-wrap-blue-2-1-left-span">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spa/sec04-title-02.svg" alt="">
                        </div>
                    </div>
                    <div class="sec04-wrap-blue-2-1-right">
                        <h3>美泡壺風呂</h3>
                        <p>
                            一人用の壺湯に、細やかな気泡をプラス。やわらかな泡に包まれる感覚は格別で、まるで“美肌エステ”のような体験を味わえます。
                        </p>
                        <div class="sec04-wrap-blue-2-1-right-dl">
                            <dl>
                                <dt>泉質</dt>
                                <dd>単純温泉＋美泡</dd>
                            </dl>
                            <dl>
                                <dt>効能</dt>
                                <dd>美肌効果、リラックス、血行促進</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec05">
        <div class="content-width-sm">
            <div class="page-title-center--has-icon">
                <h2><i></i>脱衣所・浴室ご利用時のご案内</h2>
            </div>
            <p class="sec05-desc">
                当館ではお客様に気持ちよくご利用いただくため、<br>
                下記の事項をお守りくださいますようお願い申し上げます。
            </p>
            <div class="sec05-wrap">
                <ul>
                    <li>泥酔の方のご利用はお控えください。</li>
                    <li>生理中の方は湯船へのご入浴をお控えください。</li>
                    <li>脱衣所・浴室内でのスマートフォン・タブレット等の撮影機器のご利用は固くお断りいたします。</li>
                    <li>浴室内は滑りやすくなっておりますので、お足元には十分ご注意ください。</li>
                    <li>湯船に入る前には身体を洗い、必ず掛け湯・水風呂での掛け水をお願いいたします。</li>
                    <li>湯船の中でのタオルのご使用はご遠慮ください。</li>
                    <li>髪の長い方は髪が湯船につからないよう、まとめてご入浴ください。</li>
                    <li>湯船の中では泳いだり潜ったりしないでください。</li>
                    <li>染髪はご遠慮ください。</li>
                    <li>風呂桶や手荷物などによる場所取りはご遠慮ください。</li>
                    <li>浴室内でのご飲食・喫煙・読書はご遠慮ください。</li>
                    <li>お子様のみでのご利用はご遠慮ください。</li>
                    <li>リストバンドは常に身につけ、紛失にはご注意ください。紛失された場合は実費2,000円をご請求いたします。</li>
                </ul>
            </div>
            <p class="sec05-desc">
                また、他のお客様のご迷惑となる行為や不潔な行為は固くお断りいたします。<br>
                当店が悪質と判断した場合はその場で警察に通報させていただきます。
            </p>
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