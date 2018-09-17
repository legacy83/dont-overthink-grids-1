<?php

namespace site\dogrids\domain\service;

use site\dogrids\domain\shared\AbstractDataProvider;

class ColumnsFinder extends AbstractDataProvider
{
    protected function load()
    {
        return [
            [
                'size' => 2,
                'title' => 'Two Columns',
                'classes' => [ 'front-page-2cols' ]
            ],
            [
                'size' => 2,
                'title' => 'Two Columns - Left',
                'classes' => [ 'front-page-2cols-left' ]
            ],
            [
                'size' => 2,
                'title' => 'Two Columns - Right',
                'classes' => [ 'front-page-2cols-right' ]
            ],
            [
                'size' => 3,
                'title' => 'Three Columns',
                'classes' => [ 'front-page-3cols' ]
            ],
            [
                'size' => 4,
                'title' => 'Four Columns',
                'classes' => [ 'front-page-4cols' ]
            ],
        ];
    }
}
