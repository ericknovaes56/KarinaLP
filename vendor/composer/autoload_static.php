<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd3e76516a2459bb83f4a8845d3cecfe
{
    public static $files = array (
        '6ea5206ea96bdaf5fdadcb09bc46ceae' => __DIR__ . '/../..' . '/App/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd3e76516a2459bb83f4a8845d3cecfe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd3e76516a2459bb83f4a8845d3cecfe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd3e76516a2459bb83f4a8845d3cecfe::$classMap;

        }, null, ClassLoader::class);
    }
}
