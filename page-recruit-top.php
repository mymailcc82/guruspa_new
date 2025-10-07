<?php
/*
template name: 採用ページトップ
*/
?>
<?php get_header(); ?>

<main class="recruit-top">
    <div class="top-visual">
        <div class="top-visual-img fadeup-timelug-2">
            <?php $img_pc = get_field('img', 250); ?>
            <?php $img_sp = get_field('img_sp', 250); ?>
            <?php if ($img_pc): ?>
                <picture>
                    <source media="(max-width:1024px)" srcset="<?php echo $img_sp; ?>">
                    <img src="<?php echo $img_pc; ?>" alt="">
                </picture>
            <?php endif; ?>
            <div class="top-visual-img-list">
                <ul class="top-visual-img-list-ul">
                    <li class="fadeup-item">
                        <picture>
                            <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-09_v2.webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-01_v3.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item">
                        <picture>
                            <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-03_v2.webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-02_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item">
                        <picture>
                            <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-04_v2.webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-03_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item">
                        <picture>
                            <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-03-sp_v2.webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-04_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item">
                        <picture>
                            <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-04-sp_v2.webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-05_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item">
                        <picture>
                            <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-05-sp_v2.webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-06_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item">
                        <picture>
                            <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-01_v3.webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-07_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item">
                        <picture>
                            <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-07-sp_v2.webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-08_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item">
                        <picture>
                            <source media="(max-width:600px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-08-sp_v2.webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-09_v2.webp" alt="">
                        </picture>
                    </li>

                    <li class="fadeup-item hidden-md">
                        <picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-09_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item hidden-md">
                        <picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-03_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item hidden-md">
                        <picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-04_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item hidden-md">
                        <picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-03-sp_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item hidden-md">
                        <picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-04-sp_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item hidden-md">
                        <picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-05-sp_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item hidden-md">
                        <picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-01-sp_v3.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item hidden-md">
                        <picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-07-sp_v2.webp" alt="">
                        </picture>
                    </li>
                    <li class="fadeup-item hidden-md">
                        <picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-list-08-sp_v2.webp" alt="">
                        </picture>
                    </li>
                </ul>
            </div>
            <?php
            /*
            <div class="top-visual-img-moji">
                <?php if ($img_pc): ?>
                    <picture>
                        <source media="(max-width:1024px)" srcset="<?php echo $img_moji_sp; ?>">
                        <img src="<?php echo $img_moji_pc; ?>" alt="">
                    </picture>
                <?php endif; ?>
            </div>
            <div class="top-visual-img-txt-01">
                <div class="top-visual-img-txt-01-container">
                    <?php echo $text_01; ?>
                </div>
            </div>
            <div class="top-visual-img-txt-02">
                <div class="top-visual-img-txt-02-container">
                    <?php echo $text_02; ?>
                </div>
            </div>
            */ ?>
        </div>
        <?php
        /*
        <div class="top-visual-container">
            <ul class="top-visual-list">
                <li>SAUNA EAGLE&GURUSPA recruit site</li>
                <li>SAUNA EAGLE&GURUSPA recruit site</li>
            </ul>
        </div>
        */ ?>

        <p class="Home-Firstview__scroll">
            <span class="text">SCROLL</span>
        </p>

        <div class="top-visual-bnr">
            <ul>
                <li><a href="https://sauna-eagle.jp/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-bnr-01.svg" alt=""></a></li>
                <li><a href="<?php echo home_url(); ?>/topics/388/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-bnr-02.svg" alt=""></a></li>
            </ul>
        </div>
    </div>
    <?php
    /*
    <div class="hidden-sm top-visual-sp">
        <ul>
            <li><a href="https://sauna-eagle.jp/" target="_blank" rel="noopener noreferrer">サウナイーグル<Br>公式サイトはこちら！</a></li>
            <li><a href="" class="no-link">グルスパ<br>公式サイト準備中</a></li>
        </ul>
    </div>
    */ ?>
    <div class="hidden-md top-visual-txt-sp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/top-visual-txt-sp_v5.webp" alt="温泉が好き!から始まるおもてなし">
        <h3>オープニングスタッフ近日募集開始！</h3>
        <p>
            ※当ページは現在採用サイトとして運営しております。<br>
            グルスパ公式ホームページは2025年10月頃にオープン予定です。
        </p>

    </div>

    <section class="sec01">
        <div class="content-width fadeup">
            <div class="sec01-desc">
                <p>
                    松阪温泉GURUSPA、<br class="hidden-sm">2025年10月オープン！<br>
                    新しいピカピカの施設で、<br class="hidden-mobile">接客スタッフとして働きませんか？<br>
                    お風呂や温泉、サウナが好きな方大歓迎！<br class="hidden-mobile">おもてなしを通じて、その”好き”な気持ちをお客様にお届けしましょう！<br>
                    正社員も募集中です。是非、お気軽にエントリーくださいませ！
                    <?php
                    /*
                    <span class="brown">従業員もお客様もサウナ好き！<br class="hidden-sm"></span>そんな施設で働きませんか。<br>
                    サウナイーグルはサウナが好きな人達が集まって<br class="hidden-mobile">みんなで作り上げるサウナです。<br class="hidden-mobile">
                    サウナが好きな想いや、おもてなしの心があればどなたでも大歓迎！<br>
                    2025年秋には新系列店となる<span class="blue">「GURUSPA」が</span><br class="hidden-mobile"><span class="blue">三重県松阪市にオープン予定！</span><br>
                    こちらで働きたい社員・アルバイトも募集しています！

                    松阪温泉GURUSPA、<br class="hidden-sm">2025年10月オープン！<br>
                    新しいピカピカの施設で、<br class="hidden-mobile">オープニングスタッフとして働きませんか？<br>
                    お風呂や温泉、サウナが好きな方大歓迎！<br class="hidden-mobile">おもてなしを通じて、その”好き”な気持ちをお客様にお届けしましょう！<br>
                    正社員も募集中です。是非、お気軽にエントリーくださいませ！
                    */
                    ?>

                </p>
            </div>
            <div class="sec01-wrap fadeup-timelug">
                <div class="sec01-wrap-col fadeup-item">
                    <div class="sec01-wrap-col-container">
                        <div class="sec01-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/sec01-img-01_v2.webp" alt="">
                        </div>
                        <h2>温浴施設で<br>働きたい！</h2>
                        <p>
                            お風呂、温泉、サウナが<br>
                            お好きな方大歓迎！
                        </p>
                    </div>
                </div>
                <div class="sec01-wrap-col fadeup-item">
                    <div class="sec01-wrap-col-container">
                        <div class="sec01-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/sec01-img-02_v2.webp" alt="">
                        </div>
                        <h2>新しい施設で<br>働きたい</h2>
                        <p>
                            新しい施設だからみんな初心者！<br>
                            いっしょに成長していける！
                        </p>
                    </div>
                </div>
                <div class="sec01-wrap-col fadeup-item">
                    <div class="sec01-wrap-col-container">
                        <div class="sec01-wrap-col-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_top/sec01-img-03_v2.webp" alt="">
                        </div>
                        <h2>接客業に<br>興味アリ！</h2>
                        <p>
                            主なお仕事は”おもてなし”。<br>
                            接客が得意な方、スキルを<br>
                            身に付けたい方は是非エントリーを！
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec03">
        <div class="sec03_bg">
            <div class="sec03_txt">
                <h3>GURUSPAの最新情報は<br>こちらをチェック！</h3>
            </div>

            <div class="content-width fadeup">
                <div class="recruit_detall_guide">
                    <div class="recruit_detall_guide_list">
                        <div class="recruit_detall_guide_title">
                            <h2>NEWS</h2>
                            <span>お知らせ</span>
                        </div>
                        <div class="com-btn-border-black hidden-mobile com-btn-border--left">
                            <a href="<?php echo home_url(); ?>/archive/">お知らせ一覧<i></i></a>
                        </div>

                    </div>

                    <div class="recruit_detall_guide_list_wrap">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            //現在のtermのIDを取得
                            'paged' => get_query_var('paged'),
                            //$current_termを取得
                        );
                        ?>
                        <?php $the_query = new WP_Query($args); ?>
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <?php $title = get_the_title(); ?>
                                <?php //60文字制限
                                $title = mb_strimwidth($title, 0, 100, "…", "UTF-8");
                                $title_flg = true;
                                ?>
                                <div class="recruit_list">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="recruit_category">
                                            <?php $cats = get_the_category(); ?>
                                            <?php
                                            //$cats[0]の親がある場合
                                            if (isset($cats[0]->parent) && $cats[0]->parent != 0) {
                                                $parent_cat = get_category($cats[0]->parent);
                                                echo '<span class="recruit_category_wrap">' . esc_html($parent_cat->name) . '</span>';
                                            } else {
                                                echo '<span class="recruit_category_wrap">' . esc_html($cats[0]->name) . '</span>';
                                            }
                                            ?>
                                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                            <ul>
                                                <?php foreach ($cats as $cat) : ?>
                                                    <?php
                                                    //親カテゴリーがある場合はその名前を表示
                                                    if ($cat->parent != 0) {
                                                        echo '<li>' . esc_html($cat->name) . '</li>';
                                                    }
                                                    ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                </div>



                            <?php endwhile; ?>
                        <?php else : ?>
                            <p class="not_found">
                                投稿がまだありません。
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="com-btn-mobile hidden-sm">
                    <a href="<?php echo home_url(); ?>/archive/">VIEW MORE<i></i></a>
                </div>
            </div>
        </div>
    </section>
    <section class="sec04" id="recurit">
        <div class="sec04_bg">
            <div class="content-width_recruit fadeup">
                <div class="recruit_detall_guide">
                    <div class="recruit_detall_guide_list">
                        <div class="recruit_detall_guide_title">
                            <h2>RECRUIT</h2>
                            <span>求人情報の案内</span>
                        </div>
                        <div class="recruit_detall_guide_list_select">
                            <?php
                            $category_item = "";
                            if (!empty($_GET['category'])) {
                                $category_item = $_GET['category'];
                            };


                            ?>
                            <ul>
                                <?php if ($category_item == "guruspa"): ?>
                                    <li><a href="<?php echo home_url(); ?>/recruit_top/#recurit/" class="reload-link">すべて</a></li>
                                    <li><a href="<?php echo home_url(); ?>/recruit_top/?category=guruspa#recurit" class="active_chenge">グルスパ求人</a></li>
                                    <li><a href="<?php echo home_url(); ?>/recruit_top/?category=eagle#recurit" class="reload-link">サウナイーグル求人</a></li>
                                <?php elseif ($category_item == "eagle"): ?>
                                    <li><a href="<?php echo home_url(); ?>/recruit_top/#recurit/" class="reload-link">すべて</a></li>
                                    <li><a href="<?php echo home_url(); ?>/recruit_top/?category=guruspa#recurit" class="reload-link">グルスパ求人</a></li>
                                    <li><a href="<?php echo home_url(); ?>/recruit_top/?category=eagle#recurit" class="active_chenge">サウナイーグル求人</a></li>
                                <?php else: ?>
                                    <li><a href="<?php echo home_url(); ?>/recruit_top/#recurit/" class="active_chenge">すべて</a></li>
                                    <li><a href="<?php echo home_url(); ?>/recruit_top/?category=guruspa#recurit" class="reload-link">グルスパ求人</a></li>
                                    <li><a href="<?php echo home_url(); ?>/recruit_top/?category=eagle#recurit" class="reload-link">サウナイーグル求人</a></li>
                                <?php endif; ?>

                            </ul>
                        </div>
                        <div class="com-btn-border-black hidden-mobile com-btn-border--left">
                            <a class="" href="<?php echo home_url(); ?>/recruit/">さらに絞り込んで検索<i></i></a>
                        </div>
                    </div>

                    <div class="recruit_detall_guide_list_wrap">
                        <?php
                        // 選択されたカテゴリーに応じてタクソノミーを追加

                        $args = [
                            'post_type'      => 'recruit',
                            'posts_per_page' => 5,
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        ];
                        // 選択されたカテゴリーに応じてタクソノミーを追加
                        $tax_query = array('relation' => 'AND'); // 絞り込み用の配列
                        if ($category_item) {
                            $tax_query[] = array(
                                'taxonomy' => 'work_location', // カテゴリー（カスタムタクソノミー）
                                'field'    => 'slug',
                                'terms'    => $category_item, // 選択したカテゴリーを取得
                            );
                        }

                        // tax_query がある場合のみ追加
                        if (!empty($tax_query)) {
                            $args['tax_query'] = $tax_query;
                        }

                        // tax_query がある場合のみ追加
                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                        ?>
                                <div class="recruit_list">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="recruit_category">
                                            <?php
                                            $tax_query = array('relation' => 'OR');
                                            $taxonomies = ['work_location', 'employment_status', 'start_work', 'duties', 'others'];
                                            foreach ($taxonomies as $taxonomy) {
                                                $terms = get_the_terms(get_the_ID(), $taxonomy);
                                                if ($terms && !is_wp_error($terms)) :
                                                    foreach ($terms as $term) :
                                            ?>
                                                        <span class="recruit_category_wrap"><?php echo esc_html($term->name); ?></span>
                                            <?php
                                                    endforeach;
                                                endif;
                                            }
                                            ?>
                                        </div>
                                        <?php $title = get_the_title(); ?>
                                        <?php
                                        //日本語で38文字にして、それ以降は「...」を表示
                                        //$title = mb_strimwidth($title, 0, 76, '…', 'UTF-8');
                                        ?>
                                        <h3><?php echo $title; ?></h3>
                                        <?php /*
                                        <time><?php echo get_the_date('Y.m.d'); ?></time>
										*/ ?>
                                    </a>
                                </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo '<p>現在、求人情報はありません。</p>';
                        endif;
                        ?>
                        <div class="com-btn com-btn--small--ver2 hidden-sm">
                            <a class="" href="<?php echo home_url(); ?>/recruit/">さらに絞り込んで検索</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var reloadLinks = document.querySelectorAll(".reload-link");

        reloadLinks.forEach(function(link) {
            link.addEventListener("click", function(event) {
                if (window.location.pathname === "/") { // すでにトップページの場合
                    event.preventDefault(); // 通常の遷移を防ぐ
                    let newUrl = this.href;

                    // URLを変更（履歴を変更せずリロード対応）
                    history.replaceState(null, null, newUrl);

                    setTimeout(() => {
                        window.location.reload(); // ページをリロード
                    }, 100); // 少し遅らせる
                }
            });
        });

        // ページ読み込み時に `?category=〇〇` がある場合、URL をそのまま適用
        if (window.location.search.includes("category=")) {
            history.replaceState(null, null, window.location.pathname + window.location.search + window.location.hash);
        }
    });
</script>

<?php get_footer(); ?>