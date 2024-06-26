<?php

declare(strict_types=1);

use PHPIcons\Config\PHPIconsConfig;

return PHPIconsConfig::configure()
    ->withPaths([__DIR__ . '/app', __DIR__ . '/themes'])
    ->withLocalIconSets([
        'funding'    => __DIR__ . '/app/Resources/icons/funding',
        'podcasting' => __DIR__ . '/app/Resources/icons/podcasting',
        'social'     => __DIR__ . '/app/Resources/icons/social',
    ])
    ->withDefaultIconPerSet([
        'funding'    => 'funding:default',
        'podcasting' => 'podcasting:default',
        'social'     => 'social:default',
    ])
    ->withDefaultPrefix('ri')
    ->withPlaceholder('�');
