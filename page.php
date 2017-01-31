<?php
include_once 'header.php';
$post_data = get_post(null, ARRAY_A);

?>
<?php the_post(); ?>
<div class="post-default-img" style="
background:url('<?php echo get_img_url($post_data['ID']) ?>');
background-size: cover;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
width:100%;
height:720px;
-webkit-filter: blur(3px);
-moz-filter: blur(3px);
-o-filter: blur(3px);
-ms-filter: blur(3px);
filter: blur(3px);
    position:relative;
    z-index:-1;
"
>
</div>
<article class="container" id="blog-article">
<div class="page-header">
    <h1><?php echo $post_data['post_title'] ?></h1>
</div>
<div class="col-sm-8">

    <div class="post-meta">
        <i class="fa fa-clock-o" aria-hidden="true"></i>
        <?php echo date('西元 Y 年 m 月 d 日 h 時 i 分 s 秒', strtotime($post_data['post_date'])) ?>
        <i class="fa fa-commenting" aria-hidden="true"></i>
        <?php echo $post_data['comment_count'] ?>
    </div>
    <div class="blog-post-content">
        <?php the_content() ?>
    </div>
    <div class="author">
        <div class="author-avatar">
            <?php echo get_avatar(get_the_author_meta('ID'));?>
        </div>
        <div class="author-info">
            <h4><?php get_the_author() ?></h4>
            <?php the_author_meta('description'); ?>
            <a class="author-link" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author">瀏覽全部文章 <?php get_the_author(); ?> <span class="meta-nav">&rarr;</span></a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="comments">
    <?php comments_template('comments.php');?>
    </div>
</div>
<div class="col-sm-3">
    <?php include 'blog_sidebar.php' ?>
</div>
</article>
<?php include_once('footer.php') ?>
