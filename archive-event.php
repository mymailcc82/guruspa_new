<?php
// クエリパラメータからタームスラッグを取得
if (isset($_GET['event_category'])) {
    $event_category = sanitize_text_field($_GET['event_category']);
} else {
    $event_category = '';
}
if (isset($_GET['event_tag'])) {
    $event_tag = sanitize_text_field($_GET['event_tag']);
} else {
    $event_tag = '';
}
?>
<?php get_header(); ?>
<main class="page-main archive event">
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
                    <span itemprop="name">NEWS</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>

    </div>
    <section class="sec">
        <div class="content-width">
            <div class="com-title center com-title-hidden">
                <p>イベント情報</p>
                <h2 class="">
                    <span class="title">E</span><span class="title">V</span><span class="title">E</span><span class="title">N</span><span class="title">T</span>
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
            <?php /*
            <ul class="sec01-col-select">
                <?php if ($event_tag === ''): ?>
                    <li class="active"><a href="<?php echo home_url(); ?>/event/">すべて</a></li>
                <?php else: ?>
                    <li><a href="<?php echo home_url(); ?>/event/">すべて</a></li>
                <?php endif; ?>
                <?php if ($event_tag === 'limit'): ?>
                    <li class="active"><a href="<?php echo home_url(); ?>/event/?event_tag=new&event_category=<?php echo $event_category; ?>" data-id="#area01">新着<br class="hidden-sm">イベント</a></li>
                <?php else: ?>
                    <li><a href="<?php echo home_url(); ?>/event/?event_tag=limit&event_category=<?php echo $event_category; ?>" data-id="#area02">期間限定<br class="hidden-sm">イベント</a></li>
                <?php endif; ?>
                <?php if ($event_tag === 'per_event'): ?>
                    <li class="active"><a href="<?php echo home_url(); ?>/event/?event_tag=per_event&event_category=<?php echo $event_category; ?>" data-id="#area03">定例<br class="hidden-sm">イベント</a></li>
                <?php else: ?>
                    <li><a href="<?php echo home_url(); ?>/event/?event_tag=per_event&event_category=<?php echo $event_category; ?>" data-id="#area03">定例<br class="hidden-sm">イベント</a></li>
                <?php endif; ?>
            </ul>
            */ ?>
            <ul class="sec01-col-select">
                <li class="active"><a href="javascript:void(0)" class="tab-btn" data-id="">すべて</a></li>
                <li><a href="javascript:void(0)" class="tab-btn" data-id="limit">期間限定<br class="hidden-sm">イベント</a></li>
                <li><a href="javascript:void(0)" class="tab-btn" data-id="per_event">定例<br class="hidden-sm">イベント</a></li>
            </ul>
            <input type="hidden" id="event_tag" value="<?php echo $event_tag; ?>">
            <div class="content-width">
                <div class="select">
                    <select name="category" id="category_type">
                        <?php
                        //event_categoryをtermを取得して、optionでselectedを設定
                        $terms = get_terms(array(
                            'taxonomy' => 'event_category',
                            'hide_empty' => false,
                        ));
                        ?>
                        <!--すべて -->
                        <option value="">すべて</option>

                        <?php foreach ($terms as $term) : ?>
                            <?php
                            if ($term->slug == "akasuri" || $term->slug == "sweet" || $term->slug == "tokiwa") {
                                continue;
                            }
                            ?>
                            <option value="<?php echo $term->slug; ?>" <?php if ($event_category === $term->slug) {
                                                                            echo 'selected';
                                                                        } ?>><?php echo $term->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div id="area01" class="area is-active">
                <div class="area-container">
                    <div class="content-width">
                        <?php
                        //$event_categoryがあるなら、そのタームに基づいてクエリを設定
                        $tax_query = array();
                        if ($event_category) {
                            $tax_query = array(
                                array(
                                    'taxonomy' => 'event_category',
                                    'field'    => 'slug',
                                    'terms'    => $event_category,
                                ),
                            );
                        }
                        if ($event_tag) {
                            $tax_query[] = array(
                                'taxonomy' => 'event_tag',
                                'field'    => 'slug',
                                'terms'    => $event_tag,
                            );
                        }
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'paged' => $paged,
                            'post_type' => 'event', // 投稿タイプを指定
                            'posts_per_page' => 9, // 表示する投稿数を指定
                            //'category_name' => 'news', // カテゴリースラッグを指定
                            //taxonomyでevent_tagを指定し、fieldでslugを指定、termsで$event_tagを指定
                            'tax_query' => $tax_query,
                        );
                        ?>
                        <?php $the_query = new WP_Query($args); ?>
                        <div class="sec01-col-main">
                            <ul id="result">
                                <?php if ($the_query->have_posts()) : ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <?php
                                        $event_category = get_the_terms(get_the_ID(), 'event_category');
                                        $event_start_date = get_field('event_start_date'); // 開始日
                                        $is_hot = get_field('hot'); // HOT! フラグ
                                        ?>
                                        <li>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if ($is_hot) : ?>
                                                    <span class="hot"><?php echo $is_hot; ?></span>
                                                <?php endif; ?>
                                                <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                                <div class="img img-event">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                    <?php else : ?>
                                                        <?php if ($event_category && !is_wp_error($event_category)) : ?>
                                                            <?php
                                                            // カテゴリーに応じたデフォルト画像を設定
                                                            $category_slug = $event_category[0]->slug;
                                                            $category_slug_parent = '';
                                                            //$event_category[0]の親カテゴリーを取得
                                                            //var_dump($event_category[0]);
                                                            if ($event_category[0]->parent) {
                                                                $parent_term = get_term($event_category[0]->parent, 'event_category');
                                                                if ($parent_term && !is_wp_error($parent_term)) {
                                                                    $category_slug_parent_id = $parent_term->term_id;
                                                                    $category_slug_parent = $parent_term->slug;
                                                                }
                                                            }
                                                            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-default.jpg'; // デフォルト画像

                                                            if ($category_slug === 'information' || $category_slug_parent === 'information') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-red.jpg';
                                                            } elseif ($category_slug === 'event' || $category_slug_parent === 'event') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-green.jpg';
                                                            } elseif ($category_slug === 'food' || $category_slug_parent === 'food') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-yellow.jpg';
                                                            } elseif ($category_slug === 'relax' || $category_slug_parent === 'relax') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-blue.jpg';
                                                            } elseif ($category_slug === 'tokiwa') {
                                                            }
                                                            ?>
                                                            <img src="<?php echo esc_url($default_image_url); ?>" alt="<?php the_title(); ?>">
                                                        <?php else : ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-default.jpg" alt="<?php the_title(); ?>">
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="text">
                                                    <div class="text-info">
                                                        <?php
                                                        if ($category_slug === 'information' || $category_slug_parent === 'information') {
                                                            $cats_class = 'category-red';
                                                        } elseif ($category_slug === 'event' || $category_slug_parent === 'event') {
                                                            $cats_class = 'category-green';
                                                        } elseif ($category_slug === 'food' || $category_slug_parent === 'food') {
                                                            $cats_class = 'category-yellow';
                                                        } elseif ($category_slug === 'relax' || $category_slug_parent === 'relax') {
                                                            $cats_class = 'category-blue';
                                                        }
                                                        ?>
                                                        <div class="text-info-cat">
                                                            <span class="category <?php echo esc_attr($cats_class); ?> cat-<?php echo esc_attr($category_slug); ?>"><?php echo esc_html($event_category[0]->name); ?></span>
                                                        </div>
                                                        <div class="text-info-term">
                                                            <span class="term"><?php echo $event_start_date; ?></span>
                                                        </div>

                                                    </div>
                                                    <h3><?php the_title(); ?></h3>
                                                </div>
                                            </a>
                                        </li>

                                    <?php endwhile; ?>

                                    <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                    <p class="text-base">投稿が見つかりませんでした。</p>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="content-width">
                        <div class="pagination" id="pagination"></div>
                    </div>
                </div>
            </div>


        </div>


    </section>
    <?php get_template_part('inc/inc-bnr-full'); ?>
    <?php get_template_part('inc/inc-contact'); ?>


