<?php

namespace Illuminate\Support\Facades;

/**
<<<<<<< HEAD
 * @method static \Illuminate\Contracts\Validation\Validator make(array $data, array $rules, array $messages = [], array $customAttributes = [])
 * @method static void extend(string $rule, \Closure|string $extension, string $message = null)
 * @method static void extendImplicit(string $rule, \Closure|string $extension, string $message = null)
 * @method static void replacer(string $rule, \Closure|string $replacer)
 *
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
 * @see \Illuminate\Validation\Factory
 */
class Validator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'validator';
    }
}
