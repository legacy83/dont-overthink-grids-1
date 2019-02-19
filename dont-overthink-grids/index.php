<?php

namespace site\dogrids;

echo template( 'layout/header/header' )->render();
echo template( 'content-page/page/page', 'front' )->render();
echo template( 'layout/footer/footer' )->render();