</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



<script>
    $(document).ready(function() {
        function get_event_ajax(page = 1) {
            //#category_typeのselectedを取得
            var category_type = $('#category_type option:selected');


            //#category_typeのslectedを取得
            var event_tag = $('#event_tag').val();
            console.log(category_type.val());



            //ajaxでget_event_data.phpにevent_categoryを送信し、結果を受け取る
            $.ajax({
                url: '<?php echo get_template_directory_uri(); ?>/ajax/get_event_data.php',
                type: 'GET',
                data: {
                    event_tag: event_tag,
                    category_type: category_type.val(),
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
                            var post_html = '<li>';
                            post_html += '<a href="' + post.link + '">';
                            if (post.is_hot) {
                                post_html += '<span class="hot">' + post.is_hot + '</span>';
                            }
                            post_html += '<span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>';
                            post_html += '<div class="img img-event">';
                            post_html += '<img src="' + post.thumbnail + '" alt="' + post.title + '">';
                            post_html += '</div>';
                            post_html += `
                            <div class="text">
                                <div class="text-info">
                                    <div class="text-info-cat">
                                        <span class="category ${post.category_class} cat-${post.category_slug}">${post.category}</span>
                                    </div>
                                    <div class="text-info-term">
                                        <span class="term"><?php echo $event_start_date; ?></span>
                                    </div>
                                </div>
                                <h3>${post.title}</h3>
                            </div>
                            
                            `;
                            post_html += '</a>';
                            post_html += '</li>';
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
            $('#event_tag').val(slug);
            get_event_ajax();

            //thisの親のliにactiveを付与し、他のliからはactiveを外す
            $('.sec01-col-select li').removeClass('active');
            //thisの親のliにactiveを付与
            $(this).parent().addClass('active');
        })

        //#category_typeが変更されたら、その値を取得し、ajaxでそのカテゴリーの投稿を取得
        $('#category_type').on('change', function() {
            get_event_ajax();
        })


        get_event_ajax();
    });
</script>


<?php get_footer(); ?>