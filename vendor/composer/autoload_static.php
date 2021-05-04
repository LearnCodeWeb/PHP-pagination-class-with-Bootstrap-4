<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7751397e2b1340dd8c47f1f8398a96ba
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7751397e2b1340dd8c47f1f8398a96ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7751397e2b1340dd8c47f1f8398a96ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7751397e2b1340dd8c47f1f8398a96ba::$classMap;

        }, null, ClassLoader::class);
    }
}
