<?php

namespace site\dogrids;

component( Markup::class )
    ->layout( 'layout/main/main' )
    ->content( 'content-page/page/page', 'front' );

echo component( Markup::class )->render();
