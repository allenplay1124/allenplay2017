<?php include_once('header.php') ?>
<?php
    $archive_name = '';
    if (isset($_GET['cat']) && $_GET['cat'] != '') {
        $args['category'] = (int) $_GET['cat'];
        $archive_name = get_cat_name($_GET['cat']);
    }
    if (isset($_GET['tag']) && $_GET['tag'] != '') {
        $args['tag'] = $_GET['tag'];
        $archive_name = $_GET['tag'];
    }
    if ($archive_name == '') {
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        if ($uri[1] == 'tag') {
            $args['tag'] = $uri[2];
            $archive_name = $uri[2];
        }
        if ($uri[1] == 'category') {
            $cate_id = get_cat_ID(urldecode($uri[2]));
            $args['category'] = $cate_id;
            $archive_name = urldecode($uri[2]);
        }
    }
 ?>
<div class="page-info">
	<div class="container">
		<div class="col-sm-8">
            <?php $post = get_posts($args); ?>
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
<?php include_once('footer.php') ?>
