<?php

namespace site\dogrids\interfaces\shared;

class Template
{
    private $slug;
    private $name;
    private $located;

    protected $extension = 'tpl.php';

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

    private function locate( $slug, $name )
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
