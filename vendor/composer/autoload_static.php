<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16f222e14c907e0254e01afaf008ec00
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16f222e14c907e0254e01afaf008ec00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16f222e14c907e0254e01afaf008ec00::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
