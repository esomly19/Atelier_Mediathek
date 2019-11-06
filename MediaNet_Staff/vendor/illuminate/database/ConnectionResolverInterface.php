<?php

namespace Illuminate\Database;

interface ConnectionResolverInterface
{
    /**
     * Get a database connection instance.
     *
<<<<<<< HEAD
     * @param  string|null  $name
=======
     * @param  string  $name
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return \Illuminate\Database\ConnectionInterface
     */
    public function connection($name = null);

    /**
     * Get the default connection name.
     *
     * @return string
     */
    public function getDefaultConnection();

    /**
     * Set the default connection name.
     *
     * @param  string  $name
     * @return void
     */
    public function setDefaultConnection($name);
}
