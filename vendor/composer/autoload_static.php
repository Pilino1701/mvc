<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d9ef7756631600de696598da7c8fda0
{
    public static $files = array (
        '3263ea0b934431fdd4236d4e2e2b0a45' => __DIR__ . '/../..' . '/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d9ef7756631600de696598da7c8fda0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d9ef7756631600de696598da7c8fda0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1d9ef7756631600de696598da7c8fda0::$classMap;

        }, null, ClassLoader::class);
    }
}