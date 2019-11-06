<?php

namespace Illuminate\Contracts\Mail;

interface MailQueue
{
    /**
     * Queue a new e-mail message for sending.
     *
<<<<<<< HEAD
     * @param  string|array|\Illuminate\Contracts\Mail\Mailable  $view
     * @param  string|null  $queue
=======
     * @param  string|array|MailableContract  $view
     * @param  string  $queue
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return mixed
     */
    public function queue($view, $queue = null);

    /**
     * Queue a new e-mail message for sending after (n) seconds.
     *
     * @param  \DateTimeInterface|\DateInterval|int  $delay
<<<<<<< HEAD
     * @param  string|array|\Illuminate\Contracts\Mail\Mailable  $view
     * @param  string|null  $queue
=======
     * @param  string|array|MailableContract  $view
     * @param  string  $queue
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return mixed
     */
    public function later($delay, $view, $queue = null);
}
