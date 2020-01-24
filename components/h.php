<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php get_title(); ?></title>
    <?php
    fonts([['Lato','300,400'],['Eiforya','400']]);
    get_styles(['reset','inputs','micro','bootstrap','select2','datepicker','ui',PAGEPATH]);
    get_scripts(['jquery']);
    icons();
    ?>
</head>
<body <?php body_class(); ?>>
<header>
    <a href="<?php echo APPURL; ?>" class="brand">AIO</a>
    <a id="user" href="<?php echo APPURL; ?>users/profile" class="<?php echo page_is('users/profile') ? 'on' : ''; ?>">
        <div class="pic" style="background-image:url('<?php echo APPURL . 'apps/' . APPDIR . '/assets/images/user.jpg'; ?>')"></div>
        <div class="name">Shaikh Moinuddin</div>
    </a>
    <?php get_comp('nav'); ?>
    <div class="copy">AIO CMS v1.0</div>
</header>