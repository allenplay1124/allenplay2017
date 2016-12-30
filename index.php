<?php

include 'header.php';
include 'slider.php';

$article = get_posts(array('numberposts' => 9));

foreach ($article as $key => $val) {
    $article[$key] = get_object_vars($val);
}

?>
<main>
    <section class="articles" id="new-articles">
        <div class="container">
            <div class="page-header">
                <h2>最新文章 <small>近期所發布文章</small></h2>
            </div>
            <?php foreach ($article as $val): ?>
                <a href="<?php echo wp_get_shortlink($val['ID']) ?>">
                    <article class="col-sm-4">
                        <div class="post-thumbnail">
                            <?php if (has_post_thumbnail($val['ID'])): ?>
                                <div class="post-thumb-img" style="
                                    background:url('<?php echo get_img_url($val['ID']);?>');
                                    background-size: cover;
                                    background-attachment: fixed;
                                    background-position: center;
                                    background-repeat: no-repeat;
                                    width:100%;
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
    </section>
    <?php if (isset($top_bar['first_cate']) && $top_bar['first_cate'] != ''): ?>
        <?php $first_cate = get_posts(array('numberposts' => 4, 'category' => $top_bar['first_cate'])); ?>
        <?php foreach ($first_cate as $key => $val): ?>
            <?php $first_cate[$key] = get_object_vars($val); ?>
        <?php endforeach; ?>
        <section id="first_cate">
            <div class="container">
                <div class="page-header">
                    <?php $first_cate_title = get_category($top_bar['first_cate'], ARRAY_A); ?>
                  <h2><?php echo $first_cate_title['cat_name'] ?>
                      <small><?php echo $first_cate_title['category_description'] ?></small>
                  </h2>
                </div>
                <?php foreach ($first_cate as $val): ?>
                    <a href="<?php echo wp_get_shortlink($val['ID']) ?>">
                        <article class="col-sm-3">
                            <?php if (has_post_thumbnail($val['ID'])): ?>
                                <div class="post-thumb-img" style="
                                    background:url('<?php echo get_img_url($val['ID']); ?>');
                                    background-size: cover;
                                    background-attachment: fixed;
                                    background-position: center;
                                    background-repeat: no-repeat;
                                    width:100%;
                                    height:250px;
                                    -webkit-border-radius: 500px;
                                    -moz-border-radius: 500px;
                                    border-radius: 500px;
                                ">
                                </div>
                            <?php endif; ?>
                            <div class="post-title">
                                <?php echo $val['post_title'] ?>
                            </div>
                        </article>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>
    <?php if (isset($top_bar['second_cate']) && $top_bar['second_cate'] != ''): ?>
        <?php $second_cate = get_posts(array('numberposts' => 4, 'category' => $top_bar['v'])); ?>
        <?php foreach ($second_cate as $key => $val): ?>
            <?php $second_cate[$key] = get_object_vars($val); ?>
        <?php endforeach; ?>
        <section id="second_cate">
            <div class="container">
                <div class="page-header">
                    <?php $second_cate_title = get_category($top_bar['second_cate'], ARRAY_A); ?>
                  <h2><?php echo $second_cate_title['cat_name'] ?>
                      <small><?php echo $second_cate_title['category_description'] ?></small>
                  </h2>
                </div>
                <?php foreach ($second_cate as $val): ?>
                    <a href="<?php echo wp_get_shortlink($val['ID']) ?>">
                        <article class="col-sm-5 post-content">
                            <?php if (has_post_thumbnail($val['ID'])): ?>
                                <div class="col-sm-6 post-thumb-img" style="
                                    background:url('<?php echo get_img_url($val['ID']); ?>');
                                    background-size: cover;
                                    background-attachment: fixed;
                                    background-position: center;
                                    background-repeat: no-repeat;
                                    height:250px;
                                ">
                                </div>
                            <?php endif; ?>
                            <div class="col-sm-6">
                                <div class="post-title"><?php echo $val['post_title'] ?></div>
                                <div class="post-meta">
                                    <i class="glyphicon glyphicon-time"></i>&nbsp;
                                    <?php echo DATE('Y-m-d', strtotime($val['post_date'])) ?>&nbsp;
                                    <i class="glyphicon glyphicon-comment"></i>&nbsp;
                                    <?php $comment = get_comment_count($val['ID']) ?>
                                    <?php echo $comment['approved'] ?>
                                </div>
                                <div class="content">
                                    <?php echo mb_substr(strip_tags($val['post_content']), 0, 100, 'utf-8');?>
                                    ...
                                </div>
                            </div>
                        </article>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>
    <?php if (isset($top_bar['third_cate']) && $top_bar['third_cate'] != ''): ?>
        <?php $third_cate = get_posts(array('numberposts' => 3, 'category' => $top_bar['third_cate'])); ?>
        <?php foreach ($third_cate as $key => $val): ?>
            <?php $third_cate[$key] = get_object_vars($val); ?>
        <?php endforeach; ?>
        <section id="third_cate">
            <div class="container">
                <div class="page-header">
                    <?php $third_cate_title = get_category($top_bar['third_cate'], ARRAY_A); ?>
                  <h2><?php echo $third_cate_title['cat_name'] ?>
                      <small><?php echo $third_cate_title['category_description'] ?></small>
                  </h2>
                </div>
                <?php foreach ($third_cate as $val): ?>
                    <a href="<?php echo wp_get_shortlink($val['ID']) ?>">
                        <article class="col-sm-3 post-content">
                            <?php if (has_post_thumbnail($val['ID'])): ?>
                                <div class="post-thumb-img"  style="
                                    background:url('<?php echo get_img_url($val['ID']); ?>');
                                    background-size: cover;
                                    background-attachment: fixed;
                                    background-position: center;
                                    background-repeat: no-repeat;
                                    width:100%;
                                    height:200px;
                                ">
                                </div>
                            <?php endif; ?>
                            <div class="post-title">
                                <?php echo $val['post_title'] ?>
                            </div>
                            <div class="post-meta">
                                <i class="glyphicon glyphicon-time"></i>&nbsp;
                                <?php echo DATE('Y-m-d', strtotime($val['post_date'])) ?>&nbsp;
                                <i class="glyphicon glyphicon-comment"></i>&nbsp;
                                <?php $comment = get_comment_count($val['ID']) ?>
                                <?php echo $comment['approved'] ?>
                            </div>
                            <div class="content">
                                <?php echo mb_substr(strip_tags($val['post_content']), 0, 100, 'utf-8');?>
                                ...
                            </div>
                        </article>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>
</main>
<script type="text/javascript">
    (function($){
        $(document).ready(function(e){
             hover_img();
        });
        function hover_img()
        {
            $('.post-thumb-img').mouseover(function(e){
                $(this).css({
                    'background-color':'#85AF4B',
                    'background-blend-mode':'multiply'
                });
            }).mouseout(function(e){
                $(this).css({'background-color':'#FFFFFF'});

            });
        }
    })(jQuery)
</script>
<?php include 'home_sidebar.php' ?>
<?php include 'footer.php' ?>
