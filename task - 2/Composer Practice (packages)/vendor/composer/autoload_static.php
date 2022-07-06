<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8942f10f1253207d8c795757012c878e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SebastianBergmann\\Timer\\Duration' => __DIR__ . '/..' . '/phpunit/php-timer/src/Duration.php',
        'SebastianBergmann\\Timer\\Exception' => __DIR__ . '/..' . '/phpunit/php-timer/src/exceptions/Exception.php',
        'SebastianBergmann\\Timer\\NoActiveTimerException' => __DIR__ . '/..' . '/phpunit/php-timer/src/exceptions/NoActiveTimerException.php',
        'SebastianBergmann\\Timer\\ResourceUsageFormatter' => __DIR__ . '/..' . '/phpunit/php-timer/src/ResourceUsageFormatter.php',
        'SebastianBergmann\\Timer\\TimeSinceStartOfRequestNotAvailableException' => __DIR__ . '/..' . '/phpunit/php-timer/src/exceptions/TimeSinceStartOfRequestNotAvailableException.php',
        'SebastianBergmann\\Timer\\Timer' => __DIR__ . '/..' . '/phpunit/php-timer/src/Timer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8942f10f1253207d8c795757012c878e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8942f10f1253207d8c795757012c878e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8942f10f1253207d8c795757012c878e::$classMap;

        }, null, ClassLoader::class);
    }
}