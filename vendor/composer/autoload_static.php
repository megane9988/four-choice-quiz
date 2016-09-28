<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1179b0d1ba25da6f2b68317f47320306
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Torounit\\FCQ\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Torounit\\FCQ\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1179b0d1ba25da6f2b68317f47320306::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1179b0d1ba25da6f2b68317f47320306::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
