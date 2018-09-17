<?php

namespace site\dogrids\domain\shared;

abstract class AbstractDataProvider implements \IteratorAggregate
{
    protected abstract function load();

    public function getIterator()
    {
        return new \ArrayIterator( (array)$this->load() );
    }
}
