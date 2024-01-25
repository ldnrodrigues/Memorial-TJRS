<?php
/*
    Template Name: Palácio Modernista Páginas
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta <?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="google-site-verification" content="eIzhedz12BaV0e53cdoe6xM5a4bUv0Fcz00Irx8b8Bo" />

    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!--Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />

    <?php wp_head(); ?>

    <style>
      body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        letter-spacing: -0.5px;
      } 
      .content {
        flex: 1;
      }
      #breadcrumb {
        font-size: 10pt;
      }
      #breadcrumb a {
        color: rgb(40,116,252);
        text-decoration: none;
      }
      #breadcrumb a:hover {
        color: rgb(40,116,252);
        text-decoration: underline;
      }
      .my-custom-padding {
        padding-top: 150px; /* Adicione o valor de padding superior desejado aqui */
      }
      .wp-block-buttons {
        margin-top: 20px;
      }
      .wp-block-button {
				transition: opacity 0.5s ease-in-out;
			}
			.wp-block-button:hover {
				opacity: 0.7;
			}
      .site-name {
        color: black;
        font-weight: bold;
        text-decoration: underline;
        text-decoration-color: rgb(40,116,252);
      }
      .site-second-name {
        color: black;
        text-decoration: underline;
        text-decoration-color: rgb(40,116,252);
      }
      .site-second-name:hover {
        color: black;
        text-decoration: none;
      }
      .site-name:hover {
        color: rgb(40,116,252);
        text-decoration: none;
      }
      .custom-padding {
        padding-top: 30px;
      }
      .to-the-top {
        background: rgb(40,116,252);
        border-radius: 50%;
        border-color: rgb(40,116,252);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50px;
        position: fixed;
        right: 70px;
        bottom: 115px;
        width: 50px;
        opacity: 0;
        transition: opacity 0.3s ease;
        border: none;
        outline: none;
        cursor: pointer;
      }
      .to-the-top.show {
        opacity: 1;
      }
      .fa {
        font-size: 24px;
        color: white;
        transition: transform 0.3s ease;
      }
      .to-the-top:hover .fa {
        transform: translateY(-5px);
      }
      /* Estilos CSS para a lightbox e navegação */
      .lightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
      }
      .lightbox-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
      }
      .lightbox-close {
        color: #fff;
        font-size: 30px;
        cursor: pointer;
        position: absolute;
        right: 10px;
      }
      .lightbox-image {
          max-width: 80%;
          max-height: 80%;
      }
      .lightbox-prev,
      .lightbox-next {
        font-size: 30px;
        cursor: pointer;
        color: #fff;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
      }
      .lightbox-prev {
        left: 10px;
      }
      .lightbox-next {
        right: 10px;
      }
      img.alignright {float:right; margin:0 0 1em 1em}
      img.alignleft {float:left; margin:0 1em 1em 0}
      img.aligncenter {display: block; margin-left: auto; margin-right: auto}
      a img.alignright {float:right; margin:0 0 1em 1em}
      a img.alignleft {float:left; margin:0 1em 1em 0}
      a img.aligncenter {display: block; margin-left: auto; margin-right: auto}
    </style>

</head>

<div class="container mb-5 my-custom-padding">
  <div id="breadcrumb">

    <?php
      if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }
    ?>
  </div>

<h1 class="mb-4"><?php the_title(); ?></h1>

    <?php the_content(); ?>

    <div class="wp-block-buttons alignwide is-layout-flex wp-block-buttons-is-layout-flex">
<div class="wp-block-button"><a class="wp-block-button__link" href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/visita-ao-palacio-modernista/">Início</a></div>



<div class="wp-block-button"><a class="wp-block-button__link" href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/visita-ao-palacio-modernista/acessibilidade-maquete-tatil/" style="border-radius:10px;background:linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 23%,rgb(65,88,208) 100%);">Acessibilidade</a></div>



