<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb44174d8b03ea6fd074c78482106dbcd
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitb44174d8b03ea6fd074c78482106dbcd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb44174d8b03ea6fd074c78482106dbcd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb44174d8b03ea6fd074c78482106dbcd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
