<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <div id="content" class="site-content">

        <?php if ( isset( $content ) && is_a( $content, \trsenna\dalen\template\contracts\TemplateInterface::class ) ): ?>
            <?= call_user_func( [ $content, 'render' ] ); ?>
        <?php endif; ?>

    </div><!-- #content -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
