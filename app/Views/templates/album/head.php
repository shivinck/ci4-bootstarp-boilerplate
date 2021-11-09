<!doctype html>
<html lang="en">
<head>
    <!-- bootstrap example template: album -->
    <!-- modified by Xcy7e -->
    <!-- visit https://github.com/xcy7e/Codeigniter4Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?=esc($title)?></title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url('favicon.ico')?>">

    <!-- jQuery 3.6.0 -->
    <script type="text/javascript" src="<?=base_url('assets/vendor/jquery/jquery-3.6.0/jquery-3.6.0.min.js')?>"></script>

    <!-- Bootstrap 5.0.1 CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/vendor/bootstrap/bootstrap-5.0.1/dist/css/bootstrap.css')?>" type="text/css">

    <!-- album template CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/templates/album/css/style.album.css')?>" type="text/css">
    <!-- album template JS -->
    <script type="text/javascript" src="<?=base_url('assets/templates/album/js/script.album.js')?>"></script>

    <?php if(isset($navbar_css) && $navbar_css==true): ?>
    <!-- individual navigation CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/sections/navigation/css/nav_'.$navbar.'.css')?>" type="text/css">
    <?php endif; ?>
    <?php if(isset($navbar_js) && $navbar_js==true): ?>
    <!-- individual navigation JS -->
    <script type="text/javascript" src="<?=base_url('assets/sections/navigation/js/nav_'.$navbar.'.js')?>"></script>
    <?php endif; ?>

    <!-- global custom CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>" type="text/css">
    <!-- global custom JS -->
    <script type="text/javascript" src="<?=base_url('assets/js/script.js')?>"></script>
</head>
<body>