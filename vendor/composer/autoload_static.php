<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffcc9763b2ecdb21dc1802db71b8437e
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Symfony\\Component\\Console\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/console',
            ),
        ),
    );

    public static $classMap = array (
        'MakePartialCommand' => __DIR__ . '/../..' . '/commands/make.php',
        'MakeTemplateCommand' => __DIR__ . '/../..' . '/commands/make.php',
        'ThemeDescriptionCommand' => __DIR__ . '/../..' . '/commands/theme.php',
        'ThemeNameCommand' => __DIR__ . '/../..' . '/commands/theme.php',
        'ThemeVersionCommand' => __DIR__ . '/../..' . '/commands/theme.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitffcc9763b2ecdb21dc1802db71b8437e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitffcc9763b2ecdb21dc1802db71b8437e::$classMap;

        }, null, ClassLoader::class);
    }
}