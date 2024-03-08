<?php
/*
    Template Name: Noticías
*/
?>

<?php get_header(); ?>

<!-- Page Content -->

<div class="container mb-5 my-custom-padding">
    <div class="row" id="ajax-posts">
        <div id="breadcrumb">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
        </div>
        <h1 class="mb-4"><?php the_title(); ?></h1>
        <hr style="border-top: 2px solid red;"><br>

        <?php
        // argumentos
        $postsPerPage = -1;
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => $postsPerPage,
        );
        // query
        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();
        ?>

        <div class="col-md-4 mb-5">
            <div class="card-1 secondary-emphasis">
                <div class="card-noticias">
                    <div class="card-thumbnail">
                        <a href="<?php echo get_permalink(); ?>" id="image-zoom">
                            <?php the_post_thumbnail('custom-thumbnail-size', array('class' => 'img-fluid')); ?>
                        </a>
                    </div>
                </div>

                <div class="card-body-1" style="background:none !important;">
                    <a href="<?php the_permalink(); ?>">
                        <h4 class="title-link padding-custom">
                            <?php
                            // Ajuste do comprimento do título e adição de "..."
                            $title = get_the_title();
                            $max_title_length = 56; // Altere conforme necessário
                            if (mb_strlen($title) > $max_title_length) {
                                $title = mb_substr($title, 0, $max_title_length) . '...';
                            }
                            echo '<p>' . $title . '</p>';
                            ?>
                        </h4>
                    </a>
                    <p class="data-position">
                        por <?php the_author(); ?><br>
                        <span><?php echo get_the_date('d/m/Y'); ?></span>
                    </p>
                </div>

            </div>
        </div>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    </div>
    <!-- row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>
