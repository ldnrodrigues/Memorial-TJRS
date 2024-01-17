<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta <?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="google-site-verification" content="eIzhedz12BaV0e53cdoe6xM5a4bUv0Fcz00Irx8b8Bo" />

    <!--Style.css-->
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">

    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!--Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />

    <?php wp_head(); ?>
    
</head>

<body>

<!-- barra de acessibilidade -->
<?php include(get_template_directory() . '/barra-acessibilidade.php'); ?>

<!-- Header -->
<div class="container-fluid navbar__atalhos">
    <div class="container-topo">
        <div class="first-container">
		    <div style="position: relative!important; width:100%!important; height: 40px!important; font-size: 10pt!important;">
			    <div>
				<label style="margin-top: 10px;"><a href="http://transparencia.tjrs.jus.br/" target="_blank" title="Transpar&ecirc;ncia" class="hot_sites">Transpar&ecirc;ncia</a></label>
				<label style="margin-left: 20px;"><a href="https://www.tjrs.jus.br/novo/institucional/transparencia/ouvidoria/" target="_blank" title="Ouvidoria" class="hot_sites">Ouvidoria</a></label>
				<label style="margin-left: 20px;"><a href=" https://www.tjrs.jus.br/novo/processos-e-servicos/servicos-processuais/balcao-virtual/" target="_blank" title="Balc&atilde;o Virtual" class="hot_sites">Balc&atilde;o Virtual</a></label>
				<label style="margin-left: 20px;"><a href="http://www.agenciaradioweb.com.br/novosite4/themis/index.php" target="_blank" title="Rádio Themis" class="hot_sites">R&aacute;dio Themis</a></label>
				<label style="margin-left: 20px;" class="link-informativo-eletronico"><a href="https://www.tjrs.jus.br/novo/comunicacao/noticias-do-tjrs/informativo-eletronico/" target="_blank" title="Informativo" class="hot_sites">Informativo</a></label>
				<label style="margin-left: 20px;"><a href="https://www.tjrs.jus.br/novo/comunicacao/noticias-do-tjrs/justica-gaucha-na-tv/" target="_blank" title="Justi&ccedil;a Ga&uacute;cha na TV" class="hot_sites">Justi&ccedil;a Ga&uacute;cha na TV</a></label>
				<label style="margin-left: 20px;" class="link-tjrs-na-midia"><a href="https://www.tjrs.jus.br/novo/comunicacao/tjrs-e-a-imprensa/clipping/" target="_blank" title="TJRS na M&iacute;dia" class="hot_sites">TJRS na M&iacute;dia</a></label>
			</div>
        </div>
    </div>
        <div class="icones-container">
            <div class="icones">

                <a class="navbar-brand" href="http://www.facebook.com/tjrsnoticias" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Facebook Icon.png" width="22" height="22" alt="Facebook Logo">
                </a>
                <a class="navbar-brand" href="https://www.instagram.com/memorialtjrs/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Instagram Icon.png" width="22" height="22" alt="Instagram Logo">
                </a>
                <a class="navbar-brand" href="https://www.youtube.com/@tjrsnoticias" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Youtube Icon.png" width="24" height="24" alt="Youtube Logo">
                </a>
                <a class="navbar-brand" href="http://twitter.com/tjrsoficial" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/X Icon.png" width="24" height="24" alt="X Logo">
                </a>
                <a href="https://soundcloud.com/user-891322221/podcast-gestando-memorias-ep-0-piloto?si=781aad14318a4d97afc0d004f2b5cc80&utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Soundcloud.png" width="25" height="25" alt="soundcloud logo">
                </a>
                <a class="navbar-brand" href="https://open.spotify.com/show/7uBe18SphskTPyeCKHAI4V" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Spotify Icon.png" width="24" height="24" alt="Spotify Logo">
                </a>
                <a class="navbar-brand" href="https://www.flickr.com/photos/tjrsoficial/albums" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Flickr Icon.png" width="24" height="24" alt="Flickr Logo">
                </a>
                <a class="navbar-brand" href="https://www.linkedin.com/company/tjrs" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/LinkedIn Icon.png" width="24" height="24" alt="LinkedIn Logo">
                </a>

            </div>
        </div>
    </div>
</div>

<!-- Banner -->
    <div class="banner-image">
        <a href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/">
            <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Banner/Banner-Memorial.png" class="img-fluid">
        </a>
    </div>

    <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark desktop-navbar" role="navigation">
            <div class="container" id="menu">

            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand text-expanded" href="<?php echo get_site_url(); ?>/index.php"><img src="<?php echo get_template_directory_uri(); ?>/Imagens/Logos/Logo Memorial.png" class="memorial-icon img-fluid"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            wp_nav_menu( array(
                'theme_location'    => 'principal',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse justify-content-center',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>

        </div>
    </nav>

<script>
var lastScrollTop = 0;

function handleScroll() {
    // Verifica se a largura da tela é menor que 1024 pixels (dispositivos móveis)
    if (window.innerWidth < 1024) {
        var st = $(this).scrollTop();
        var navbar = $('.navbar');

        if (st > lastScrollTop) {
            // Rolou para baixo
            navbar.fadeOut('fast');
        } else {
            // Rolou para cima
            if (st === 0) {
                navbar.removeClass('fixed-top').fadeIn('fast');
            } else {
                navbar.addClass('fixed-top').fadeIn('fast');
            }
        }
        lastScrollTop = st;
    } else {
        // Se a largura da tela for maior ou igual a 1024 pixels, remova a classe fixa
        $('.navbar').removeClass('fixed-top');
    }
}
// Chamando a função no carregamento da página e no evento de rolagem e redimensionamento
$(document).ready(function () {
    handleScroll();

    $(window).on('scroll resize', function () {
        handleScroll();
    });
});
</script>

</body>
