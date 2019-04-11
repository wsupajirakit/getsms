<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe2b578171a3f5d3e4ae105500964ca9
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe2b578171a3f5d3e4ae105500964ca9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe2b578171a3f5d3e4ae105500964ca9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
