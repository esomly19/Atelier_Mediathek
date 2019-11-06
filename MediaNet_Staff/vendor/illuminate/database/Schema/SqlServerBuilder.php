<?php

namespace Illuminate\Database\Schema;

class SqlServerBuilder extends Builder
{
    /**
     * Drop all tables from the database.
     *
     * @return void
     */
    public function dropAllTables()
    {
<<<<<<< HEAD
        $this->connection->statement($this->grammar->compileDropAllForeignKeys());

        $this->connection->statement($this->grammar->compileDropAllTables());
=======
        $this->disableForeignKeyConstraints();

        $this->connection->statement($this->grammar->compileDropAllTables());

        $this->enableForeignKeyConstraints();
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }
}
