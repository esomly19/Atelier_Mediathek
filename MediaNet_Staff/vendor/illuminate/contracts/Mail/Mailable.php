<?php

namespace Illuminate\Contracts\Mail;

use Illuminate\Contracts\Queue\Factory as Queue;

interface Mailable
{
    /**
     * Send the message using the given mailer.
     *
     * @param  \Illuminate\Contracts\Mail\Mailer  $mailer
     * @return void
     */
    public function send(Mailer $mailer);

    /**
     * Queue the given message.
     *
     * @param  \Illuminate\Contracts\Queue\Factory  $queue
     * @return mixed
     */
    public function queue(Queue $queue);

    /**
     * Deliver the queued message after the given delay.
     *
<<<<<<< HEAD
     * @param  \DateTimeInterface|\DateInterval|int  $delay
=======
     * @param  \DateTime|int  $delay
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @param  \Illuminate\Contracts\Queue\Factory  $queue
     * @return mixed
     */
    public function later($delay, Queue $queue);
}
