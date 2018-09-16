<?php

namespace site\dogrids\interfaces\shared;

abstract class AbstractTemplate implements TemplateInterface
{
    private $slug;
    private $name;
    private $located;

    public function __construct( $slug, $name = null )
    {
        $this->slug = $slug;
        $this->name = (string)$name;
    }

    public function render( array $data = [] )
    {
        if ( !isset( $this->located ) ) {
            $this->located = $this->locate( $this->slug, $this->name );
        }

        if ( !file_exists( $this->located ) ) {
            return '';
        }

        ob_start();

        extract( $data );
        include( $this->located );

        return ob_get_clean();
    }

    protected abstract function locate( $slug, $name );
}
