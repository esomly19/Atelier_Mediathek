<?php

namespace Illuminate\Support\Facades;

/**
<<<<<<< HEAD
 * @method static array info(string $hashedValue)
 * @method static string make(string $value, array $options = [])
 * @method static bool check(string $value, string $hashedValue, array $options = [])
 * @method static bool needsRehash(string $hashedValue, array $options = [])
 *
 * @see \Illuminate\Hashing\HashManager
=======
 * @see \Illuminate\Hashing\BcryptHasher
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
 */
class Hash extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hash';
    }
}
