<?php

namespace Illuminate\Contracts\Queue;

interface QueueableEntity
{
    /**
     * Get the queueable identity for the entity.
     *
     * @return mixed
     */
    public function getQueueableId();

    /**
<<<<<<< HEAD
     * Get the relationships for the entity.
     *
     * @return array
     */
    public function getQueueableRelations();

    /**
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * Get the connection of the entity.
     *
     * @return string|null
     */
    public function getQueueableConnection();
}
