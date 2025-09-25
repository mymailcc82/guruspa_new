<?php get_header(); ?>
<main class="page-main faq">
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
                    <span itemprop="name">FAQ</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec01">
        <div class="content-width">
            <div class="com-title center com-title-hidden">
                <p>よくある質問</p>
                <h2 class="">
                    <span class="title">F</span><span class="title">A</span><span class="title">Q</span>
                    <span class="title title-item-sprout">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                    </span>
                    <span class="title title-item-sun">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                    </span>
                </h2>
            </div>
            <div class="page-btn">
                <ul>
                    <li>
                        <a href="#sec02">施設・設備について<i></i></a>
                    </li>
                    <li>
                        <a href="#sec03">お風呂について<i></i></a>
                    </li>
                    <li>
                        <a href="#sec04">サウナについて<i></i></a>
                    </li>
                    <li>
                        <a href="#sec05">発汗エリアについて<i></i></a>
                    </li>
                    <li>
                        <a href="#sec06">リラクゼーションについて<i></i></a>
                    </li>
                    <li>
                        <a href="#sec07">衛生・安全面について<i></i></a>
                    </li>
                    <li>
                        <a href="#sec08">利用料金・予約について<i></i></a>
                    </li>
                    <li>
                        <a href="#sec09">アクセス・その他<i></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="sec02" id="sec02">
        <div class="content-width">
            <div class="page-title--has-icon page-title--has-icon--font-23">
                <h2><i></i>施設・設備について</h2></span>
            </div>
            <div class="faq-dl accordion">
                <?php
                $args = array(
                    'post_type' => 'faq',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'faq_category',
                            'field'    => 'slug',
                            'terms'    => 'facility', // 施設・設備について
                        ),
                    ),
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <dl>
                            <dt><i></i><?php the_title(); ?></dt>
                            <dd>
                                <i></i><?php the_content(); ?>
                            </dd>
                        </dl>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="text-sm">投稿が見つかりませんでした。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="sec02" id="sec03">
        <div class="content-width">
            <div class="page-title--has-icon page-title--has-icon--font-23">
                <h2><i></i>お風呂について</h2></span>
            </div>
            <div class="faq-dl accordion">
                <?php
                $args = array(
                    'post_type' => 'faq',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'faq_category',
                            'field'    => 'slug',
                            'terms'    => 'onsen', // 施設・設備について
                        ),
                    ),
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <dl>
                            <dt><i></i><?php the_title(); ?></dt>
                            <dd>
                                <i></i><?php the_content(); ?>
                            </dd>
                        </dl>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="text-sm">投稿が見つかりませんでした。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="sec02" id="sec04">
        <div class="content-width">
            <div class="page-title--has-icon page-title--has-icon--font-23">
                <h2><i></i>サウナについて</h2></span>
            </div>
            <div class="faq-dl accordion">
                <?php
                $args = array(
                    'post_type' => 'faq',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'faq_category',
                            'field'    => 'slug',
                            'terms'    => 'sauna',
                        ),
                    ),
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <dl>
                            <dt><i></i><?php the_title(); ?></dt>
                            <dd>
                                <i></i><?php the_content(); ?>
                            </dd>
                        </dl>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="text-sm">投稿が見つかりませんでした。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="sec02" id="sec05">
        <div class="content-width">
            <div class="page-title--has-icon page-title--has-icon--font-23">
                <h2><i></i>発汗エリアについて</h2></span>
            </div>
            <div class="faq-dl accordion">
                <?php
                $args = array(
                    'post_type' => 'faq',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'faq_category',
                            'field'    => 'slug',
                            'terms'    => 'hakkan',
                        ),
                    ),
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <dl>
                            <dt><i></i><?php the_title(); ?></dt>
                            <dd>
                                <i></i><?php the_content(); ?>
                            </dd>
                        </dl>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="text-sm">投稿が見つかりませんでした。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="sec02" id="sec06">
        <div class="content-width">
            <div class="page-title--has-icon page-title--has-icon--font-23">
                <h2><i></i>リラクゼーションについて</h2></span>
            </div>
            <div class="faq-dl accordion">
                <?php
                $args = array(
                    'post_type' => 'faq',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'faq_category',
                            'field'    => 'slug',
                            'terms'    => 'relax',
                        ),
                    ),
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <dl>
                            <dt><i></i><?php the_title(); ?></dt>
                            <dd>
                                <i></i><?php the_content(); ?>
                            </dd>
                        </dl>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="text-sm">投稿が見つかりませんでした。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="sec02" id="sec06">
        <div class="content-width">
            <div class="page-title--has-icon page-title--has-icon--font-23">
                <h2><i></i>衛生・安全面について</h2></span>
            </div>
            <div class="faq-dl accordion">
                <?php
                $args = array(
                    'post_type' => 'faq',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'faq_category',
                            'field'    => 'slug',
                            'terms'    => 'safe',
                        ),
                    ),
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <dl>
                            <dt><i></i><?php the_title(); ?></dt>
                            <dd>
                                <i></i><?php the_content(); ?>
                            </dd>
                        </dl>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="text-sm">投稿が見つかりませんでした。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="sec02" id="sec07">
        <div class="content-width">
            <div class="page-title--has-icon page-title--has-icon--font-23">
                <h2><i></i>利用料金・予約について</h2></span>
            </div>
            <div class="faq-dl accordion">
                <?php
                $args = array(
                    'post_type' => 'faq',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'faq_category',
                            'field'    => 'slug',
                            'terms'    => 'price',
                        ),
                    ),
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <dl>
                            <dt><i></i><?php the_title(); ?></dt>
                            <dd>
                                <i></i><?php the_content(); ?>
                            </dd>
                        </dl>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="text-sm">投稿が見つかりませんでした。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="sec02" id="sec07">
        <div class="content-width">
            <div class="page-title--has-icon page-title--has-icon--font-23">
                <h2><i></i>アクセス・その他</h2></span>
            </div>
            <div class="faq-dl accordion">
                <?php
                $args = array(
                    'post_type' => 'faq',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'faq_category',
                            'field'    => 'slug',
                            'terms'    => 'others',
                        ),
                    ),
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <dl>
                            <dt><i></i><?php the_title(); ?></dt>
                            <dd>
                                <i></i><?php the_content(); ?>
                            </dd>
                        </dl>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="text-sm">投稿が見つかりませんでした。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <section class="sec03">
        <div class="sec03-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-gray-top.png" alt="">
        </div>
        <div class="sec03-container">
            <div class="content-width">
                <p>
                    その他のご質問がございましたら、<br>
                    お気軽にスタッフまたは<a href="<?php echo home_url(); ?>/contact/">お問い合わせフォーム</a>までご連絡ください。
                </p>
            </div>
        </div>

    </section>
    <?php get_template_part('inc/inc-contact'); ?>
</main>
<?php get_footer(); ?>