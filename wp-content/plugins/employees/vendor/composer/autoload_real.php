<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcd26cd106ae6f52b5881b3154fa6450d
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

        spl_autoload_register(array('ComposerAutoloaderInitcd26cd106ae6f52b5881b3154fa6450d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcd26cd106ae6f52b5881b3154fa6450d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcd26cd106ae6f52b5881b3154fa6450d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
