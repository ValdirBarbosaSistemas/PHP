<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74cce1cb04c962b51f20f3000bdb99df
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74cce1cb04c962b51f20f3000bdb99df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74cce1cb04c962b51f20f3000bdb99df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74cce1cb04c962b51f20f3000bdb99df::$classMap;

        }, null, ClassLoader::class);
    }
}
