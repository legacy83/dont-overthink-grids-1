<?php

namespace site\dogrids;

use trsenna\dalen\kernel\contracts\ServiceProviderInterface;
use trsenna\dalen\kernel\foundation\ServiceProviderTrait;
use trsenna\dalen\template\contracts\TemplateInterface;

/**
 * Class Markup
 *
 * @package site\dogrids
 */
class Markup implements TemplateInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    /**
     * @var \stdClass
     */
    private $layout;

    /**
     * @var \stdClass
     */
    private $content;

    /**
     * Markup constructor.
     */
    public function __construct()
    {
        $this->layout = new \stdClass();
        $this->content = new \stdClass();
    }

    /**
     * Set the layout.
     *
     * @param      $slug
     * @param null $name
     *
     * @return $this
     */
    public function layout( $slug, $name = null )
    {
        $this->layout->slug = $slug;
        $this->layout->name = $name;

        return $this;
    }

    /**
     * Set the content.
     *
     * @param      $slug
     * @param null $name
     *
     * @return $this
     */
    public function content( $slug, $name = null )
    {
        $this->content->slug = $slug;
        $this->content->name = $name;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function render( array $context = [] )
    {
        return template( $this->layout->slug, $this->layout->name )->render( [
            'content' => template( $this->content->slug, $this->content->name ),
        ] );
    }
}
