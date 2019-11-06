<?php

namespace Illuminate\Database\Migrations;

abstract class Migration
{
    /**
     * The name of the database connection to use.
     *
<<<<<<< HEAD
     * @var string|null
=======
     * @var string
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     */
    protected $connection;

    /**
     * Enables, if supported, wrapping the migration within a transaction.
     *
     * @var bool
     */
    public $withinTransaction = true;

    /**
     * Get the migration connection name.
     *
<<<<<<< HEAD
     * @return string|null
=======
     * @return string
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     */
    public function getConnection()
    {
        return $this->connection;
    }
}
