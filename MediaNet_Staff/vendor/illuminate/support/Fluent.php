<?php

namespace Illuminate\Support;

use ArrayAccess;
use JsonSerializable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Contracts\Support\Arrayable;

class Fluent implements ArrayAccess, Arrayable, Jsonable, JsonSerializable
{
    /**
<<<<<<< HEAD
     * All of the attributes set on the fluent instance.
=======
     * All of the attributes set on the container.
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     *
     * @var array
     */
    protected $attributes = [];

    /**
<<<<<<< HEAD
     * Create a new fluent instance.
     *
     * @param  array|object  $attributes
=======
     * Create a new fluent container instance.
     *
     * @param  array|object    $attributes
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return void
     */
    public function __construct($attributes = [])
    {
        foreach ($attributes as $key => $value) {
            $this->attributes[$key] = $value;
        }
    }

    /**
<<<<<<< HEAD
     * Get an attribute from the fluent instance.
=======
     * Get an attribute from the container.
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if (array_key_exists($key, $this->attributes)) {
            return $this->attributes[$key];
        }

        return value($default);
    }

    /**
<<<<<<< HEAD
     * Get the attributes from the fluent instance.
=======
     * Get the attributes from the container.
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
<<<<<<< HEAD
     * Convert the fluent instance to an array.
=======
     * Convert the Fluent instance to an array.
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     *
     * @return array
     */
    public function toArray()
    {
        return $this->attributes;
    }

    /**
     * Convert the object into something JSON serializable.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
<<<<<<< HEAD
     * Convert the fluent instance to JSON.
=======
     * Convert the Fluent instance to JSON.
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     *
     * @param  int  $options
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }

    /**
     * Determine if the given offset exists.
     *
     * @param  string  $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->attributes[$offset]);
    }

    /**
     * Get the value for a given offset.
     *
     * @param  string  $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    /**
     * Set the value at the given offset.
     *
     * @param  string  $offset
     * @param  mixed   $value
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->attributes[$offset] = $value;
    }

    /**
     * Unset the value at the given offset.
     *
     * @param  string  $offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->attributes[$offset]);
    }

    /**
<<<<<<< HEAD
     * Handle dynamic calls to the fluent instance to set attributes.
=======
     * Handle dynamic calls to the container to set attributes.
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     *
     * @param  string  $method
     * @param  array   $parameters
     * @return $this
     */
    public function __call($method, $parameters)
    {
        $this->attributes[$method] = count($parameters) > 0 ? $parameters[0] : true;

        return $this;
    }

    /**
     * Dynamically retrieve the value of an attribute.
     *
     * @param  string  $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->get($key);
    }

    /**
     * Dynamically set the value of an attribute.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @return void
     */
    public function __set($key, $value)
    {
        $this->offsetSet($key, $value);
    }

    /**
     * Dynamically check if an attribute is set.
     *
     * @param  string  $key
     * @return bool
     */
    public function __isset($key)
    {
        return $this->offsetExists($key);
    }

    /**
     * Dynamically unset an attribute.
     *
     * @param  string  $key
     * @return void
     */
    public function __unset($key)
    {
        $this->offsetUnset($key);
    }
}
