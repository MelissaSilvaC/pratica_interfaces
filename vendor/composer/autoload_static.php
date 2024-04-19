<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13823249b65a1732d32f8145b64a9ee7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Src\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit13823249b65a1732d32f8145b64a9ee7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13823249b65a1732d32f8145b64a9ee7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit13823249b65a1732d32f8145b64a9ee7::$classMap;

        }, null, ClassLoader::class);
    }
}
