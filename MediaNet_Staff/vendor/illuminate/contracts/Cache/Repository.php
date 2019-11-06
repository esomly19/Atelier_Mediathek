<?php

namespace Illuminate\Contracts\Cache;

use Closure;
use Psr\SimpleCache\CacheInterface;

interface Repository extends CacheInterface
{
    /**
<<<<<<< HEAD
     * Retrieve an item from the cache and delete it.
     *
     * @param  string  $key
     * @param  mixed  $default
=======
     * Determine if an item exists in the cache.
     *
     * @param  string  $key
     * @return bool
     */
    public function has($key);

    /**
     * Retrieve an item from the cache by key.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Retrieve an item from the cache and delete it.
     *
     * @param  string  $key
     * @param  mixed   $default
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return mixed
     */
    public function pull($key, $default = null);

    /**
     * Store an item in the cache.
     *
     * @param  string  $key
<<<<<<< HEAD
     * @param  mixed  $value
     * @param  \DateTimeInterface|\DateInterval|int|null  $ttl
     * @return bool
     */
    public function put($key, $value, $ttl = null);
=======
     * @param  mixed   $value
     * @param  \DateTimeInterface|\DateInterval|float|int  $minutes
     * @return void
     */
    public function put($key, $value, $minutes);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Store an item in the cache if the key does not exist.
     *
     * @param  string  $key
<<<<<<< HEAD
     * @param  mixed  $value
     * @param  \DateTimeInterface|\DateInterval|int|null  $ttl
     * @return bool
     */
    public function add($key, $value, $ttl = null);
=======
     * @param  mixed   $value
     * @param  \DateTimeInterface|\DateInterval|float|int  $minutes
     * @return bool
     */
    public function add($key, $value, $minutes);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Increment the value of an item in the cache.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return int|bool
     */
    public function increment($key, $value = 1);

    /**
     * Decrement the value of an item in the cache.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return int|bool
     */
    public function decrement($key, $value = 1);

    /**
     * Store an item in the cache indefinitely.
     *
     * @param  string  $key
<<<<<<< HEAD
     * @param  mixed  $value
     * @return bool
=======
     * @param  mixed   $value
     * @return void
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     */
    public function forever($key, $value);

    /**
<<<<<<< HEAD
     * Get an item from the cache, or execute the given Closure and store the result.
     *
     * @param  string  $key
     * @param  \DateTimeInterface|\DateInterval|int|null  $ttl
     * @param  \Closure  $callback
     * @return mixed
     */
    public function remember($key, $ttl, Closure $callback);

    /**
     * Get an item from the cache, or execute the given Closure and store the result forever.
     *
     * @param  string  $key
=======
     * Get an item from the cache, or store the default value.
     *
     * @param  string  $key
     * @param  \DateTimeInterface|\DateInterval|float|int  $minutes
     * @param  \Closure  $callback
     * @return mixed
     */
    public function remember($key, $minutes, Closure $callback);

    /**
     * Get an item from the cache, or store the default value forever.
     *
     * @param  string   $key
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @param  \Closure  $callback
     * @return mixed
     */
    public function sear($key, Closure $callback);

    /**
<<<<<<< HEAD
     * Get an item from the cache, or execute the given Closure and store the result forever.
     *
     * @param  string  $key
=======
     * Get an item from the cache, or store the default value forever.
     *
     * @param  string   $key
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @param  \Closure  $callback
     * @return mixed
     */
    public function rememberForever($key, Closure $callback);

    /**
     * Remove an item from the cache.
     *
     * @param  string $key
     * @return bool
     */
    public function forget($key);

    /**
     * Get the cache store implementation.
     *
     * @return \Illuminate\Contracts\Cache\Store
     */
    public function getStore();
}
