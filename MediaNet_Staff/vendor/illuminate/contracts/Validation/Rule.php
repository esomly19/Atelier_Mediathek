<?php

namespace Illuminate\Contracts\Validation;

interface Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value);

    /**
     * Get the validation error message.
     *
<<<<<<< HEAD
     * @return string|array
=======
     * @return string
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     */
    public function message();
}
