<?php

namespace DOGrids;

echo view( 'layout/header/header' )->render();
echo view( 'content-page/page/page', 'front' )->render();
echo view( 'layout/footer/footer' )->render();
