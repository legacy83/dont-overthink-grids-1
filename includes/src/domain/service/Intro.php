<?php

namespace site\dogrids\domain\service;

use site\dogrids\domain\shared\AbstractModel;
use site\dogrids\infrastructure\ServiceProvidedTrait;
use trsenna\dalen\kernel\contracts\ServiceProviderInterface;

class Intro extends AbstractModel implements ServiceProviderInterface
{
    use ServiceProvidedTrait;

    protected function load()
    {
        return [
            'title' => "Don't Overthink Grids",
            'classes' => [ 'front-page-intro' ],
        ];
    }
}
