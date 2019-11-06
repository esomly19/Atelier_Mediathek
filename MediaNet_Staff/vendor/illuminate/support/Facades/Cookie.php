<?php

namespace Illuminate\Support\Facades;

/**
<<<<<<< HEAD
 * @method static void queue(...$parameters)
 * @method static unqueue($name)
 * @method static array getQueuedCookies()
 *
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
 * @see \Illuminate\Cookie\CookieJar
 */
class Cookie extends Facade
{
    /**
     * Determine if a cookie exists on the request.
     *
     * @param  string  $key
     * @return bool
     */
    public static function has($key)
    {
        return ! is_null(static::$app['request']->cookie($key, null));
    }

    /**
     * Retrieve a cookie from the request.
     *
     * @param  string  $key
     * @param  mixed   $default
<<<<<<< HEAD
     * @return string|array|null
=======
     * @return string
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     */
    public static function get($key = null, $default = null)
    {
        return static::$app['request']->cookie($key, $default);
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cookie';
    }
}
