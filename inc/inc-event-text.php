<?php
$event_category = get_the_terms(get_the_ID(), 'event_category');
$event_start_date = get_field('event_start_date'); // 開始日
$category_slug = $event_category[0]->slug;
$category_slug_parent = '';
if ($event_category[0]->parent) {
    $parent_term = get_term($event_category[0]->parent, 'event_category');
    if ($parent_term && !is_wp_error($parent_term)) {
        $category_slug_parent_id = $parent_term->term_id;
        $category_slug_parent = $parent_term->slug;
    }
}
?>
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