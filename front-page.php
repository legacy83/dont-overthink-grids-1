<?php get_header(); ?>

    <div id="primary" class="site-content">
        <div id="content" role="main">

            <?php get_template_part( 'components/page/content', 'front-page-intro' ); ?>
            <?php get_template_part( 'components/page/content', 'front-page-marketing' ); ?>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>