<?php

namespace site\dogrids\domain\service;

use site\dogrids\domain\shared\AbstractModel;

class Intro extends AbstractModel
{
    protected function load()
    {
        return [
            'title' => "Don't Overthink Grids",
            'classes' => [ 'front-page-intro' ],
        ];
    }
}
