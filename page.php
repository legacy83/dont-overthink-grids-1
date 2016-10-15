<?php get_header(); ?>

    <div id="primary" class="site-content">
        <div id="content" role="main">

            <?php if ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
            <?php endif; ?>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>