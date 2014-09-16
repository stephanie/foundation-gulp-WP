<!DOCTYPE html>
<!--[if IE 7]>    <html class="no-js ie7 ie-oldie ie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 ie-oldie ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if !IE]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <script src="<?= IMAGEPATH ?>/library/production/js/vendor/placeholders.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body <? body_class(); ?>>

    <? include (THEMEPATH.'includes/partials/_navigation_main.php'); ?>

    <div class="container page-container">