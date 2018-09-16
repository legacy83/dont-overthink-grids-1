<?php /** @var stdClass $columns */ ?>

<section class="<?= implode( ' ', $columns->classes ); ?>">

    <header class="entry-header">
        <h2 class="entry-title"><?= $columns->title; ?></h2>
    </header>

    <div class="entry-content">
        <p>Cras ornare nulla quis lobortis pellentesque. Aenean hendrerit, orci ut consequat commodo, orci lorem viverra
            est, non pharetra tortor felis eu metus. Integer interdum libero sapien.</p>

        <div class="col-wrap">
            <?php foreach ( range( 1, intval( $columns->size ) ) as $index ) : ?>
                <div class="col">
                    <h4>.col</h4>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>
