<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb44174d8b03ea6fd074c78482106dbcd
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb44174d8b03ea6fd074c78482106dbcd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb44174d8b03ea6fd074c78482106dbcd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb44174d8b03ea6fd074c78482106dbcd::$classMap;

        }, null, ClassLoader::class);
    }
}
