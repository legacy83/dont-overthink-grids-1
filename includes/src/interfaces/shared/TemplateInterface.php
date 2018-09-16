<?php

namespace site\dogrids\interfaces\shared;

interface TemplateInterface
{
    public function render( array $context = [] );
}
