<?php get_header(); ?>

<div class="container mb-5 my-custom-padding">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-12">
                <div id="breadcrumb">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                </div>

                <h1 class="mb-4"><?php the_title(); ?></h1>

                <!-- hr visível apenas em dispositivos desktop -->
                <hr class="d-none d-sm-block" style="border-top: 2px solid red;">

                <!-- hr visível apenas em dispositivos móveis -->
                <hr class="d-block d-sm-none custom-hr" style="border-top: 4px solid red;">

                    <?php the_content(); ?>

                    <h1 class="data-position-2 mt-3">
                        Publicado por: <?php the_author(); ?><br>
                        <span>Data: <?php echo get_the_date('d/m/Y'); ?></span>
                    </h1>

                    <div class="share-buttons mt-2 mb-1">
                        <h1 class="data-position-2">Compartilhe!</h1>
                    </div>

                    <div class="icones-sociais d-flex">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Facebook Icon.png" width="24" height="24" alt="facebook logo">
                        </a>
                        <a href="http://www.instagram.com/memorialtjrs" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Instagram Icon.png" width="24" height="24" alt="instagram logo">
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/X Icon.png" width="24" height="24" alt="twitter logo">
                        </a>
                    </div>

                </div>

            <?php endwhile; ?>
        <?php else : get_404_template(); endif; ?>

        <!-- hr visível apenas em dispositivos desktop -->
        <hr class="hr-text d-none d-sm-block mt-3" data-content="FIM DA NOTÍCIA">

        <!-- hr visível apenas em dispositivos móveis -->
        <hr class="hr-text d-block d-sm-none mt-4" data-content="FIM DA NOTÍCIA">

        <div class="recent-news">
            <a href="#"></a><h3 class="col-12 mb-3">Mais Recentes</h3>
        </div>

            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC'
            );

            $recent_posts = new WP_Query($args);

            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                    <div class="col-md-4 mb-3 mt-3 d-flex justify-content-center">
                        <div class="card" style="width:400px">
                            <div class="card-noticias">
                                <div class="card-thumbnail">
                                    <a href="<?php echo get_permalink(); ?>" id="image-zoom">
                                        <?php the_post_thumbnail('custom-thumbnail-size', array('class' => 'img-fluid')); ?>
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">
                                <a href="<?php the_permalink(); ?>">
                                    <h4 class="title-link-2">
                                        <?php
                                        $title = get_the_title();
                                        $max_title_length = 56;
                                        if (mb_strlen($title) > $max_title_length) {
                                            $title = mb_substr($title, 0, $max_title_length) . '...';
                                        }
                                        echo '<p>' . $title . '</p>';
                                        ?>
                                    </h4>
                                </a>
                                <p class="data-position-2">
                                    por <?php the_author(); ?><br>
                                    <span><?php echo get_the_date('d/m/Y'); ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p class="col-12">Nenhum post encontrado.</p>
            <?php endif; ?>

    <div class="d-flex justify-content-center">
        <a href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/noticias/"><button class="btn btn-lg" type="button" id="botao-noticias-2">Ver Mais Notícias</button></a>
    </div>

    <!-- /.row -->
    </div>

<!-- /.container -->
</div>

<?php get_footer(); ?>
