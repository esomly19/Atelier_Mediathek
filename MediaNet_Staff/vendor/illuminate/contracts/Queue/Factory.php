<?php

namespace Illuminate\Contracts\Queue;

interface Factory
{
    /**
     * Resolve a queue connection instance.
     *
<<<<<<< HEAD
     * @param  string|null  $name
=======
     * @param  string  $name
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return \Illuminate\Contracts\Queue\Queue
     */
    public function connection($name = null);
}
