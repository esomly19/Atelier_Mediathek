<?php

namespace Illuminate\Contracts\Translation;

interface Translator
{
    /**
     * Get the translation for a given key.
     *
     * @param  string  $key
     * @param  array   $replace
<<<<<<< HEAD
     * @param  string|null  $locale
=======
     * @param  string  $locale
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return mixed
     */
    public function trans($key, array $replace = [], $locale = null);

    /**
     * Get a translation according to an integer value.
     *
     * @param  string  $key
     * @param  int|array|\Countable  $number
     * @param  array   $replace
<<<<<<< HEAD
     * @param  string|null  $locale
=======
     * @param  string  $locale
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return string
     */
    public function transChoice($key, $number, array $replace = [], $locale = null);

    /**
     * Get the default locale being used.
     *
     * @return string
     */
    public function getLocale();

    /**
     * Set the default locale.
     *
     * @param  string  $locale
     * @return void
     */
    public function setLocale($locale);
}
