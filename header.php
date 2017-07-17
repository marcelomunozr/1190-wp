<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php wp_title( ' - ', true, 'right' ); ?>1190 Sports</title>

    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/dist/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/dist/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700,400italic,300italic,700italic' rel='stylesheet' type='text/css'>

    <?php 
        $og = get_field("og-img", "option");
        $descripcion = get_field("descripcion", "option");
    ?>
    <!-- OGt -->
    <meta property="og:title" content="1190 Sports">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">
    <meta property="og:image" content="<?php echo $og; ?>">
    <meta property="og:description" content="<?php echo $descripcion; ?>">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <!-- /OG -->

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/styles/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/styles/custom.css">
    
    
    <script type="text/javascrit" src="http://www.youtube.com/iframe_api"></script>
    <?php wp_head(); ?>
</head>
<body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">Su navegador esta <strong>desactualizado</strong>. Por favor <a href="http://browsehappy.com/">actualiza tu navegador</a> para obtener una mejor experiencia.</p>
    <![endif]-->

