<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php foreach ( \site\dogrids\component( \site\dogrids\IntroRepeater::class ) as $intro ): ?>

            <?= \site\dogrids\template( 'content-page/panel/panel', 'intro' )->render( [
                'intro' => $intro,
            ] ); ?>

        <?php endforeach; ?>

        <?php foreach ( \site\dogrids\component( \site\dogrids\ColumnsRepeater::class ) as $columns ): ?>

            <?= \site\dogrids\template( 'content-page/panel/panel', 'columns' )->render( [
                'columns' => $columns,
            ] ); ?>

        <?php endforeach; ?>

    </main><!-- #main -->
</div><!-- #primary -->
