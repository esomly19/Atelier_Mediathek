<?php

namespace Illuminate\Support\Facades;

<<<<<<< HEAD
/**
 * @method static void emergency(string $message, array $context = [])
 * @method static void alert(string $message, array $context = [])
 * @method static void critical(string $message, array $context = [])
 * @method static void error(string $message, array $context = [])
 * @method static void warning(string $message, array $context = [])
 * @method static void notice(string $message, array $context = [])
 * @method static void info(string $message, array $context = [])
 * @method static void debug(string $message, array $context = [])
 * @method static void log($level, string $message, array $context = [])
 * @method static mixed channel(string $channel = null)
 * @method static \Psr\Log\LoggerInterface stack(array $channels, string $channel = null)
 *
 * @see \Illuminate\Log\Logger
=======
use Psr\Log\LoggerInterface;

/**
 * @see \Illuminate\Log\Writer
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
 */
class Log extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
<<<<<<< HEAD
        return 'log';
=======
        return LoggerInterface::class;
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }
}
