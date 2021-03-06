<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25c8db8ddeee7fb874c0cb2a9f3ec5e2
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mike42\\' => 7,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mike42\\' => 
        array (
            0 => __DIR__ . '/..' . '/mike42/escpos-php/src/Mike42',
            1 => __DIR__ . '/..' . '/mike42/gfx-php/src/Mike42',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25c8db8ddeee7fb874c0cb2a9f3ec5e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25c8db8ddeee7fb874c0cb2a9f3ec5e2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit25c8db8ddeee7fb874c0cb2a9f3ec5e2::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit25c8db8ddeee7fb874c0cb2a9f3ec5e2::$classMap;

        }, null, ClassLoader::class);
    }
}
