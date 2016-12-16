<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php (is_singular() && get_option('thread_comments')) ? wp_enqueue_script('comment-reply') : ''; ?>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>
<header class="header">
    <div class="top-nav">
        <?php $top_bar = get_option('top_bar_option'); ?>
        <div class="container">
            <ul class="top-nav-ul">
                <?php if ($top_bar['facebook'] != ''): ?>
                    <li>
                        <a href="<?php echo $top_bar['facebook']; ?>">
                            <i class="fa fa-facebook-official"></i>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="logo">

    </div>
    <?php wp_nav_menu(array('menu' => 'primary')) ?>
</header>
