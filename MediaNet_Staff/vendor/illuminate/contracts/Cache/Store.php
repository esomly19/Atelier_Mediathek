<?php

namespace Illuminate\Contracts\Cache;

interface Store
{
    /**
     * Retrieve an item from the cache by key.
     *
     * @param  string|array  $key
     * @return mixed
     */
    public function get($key);

    /**
     * Retrieve multiple items from the cache by key.
     *
     * Items not found in the cache will have a null value.
     *
     * @param  array  $keys
     * @return array
     */
    public function many(array $keys);

    /**
<<<<<<< HEAD
     * Store an item in the cache for a given number of seconds.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @param  int  $seconds
     * @return bool
     */
    public function put($key, $value, $seconds);

    /**
     * Store multiple items in the cache for a given number of seconds.
     *
     * @param  array  $values
     * @param  int  $seconds
     * @return bool
     */
    public function putMany(array $values, $seconds);
=======
     * Store an item in the cache for a given number of minutes.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @param  float|int  $minutes
     * @return void
     */
    public function put($key, $value, $minutes);

    /**
     * Store multiple items in the cache for a given number of minutes.
     *
     * @param  array  $values
     * @param  float|int  $minutes
     * @return void
     */
    public function putMany(array $values, $minutes);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Increment the value of an item in the cache.
     *
     * @param  string  $key
<<<<<<< HEAD
     * @param  mixed  $value
=======
     * @param  mixed   $value
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return int|bool
     */
    public function increment($key, $value = 1);

    /**
     * Decrement the value of an item in the cache.
     *
     * @param  string  $key
<<<<<<< HEAD
     * @param  mixed  $value
=======
     * @param  mixed   $value
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
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
     * Remove an item from the cache.
     *
     * @param  string  $key
     * @return bool
     */
    public function forget($key);

    /**
     * Remove all items from the cache.
     *
     * @return bool
     */
    public function flush();

    /**
     * Get the cache key prefix.
     *
     * @return string
     */
    public function getPrefix();
}
