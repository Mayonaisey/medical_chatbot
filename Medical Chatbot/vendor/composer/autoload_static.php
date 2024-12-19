<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57af521d44bff1bb5e0243d9b00d49cb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Maya\\Chatbot\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Maya\\Chatbot\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit57af521d44bff1bb5e0243d9b00d49cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit57af521d44bff1bb5e0243d9b00d49cb::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit57af521d44bff1bb5e0243d9b00d49cb::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit57af521d44bff1bb5e0243d9b00d49cb::$classMap;

        }, null, ClassLoader::class);
    }
}