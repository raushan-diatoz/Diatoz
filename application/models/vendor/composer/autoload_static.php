<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1eab9038198c514984dacf07d3618ad
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1eab9038198c514984dacf07d3618ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1eab9038198c514984dacf07d3618ad::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
