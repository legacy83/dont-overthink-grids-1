<?php

namespace site\dogrids\domain;

class IntroFinder
{
    public function getOne()
    {
        $intro = new \stdClass();
        $intro->title = __( "Don't Overthink Grids", 'dogrids' );
        $intro->classes = [ 'front-page-intro' ];

        return $intro;
    }
}
