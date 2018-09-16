<?php

namespace site\dogrids\interfaces\shared;

class Template extends AbstractTemplate
{
    protected $extension = 'tpl.php';

    protected function locate( $slug, $name )
    {
        $templates = array();
        $name = (string)$name;
        if ( '' !== $name ) {
            $templates[] = "{$slug}-{$name}.{$this->extension}";
        }

        $templates[] = "{$slug}.{$this->extension}";

        return locate_template( $templates, false );
    }

    public function setExtension( $extension )
    {
        $this->extension = $extension;
    }
}
