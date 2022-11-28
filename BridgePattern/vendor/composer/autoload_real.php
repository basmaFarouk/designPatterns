<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit13d601bb6101682be8b55b116b4db744
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

        spl_autoload_register(array('ComposerAutoloaderInit13d601bb6101682be8b55b116b4db744', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit13d601bb6101682be8b55b116b4db744', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit13d601bb6101682be8b55b116b4db744::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
