<?php /** @var string $title */ ?>
<?php /** @var integer $columns */ ?>
<?php /** @var array $classes */ ?>

<section class="<?= implode( ' ', $classes ); ?>">

    <header class="entry-header">
        <h2 class="entry-title"><?= $title; ?></h2>
    </header>

    <div class="entry-content">
        <p>Cras ornare nulla quis lobortis pellentesque. Aenean hendrerit, orci ut consequat commodo, orci lorem viverra
            est, non pharetra tortor felis eu metus. Integer interdum libero sapien.</p>

        <div class="col-wrap">
            <?php foreach ( range( 1, intval( $columns ) ) as $column ) : ?>
                <div class="col">
                    <h4>.col</h4>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>
