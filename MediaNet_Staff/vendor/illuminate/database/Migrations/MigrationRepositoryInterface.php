<?php

namespace Illuminate\Database\Migrations;

interface MigrationRepositoryInterface
{
    /**
<<<<<<< HEAD
     * Get the completed migrations.
=======
     * Get the ran migrations for a given package.
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     *
     * @return array
     */
    public function getRan();

    /**
     * Get list of migrations.
     *
     * @param  int  $steps
     * @return array
     */
    public function getMigrations($steps);

    /**
     * Get the last migration batch.
     *
     * @return array
     */
    public function getLast();

    /**
<<<<<<< HEAD
     * Get the completed migrations with their batch numbers.
     *
     * @return array
     */
    public function getMigrationBatches();

    /**
     * Log that a migration was run.
     *
     * @param  string  $file
     * @param  int  $batch
=======
     * Log that a migration was run.
     *
     * @param  string  $file
     * @param  int     $batch
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return void
     */
    public function log($file, $batch);

    /**
     * Remove a migration from the log.
     *
     * @param  object  $migration
     * @return void
     */
    public function delete($migration);

    /**
     * Get the next migration batch number.
     *
     * @return int
     */
    public function getNextBatchNumber();

    /**
     * Create the migration repository data store.
     *
     * @return void
     */
    public function createRepository();

    /**
     * Determine if the migration repository exists.
     *
     * @return bool
     */
    public function repositoryExists();

    /**
     * Set the information source to gather data.
     *
     * @param  string  $name
     * @return void
     */
    public function setSource($name);
}
