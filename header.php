<!DOCTYPE html>
<html <?php language_attributes(); $lang = explode("lang=",get_language_attributes()); ?>>
<head>
    <title><?php echo get_bloginfo('title'); ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-language" content="<?php echo str_replace('"','',$lang[1]); ?>" />
    <meta name="language" content="<?php echo str_replace('"','',$lang[1]); ?>" />
    <meta property="og:locale" content="<?php echo str_replace('"','',$lang[1]); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo get_bloginfo('title'); ?>" />
    <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:site_name" content="<?php echo get_bloginfo('title'); ?>" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/screenshot.png" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="true">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.jetvap.com.br/views/0ff05c4ec0/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.jetvap.com.br/views/0ff05c4ec0/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.jetvap.com.br/views/0ff05c4ec0/assets/img/favicon/favicon-16x16.png">   
    <link rel="canonical" href="<?php echo site_url(); ?>" />
    <?php 
        wp_meta(); 
        wp_head();
    ?>
    <link rel="stylesheet" href="styles.min.css"> 
    <script defer src="jquery.js"></script>
    <script defer src="main.js"></script>
</head>
<body>
    <div id="wrap">
        <header class="header">
            <div class="container pt-5 pb-5 d-flex flex-wrap flex-lg-column justify-content-between align-items-center align-items-lg-end justify-content-lg-end">
                <h1 class="d-lg-none"><a href="#" title="Jet Vap - Matamato - Lavadoras a Vapor"><img src="img/logo-top-white-jetvap.webp" alt="Jet Vap - Matamato - Lavadoras a Vapor"></a></h1>
                <nav class="navigation">
                    <ul class="d-flex flex-wrap align-items-center justify-content-lg-end">
                        <li class="d-none d-md-flex me-4"><a class="nav-link" href="" title="Sobre a Mata Mato">Sobre a Mata Mato</a></li>
                        <li class="d-none d-md-flex me-4"><a class="nav-link" href="" title="Benefícios">Benefícios</a></li>
                        <li class="d-none d-md-flex me-lg-4"><a class="nav-link" href="" title="Jet Vap">Jet Vap</a></li>
                        <li class="d-none d-lg-flex ms-2 me-4">
                            <a class="btn d-flex flex-wrap align-items-center" href="tel:554130798009" title="41 3079-8009">
                                <i class="fa-solid fa-phone me-2"></i>
                                41 3079-8009
                            </a>
                        </li>
                        <li class="d-none d-lg-flex">
                            <a class="btn btn-wpp d-flex flex-wrap align-items-center flex-column align-items-center" href="https://api.whatsapp.com/send?phone=554130798009&text=Ol%C3%A1,%20" title="Whatsapp">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>  
                        <li class="d-md-none">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="main">