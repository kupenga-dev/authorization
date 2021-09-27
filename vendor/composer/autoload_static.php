<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit892bc328903aaaecdd253e20ed7b491e
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\Auth' => __DIR__ . '/../..' . '/app/Controllers/Auth.php',
        'App\\Services\\Database' => __DIR__ . '/../..' . '/app/Services/Database.php',
        'App\\Services\\Router' => __DIR__ . '/../..' . '/app/Services/Router.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit892bc328903aaaecdd253e20ed7b491e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit892bc328903aaaecdd253e20ed7b491e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit892bc328903aaaecdd253e20ed7b491e::$classMap;

        }, null, ClassLoader::class);
    }
}
