<?php
    $slider = get_posts(array('numberposts' => 5));
    //物件轉陣列
    foreach ($slider as $key => $val) {
        $slider[$key] = get_object_vars($val);
    }

?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php foreach ($slider as $key => $val): ?>
            <?php if (has_post_thumbnail($val['ID'])):?>
                <?php if ($key == 0): ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $key; ?>" class="active"></li>
                <?php else: ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $key; ?>"></li>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </ol>
    <div class="carousel-inner" role="listbox">
        <?php foreach ($slider as $key => $val): ?>
            <?php if (has_post_thumbnail($val['ID'])): ?>
                <div class="item <?php echo ($key == 0) ? 'active' : ''; ?>">
                    <a href="<?php echo wp_get_shortlink($val['ID']); ?>">
                        <div style="
                            background:url('<?php echo get_img_url($val['ID']); ?>');
                            background-size: cover;
                            background-attachment: fixed;
                            background-position: center;
                            width:100%;
                            height:750px;
                            "></div>
                        <div class="carousel-caption">
                            <h2><?php echo $val['post_title']; ?></h2>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="clearfix"></div>
