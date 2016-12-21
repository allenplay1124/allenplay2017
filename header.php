<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php (is_singular() && get_option('thread_comments')) ? wp_enqueue_script('comment-reply') : ''; ?>
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>
<header class="header">
    <div class="top-nav">
        <?php $top_bar = get_option('top_bar_option'); ?>
        <div class="container">
            <ul class="top-nav-ul">
                <?php if (isset($top_bar['facebook']) && $top_bar['facebook'] != ''): ?>
                    <li>
                        <a href="<?php echo $top_bar['facebook']; ?>">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (isset($top_bar['instagram']) && $top_bar['instagram'] != ''): ?>
                    <li>
                        <a href="<?php echo $top_bar['instagram']?>">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (isset($top_bar['twitter']) && $top_bar['twitter'] != ''): ?>
                    <li>
                        <a href="<?php echo $top_bar['twitter']?>">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (isset($top_bar['google']) && $top_bar['google'] != ''): ?>
                     <li>
                        <a href="<?php echo $top_bar['google']?>">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                <?php endif;?>
                <?php if (isset($top_bar['youtube']) && $top_bar['youtube'] != ''): ?>
                     <li>
                        <a href="<?php echo $top_bar['Youtube']?>">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    </li>
                <?php endif;?>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div class="top-menu">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
                    </div>
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'theme_location' => 'primary',  //這邊要填你的選單名稱
                                'depth' => 2,
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'bs-example-navbar-collapse-1',
                                'menu_class' => 'nav navbar-nav',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker(),
                            )
                        );
                    ?>
                </div>
            </nav>
        </div>
        <div class="clearfix"></div>
    </div>
</header>
