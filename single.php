<?php get_header(); ?>
<main class="page-main single-main">
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
                    <a itemprop="item" href="<?php echo home_url(); ?>/archive/">
                        <span itemprop="name">お知らせ</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name"><?php the_title(); ?></span>
                    <meta itemprop="position" content="3" />
                </li>
            </ol>
        </nav>
    </div>

    <article class="article">
        <div class="content-width">
            <div class="article-info">
                <?php $cats = get_the_category(); ?>
                <?php if ($cats[0]): ?>
                    <span class="cat"><?php echo $cats[0]->name; ?></span>
                <?php endif; ?>
                <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
            <h1><?php the_title(); ?></h1>
            <?php if (has_post_thumbnail()): ?>
                <div class="article-img">
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                </div>
            <?php endif; ?>
            <div class="article-content">
                <?php the_content(); ?>
            </div>
            <div class="com-btn-arrow-left">
                <a href="<?php echo home_url(); ?>/archive/"><i></i>お知らせ一覧へ戻る</a>
            </div>
        </div>


    </article>
    <?php get_template_part('inc/inc-aside'); ?>
</main>
<?php get_footer(); ?>