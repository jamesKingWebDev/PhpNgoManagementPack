<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3bd10965af95a6d286ce3df1f0a79faf
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3bd10965af95a6d286ce3df1f0a79faf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3bd10965af95a6d286ce3df1f0a79faf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3bd10965af95a6d286ce3df1f0a79faf::$classMap;

        }, null, ClassLoader::class);
    }
}
