<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf3e62956d1ed0f2dcec1dae19f37073
{
    public static $classMap = array (
        'ComposerAutoloaderInitcf3e62956d1ed0f2dcec1dae19f37073' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitcf3e62956d1ed0f2dcec1dae19f37073' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/databases/Connection.php',
        'QuaryBuilder' => __DIR__ . '/../..' . '/core/databases/QuaryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'controllers\\PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'core\\App' => __DIR__ . '/../..' . '/core/App.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitcf3e62956d1ed0f2dcec1dae19f37073::$classMap;

        }, null, ClassLoader::class);
    }
}
