<?php

namespace Illuminate\Contracts\Redis;

interface Factory
{
    /**
     * Get a Redis connection by name.
     *
<<<<<<< HEAD
     * @param  string|null  $name
=======
     * @param  string  $name
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return \Illuminate\Redis\Connections\Connection
     */
    public function connection($name = null);
}
