<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite622629e4b2dc38e2dc5e34d93c0a31b
{
    public static $files = array (
        'd527563a8cf79a16e72677abd2701be3' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite622629e4b2dc38e2dc5e34d93c0a31b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite622629e4b2dc38e2dc5e34d93c0a31b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite622629e4b2dc38e2dc5e34d93c0a31b::$classMap;

        }, null, ClassLoader::class);
    }
}