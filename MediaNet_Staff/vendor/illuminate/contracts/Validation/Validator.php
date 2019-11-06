<?php

namespace Illuminate\Contracts\Validation;

use Illuminate\Contracts\Support\MessageProvider;

interface Validator extends MessageProvider
{
    /**
<<<<<<< HEAD
     * Run the validator's rules against its data.
     *
     * @return array
     */
    public function validate();

    /**
     * Get the attributes and values that were validated.
     *
     * @return array
     */
    public function validated();

    /**
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * Determine if the data fails the validation rules.
     *
     * @return bool
     */
    public function fails();

    /**
     * Get the failed validation rules.
     *
     * @return array
     */
    public function failed();

    /**
     * Add conditions to a given field based on a Closure.
     *
<<<<<<< HEAD
     * @param  string|array  $attribute
=======
     * @param  string  $attribute
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @param  string|array  $rules
     * @param  callable  $callback
     * @return $this
     */
    public function sometimes($attribute, $rules, callable $callback);

    /**
<<<<<<< HEAD
     * Add an after validation callback.
=======
     * After an after validation callback.
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     *
     * @param  callable|string  $callback
     * @return $this
     */
    public function after($callback);

    /**
     * Get all of the validation error messages.
     *
     * @return \Illuminate\Support\MessageBag
     */
    public function errors();
}