<div class="wp-block-button"><a class="wp-block-button__link" href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/visita-ao-palacio-modernista/publicacoes-nas-redes-sociais/" style="border-radius:10px;background:linear-gradient(135deg,rgb(11,192,224) 0%,rgb(128,208,199) 100%);">Detalhamento do edifício</a></div>



<div class="wp-block-button"><a class="wp-block-button__link" href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/visita-ao-palacio-modernista/podcast/" style="border-radius:10px;background:linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 43%);">Podcast</a></div>



<div class="wp-block-button"><a class="wp-block-button__link" href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/visita-ao-palacio-modernista/webinario/" style="border-radius:10px;background:linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);">Webinário</a></div>



<div class="wp-block-button"><a class="wp-block-button__link" href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/visita-ao-palacio-modernista/visita-virtual-filme/" style="border-radius:10px;background:linear-gradient(135deg,rgb(3,130,113) 0%,rgb(40,116,252) 100%);">Visita Virtual – filme</a></div>
</div>
  <div class="site-info custom-padding">

				<a class="site-name " href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/visita-ao-palacio-modernista/" rel="home">Visita ao Palácio da Justiça do RS</a> 
        <a>/</a> 
        <a class="site-second-name " href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/" rel="home">Voltar ao Memorial</a> 
        <button id="scrollToTopBtn" class="to-the-top" onclick="scrollToTop()" title="Voltar ao Topo">
            <i class="fa fw fa-arrow-up"></i></button>
        </button>

    <script>
        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        window.addEventListener('scroll', function () {
            var scrollToTopBtn = document.getElementById("scrollToTopBtn");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopBtn.classList.add('show'); /* Adiciona a classe 'show' para tornar o botão visível */
            } else {
                scrollToTopBtn.classList.remove('show'); /* Remove a classe 'show' para tornar o botão invisível */
            }
        });
        jQuery(document).ready(function($) {
    $('.gallery').on('click', 'a', function(event) {
        event.preventDefault();

        var gallery = $(this).closest('.gallery');
        var images = gallery.find('a');
        var currentIndex = images.index(this);

        // Cria a lightbox
        var lightbox = $('<div class="lightbox" id="myLightbox">' +
                            '<div class="lightbox-content">' +
                                '<span class="lightbox-close" onclick="closeLightbox()">&times;</span>' +
                                '<img class="lightbox-image" src="" alt="">' +
                                '<span class="lightbox-prev" onclick="prevImage()">&#10094;</span>' +
                                '<span class="lightbox-next" onclick="nextImage()">&#10095;</span>' +
                            '</div>' +
                        '</div>');

        // Adiciona a lightbox ao corpo do documento
        $('body').append(lightbox);

        // Carrega a imagem atual na lightbox
        updateLightbox(currentIndex);

        // Exibe a lightbox
        lightbox.show();
    });

    // Função para fechar a lightbox
    window.closeLightbox = function() {
        $('#myLightbox').remove();
    };

    // Função para navegar para a imagem anterior
    window.prevImage = function() {
        var currentIndex = parseInt($('.lightbox-image').attr('data-index'));
        updateLightbox(currentIndex - 1);
    };

    // Função para navegar para a próxima imagem
    window.nextImage = function() {
        var currentIndex = parseInt($('.lightbox-image').attr('data-index'));
        updateLightbox(currentIndex + 1);
    };

    // Função para atualizar a imagem na lightbox
    function updateLightbox(index) {
        var gallery = $('.gallery');
        var images = gallery.find('a');
        var totalImages = images.length;

        // Garante que o índice esteja no intervalo válido
        index = (index + totalImages) % totalImages;

        var imageUrl = images.eq(index).attr('href');

        // Atualiza a imagem na lightbox
        $('.lightbox-image').attr('src', imageUrl);
        $('.lightbox-image').attr('data-index', index);
    }
});

    </script>
	</div><!-- .site-info -->
    </div>
  <!-- /.container -->
