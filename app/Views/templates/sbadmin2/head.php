<!doctype html>
<html lang="en">
<head>
    <!-- bootstrap template: SB Admin 2 -->
    <!-- modified by Xcy7e -->
    <!-- visit https://github.com/xcy7e/Codeigniter4Bootstrap -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=esc($title)?></title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url('favicon.ico')?>">

    <!-- Font-Awesome 5.15.3 -->
    <link rel="stylesheet" href="<?=base_url('assets/vendor/font-awesome/font-awesome-5.15.3/css/all.min.css')?>" type="text/css">

    <!-- Google Font: Nunito -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Bootstrap 5.0.1 CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/vendor/bootstrap/bootstrap-5.0.1/dist/css/bootstrap.css')?>" type="text/css">

    <!-- sbadmin2 template css -->
    <link rel="stylesheet" href="<?=base_url('assets/templates/sbadmin2/css/sbadmin2.min.css')?>" type="text/css">

    <?php if(isset($navbar_css) && $navbar_css==true): ?>
        <!-- individual navigation CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/sections/navigation/css/nav_'.$navbar.'.css')?>" type="text/css">
    <?php endif; ?>
    <?php if(isset($navbar_js) && $navbar_js==true): ?>
        <!-- individual navigation JS -->
        <script type="text/javascript" src="<?=base_url('assets/sections/navigation/js/nav_'.$navbar.'.js')?>"></script>
    <?php endif; ?>

    <!-- global custom css -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>" type="text/css">
</head>
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">