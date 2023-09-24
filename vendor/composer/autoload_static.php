<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2298704f6049124922e9c8ee210c2ecf
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Serv\\IFace\\' => 11,
            'Serv\\' => 5,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Serv\\IFace\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Interface',
        ),
        'Serv\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2298704f6049124922e9c8ee210c2ecf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2298704f6049124922e9c8ee210c2ecf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2298704f6049124922e9c8ee210c2ecf::$classMap;

        }, null, ClassLoader::class);
    }
}
