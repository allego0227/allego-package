<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6495ee98754d4120fd20e1f45541401d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alleg\\Package\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alleg\\Package\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6495ee98754d4120fd20e1f45541401d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6495ee98754d4120fd20e1f45541401d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6495ee98754d4120fd20e1f45541401d::$classMap;

        }, null, ClassLoader::class);
    }
}