<?php

namespace Illuminate\Contracts\Translation;

interface Loader
{
    /**
     * Load the messages for the given locale.
     *
     * @param  string  $locale
     * @param  string  $group
<<<<<<< HEAD
     * @param  string|null  $namespace
=======
     * @param  string  $namespace
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return array
     */
    public function load($locale, $group, $namespace = null);

    /**
     * Add a new namespace to the loader.
     *
     * @param  string  $namespace
     * @param  string  $hint
     * @return void
     */
    public function addNamespace($namespace, $hint);

    /**
     * Add a new JSON path to the loader.
     *
     * @param  string  $path
     * @return void
     */
    public function addJsonPath($path);

    /**
     * Get an array of all the registered namespaces.
     *
     * @return array
     */
    public function namespaces();
}
