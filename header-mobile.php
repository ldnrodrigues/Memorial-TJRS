<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <?php wp_head(); ?>

</head>

<body>

<!-- topo -->
    <div class="header">
        <nav class="navbar bg-light">

            <div class="logo-tjrs">
                <a class="navbar-brand" href="https://www.tjrs.jus.br/novo/" target="_blank">
                    <img src="https://seeklogo.com/images/P/poder-judiciario-do-estado-do-rio-grande-do-sul-logo-187652D7F6-seeklogo.com.png" width="130" height="42.5" alt="logo judiciário">
                </a>
            </div>

                <div class="grupo-icones">
                    <div class="icones">
                    <a class="navbar-brand" href="http://www.facebook.com/tjrsnoticias" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Facebook Icon.png" width="20" height="20" alt="Facebook Logo">
                    </a>
                    <a class="navbar-brand" href="https://www.instagram.com/memorialtjrs/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Instagram Icon.png" width="20" height="20" alt="Instagram Logo">
                    </a>
                    <a class="navbar-brand" href="https://www.youtube.com/@tjrsnoticias" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Youtube Icon.png" width="22" height="22" alt="Youtube Logo">
                    </a>
                    <a class="navbar-brand" href="http://twitter.com/tjrsoficial" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/X Icon.png" width="22" height="22" alt="X Logo">
                    </a>
                    <a class="navbar-brand" href="https://open.spotify.com/show/7uBe18SphskTPyeCKHAI4V" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Spotify Icon.png" width="22" height="22" alt="Spotify Logo">
                    </a>
                    <a class="navbar-brand" href="https://www.flickr.com/photos/tjrsoficial/albums" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Flickr Icon.png" width="22" height="22" alt="Flickr Logo">
                    </a>
                    <a class="navbar-brand" href="https://www.linkedin.com/company/tjrs" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/LinkedIn Icon.png" width="22" height="22" alt="LinkedIn Logo">
                    </a>
                </div>
            </div>
        </nav>
    </div>

<!-- Header -->
    <div class="banner-image">
        <a href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/">
            <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Banner/Banner-Memorial.png" class="img-fluid">
        </a>
    </div>

        <!-- Navbar -->
            <nav class="nav navbar-expand-lg justify-content-center" id="mainNav">
                <div id="menu">
                    <a class="navbar-brand text-expanded"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'principal',
                        'depth'             => 2,
                        'container'         => 'nav',
                        'container_class'   => 'navbar-expand-lg collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>
                </div>
            </nav>
