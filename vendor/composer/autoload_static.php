<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b5d376c5332bf6c755f64891f9b95bd
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gilbitron\\Util\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gilbitron\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/gilbitron/php-simplecache/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b5d376c5332bf6c755f64891f9b95bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b5d376c5332bf6c755f64891f9b95bd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
