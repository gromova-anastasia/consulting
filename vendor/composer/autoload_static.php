<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4d3bcf8ef310f4e5341e8c1fd774801
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Consulting\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Consulting\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita4d3bcf8ef310f4e5341e8c1fd774801::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4d3bcf8ef310f4e5341e8c1fd774801::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita4d3bcf8ef310f4e5341e8c1fd774801::$classMap;

        }, null, ClassLoader::class);
    }
}
