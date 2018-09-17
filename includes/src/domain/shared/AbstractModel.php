<?php

namespace site\dogrids\domain\shared;

abstract class AbstractModel implements \IteratorAggregate
{
    protected abstract function load();

    final public function getIterator()
    {
        return new \LimitIterator( new \ArrayIterator( [ $this->load() ] ), 0, 1 );
    }
}
