<?php

namespace Illuminate\Contracts\Broadcasting;

interface Factory
{
    /**
     * Get a broadcaster implementation by name.
     *
<<<<<<< HEAD
     * @param  string|null  $name
=======
     * @param  string  $name
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return void
     */
    public function connection($name = null);
}
