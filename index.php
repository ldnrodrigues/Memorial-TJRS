<?php get_header(); ?>

    <div class="col mb-5">
        <div id="custom-carousel" class="carousel slide">
            <div class="carousel-inner">
                <?php
                $my_args_banner = array(
                    'post_type' => 'banners',
                    'posts_per_page' => 5,
                );
                $my_query_banner = new WP_Query($my_args_banner);

                if ($my_query_banner->have_posts()) :
                    $c = 0;
                    while ($my_query_banner->have_posts()) :
                        $my_query_banner->the_post();
                ?>

                        <div class="carousel-item <?php $c++;
                            if ($c == 1) {
                                echo ' active';
                            } ?>">
                        <?php
                        $banner_link = get_post_meta(get_the_ID(), 'link_banner', true);
                            if (!empty($banner_link)) {
                                echo '<a href="' . esc_url($banner_link) . '">';
                            }
                        the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive border-0', 'style' => 'max-width: 100%;')) ?>
                    </div>

                <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>

            <ol class="carousel-indicators custom-indicators">
                <?php
                $slide_number = 0;
                $my_query_banner = new WP_Query($my_args_banner);

                while ($my_query_banner->have_posts()) {
                    $my_query_banner->the_post();
                    $slide_number++;

                    // Define a classe "active" para o primeiro indicador
                    $indicator_class = ($slide_number === 1) ? 'active' : '';

                    echo '<li data-bs-target="#custom-carousel" data-bs-slide-to="' . esc_attr($slide_number - 1) . '" class="' . esc_attr($indicator_class) . '"></li>';
                }

                wp_reset_postdata();
                ?>
            </ol>

            <button class="carousel-control-prev custom-control-button" role="button" data-bs-target="#custom-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon d-none d-md-inline"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next custom-control-button" role="button" data-bs-target="#custom-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon d-none d-md-inline"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>

<!-- Page Content -->
<div class="container mb-6" id="conteudo">
    <div class="row">    
        <a href="#"></a><h1 class="recentes">Notícias Recentes</h1>

        <!-- hr visível apenas em dispositivos desktop -->
        <hr class="d-none d-sm-block" style="border-top: 4px solid red;">

        <!-- hr visível apenas em dispositivos móveis -->
        <hr class="d-block d-sm-none custom-hr" style="border-top: 4px solid red;">

        <?php
        // Recuperar as IDs das páginas da opção de personalização
        $paginas_inicio_ids = get_theme_mod('paginas_inicio_ids');

        if (!empty($paginas_inicio_ids)) {
            $page_ids = explode(',', $paginas_inicio_ids);
            $page_ids = array_map('trim', $page_ids);

            // Argumentos
            $my_args = array(
                'post_type' => 'post',
                'posts_per_page' => count($page_ids),
                'order' => 'DESC',
            );

            // Query
            $my_query = new WP_Query($my_args);
            $count = 0;

            if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();

                if ($count > 0) :
                    ?>
                    <hr class="d-none d-md-block" style="border-top: 4px solid red;">
                <?php
                endif;
                ?>

                <div class="col-md-12 mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php echo get_permalink(); ?>" id="image-zoom">
                                        <?php the_post_thumbnail('imagem-noticia', array('class' => 'img-fluid'));
                                        ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                            <div class="col-md-6">
                                <a href="<?php the_permalink(); ?>" id="title-link">
                                    <h2 class="title-black custom-padding">
                                        <span><?php the_title(); ?></span>
                                    </h2>
                                </a>
                            <div class="post-text custom-padding-text">
                        <?php the_excerpt(); ?>
                    </div>
                <p class="custom-text-color">por Memorial do Judiciário do RS<br><span><?php echo date('d/m/Y', get_post_time()); ?></span></p>
            </div>
        </div>
    </div>

    <?php
    $count++;
    endwhile;
    endif;

        wp_reset_query();
        }
        ?>
    </div>
</div>

<br>
<hr style="border-top: 2px dashed red; width: 68%; margin: 0 auto;">

<div class="d-flex justify-content-center">
    <a href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/noticias/"><button class="btn btn-lg" type="button" id="botao-noticias">Veja Todas as Notícias</button></a>
</div>

<?php get_footer(); ?>

