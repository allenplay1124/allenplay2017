<?php
get_header();
include_once 'slider.php';
global $wp_query, $wp_rewrite;
$current = $wp_query->query_vars['paged'];

$article = get_posts(array('posts_per_page' => 9, 'offset' => $current));
$top_bar = get_option('top_bar_option');
foreach ($article as $key => $val) {
    $article[$key] = get_object_vars($val);
}

?>
<main>
    <section class="articles" id="new-articles">
        <div class="container">
            <div class="page-header">
                <h2><span class="section-title">The latest articles</span> <small>近期所發布文章</small></h2>
            </div>
            <?php foreach ($article as $val): ?>
                <a href="<?php echo wp_get_shortlink($val['ID']) ?>">
                    <article class="col-sm-4">
                        <div class="post-thumbnail">
                            <?php if (has_post_thumbnail($val['ID'])): ?>
                                <div class="post-thumb-img" style="
                                    background:url('<?php echo get_img_url($val['ID']);?>');
                                    background-size: cover;
                                    background-position: center;
                                    background-repeat: no-repeat;
                                    height:250px;
                                ">
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="post-title">
                            <?php echo $val['post_title'] ?>
                        </div>
                    </article>
                </a>
            <?php endforeach; ?>
        </div>
        <?php include_once('page_nav.php'); ?>
    </section>

</main>

<script type="text/javascript">
    (function($){
        $(document).ready(function(e){
             hover_img();
        });
        function hover_img()
        {
            $('.post-thumb-img').css({
                'background-color':'#7c7c7c',
                'background-blend-mode':'color-dodge',
                'background-blend-mode':'darken'
            });
            $('.post-thumb-img').mouseover(function(e){
                $(this).css({
                    'background-blend-mode':'normal'
                });
            }).mouseout(function(e){
                $(this).css({
                    'background-color':'#7c7c7c',
                    'background-blend-mode':'color-dodge',
                    'background-blend-mode':'darken'
            });

            });
        }
    })(jQuery)
</script>
<?php include 'home_sidebar.php' ?>
<div class="browser">
    瀏覽環境：
    <i class="fa fa-linux fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fa fa-windows fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fa fa-android fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fa fa-apple fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fa fa-chrome fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fa fa-firefox fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fa fa-opera fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<?php get_footer(); ?>
