<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit997cdc6f983dcf587b9ff536cc44a7bd
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit997cdc6f983dcf587b9ff536cc44a7bd::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
