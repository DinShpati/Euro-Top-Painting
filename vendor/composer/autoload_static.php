<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf99f246ec3f8c783e6792de4e40c97c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf99f246ec3f8c783e6792de4e40c97c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf99f246ec3f8c783e6792de4e40c97c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
