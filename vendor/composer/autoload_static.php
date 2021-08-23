<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf3e62956d1ed0f2dcec1dae19f37073
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/databases/Connection.php',
        'QuaryBuilder' => __DIR__ . '/../..' . '/core/databases/QuaryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitcf3e62956d1ed0f2dcec1dae19f37073::$classMap;

        }, null, ClassLoader::class);
    }
}
