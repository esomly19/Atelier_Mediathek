<?php

namespace Illuminate\Support\Traits;

use Closure;
use ReflectionClass;
use ReflectionMethod;
use BadMethodCallException;

trait Macroable
{
    /**
     * The registered string macros.
     *
     * @var array
     */
    protected static $macros = [];

    /**
     * Register a custom macro.
     *
     * @param  string $name
     * @param  object|callable  $macro
     *
     * @return void
     */
    public static function macro($name, $macro)
    {
        static::$macros[$name] = $macro;
    }

    /**
     * Mix another object into the class.
     *
     * @param  object  $mixin
<<<<<<< HEAD
     * @param  bool  $replace
     * @return void
     *
     * @throws \ReflectionException
     */
    public static function mixin($mixin, $replace = true)
=======
     * @return void
     */
    public static function mixin($mixin)
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    {
        $methods = (new ReflectionClass($mixin))->getMethods(
            ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PROTECTED
        );

        foreach ($methods as $method) {
<<<<<<< HEAD
            if ($replace || ! static::hasMacro($method->name)) {
                $method->setAccessible(true);
                static::macro($method->name, $method->invoke($mixin));
            }
=======
            $method->setAccessible(true);

            static::macro($method->name, $method->invoke($mixin));
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
        }
    }

    /**
     * Checks if macro is registered.
     *
     * @param  string  $name
     * @return bool
     */
    public static function hasMacro($name)
    {
        return isset(static::$macros[$name]);
    }

    /**
     * Dynamically handle calls to the class.
     *
     * @param  string  $method
<<<<<<< HEAD
     * @param  array  $parameters
=======
     * @param  array   $parameters
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public static function __callStatic($method, $parameters)
    {
        if (! static::hasMacro($method)) {
<<<<<<< HEAD
            throw new BadMethodCallException(sprintf(
                'Method %s::%s does not exist.', static::class, $method
            ));
        }

        $macro = static::$macros[$method];

        if ($macro instanceof Closure) {
            return call_user_func_array(Closure::bind($macro, null, static::class), $parameters);
        }

        return $macro(...$parameters);
=======
            throw new BadMethodCallException("Method {$method} does not exist.");
        }

        if (static::$macros[$method] instanceof Closure) {
            return call_user_func_array(Closure::bind(static::$macros[$method], null, static::class), $parameters);
        }

        return call_user_func_array(static::$macros[$method], $parameters);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }

    /**
     * Dynamically handle calls to the class.
     *
     * @param  string  $method
<<<<<<< HEAD
     * @param  array  $parameters
=======
     * @param  array   $parameters
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public function __call($method, $parameters)
    {
        if (! static::hasMacro($method)) {
<<<<<<< HEAD
            throw new BadMethodCallException(sprintf(
                'Method %s::%s does not exist.', static::class, $method
            ));
=======
            throw new BadMethodCallException("Method {$method} does not exist.");
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
        }

        $macro = static::$macros[$method];

        if ($macro instanceof Closure) {
            return call_user_func_array($macro->bindTo($this, static::class), $parameters);
        }

<<<<<<< HEAD
        return $macro(...$parameters);
=======
        return call_user_func_array($macro, $parameters);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }
}
