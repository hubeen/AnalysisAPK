<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f965574423645dd35d8d9411eb1fe21
{
    public static $prefixesPsr0 = array (
        'A' => 
        array (
            'ApkParser' => 
            array (
                0 => __DIR__ . '/..' . '/tufanbarisyildirim/php-apk-parser/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit8f965574423645dd35d8d9411eb1fe21::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}