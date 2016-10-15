<?php get_header(); ?>

    <div id="primary" class="site-content">
        <div id="content" role="main">

            <?php get_template_part( 'components/page/content', 'front-page-intro' ); ?>
            <?php get_template_part( 'components/page/content', 'front-page-2cols' ); ?>
            <?php get_template_part( 'components/page/content', 'front-page-3cols' ); ?>
            <?php get_template_part( 'components/page/content', 'front-page-4cols' ); ?>
            <?php get_template_part( 'components/page/content', 'front-page-2cols-left' ); ?>
            <?php get_template_part( 'components/page/content', 'front-page-2cols-right' ); ?>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>