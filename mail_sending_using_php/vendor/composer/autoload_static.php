<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9ac4b32e48cd5119949e12d3648accd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9ac4b32e48cd5119949e12d3648accd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9ac4b32e48cd5119949e12d3648accd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
