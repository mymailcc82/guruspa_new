<?php
$event_category = get_the_terms(get_the_ID(), 'event_category');
$category_slug = $event_category[0]->slug;
$category_slug_parent = '';
?>
<div class="img img-info">
    <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
    <?php else : ?>
        <?php if ($event_category && !is_wp_error($event_category)) : ?>
            <?php
            if ($event_category[0]->parent) {
                $parent_term = get_term($event_category[0]->parent, 'event_category');
                if ($parent_term && !is_wp_error($parent_term)) {
                    $category_slug_parent_id = $parent_term->term_id;
                    $category_slug_parent = $parent_term->slug;
                }
            }
            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-default.jpg'; // デフォルト画像
            $default_image_url_sp = get_template_directory_uri() . '/assets/img/archive/archive-default_sp.jpg'; // デフォルト画像SP

            if ($category_slug === 'information' || $category_slug_parent === 'information') {
                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-red.jpg';
                $default_image_url_sp = get_template_directory_uri() . '/assets/img/archive/archive-red_sp.jpg';
            } elseif ($category_slug === 'event' || $category_slug_parent === 'event') {
                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-green.jpg';
                $default_image_url_sp = get_template_directory_uri() . '/assets/img/archive/archive-green_sp.jpg';
            } elseif ($category_slug === 'food' || $category_slug_parent === 'food') {
                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-yellow.jpg';
                $default_image_url_sp = get_template_directory_uri() . '/assets/img/archive/archive-yellow_sp.jpg';
            } elseif ($category_slug === 'relax' || $category_slug_parent === 'relax') {
                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-blue.jpg';
                $default_image_url_sp = get_template_directory_uri() . '/assets/img/archive/archive-blue_sp.jpg';
            } elseif ($category_slug === 'tokiwa') {
            }
            ?>
            <picture>
                <source media="(max-width: 600px)" srcset="<?php echo esc_url($default_image_url_sp); ?>">
                <img src="<?php echo esc_url($default_image_url); ?>" alt="<?php the_title(); ?>">
            </picture>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-default.jpg" alt="<?php the_title(); ?>">
        <?php endif; ?>
    <?php endif; ?>
</div>