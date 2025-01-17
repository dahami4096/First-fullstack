<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit21421a42e920caf71fb7a5e14280faec
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\Backend\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\Backend\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit21421a42e920caf71fb7a5e14280faec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit21421a42e920caf71fb7a5e14280faec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit21421a42e920caf71fb7a5e14280faec::$classMap;

        }, null, ClassLoader::class);
    }
}
