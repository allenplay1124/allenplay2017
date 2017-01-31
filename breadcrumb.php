<?php global $post; ?>
<ol class="breadcrumb">
    <?php if (!is_home()): ?>
        <li><a href="<?php echo get_option('home') ?>"><?php echo bloginfo('name') ?></a></li>
    <?php endif; ?>
    <?php if(is_category() || is_single()): ?>
        <li><?php the_category('title_li=') ?></li>
    <?php endif; ?>
    <li class="active"><?php the_title(); ?></li>
</ol>
