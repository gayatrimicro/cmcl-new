<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7a5c82e7082e7be5ea561582ed7e0ca
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7a5c82e7082e7be5ea561582ed7e0ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7a5c82e7082e7be5ea561582ed7e0ca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}