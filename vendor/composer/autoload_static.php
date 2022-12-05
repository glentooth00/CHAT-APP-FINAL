<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc65124fb7d98f8200ee99ade5517f888
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Myapp\\Source\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Myapp\\Source\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc65124fb7d98f8200ee99ade5517f888::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc65124fb7d98f8200ee99ade5517f888::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc65124fb7d98f8200ee99ade5517f888::$classMap;

        }, null, ClassLoader::class);
    }
}