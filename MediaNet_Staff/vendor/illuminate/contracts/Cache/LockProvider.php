<?php

namespace Illuminate\Contracts\Cache;

interface LockProvider
{
    /**
     * Get a lock instance.
     *
     * @param  string  $name
     * @param  int  $seconds
<<<<<<< HEAD
     * @param  string|null  $owner
     * @return \Illuminate\Contracts\Cache\Lock
     */
    public function lock($name, $seconds = 0, $owner = null);

    /**
     * Restore a lock instance using the owner identifier.
     *
     * @param  string  $name
     * @param  string  $owner
     * @return \Illuminate\Contracts\Cache\Lock
     */
    public function restoreLock($name, $owner);
=======
     * @return \Illuminate\Contracts\Cache\Lock
     */
    public function lock($name, $seconds = 0);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
}
