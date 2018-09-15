<?php /** @var stdClass $column */ ?>

<section class="<?= implode( ' ', $column->classes ); ?>">

    <header class="entry-header">
        <h2 class="entry-title"><?= $column->title; ?></h2>
    </header>

    <div class="entry-content">
        <p>Cras ornare nulla quis lobortis pellentesque. Aenean hendrerit, orci ut consequat commodo, orci lorem viverra
            est, non pharetra tortor felis eu metus. Integer interdum libero sapien.</p>

        <div class="col-wrap">
            <?php foreach ( range( 1, intval( $column->columns ) ) as $col ) : ?>
                <div class="col">
                    <h4>.col</h4>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>
