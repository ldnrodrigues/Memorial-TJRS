<?php
/*
    Template Name: Ações e Eventos
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

<div class="row">
  <div class="col col-sm-3">
  <div class="notification">
    <div class="notiglow"></div>
    <div class="notiborderglow"></div>
    <a href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/acoes-e-eventos/exposicoes-virtuais/" class="notititle">Exposições Virtuais</a>
    <div class="notibody">Página sem Conteúdo Atualmente</div>
  </div>
</div>

<div class="col col-sm-3">
  <div class="notification card-2">
    <div class="notiglow"></div>
    <div class="notiborderglow"></div>
    <a href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/acoes-e-eventos/formando-geracoes/" class="notititle">Formando Gerações</a>
    <div class="notibody">O Programa Formando Gerações promove [...]</div>
  </div>
</div>

<!-- /.row -->
</div>

</div>
<!-- /.container -->

<?php get_footer(); ?>
