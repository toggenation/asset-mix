<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

/** @var \Cake\Routing\RouteBuilder $routes */
$routes->plugin(
    'AssetMix',
    ['path' => '/asset-mix'],
    function (RouteBuilder $routes) {
        $routes->fallbacks(DashedRoute::class);
    }
);
