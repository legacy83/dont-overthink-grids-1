<?php

namespace site\dogrids\domain\service;

use site\dogrids\infrastructure\ServiceProvidedTrait;
use trsenna\dalen\data\contracts\LoadableModelIterface;
use trsenna\dalen\data\foundation\LoadableModelTrait;
use trsenna\dalen\kernel\contracts\ServiceProviderInterface;

class Intro implements LoadableModelIterface, ServiceProviderInterface
{
    use LoadableModelTrait;
    use ServiceProvidedTrait;

    public function load()
    {
        return [
            'title' => "Don't Overthink Grids",
            'classes' => [ 'front-page-intro' ],
        ];
    }
}
