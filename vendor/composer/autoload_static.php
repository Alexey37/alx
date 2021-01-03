<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74cb663372043b6c59159eecbeaefb14
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
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74cb663372043b6c59159eecbeaefb14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74cb663372043b6c59159eecbeaefb14::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
