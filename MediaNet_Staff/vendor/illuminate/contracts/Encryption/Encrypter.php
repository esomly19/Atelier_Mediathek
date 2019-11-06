<?php

namespace Illuminate\Contracts\Encryption;

interface Encrypter
{
    /**
     * Encrypt the given value.
     *
<<<<<<< HEAD
     * @param  mixed  $value
     * @param  bool  $serialize
     * @return string
     *
     * @throws \Illuminate\Contracts\Encryption\EncryptException
=======
     * @param  string  $value
     * @param  bool  $serialize
     * @return string
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     */
    public function encrypt($value, $serialize = true);

    /**
     * Decrypt the given value.
     *
     * @param  string  $payload
     * @param  bool  $unserialize
<<<<<<< HEAD
     * @return mixed
     *
     * @throws \Illuminate\Contracts\Encryption\DecryptException
=======
     * @return string
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     */
    public function decrypt($payload, $unserialize = true);
}
