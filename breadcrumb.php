<?php global $post; ?>
<ol class="breadcrumb">
    <li><a href="<?php echo get_bloginfo('url') ?>"><?php echo get_bloginfo('name') ?></a></li>
    <?php if (is_single()): ?>
        <?php foreach (get_the_category() as $val): ?>
            <li><a href="<?php get_category_link($val->term_id) ?>"><?php echo $val->cat_name ?></a></li>
        <?php endforeach; ?>
        <li class="active">
            <?php if (is_category()): ?>
                <?php single_cat_title('', false); ?>
            <?php elseif (is_tag()): ?>
                <?php single_tag_title('', false); ?>
            <?php elseif (is_day()): ?>
                <?php get_the_time(get_option('date_format')); ?>
            <?php elseif (is_month()): ?>
                <?php get_the_time('F, Y'); ?>
            <?php elseif (is_year()): ?>
                <?php get_the_time('Y') ?>
            <?php elseif (is_page()): ?>
                <?php echo $post->post_title ?>
            <?php else: ?>
                <?php echo $post->post_title  ?>
            <?php endif; ?>
        </li>
    <?php endif; ?>
</ol>
