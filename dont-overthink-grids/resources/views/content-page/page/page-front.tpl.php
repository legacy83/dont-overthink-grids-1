<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php foreach ( \DOGrids\component( \DOGrids\IntroRepeater::class ) as $intro ): ?>

            <?= \DOGrids\view( 'content-page/panel/panel', 'intro' )->render( [
                'intro' => $intro,
            ] ); ?>

        <?php endforeach; ?>

        <?php foreach ( \DOGrids\component( \DOGrids\ColumnsRepeater::class ) as $columns ): ?>

            <?= \DOGrids\view( 'content-page/panel/panel', 'columns' )->render( [
                'columns' => $columns,
            ] ); ?>

        <?php endforeach; ?>

    </main><!-- #main -->
</div><!-- #primary -->
