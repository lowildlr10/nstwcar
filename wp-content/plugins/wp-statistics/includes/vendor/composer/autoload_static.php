<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5206856c1ff72d9f8bb6c057422509c9
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WhichBrowser\\' => 13,
        ),
        'P' => 
        array (
            'Psr\\Cache\\' => 10,
        ),
        'M' => 
        array (
            'MaxMind\\WebService\\' => 19,
            'MaxMind\\Exception\\' => 18,
            'MaxMind\\Db\\' => 11,
        ),
        'J' => 
        array (
            'Jaybizzle\\CrawlerDetect\\' => 24,
        ),
        'I' => 
        array (
            'IPTools\\' => 8,
        ),
        'G' => 
        array (
            'GeoIp2\\' => 7,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WhichBrowser\\' => 
        array (
            0 => __DIR__ . '/..' . '/whichbrowser/parser/src',
            1 => __DIR__ . '/..' . '/whichbrowser/parser/tests/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'MaxMind\\WebService\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind/web-service-common/src/WebService',
        ),
        'MaxMind\\Exception\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind/web-service-common/src/Exception',
        ),
        'MaxMind\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db',
        ),
        'Jaybizzle\\CrawlerDetect\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src',
        ),
        'IPTools\\' => 
        array (
            0 => __DIR__ . '/..' . '/s1lentium/iptools/src',
        ),
        'GeoIp2\\' => 
        array (
            0 => __DIR__ . '/..' . '/geoip2/geoip2/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5206856c1ff72d9f8bb6c057422509c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5206856c1ff72d9f8bb6c057422509c9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
