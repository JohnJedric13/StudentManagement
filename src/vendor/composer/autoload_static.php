<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf99c276b7464a679eb8fc764082858f7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alipat\\StudentManagement\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alipat\\StudentManagement\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf99c276b7464a679eb8fc764082858f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf99c276b7464a679eb8fc764082858f7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf99c276b7464a679eb8fc764082858f7::$classMap;

        }, null, ClassLoader::class);
    }
}
