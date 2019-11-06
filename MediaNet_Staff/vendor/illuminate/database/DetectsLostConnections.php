<?php

namespace Illuminate\Database;

<<<<<<< HEAD
use Throwable;
=======
use Exception;
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
use Illuminate\Support\Str;

trait DetectsLostConnections
{
    /**
     * Determine if the given exception was caused by a lost connection.
     *
<<<<<<< HEAD
     * @param  \Throwable  $e
     * @return bool
     */
    protected function causedByLostConnection(Throwable $e)
=======
     * @param  \Exception  $e
     * @return bool
     */
    protected function causedByLostConnection(Exception $e)
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    {
        $message = $e->getMessage();

        return Str::contains($message, [
            'server has gone away',
            'no connection to the server',
            'Lost connection',
            'is dead or not enabled',
            'Error while sending',
            'decryption failed or bad record mac',
            'server closed the connection unexpectedly',
            'SSL connection has been closed unexpectedly',
            'Error writing data to the connection',
            'Resource deadlock avoided',
            'Transaction() on null',
            'child connection forced to terminate due to client_idle_limit',
            'query_wait_timeout',
            'reset by peer',
            'Physical connection is not usable',
            'TCP Provider: Error code 0x68',
<<<<<<< HEAD
            'ORA-03114',
            'Packets out of order. Expected',
            'Adaptive Server connection failed',
            'Communication link failure',
=======
            'Name or service not known',
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
        ]);
    }
}
