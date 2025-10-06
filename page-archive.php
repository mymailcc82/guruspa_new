<?php
if (isset($_GET['event_tag'])) {
    $event_tag = sanitize_text_field($_GET['event_tag']);
} else {
    $event_tag = '';
}
?>
<?php get_header(); ?>
<main class="page-main archive">
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
                    <span itemprop="name">お知らせ</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
    </div>
    <section class="sec">
        <div class="content-width">
            <div class="com-title center com-title-hidden">
                <p>お知らせ</p>
                <h2 class="">
                    <span class="title">N</span><span class="title">E</span><span class="title">W</span><span class="title">S</span>
                    <span class="title title-item-sprout">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                    </span>
                    <span class="title title-item-sun">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                    </span>
                </h2>
            </div>
        </div>
        <div class="sec01-col">
            <ul class="sec01-col-select">
                <li class="active"><a href="javascript:void(0)" class="tab-btn" data-id="all">すべて</a></li>
                <li><a href="javascript:void(0)" class="tab-btn" data-id="news">お知らせ</a></li>
                <li><a href="javascript:void(0)" class="tab-btn" data-id="media">メディア</a></li>
            </ul>
            <input type="hidden" id="event_tag" value="<?php echo $event_tag; ?>">
            <div id="area01" class="area is-active">
                <div class="swiper swiper-event sec01-col-main">
                    <div class="content-width">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'paged' => $paged,
                            'post_type' => 'post', // 投稿タイプを指定
                            'posts_per_page' => 8, // 表示する投稿数を指定
                            //'category_name' => 'news', // カテゴリースラッグを指定
                        );
                        ?>
                        <?php $the_query = new WP_Query($args); ?>
                        <div class="archive-wrap" id="result">
                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <div class="archive-wrap-col">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="archive-wrap-col-img">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail('medium'); // サムネイルを表示 
                                                    ?>
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/dummy-small.jpg" alt="デフォルト画像">
                                                <?php endif; ?>
                                            </div>
                                            <div class="archive-wrap-col-txt">
                                                <div class="archive-wrap-col-txt-info">
                                                    <?php
                                                    $categories = get_the_category();
                                                    if (! empty($categories)) {
                                                        echo '<span class="category">' . esc_html($categories[0]->name) . '</span>';
                                                    }
                                                    ?>
                                                    <time><?php echo get_the_date('Y.m.d'); ?></time>
                                                </div>
                                                <h4><?php the_title(); ?></h4>
                                            </div>
                                            <i></i>
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p>投稿が見つかりませんでした。</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="content-width">
                    <div class="pagination" id="pagination"></div>
                </div>
            </div>
        </div>


    </section>
    <?php get_template_part('inc/inc-aside'); ?>
</main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        function get_event_ajax(page = 1) {
            //ajaxでget_event_data.phpにevent_categoryを送信し、結果を受け取る
            var event_tag = $('#event_tag').val();
            $.ajax({
                url: '<?php echo get_template_directory_uri(); ?>/ajax/get_news_data.php',
                type: 'GET',
                data: {
                    event_tag: event_tag,
                    page_ajax: page
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    //#resultを空にする
                    $('#result').empty();
                    //response.post_dataのobjectがあるかどうかを確認

                    if (response.post_data && response.post_data.length > 0) {
                        //post_dataの中身をループで回す
                        $.each(response.post_data, function(index, post) {
                            var post_html = '<div class="archive-wrap-col">';
                            post_html += '<a href="' + post.link + '">';
                            post_html += '<div class="archive-wrap-col-img">';
                            post_html += '<img src="' + post.thumbnail + '" alt="' + post.title + '">';
                            post_html += '</div>';
                            post_html += '<div class="archive-wrap-col-txt">';
                            post_html += '<div class="archive-wrap-col-txt-info">';
                            post_html += '<span class="category">' + post.category_name + '</span>';
                            post_html += '<time>' + post.date + '</time>';
                            post_html += '</div>';
                            post_html += '<h4>' + post.title + '</h4>';
                            post_html += '</div>';
                            post_html += '<i></i>';
                            post_html += '</a>';
                            post_html += '</div>';

                            $('#result').append(post_html);
                        });
                    } else {
                        $('#result').append('<p class="text-base">投稿が見つかりませんでした。</p>');
                    }


                    create_pagination(response.post_count, response.page_ajax);
                }
            })
        }

        function create_pagination(post_count, page) {
            var posts_per_page = 9;

            var total_pages = Math.ceil(post_count / posts_per_page);
            $('#pagination').empty();
            if (page > 1) {
                var prev_link = '<a href="javascript:void(0)" class="page-link first" data-page="' + 1 + '"><i class="fa-solid fa-angles-left"></i></a>';
                prev_link += '<a href="javascript:void(0)" class="page-link previous" data-page="' + (page - 1) + '"><i class="fa-solid fa-angle-left"></i></a>';
                $('#pagination').append(prev_link);
            }
            for (var i = 1; i <= total_pages; i++) {
                if (i == page) {
                    var page_link = '<span class="current" data-page="' + i + '">' + i + '</span>';
                } else {
                    var page_link = '<a href="javascript:void(0)" class="page-link" data-page="' + i + '">' + i + '</a>';
                }

                $('#pagination').append(page_link);
            }

            //最初のページをアクティブにする
            $('#pagination a:first').addClass('active');

            if (page < total_pages) {
                var next_link = '<a href="javascript:void(0)" class="page-link next" data-page="' + (page + 1) + '"><i class="fa-solid fa-angle-right"></i></a>';
                next_link += '<a href="javascript:void(0)" class="page-link last" data-page="' + total_pages + '"><i class="fa-solid fa-angles-right"></i></a>';
                $('#pagination').append(next_link);
            }
        }


        //.page-linkがクリックされたら、そのページ番号を取得し、ajaxでそのページの投稿を取得
        $(document).on('click', '.page-link', function() {
            var page = $(this).data('page');
            get_event_ajax(page);
            console.log(page);
            //クリックされたページをアクティブにする
            $('.page-link').removeClass('active');
            $(this).addClass('active');
            //#resultまでスクロール
            $('html, body').animate({
                scrollTop: $('#result').offset().top - 100
            }, 500);
        })
        //.tab-btnがクリックされたら
        $(document).on('click', '.tab-btn', function() {

            var slug = $(this).data('id');
            //親の親に.active-<slug>を付与
            //active-allとかactive-limitとactive-per_eventをsec01-col-selectから消す
            $('.sec01-col-select').removeClass('active-all active-media active-news');
            $(this).parent().parent().addClass('active-' + slug);
            $('#event_tag').val(slug);
            get_event_ajax();

            //thisの親のliにactiveを付与し、他のliからはactiveを外す
            $('.sec01-col-select li').removeClass('active');
            //thisの親のliにactiveを付与
            $(this).parent().addClass('active');
        })
        get_event_ajax();
    });
</script>
<?php get_footer(); ?>