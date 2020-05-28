<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5dd2bcd33707ad3654caeb1d6ecaae61
{
    // 指派路径到其上一级文件夹
    public static $prefixesPsr0 = array (
        'Service'       => BASEPATH . '/' . 'models' . '/'  ,
        'Provider'      => BASEPATH . '/' . 'models' . '/'  ,
        'Libray'        => BASEPATH . '/',
        'Zycore'            => SYSPATH . '/',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit5dd2bcd33707ad3654caeb1d6ecaae61::$prefixesPsr0;
        }, null, ClassLoader::class);
    }
}
