<?php

namespace Illuminate\Support\Facades;

/**
<<<<<<< HEAD
 * @method static mixed trans(string $key, array $replace = [], string $locale = null)
 * @method static string transChoice(string $key, int|array|\Countable $number, array $replace = [], string $locale = null)
 * @method static string getLocale()
 * @method static void setLocale(string $locale)
 * @method static string|array|null get(string $key, array $replace = [], string $locale = null, bool $fallback = true)
 *
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
 * @see \Illuminate\Translation\Translator
 */
class Lang extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'translator';
    }
}
