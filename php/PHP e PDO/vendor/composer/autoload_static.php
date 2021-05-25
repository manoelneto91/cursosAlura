<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8ac60dca56fb9a077f53799d1cfe2bf
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8ac60dca56fb9a077f53799d1cfe2bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8ac60dca56fb9a077f53799d1cfe2bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8ac60dca56fb9a077f53799d1cfe2bf::$classMap;

        }, null, ClassLoader::class);
    }
}
