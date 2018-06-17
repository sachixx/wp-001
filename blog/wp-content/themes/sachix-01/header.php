<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php my_description(); ?>
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
</head>
<body class="drawer  drawer--top  drawer--navbarTopGutter" style="margin: 0; padding: 0;">
    <header class="drawer-navbar drawer-navbar--fixed" role="banner">
        <div class="drawer-container container">
            <div class="drawer-navbar-header">
                <a class="drawer-brand" href="/">sachix.net</a>
                <button type="button" class="drawer-toggle drawer-hamburger">
                    <span class="sr-only">toggle navigation</span>
                    <span class="drawer-hamburger-icon"></span>
                </button>
            </div>
            <nav class="drawer-nav" role="navigation">
                <ul class="drawer-menu drawer-menu--right">
                    <li><a class="drawer-menu-item" href="/blog/">blog</a></li>
                    <li><a class="drawer-menu-item" href="/works/">works</a></li>
                    <li><a class="drawer-menu-item" href="#">about</a></li>
                </ul>
            </nav>
        </div>
    </header>