<?php include_once 'header.php';?>
<?php
    $args = '';
    if (isset($_GET['s']) && $_GET['s'] != '') {
        $args['s'] = htmlentities($_GET['s']);
        $archive_name = htmlentities($_GET['s']);
    }
    $post = get_posts($args);
 ?>
<div class="post-info">
    <div class="container">
        <div class="col-sm-8">
            <?php foreach ($post as $val): ?>
                <article>
                    <h2><a href="<?php echo wp_get_shortlink($val->ID); ?>"><?php echo $val->post_title; ?></a></h2>
                    <div class="post-meta">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php echo date('Y-m-d H:i:s', strtotime($val->post_date)) ?>
                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                        <?php foreach ($val->post_category as $val2): ?>
                            <a href="<?php echo get_category_link($val2); ?>">
                                <?php echo get_cat_name($val2) ?>
                            </a>
                        <?php endforeach; ?>
                        <i class="fa fa-commenting" aria-hidden="true"></i>
                        <?php echo $val->comment_count ?>
                    </div>
                    <div class="post-content">
                        <?php echo mb_substr(strip_tags($val->post_content), 0, 120, 'utf-8');?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="col-sm-3">
            <?php include 'blog_sidebar.php' ?>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
