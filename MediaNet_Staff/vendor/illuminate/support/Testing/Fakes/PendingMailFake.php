<?php

namespace Illuminate\Support\Testing\Fakes;

<<<<<<< HEAD
use Illuminate\Mail\PendingMail;
use Illuminate\Contracts\Mail\Mailable;
=======
use Illuminate\Mail\Mailable;
use Illuminate\Mail\PendingMail;
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

class PendingMailFake extends PendingMail
{
    /**
     * Create a new instance.
     *
     * @param  \Illuminate\Support\Testing\Fakes\MailFake  $mailer
     * @return void
     */
    public function __construct($mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Send a new mailable message instance.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Contracts\Mail\Mailable $mailable;
=======
     * @param  \Illuminate\Mail\Mailable $mailable
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return mixed
     */
    public function send(Mailable $mailable)
    {
        return $this->sendNow($mailable);
    }

    /**
     * Send a mailable message immediately.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Contracts\Mail\Mailable $mailable;
=======
     * @param  \Illuminate\Mail\Mailable $mailable
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return mixed
     */
    public function sendNow(Mailable $mailable)
    {
        $this->mailer->send($this->fill($mailable));
    }

    /**
     * Push the given mailable onto the queue.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Contracts\Mail\Mailable $mailable;
=======
     * @param  \Illuminate\Mail\Mailable $mailable
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return mixed
     */
    public function queue(Mailable $mailable)
    {
        return $this->mailer->queue($this->fill($mailable));
    }
}
