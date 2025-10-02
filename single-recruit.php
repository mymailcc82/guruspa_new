<?php
$clean_query = [];

foreach ($_GET as $key => $value) {
    if (is_array($value)) {
        $clean_query[$key] = implode(',', $value); // 配列 → カンマ区切り
    } else {
        $clean_query[$key] = $value;
    }
}
?>
<?php get_header(); ?>

<main class="recruit_detaill">
    <div class="recruit_detaill_visual_bg">
        <div class="page-breadcrumbs">
            <ul>
                <li><a href="<?php echo home_url(); ?>">TOP</a></li>
                <li><span>RECRUIT</span></li>
            </ul>
        </div>
        <div class="recruit_detaill_visual">
            <div class="recruit_detaill_visual_txt">
                <h1><?php the_title(); ?></h1>

                <?php
                // 表示したいタクソノミーを指定
                $display_taxonomies = ['work_location', 'employment_status', 'start_work', 'duties', 'others'];

                echo '<ul class="recruit_category_list">';

                foreach ($display_taxonomies as $taxonomy) {
                    $terms = get_the_terms(get_the_ID(), $taxonomy);
                    if ($terms && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                            echo '<li class="recruit_category_item">' . esc_html($term->name) . '</li>';
                        }
                    }
                }

                echo '</ul>';
                ?>



                <!-- PC用アイキャッチ -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="recruit_detaill_visual_img hidden-sm">
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                    </div>
                <?php endif; ?>
                <p><?php the_content(); ?></p> <!-- 本文を取得 -->
            </div>
            <!-- SP用アイキャッチ -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="recruit_detaill_visual_img hidden-mobile">
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
    <section class="sec01">
        <div class="content-width-medium">
            <div class="recruit_what">
                <div class="fukidashi recruit_type_fukidashi"><span class="fukidashi_title">どんなお仕事なの？</span></div>
                <div class="recruit_what_list">
                    <?php if (have_rows('what_job')) : ?>
                        <?php
                        $index = 1; // ループカウンター
                        while (have_rows('what_job')) : the_row();
                        ?>
                            <div class="recruit_what_list_wrap">
                                <div class="recruit_what_list_item">
                                    <img src="<?php
                                                // 1つ目（デフォルト）
                                                if ($index === 1) {
                                                    echo get_template_directory_uri() . '/assets/img/recruit/en_left.png';
                                                }
                                                // 2つ目
                                                elseif ($index === 2) {
                                                    echo get_template_directory_uri() . '/assets/img/recruit/en_middle.png';
                                                }
                                                // 3つ目
                                                elseif ($index === 3) {
                                                    echo get_template_directory_uri() . '/assets/img/recruit/en_right.png';
                                                }
                                                // 4つ目以降（デフォルト画像）
                                                else {
                                                    echo get_template_directory_uri() . '/assets/img/recruit/en_left.png';
                                                }
                                                ?>" alt="">
                                </div>
                                <div class="recruit_what_list_wrap_txt">
                                    <h4><?php the_sub_field('what_job_title'); ?></h4>
                                    <p><?php the_sub_field('what_job_text'); ?></p>
                                </div>
                            </div>
                        <?php
                            $index++; // インデックスを増やす
                        endwhile; ?>
                    <?php else : ?>
                        <p>現在、登録された業務内容はありません。</p>
                    <?php endif; ?>
                </div>


            </div>
        </div>
        <div class="content-width-medium">
            <div class="recruit_type">
                <div class="fukidashi recruit_type_fukidashi"><span class="fukidashi_title">こんなタイプの人にオススメ！</span></div>
                <?php
                $type_title = get_field('type_title');
                $type_name = get_field('type_name');
                ?>
                <?php if ($type_title): ?>
                    <h3><?php echo $type_title; ?></h3>
                <?php endif; ?>
                <?php if ($type_name): ?>
                    <h4 class="type_title"><?php echo $type_name; ?></h4>
                <?php endif; ?>

                <ul class="type_txt">
                    <?php if (have_rows('mytype')) : ?>
                        <?php while (have_rows('mytype')) : the_row(); ?>
                            <li><?php the_sub_field('type_text'); ?></li>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <li>該当するタイプはありません。</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>
    <div class="content-width-medium">
        <div class="entry_btn">
            <a href="<?php echo esc_url(add_query_arg(array_merge($clean_query, ['occupation' => get_the_title()]), home_url('/entry/'))); ?>">
                <h2>共に成長し、<br class="hidden-sm">新たな挑戦に取り組む<br>仲間を募集しています。</h2>
                <div class="com-btn-recruit">
                    <span>ENTRY</span>
                </div>
            </a>
        </div>
    </div>
    <section class="sec02">
        <div class="content-width-medium">
            <div class="recuit_guide">
                <h2 class="sub_title">募集要項</h2>
                <div class="recuit_guide_list">
                    <?php if (have_rows('recruit_guide')) : ?>
                        <?php while (have_rows('recruit_guide')) : the_row(); ?>
                            <dl>
                                <dt><?php the_sub_field('guide_title'); ?></dt>
                                <dd><?php the_sub_field('guide_text'); ?></dd>
                            </dl>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>現在、募集要項の情報はありません。</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <div class="content-width-medium">
        <div class="entry_btn">
            <a href="<?php echo esc_url(add_query_arg(array_merge($clean_query, ['occupation' => get_the_title()]), home_url('/entry/'))); ?>">
                <h2>共に成長し、<br class="hidden-sm">新たな挑戦に取り組む<br>仲間を募集しています。</h2>
                <div class="com-btn-recruit">
                    <span>ENTRY</span>
                </div>
            </a>
        </div>
    </div>
    <section class="sec03">
        <div class="recruit_gallery">
            <!-- メイン画像のスライダー -->
            <div class="swiper mySwiper4 img_main">
                <div class="swiper-wrapper">
                    <?php if (have_rows('gallery')) : ?>
                        <?php while (have_rows('gallery')) : the_row(); ?>
                            <div class="swiper-slide">
                                <img src="<?php the_sub_field('gallery_img'); ?>" alt="<?php the_title(); ?>">
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/noimage_v2.jpg" alt="no image">
                        </div>
                    <?php endif; ?>
                </div>
                <!-- ナビゲーションボタン -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <!-- サムネイル（サブ画像）スライダー -->
            <div class="swiper mySwiper3 img_sub">
                <div class="swiper-wrapper">
                    <?php if (have_rows('gallery')) : ?>
                        <?php while (have_rows('gallery')) : the_row(); ?>
                            <div class="swiper-slide">
                                <img src="<?php the_sub_field('gallery_img'); ?>" alt="<?php the_title(); ?>">
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/noimage_v2.jpg" alt="no image">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>



    <section class="sec04">
        <div class="sec04_bg">
            <div class="sec04_txt">
                <h3>この募集要項を見た人は<br>こんな募集条件も見ています</h3>
            </div>

            <div class="content-width_recruit">
                <div class="recruit_detall_guide">
                    <div class="recruit_detall_guide_list">
                        <div class="recruit_detall_guide_title">
                            <h2>RECRUIT</h2>
                            <span>求人情報の案内</span>
                        </div>

                        <?php
                        // recruit 投稿に関連するすべてのタクソノミーを取得
                        $taxonomies = get_object_taxonomies('recruit', 'names');

                        $selected_terms = [];

                        foreach ($taxonomies as $taxonomy) {
                            $terms = get_the_terms(get_the_ID(), $taxonomy);
                            if ($terms && !is_wp_error($terms)) {
                                $selected_terms[$taxonomy] = $terms;
                            }
                        }
                        ?>
                        <!-- 🔹 フィルターボタン -->

                        <div class="recruit_detall_guide_list_select">
                            <ul>
                                <li><a class="filter-button active_chenge" data-filter="">すべて</a></li>
                                <?php foreach ($selected_terms as $taxonomy => $terms) : ?>
                                    <?php
                                    $first_term = $terms[0];
                                    ?>
                                    <li><a class="filter-button" data-filter="<?php echo esc_attr($taxonomy); ?>" data-slug="<?php echo esc_attr($first_term->slug); ?>">
                                            <?php
                                            switch ($taxonomy) {
                                                case 'work_location':
                                                    echo '同勤務地';
                                                    break;
                                                case 'employment_status':
                                                    echo '同雇用形態';
                                                    break;
                                                case 'start_work':
                                                    echo '同勤務開始';
                                                    break;
                                                case 'duties':
                                                    echo '同業務内容';
                                                    break;
                                                case 'others':
                                                    echo 'その他同条件';
                                                    break;
                                            }
                                            ?>
                                        </a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- 🔹 Ajax で更新する一覧エリア -->
                    <div class="recruit_detall_guide_list_wrap">
                        <div id="recruit-list">
                            <?php
                            $tax_query = ['relation' => 'OR'];

                            foreach ($selected_terms as $taxonomy => $terms) {
                                $slugs = wp_list_pluck($terms, 'slug');
                                $tax_query[] = [
                                    'taxonomy' => $taxonomy,
                                    'field'    => 'slug',
                                    'terms'    => $slugs,
                                ];
                            }

                            $args = [
                                'post_type'      => 'recruit',
                                'posts_per_page' => 6,
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                                'post__not_in'   => [get_the_ID()],
                                'tax_query'      => $tax_query,
                            ];



                            $query = new WP_Query($args);


                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                            ?>
                                    <div class="recruit_list">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="recruit_category">
                                                <?php
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
                                            <h3><?php the_title(); ?></h3>
                                            <?php
                                            /*
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
                        </div>
                        <a class="back_btn" href="<?php echo esc_url(home_url('/recruit/')); ?>">募集要項一覧に戻る</a>
                    </div>


                </div>
            </div>
        </div>
    </section>
</main>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper3 = new Swiper(".mySwiper3", {
            spaceBetween: 10, // サムネイル間のスペース
            slidesPerView: 5, // サムネイルの表示数
            freeMode: true,
            watchSlidesProgress: true,
            watchSlidesVisibility: true, // 可視性の監視を追加
        });

        var swiper4 = new Swiper(".mySwiper4", {
            slidesPerView: 1.5, // メインスライダーの表示
            spaceBetween: 30, // スライド間のスペース
            centeredSlides: true, // 中央のスライドを強調

            loop: false, // ループ有効化
            speed: 1500, // スライド速度
            autoplay: {
                delay: 5000, // 自動再生
                disableOnInteraction: false, // ユーザー操作後も自動再生を継続
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper3, // サムネイルスライダーと連携
            },
            breakpoints: {
                1024: {
                    slidesPerView: 2.5, // 1024px以下で1枚表示
                },
                600: {
                    slidesPerView: 2, // 600px以下でも1枚表示
                }
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const filterButtons = document.querySelectorAll(".filter-button");

        // 初期状態として「すべて」に active_chenge を適用
        const defaultButton = document.querySelector(".filter-button[data-filter='']");
        if (defaultButton) {
            defaultButton.classList.add("active_chenge");
        }

        filterButtons.forEach(button => {
            button.addEventListener("click", function(event) {
                event.preventDefault(); // ページ遷移を防ぐ

                // すべてのボタンから active_chenge クラスを削除
                filterButtons.forEach(btn => btn.classList.remove("active_chenge"));

                // クリックされたボタンに active_chenge クラスを追加
                this.classList.add("active_chenge");

                // Ajax でリストを更新
                const filterType = this.getAttribute("data-filter");
                const postId = <?php echo get_the_ID(); ?>;
                fetchRecruitPosts(filterType, postId);
            });
        });

        function fetchRecruitPosts(filterType, postId) {
            let formData = new FormData();
            formData.append("action", "filter_recruit_posts");
            formData.append("filter_type", filterType);
            formData.append("post_id", postId);
            console.log(formData);

            fetch("<?php echo admin_url('admin-ajax.php'); ?>", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    document.getElementById("recruit-list").innerHTML = data;
                })
                .catch(error => console.error("Error:", error));
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const filterButtons = document.querySelectorAll(".filter-button");

        filterButtons.forEach(button => {
            button.addEventListener("click", function(event) {
                event.preventDefault();
                filterButtons.forEach(btn => btn.classList.remove("active_chenge"));
                this.classList.add("active_chenge");

                const filterType = this.getAttribute("data-filter");
                const slug = this.getAttribute("data-slug");
                const postId = <?php echo get_the_ID(); ?>;

                fetchRecruitPosts(filterType, slug, postId);
            });
        });

        function fetchRecruitPosts(filterType, slug, postId) {
            let formData = new FormData();
            formData.append("action", "filter_recruit_posts");
            formData.append("filter_type", filterType);
            formData.append("filter_slug", slug);
            formData.append("post_id", postId);

            fetch("<?php echo admin_url('admin-ajax.php'); ?>", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    document.getElementById("recruit-list").innerHTML = data;
                })
                .catch(error => console.error("Error:", error));
        }
    });
</script>



<?php get_footer(); ?>