<?php

namespace site\dogrids\domain;

use trsenna\dalen\data\contracts\LoadableModelInterface;
use trsenna\dalen\data\foundation\LoadableModelTrait;
use trsenna\dalen\kernel\contracts\ServiceProviderInterface;
use trsenna\dalen\kernel\foundation\ServiceProviderTrait;

class IntroModel implements LoadableModelInterface, ServiceProviderInterface
{
    use LoadableModelTrait;
    use ServiceProviderTrait;

    public function load()
    {
        return [
            'title' => "Don't Overthink Grids",
            'classes' => [ 'front-page-intro' ],
        ];
    }
}
