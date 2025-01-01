<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit273554d2ba3895d86fb6593bdda99b15
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit273554d2ba3895d86fb6593bdda99b15::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit273554d2ba3895d86fb6593bdda99b15::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit273554d2ba3895d86fb6593bdda99b15::$classMap;

        }, null, ClassLoader::class);
    }
}
