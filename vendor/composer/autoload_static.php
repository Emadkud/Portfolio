<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit493cd25cd548bbb35ab4bfebcad6e377
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spring\\PortfolioMain\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spring\\PortfolioMain\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit493cd25cd548bbb35ab4bfebcad6e377::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit493cd25cd548bbb35ab4bfebcad6e377::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit493cd25cd548bbb35ab4bfebcad6e377::$classMap;

        }, null, ClassLoader::class);
    }
}