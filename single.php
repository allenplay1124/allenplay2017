    <?php
include_once 'header.php';
$post_data = get_post(null, ARRAY_A);

?>

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
<article class="container" id="blog-article" style="position:relative;z-index:1;">
    <div class="page-header">
        <h1><?php the_title() ?></h1>
    </div>
    <div class="col-sm-8">
        <div class="breadcrumb">
            <?php include('breadcrumb.php') ?>
        </div>
        <div class="post-meta">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <?php echo date('m/d/Y H:i:s', strtotime($post_data['post_date'])) ?>
            <i class="fa fa-tags" aria-hidden="true"></i>
            <?php $post_tag = get_the_tags(); ?>
            <?php foreach ($post_tag as $val): ?>
                <a href="<?php echo get_tag_link($val->term_id) ?>">#<?php echo $val->name ?></a>&nbsp;
            <?php endforeach; ?>

            <i class="fa fa-bookmark" aria-hidden="true"></i>
            <?php the_category(', '); ?>
            <i class="fa fa-commenting" aria-hidden="true"></i>
            <?php echo $post_data['comment_count'] ?>
        </div>
        <div class="blog-post-content">
            <?php the_content(); ?>
        </div>
        <div class="related_post">
            <div class="page-header">
                <h4>Related Posts <small></small></h4>
            </div>
            <?php $related_posts =  getRelatedPost($post_data['ID']); ?>

            <?php if(count($related_posts) >= 1): ?>
                <?php foreach($related_posts as $val): ?>
                    <a href="<?php echo $val->guid ?>">
                        <div class="related-item">
                            <div style="
                                background:url('<?php echo get_img_url($val->ID) ?>');
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;
                                width:120px;
                                height:120px;
                                display:block;
                            ">
                            </div>
                            <div class="related-title">
                                <?php echo $val->post_title ?>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else: ?>
                No Related Post.
            <?php endif; ?>
        </div>
        <div class="clearfix"></div>
        <div class="prev-next">
            <span class="prev-link"><?php previous_post_link('<i class="fa fa-angle-left" aria-hidden="true"></i> %link'); ?></span>
            <span class="next-link"><?php next_post_link('%link <i class="fa fa-angle-right" aria-hidden="true"></i> '); ?></span>
        </div>
        <div class="clearfix"></div>
        <div class="page-header">
            <h5>About the author <small></small></h5>
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
<?php  include_once('footer.php') ?>
