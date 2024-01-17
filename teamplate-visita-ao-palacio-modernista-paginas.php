<?php
/*
    Template Name: Palácio Modernista Páginas
*/
?>

<?php get_header(); ?>

<div class="container mb-5 my-custom-padding">
  <div id="breadcrumb">

    <?php
      if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }
    ?>
  </div>

<h1 class="mb-4"><?php the_title(); ?></h1>
  <hr style="border-top: 2px solid red;">

    <?php the_content(); ?>

      <div class="card-eventos">
        <a href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/acoes-e-eventos/formando-geracoes/;">Formando Gerações</a>
      </div>

    </div>
  <!-- /.container -->

<?php get_footer(); ?>