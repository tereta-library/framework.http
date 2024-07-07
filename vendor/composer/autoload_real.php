<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit462baf60c8acf4e0ba64cd9602c6ac7a
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

        spl_autoload_register(array('ComposerAutoloaderInit462baf60c8acf4e0ba64cd9602c6ac7a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit462baf60c8acf4e0ba64cd9602c6ac7a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit462baf60c8acf4e0ba64cd9602c6ac7a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}