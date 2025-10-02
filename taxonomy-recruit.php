<?php get_header(); ?>

<main class="recruit">
    <div class="page_visual">
        <div class="page-breadcrumbs">
            <ul>
                <li><a href="<?php echo home_url(); ?>">TOP</a></li>
                <li><span>RECRUIT</span></li>
            </ul>
        </div>
        <div class="page_visual_title">
            <h1>RECRUIT</h1>
            <span>求人情報の案内</span>
        </div>
    </div>
    <section class="sec01">

        <form method="GET" action="<?php echo esc_url(home_url('/recruit/')); ?>">
            <div class="filter-categories">
                <button type="button" class="filter_button <?php echo (empty($_GET['location'])) ? 'active' : ''; ?>" data-location="">すべて</button>
                <button type="button" class="filter_button <?php echo (isset($_GET['location']) && in_array('eagle', (array)$_GET['location'])) ? 'active' : ''; ?>" data-location="eagle">サウナイーグル</button>
                <button type="button" class="filter_button <?php echo (isset($_GET['location']) && in_array('guruspa', (array)$_GET['location'])) ? 'active' : ''; ?>" data-location="guruspa">グルスパ</button>
            </div>



            <div class="content-width-small">
                <div class="filter_acdn">
                    <span class="filter_acdn_switch">さらに絞り込む</span>
                    <div class="acdn_body">
                        <div class="acdn_body_wrap">
                            <div class="filter-section">
                                <h4>勤務地</h4>
                                <div class="filter-section-check">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="location[]" value="aichi">
                                        <?php if (!empty($_GET['location']) && in_array('aichi', $_GET['location'])) echo ''; ?>
                                        <span>愛知県</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="location[]" value="mie">
                                        <?php if (!empty($_GET['location']) && in_array('mie', $_GET['location'])) echo ''; ?>
                                        <span>三重県</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="location[]" value="ari">
                                        <?php if (!empty($_GET['location']) && in_array('ari', $_GET['location'])) echo ''; ?>
                                        <span>転勤可能</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="location[]" value="nashi">
                                        <?php if (!empty($_GET['location']) && in_array('nashi', $_GET['location'])) echo ''; ?>
                                        <span>転勤なし</span>
                                    </label>
                                </div>
                            </div>

                            <div class="filter-section">
                                <h4>雇用形態</h4>
                                <div class="filter-section-check">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="employment[]" value="fulltime">
                                        <?php if (!empty($_GET['employment']) && in_array('fulltime', $_GET['employment'])) echo ''; ?>
                                        <span>正社員</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="employment[]" value="arbeit">
                                        <?php if (!empty($_GET['employment']) && in_array('arbeit', $_GET['employment'])) echo ''; ?>
                                        <span>アルバイト</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="employment[]" value="parttime">
                                        <?php if (!empty($_GET['employment']) && in_array('parttime', $_GET['employment'])) echo ''; ?>
                                        <span>パート</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="employment[]" value="contract">
                                        <?php if (!empty($_GET['employment']) && in_array('contract', $_GET['employment'])) echo ''; ?>
                                        <span>契約社員</span>
                                    </label>
                                </div>
                            </div>
                            <div class="filter-section">
                                <h4>勤務開始</h4>
                                <div class="filter-section-check">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="start_work[]" value="immediately">
                                        <?php if (!empty($_GET['start_work']) && in_array('immediately', $_GET['start_work'])) echo ''; ?>
                                        <span>即勤務可</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="start_work[]" value="april">
                                        <?php if (!empty($_GET['start_work']) && in_array('april', $_GET['start_work'])) echo ''; ?>
                                        <span>4月以降勤務</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="start_work[]" value="july">
                                        <?php if (!empty($_GET['start_work']) && in_array('july', $_GET['start_work'])) echo ''; ?>
                                        <span>7月以降勤務</span>
                                    </label>
                                </div>
                            </div>
                            <div class="filter-section">
                                <h4>業務内容</h4>
                                <div class="filter-section-check">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="duties[]" value="service">
                                        <?php if (!empty($_GET['duties']) && in_array('service', $_GET['duties'])) echo ''; ?>
                                        <span>接客</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="duties[]" value="cooking">
                                        <?php if (!empty($_GET['duties']) && in_array('cooking', $_GET['duties'])) echo ''; ?>
                                        <span>調理・キッチン</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="duties[]" value="cleaning">
                                        <?php if (!empty($_GET['duties']) && in_array('cleaning', $_GET['duties'])) echo ''; ?>
                                        <span>清掃</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="duties[]" value="receipt">
                                        <?php if (!empty($_GET['duties']) && in_array('receipt', $_GET['duties'])) echo ''; ?>
                                        <span>受付・事務</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="duties[]" value="management">
                                        <?php if (!empty($_GET['duties']) && in_array('management', $_GET['duties'])) echo ''; ?>
                                        <span>施設管理</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="duties[]" value="">
                                        <?php if (!empty($_GET['duties']) && in_array('service', $_GET['duties'])) echo ''; ?>
                                        <span>増えた場合のイメージ</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="duties[]" value="">
                                        <?php if (!empty($_GET['duties']) && in_array('service', $_GET['duties'])) echo ''; ?>
                                        <span>増えた場合のイメージ</span>
                                    </label>
                                </div>
                            </div>
                            <div class="filter-section">
                                <h4>その他</h4>
                                <div class="filter-section-check">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="others[]" value="regular">
                                        <?php if (!empty($_GET['others']) && in_array('regular', $_GET['others'])) echo ''; ?>
                                        <span>定時</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="others[]" value="attire">
                                        <?php if (!empty($_GET['others']) && in_array('regular', $_GET['others'])) echo ''; ?>
                                        <span>服装自由</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="others[]" value="hair">
                                        <?php if (!empty($_GET['others']) && in_array('regular', $_GET['others'])) echo ''; ?>
                                        <span>髪色自由</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="others[]" value="shift">
                                        <?php if (!empty($_GET['others']) && in_array('regular', $_GET['others'])) echo ''; ?>
                                        <span>シフト自由</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="others[]" value="">
                                        <?php if (!empty($_GET['others']) && in_array('regular', $_GET['others'])) echo ''; ?>
                                        <span>増えた場合のイメージ</span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="others[]" value="">
                                        <?php if (!empty($_GET['others']) && in_array('regular', $_GET['others'])) echo ''; ?>
                                        <span>増えた場合のイメージ</span>
                                    </label>
                                </div>
                            </div>
                            <ul>
                                <ul>
                                    <li class="serch"><button type="submit">検索する</button></li>
                                    <li class="reset"><a href="<?php echo esc_url(home_url('/recruit/')); ?>">選択をリセット</a></li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </section>
    <section class="sec02">
        <div class="content-width-small">
            <?php
            // 現在のページを取得（ページ番号がない場合は1）
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // カスタム投稿「recruit」の取得
            $tax_query = array('relation' => 'AND'); // 絞り込み用の配列

            // 選択されたカテゴリーに応じてタクソノミーを追加


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

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="recruit_list">
                        <a href="<?php the_permalink(); ?>">
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
                            <time><?php echo get_the_date('Y.m.d'); ?></time>
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
        const buttons = document.querySelectorAll('.filter_button[data-location]');
        const form = document.querySelector('.recruit-form');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                // location[] チェックボックスを一度すべて外す
                document.querySelectorAll('input[name="location[]"]').forEach(input => {
                    input.checked = false;
                });

                // ボタンが「すべて」でなければチェックを付ける
                const value = this.getAttribute('data-location');
                if (value) {
                    const checkbox = document.querySelector(`input[name="location[]"][value="${value}"]`);
                    if (checkbox) {
                        checkbox.checked = true;
                    }
                }

                // フォーム送信
                form.submit();
            });
        });
    });
</script>

<?php get_footer(); ?>