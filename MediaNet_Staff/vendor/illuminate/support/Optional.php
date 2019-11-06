<?php

namespace Illuminate\Support;

use ArrayAccess;
<<<<<<< HEAD
use ArrayObject;
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

class Optional implements ArrayAccess
{
    use Traits\Macroable {
        __call as macroCall;
    }

    /**
     * The underlying object.
     *
     * @var mixed
     */
    protected $value;

    /**
     * Create a new optional instance.
     *
     * @param  mixed  $value
     * @return void
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Dynamically access a property on the underlying object.
     *
     * @param  string  $key
     * @return mixed
     */
    public function __get($key)
    {
        if (is_object($this->value)) {
<<<<<<< HEAD
            return $this->value->{$key} ?? null;
=======
            return $this->value->{$key};
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
        }
    }

    /**
<<<<<<< HEAD
     * Dynamically check a property exists on the underlying object.
     *
     * @param  mixed  $name
     * @return bool
     */
    public function __isset($name)
    {
        if (is_object($this->value)) {
            return isset($this->value->{$name});
        }

        if (is_array($this->value) || $this->value instanceof ArrayObject) {
            return isset($this->value[$name]);
        }

        return false;
=======
     * Dynamically pass a method to the underlying object.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (static::hasMacro($method)) {
            return $this->macroCall($method, $parameters);
        }

        if (is_object($this->value)) {
            return $this->value->{$method}(...$parameters);
        }
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }

    /**
     * Determine if an item exists at an offset.
     *
     * @param  mixed  $key
     * @return bool
     */
    public function offsetExists($key)
    {
        return Arr::accessible($this->value) && Arr::exists($this->value, $key);
    }

    /**
     * Get an item at a given offset.
     *
     * @param  mixed  $key
     * @return mixed
     */
    public function offsetGet($key)
    {
        return Arr::get($this->value, $key);
    }

    /**
     * Set the item at a given offset.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     * @return void
     */
    public function offsetSet($key, $value)
    {
        if (Arr::accessible($this->value)) {
            $this->value[$key] = $value;
        }
    }

    /**
     * Unset the item at a given offset.
     *
     * @param  string  $key
     * @return void
     */
    public function offsetUnset($key)
    {
        if (Arr::accessible($this->value)) {
            unset($this->value[$key]);
        }
    }
<<<<<<< HEAD

    /**
     * Dynamically pass a method to the underlying object.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (static::hasMacro($method)) {
            return $this->macroCall($method, $parameters);
        }

        if (is_object($this->value)) {
            return $this->value->{$method}(...$parameters);
        }
    }
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
}
