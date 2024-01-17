<?php get_header(); ?>

<!-- Page Content -->
<div class="container mb-5 my-custom-padding">
    <div class="row">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="col-md-12">

                <div id="breadcrumb">

                    <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>
            </div>

            <h1 class="mb-4"><?php the_title(); ?></h1>
            
            <!-- hr visível apenas em dispositivos desktop -->
            <hr class="d-none d-sm-block" style="border-top: 2px solid red;">

            <!-- hr visível apenas em dispositivos móveis -->
            <hr class="d-block d-sm-none custom-hr" style="border-top: 4px solid red;">

            <?php the_content(); ?>

        </div>
        <?php endwhile; ?>
        <?php else : get_404_template(); endif; ?>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>