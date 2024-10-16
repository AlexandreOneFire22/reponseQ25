<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d69a65de0740ecec73d5bddac627202
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d69a65de0740ecec73d5bddac627202::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d69a65de0740ecec73d5bddac627202::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3d69a65de0740ecec73d5bddac627202::$classMap;

        }, null, ClassLoader::class);
    }
}
