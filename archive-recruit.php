<?php get_header(); ?>
<?php
//taxonomyのemployment_statusのタームを取得
$employment_statuses = get_terms('employment_status', 'hide_empty=0');
?>
<?php
//taxonomyのwork_locationのタームを取得
$work_locations = get_terms('work_location', 'hide_empty=0');
?>
<main class="recruit">
    <div class="page_visual">
        <div class="page-breadcrumbs">
            <ul>
                <li><a href="<?php echo home_url(); ?>">TOP</a></li>
                <li><a href="<?php echo home_url(); ?>/recruit_top/">RECRUIT TOP</a></li>
                <li><span>RECRUIT</span></li>
            </ul>
        </div>
        <div class="page_visual_title">
            <h1>RECRUIT</h1>
            <span>求人情報の案内</span>
        </div>
    </div>
    <section class="sec01">
        <?php /*
        <button type="button" disabled class="filter_button <?php echo (empty($_GET['location'])) ? 'active' : ''; ?>" data-location="">すべて</button>
        <button type="button" disabled class="filter_button <?php echo (isset($_GET['location']) && in_array('eagle', (array)$_GET['location'])) ? 'active' : ''; ?>" data-location="eagle">サウナイーグル</button>
        <button type="button" disabled class="filter_button <?php echo (isset($_GET['location']) && in_array('guruspa', (array)$_GET['location'])) ? 'active' : ''; ?>" data-location="guruspa">グルスパ</button>
        */ ?>

        <form method="GET" action="<?php echo esc_url(home_url('/recruit/#search')); ?>" class="recruit-form">
            <ul class="filter-categories">
                <li>
                    <div class="location_reset">
                        <a href="javascript:void(0);" class="location_reset_button" data-location="">すべて</a>
                    </div>
                </li>
                <?php foreach ($employment_statuses as $key) : ?>
                    <li>
                        <label class="filter_button filter_button_trigger">
                            <?php if (!empty($_GET['employment']) && in_array($key->slug, $_GET['employment'])): ?>
                                <input type="checkbox" name="employment[]" value="<?php echo esc_attr($key->slug); ?>" checked>
                            <?php else: ?>
                                <input type="checkbox" name="employment[]" value="<?php echo esc_attr($key->slug); ?>">
                            <?php endif; ?>
                            <span><?php echo esc_html($key->name); ?></span>
                        </label>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="content-width-small">
                <div class="filter_acdn">
                    <span class="filter_acdn_switch open">さらに絞り込む</span>
                    <div class="acdn_body open">
                        <p class="filter_acdn-desc">
                            ・希望の条件を選択し、画面最下部の「検索する」を押すと、条件に合う求人が表示されます。<br>
                            ・条件は複数選択可能で、選択は任意です。
                        </p>
                        <div class="acdn_body_wrap">
                            <div class="filter-section">
                                <h4>勤務地</h4>

                                <div class="filter-section-check">
                                    <?php foreach ($work_locations as $key) : ?>
                                        <label class="custom-checkbox">
                                            <?php if (!empty($_GET['location']) && in_array($key->slug, $_GET['location'])): ?>
                                                <input type="checkbox" name="location[]" value="<?php echo esc_attr($key->slug); ?>" checked>
                                            <?php else: ?>
                                                <input type="checkbox" name="location[]" value="<?php echo esc_attr($key->slug); ?>">
                                            <?php endif; ?>
                                            <span><?php echo esc_html($key->name); ?></span>
                                        </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>


                            <!--
                            <div class="filter-section">
                                <h4>勤務開始</h4>
                                <?php
                                //taxonomyのemployment_statusのタームを取得
                                $start_work = get_terms('start_work', 'hide_empty=0');
                                ?>
                                <div class="filter-section-check">
                                    <?php foreach ($start_work as $key) : ?>
                                        <label class="custom-checkbox">
                                            <?php if (!empty($_GET['start_work']) && in_array($key->slug, $_GET['start_work'])): ?>
                                                <input type="checkbox" name="start_work[]" value="<?php echo esc_attr($key->slug); ?>" checked>
                                            <?php else: ?>
                                                <input type="checkbox" name="start_work[]" value="<?php echo esc_attr($key->slug); ?>">
                                            <?php endif; ?>
                                            <span><?php echo esc_html($key->name); ?></span>
                                        </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            -->

                            <div class="filter-section">
                                <h4>業務内容</h4>
                                <?php
                                //taxonomyのemployment_statusのタームを取得
                                $duties = get_terms('duties', 'hide_empty=0');
                                ?>
                                <div class="filter-section-check">
                                    <?php foreach ($duties as $key) : ?>
                                        <label class="custom-checkbox">
                                            <?php if (!empty($_GET['duties']) && in_array($key->slug, $_GET['duties'])): ?>
                                                <input type="checkbox" name="duties[]" value="<?php echo esc_attr($key->slug); ?>" checked>
                                            <?php else: ?>
                                                <input type="checkbox" name="duties[]" value="<?php echo esc_attr($key->slug); ?>">
                                            <?php endif; ?>
                                            <span><?php echo esc_html($key->name); ?></span>
                                        </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="filter-section">
                                <h4>その他</h4>
                                <?php
                                //taxonomyのemployment_statusのタームを取得
                                $others = get_terms('others', 'hide_empty=0');
                                ?>
                                <div class="filter-section-check">
                                    <?php foreach ($others as $key) : ?>
                                        <label class="custom-checkbox">
                                            <?php if (!empty($_GET['others']) && in_array($key->slug, $_GET['others'])): ?>
                                                <input type="checkbox" name="others[]" value="<?php echo esc_attr($key->slug); ?>" checked>
                                            <?php else: ?>
                                                <input type="checkbox" name="others[]" value="<?php echo esc_attr($key->slug); ?>">
                                            <?php endif; ?>
                                            <span><?php echo esc_html($key->name); ?></span>
                                        </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <ul>
                                <li class="serch"><button type="submit">検索する</button></li>
                                <li class="reset"><a href="javascript:void(0)" class="reset-btn">選択をリセット</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </section>
    <section class="sec02" id="search">
        <div class="content-width-small">
            <?php
            // 現在のページを取得（ページ番号がない場合は1）
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // カスタム投稿「recruit」の取得
            $tax_query = array('relation' => 'AND'); // 絞り込み用の配列

            // 絞り込み条件
            $tax_query = ['relation' => 'AND'];

            // ▼ 「すべて」の場合は何も追加しない
            if (!isset($_GET['category']) || $_GET['category'] !== 'all') {
                if (!empty($_GET['category'])) {
                    $tax_query[] = [
                        'taxonomy' => 'work_location',
                        'field'    => 'slug',
                        'terms'    => [$_GET['category']],
                    ];
                }
            }


            // 勤務地フィルター
            if (!empty($_GET['location'])) {
                $tax_query[] = array(
                    'taxonomy' => 'work_location', // 勤務地タクソノミー
                    'field'    => 'slug',
                    'terms'    => $_GET['location'], // 配列で受け取る
                );
            }

            // 雇用形態フィルター
            if (!empty($_GET['employment'])) {
                $tax_query[] = array(
                    'taxonomy' => 'employment_status', // 雇用形態タクソノミー
                    'field'    => 'slug',
                    'terms'    => $_GET['employment'], // 配列で受け取る
                );
            }

            // 勤務開始フィルター
            if (!empty($_GET['start_work'])) {
                $tax_query[] = array(
                    'taxonomy' => 'start_work', // 勤務開始タクソノミー
                    'field'    => 'slug',
                    'terms'    => $_GET['start_work'], // 配列で受け取る
                );
            }

            // 業務内容フィルター
            if (!empty($_GET['duties'])) {
                $tax_query[] = array(
                    'taxonomy' => 'duties', // 業務内容タクソノミー
                    'field'    => 'slug',
                    'terms'    => $_GET['duties'], // 配列で受け取る
                );
            }

            // その他フィルター
            if (!empty($_GET['others'])) {
                $tax_query[] = array(
                    'taxonomy' => 'others', // その他タクソノミー
                    'field'    => 'slug',
                    'terms'    => $_GET['others'], // 配列で受け取る
                );
            }

            // WP_Query の条件
            $args = [
                'post_type'      => 'recruit',
                'posts_per_page' => 10, // 1ページに表示する投稿数
                'paged'          => $paged,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'tax_query'      => count($tax_query) > 1 ? $tax_query : '',
            ];

            $query = new WP_Query($args);

            //取得総合数
            $total_count = $query->found_posts;
            //取得した投稿数
            $count = $query->post_count;
            //取得したページ数
            ?>

            <h3 class="recruit_title">検索結果：<?php echo $count; ?>件</h3>
            <?php

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>

                    <div class="recruit_list">
                        <a href="<?php echo esc_url(add_query_arg($_GET, get_permalink())); ?>">
                            <div class="recruit_list-left">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/dummy-small.webp" alt="no image">
                                <?php endif; ?>
                            </div>
                            <div class="recruit_list-right">
                                <div class="recruit_category">
                                    <?php
                                    $display_taxonomies = ['work_location', 'employment_status', 'start_work', 'duties', 'others'];
                                    foreach ($display_taxonomies as $taxonomy) {
                                        $terms = get_the_terms(get_the_ID(), $taxonomy);
                                        if ($terms && !is_wp_error($terms)) {
                                            foreach ($terms as $term) {
                                                echo '<span class="recruit_category_wrap">' . esc_html($term->name) . '</span>';
                                            }
                                        }
                                    }
                                    ?>
                                </div>

                                <h3><?php the_title(); ?></h3>
                                <?php /*
                            <time><?php echo get_the_date('Y.m.d'); ?></time>
							*/ ?>
                            </div>

                        </a>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="not_text">現在、求人情報はありません。</p>';
            endif;
            ?>

            <!-- ページネーション -->
            <?php custom_pagination($query); ?>
        </div>

    </section>


</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const switchButton = document.querySelector(".filter_acdn_switch");
        const acdnBody = document.querySelector(".acdn_body");

        switchButton.addEventListener("click", function() {
            if (acdnBody.classList.contains("open")) {
                acdnBody.style.maxHeight = "0px"; // 閉じるアニメーション
            } else {
                acdnBody.style.maxHeight = acdnBody.scrollHeight + "px"; // 開くアニメーション
            }
            acdnBody.classList.toggle("open");
            switchButton.classList.toggle("open"); // 矢印回転用のクラスを追加
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const resetButton = document.querySelector('.location_reset_button');
        const form = document.querySelector('.recruit-form');

        resetButton.addEventListener('click', function() {
            // すべてのチェックボックスを外す
            form.querySelectorAll('input[type="checkbox"]').forEach(input => {
                input.checked = false;
            });

            // フォーム送信
            form.submit();
        });
    });
</script>

<?php get_footer(); ?>