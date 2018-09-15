<?php get_header(); ?>

<div id="primary" class="site-content">
    <div id="content" role="main">

        <?= \site\dogrids\template( 'page/content-front-page-intro' ); ?>
        <?= \site\dogrids\template( 'page/content-front-page-2cols' ); ?>
        <?= \site\dogrids\template( 'page/content-front-page-2cols-left' ); ?>
        <?= \site\dogrids\template( 'page/content-front-page-2cols-right' ); ?>
        <?= \site\dogrids\template( 'page/content-front-page-3cols' ); ?>
        <?= \site\dogrids\template( 'page/content-front-page-4cols' ); ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
